<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
  plans: Array,
});

const editingId = ref(null);
const editForms = ref({});

const formatPrice = (price) => price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');

const startEdit = (plan) => {
  editingId.value = plan.id;
  editForms.value[plan.id] = useForm({
    title: plan.title,
    subtitle: plan.subtitle ?? '',
    price: plan.price,
  });
};

const cancelEdit = () => {
  editingId.value = null;
};

const saveEdit = (plan) => {
  editForms.value[plan.id].put(route('admin.pricing-plans.update', plan.id), {
    preserveScroll: true,
    onSuccess: () => {
      editingId.value = null;
    },
  });
};
</script>

<template>
  <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="px-6 py-4 bg-gray-50 border-b border-gray-200">
      <h3 class="text-lg font-semibold text-gray-800">Tanszobai árak</h3>
    </div>

    <div class="divide-y divide-gray-100">
      <div v-for="plan in plans" :key="plan.id" class="p-4 hover:bg-gray-50 transition-colors">
        <div v-if="editingId !== plan.id" class="flex items-center justify-between gap-4">
          <div class="min-w-0">
            <div class="flex items-center gap-3 flex-wrap">
              <span class="font-medium text-gray-800 text-sm">{{ plan.title }}</span>
              <span class="text-sm font-bold text-primary-700">{{ formatPrice(plan.price) }} {{ plan.price_unit }}</span>
            </div>
            <p v-if="plan.subtitle" class="text-gray-500 text-xs mt-1">{{ plan.subtitle }}</p>
          </div>
          <button
            @click="startEdit(plan)"
            class="p-1.5 text-gray-400 hover:text-primary-600 hover:bg-primary-50 rounded-lg transition-colors"
            title="Szerkesztés"
          >
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
            </svg>
          </button>
        </div>

        <form v-else @submit.prevent="saveEdit(plan)" class="grid gap-3 sm:grid-cols-2">
          <div>
            <label class="text-sm font-medium text-gray-700">Cím</label>
            <input v-model="editForms[plan.id].title" type="text" required maxlength="255" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-primary-500 focus:ring-primary-500" />
            <p v-if="editForms[plan.id].errors.title" class="text-red-600 text-xs mt-1">{{ editForms[plan.id].errors.title }}</p>
          </div>
          <div>
            <label class="text-sm font-medium text-gray-700">Alcím</label>
            <input v-model="editForms[plan.id].subtitle" type="text" maxlength="255" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-primary-500 focus:ring-primary-500" />
            <p v-if="editForms[plan.id].errors.subtitle" class="text-red-600 text-xs mt-1">{{ editForms[plan.id].errors.subtitle }}</p>
          </div>
          <div>
            <label class="text-sm font-medium text-gray-700">Ár (Ft)</label>
            <input v-model.number="editForms[plan.id].price" type="number" required min="0" max="9999999" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-primary-500 focus:ring-primary-500" />
            <p v-if="editForms[plan.id].errors.price" class="text-red-600 text-xs mt-1">{{ editForms[plan.id].errors.price }}</p>
          </div>
          <div class="flex items-end gap-2">
            <button type="submit" :disabled="editForms[plan.id].processing" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 disabled:opacity-50">
              <span v-if="editForms[plan.id].processing">Mentés...</span>
              <span v-else>Mentés</span>
            </button>
            <button type="button" @click="cancelEdit" class="px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-300">Mégse</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>