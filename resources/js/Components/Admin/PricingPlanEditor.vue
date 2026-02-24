<script setup>
import { useForm } from '@inertiajs/vue3';
import { ref } from 'vue';

const props = defineProps({
  plans: Array,
});

const editingId = ref(null);
const showAddForm = ref(false);

const editForms = ref({});

const defaultPlan = () => ({
  title: '',
  subtitle: '',
  price: 0,
  price_unit: 'Ft/hó',
  features: [''],
  sibling_discount: '3 000 Ft/fő kedvezmény',
  is_featured: false,
  sort_order: (props.plans?.length ?? 0) + 1,
  is_active: true,
});

const addForm = useForm(defaultPlan());

const startEdit = (plan) => {
  editingId.value = plan.id;
  const features = Array.isArray(plan.features) ? [...plan.features] : [];
  editForms.value[plan.id] = useForm({
    title: plan.title,
    subtitle: plan.subtitle ?? '',
    price: plan.price,
    price_unit: plan.price_unit,
    features: features.length ? features : [''],
    sibling_discount: plan.sibling_discount ?? '',
    is_featured: plan.is_featured,
    sort_order: plan.sort_order,
    is_active: plan.is_active,
  });
};

const cancelEdit = () => { editingId.value = null; };

const saveEdit = (plan) => {
  const form = editForms.value[plan.id];
  form.features = form.features.filter(f => f.trim() !== '');
  form.put(route('admin.pricing-plans.update', plan.id), {
    preserveScroll: true,
    onSuccess: () => { editingId.value = null; },
  });
};

const submitAdd = () => {
  addForm.features = addForm.features.filter(f => f.trim() !== '');
  addForm.post(route('admin.pricing-plans.store'), {
    preserveScroll: true,
    onSuccess: () => {
      showAddForm.value = false;
      Object.assign(addForm, defaultPlan());
    },
  });
};

const deletePlan = (plan) => {
  if (confirm('Biztosan törölni szeretnéd ezt az árazást?')) {
    useForm({}).delete(route('admin.pricing-plans.destroy', plan.id), {
      preserveScroll: true,
    });
  }
};

const addFeature = (form) => { form.features.push(''); };
const removeFeature = (form, index) => { form.features.splice(index, 1); };

const formatPrice = (price) => price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');

// CSS osztály input error állapothoz
const inputClass = (hasError) => [
  'mt-1 block w-full rounded-lg shadow-sm text-sm',
  hasError
    ? 'border-red-300 focus:ring-red-500 focus:border-red-500 bg-red-50'
    : 'border-gray-300 focus:ring-primary-500 focus:border-primary-500',
];
</script>

<template>
  <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="px-6 py-4 bg-gray-50 border-b border-gray-200 flex items-center justify-between">
      <h3 class="text-lg font-semibold text-gray-800">Tanszobai árak</h3>
      <button
        @click="showAddForm = !showAddForm"
        class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 transition-colors"
      >
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
        </svg>
        Új csomag
      </button>
    </div>

    <!-- Új elem form -->
    <div v-if="showAddForm" class="p-6 bg-green-50 border-b border-green-200">
      <h4 class="font-semibold text-green-800 mb-4">Új árazási csomag</h4>
      <form @submit.prevent="submitAdd" class="space-y-3">
        <div class="grid grid-cols-2 gap-3">
          <div>
            <label class="text-sm font-medium text-gray-700">Név <span class="text-red-500">*</span></label>
            <input v-model="addForm.title" type="text" required maxlength="255" :class="inputClass(addForm.errors.title)" />
            <p v-if="addForm.errors.title" class="text-red-600 text-xs mt-0.5">{{ addForm.errors.title }}</p>
          </div>
          <div>
            <label class="text-sm font-medium text-gray-700">Alcím</label>
            <input v-model="addForm.subtitle" type="text" maxlength="255" :class="inputClass(addForm.errors.subtitle)" />
            <p v-if="addForm.errors.subtitle" class="text-red-600 text-xs mt-0.5">{{ addForm.errors.subtitle }}</p>
          </div>
          <div>
            <label class="text-sm font-medium text-gray-700">Ár (Ft) <span class="text-red-500">*</span></label>
            <input v-model.number="addForm.price" type="number" required min="0" max="9999999" :class="inputClass(addForm.errors.price)" />
            <p v-if="addForm.errors.price" class="text-red-600 text-xs mt-0.5">{{ addForm.errors.price }}</p>
          </div>
          <div>
            <label class="text-sm font-medium text-gray-700">Egység <span class="text-red-500">*</span></label>
            <input v-model="addForm.price_unit" type="text" required maxlength="50" :class="inputClass(addForm.errors.price_unit)" />
            <p v-if="addForm.errors.price_unit" class="text-red-600 text-xs mt-0.5">{{ addForm.errors.price_unit }}</p>
          </div>
        </div>

        <div>
          <label class="text-sm font-medium text-gray-700">Testvér kedvezmény</label>
          <input v-model="addForm.sibling_discount" type="text" maxlength="255" :class="inputClass(addForm.errors.sibling_discount)" />
          <p v-if="addForm.errors.sibling_discount" class="text-red-600 text-xs mt-0.5">{{ addForm.errors.sibling_discount }}</p>
        </div>

        <div>
          <label class="text-sm font-medium text-gray-700 mb-2 block">Funkciók / jellemzők <span class="text-xs text-gray-400">(max. 20)</span></label>
          <div v-for="(feature, i) in addForm.features" :key="i" class="flex gap-2 mb-2">
            <input v-model="addForm.features[i]" type="text" maxlength="500" class="flex-1 border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500 text-sm" placeholder="Funkció..." />
            <button type="button" @click="removeFeature(addForm, i)" class="p-2 text-red-500 hover:bg-red-50 rounded-lg" v-if="addForm.features.length > 1">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
          </div>
          <p v-if="addForm.errors.features" class="text-red-600 text-xs mt-0.5">{{ addForm.errors.features }}</p>
          <button type="button" @click="addFeature(addForm)" :disabled="addForm.features.length >= 20" class="text-sm text-primary-600 hover:text-primary-700 font-medium disabled:text-gray-400 disabled:cursor-not-allowed">+ Funkció hozzáadása</button>
        </div>

        <div class="flex gap-4">
          <label class="flex items-center gap-2"><input v-model="addForm.is_featured" type="checkbox" class="rounded text-primary-600" /> <span class="text-sm">Kiemelt</span></label>
          <label class="flex items-center gap-2"><input v-model="addForm.is_active" type="checkbox" class="rounded text-primary-600" /> <span class="text-sm">Aktív</span></label>
          <div class="flex items-center gap-2">
            <label class="text-sm">Sorrend: <span class="text-red-500">*</span></label>
            <input v-model.number="addForm.sort_order" type="number" required min="0" max="999" class="w-16 border-gray-300 rounded-lg text-sm" />
          </div>
        </div>
        <p v-if="addForm.errors.sort_order" class="text-red-600 text-xs">{{ addForm.errors.sort_order }}</p>

        <div class="flex gap-2 pt-2">
          <button type="submit" :disabled="addForm.processing" class="px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-lg hover:bg-green-700 disabled:opacity-50">
            <span v-if="addForm.processing">Mentés...</span>
            <span v-else>Mentés</span>
          </button>
          <button type="button" @click="showAddForm = false" class="px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-300">Mégse</button>
        </div>
      </form>
    </div>

    <!-- Csomagok listája -->
    <div class="divide-y divide-gray-100">
      <div v-for="plan in plans" :key="plan.id" class="p-4 hover:bg-gray-50 transition-colors">
        <!-- Megjelenítés -->
        <div v-if="editingId !== plan.id" class="flex items-center justify-between gap-4">
          <div class="flex-1 min-w-0">
            <div class="flex items-center gap-3">
              <span :class="['inline-block w-2 h-2 rounded-full', plan.is_active ? 'bg-green-500' : 'bg-gray-300']"></span>
              <span class="font-medium text-gray-800 text-sm">{{ plan.title }}</span>
              <span v-if="plan.is_featured" class="text-xs bg-primary-100 text-primary-700 px-2 py-0.5 rounded-full font-medium">Kiemelt</span>
              <span class="text-sm font-bold text-gray-600">{{ formatPrice(plan.price) }} {{ plan.price_unit }}</span>
              <span class="text-xs text-gray-400">#{{ plan.sort_order }}</span>
            </div>
            <p class="text-gray-500 text-xs mt-1">{{ plan.subtitle }} · {{ (plan.features || []).length }} funkció</p>
          </div>
          <div class="flex items-center gap-2">
            <button @click="startEdit(plan)" class="p-1.5 text-gray-400 hover:text-primary-600 hover:bg-primary-50 rounded-lg" title="Szerkesztés">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
            </button>
            <button @click="deletePlan(plan)" class="p-1.5 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg" title="Törlés">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
            </button>
          </div>
        </div>

        <!-- Szerkesztés -->
        <div v-else>
          <form @submit.prevent="saveEdit(plan)" class="space-y-3">
            <div class="grid grid-cols-2 gap-3">
              <div>
                <label class="text-sm font-medium text-gray-700">Név <span class="text-red-500">*</span></label>
                <input v-model="editForms[plan.id].title" type="text" required maxlength="255" :class="inputClass(editForms[plan.id]?.errors?.title)" />
                <p v-if="editForms[plan.id]?.errors?.title" class="text-red-600 text-xs mt-0.5">{{ editForms[plan.id].errors.title }}</p>
              </div>
              <div>
                <label class="text-sm font-medium text-gray-700">Alcím</label>
                <input v-model="editForms[plan.id].subtitle" type="text" maxlength="255" :class="inputClass(editForms[plan.id]?.errors?.subtitle)" />
                <p v-if="editForms[plan.id]?.errors?.subtitle" class="text-red-600 text-xs mt-0.5">{{ editForms[plan.id].errors.subtitle }}</p>
              </div>
              <div>
                <label class="text-sm font-medium text-gray-700">Ár (Ft) <span class="text-red-500">*</span></label>
                <input v-model.number="editForms[plan.id].price" type="number" required min="0" max="9999999" :class="inputClass(editForms[plan.id]?.errors?.price)" />
                <p v-if="editForms[plan.id]?.errors?.price" class="text-red-600 text-xs mt-0.5">{{ editForms[plan.id].errors.price }}</p>
              </div>
              <div>
                <label class="text-sm font-medium text-gray-700">Egység <span class="text-red-500">*</span></label>
                <input v-model="editForms[plan.id].price_unit" type="text" required maxlength="50" :class="inputClass(editForms[plan.id]?.errors?.price_unit)" />
                <p v-if="editForms[plan.id]?.errors?.price_unit" class="text-red-600 text-xs mt-0.5">{{ editForms[plan.id].errors.price_unit }}</p>
              </div>
            </div>

            <div>
              <label class="text-sm font-medium text-gray-700">Testvér kedvezmény</label>
              <input v-model="editForms[plan.id].sibling_discount" type="text" maxlength="255" :class="inputClass(editForms[plan.id]?.errors?.sibling_discount)" />
              <p v-if="editForms[plan.id]?.errors?.sibling_discount" class="text-red-600 text-xs mt-0.5">{{ editForms[plan.id].errors.sibling_discount }}</p>
            </div>

            <div>
              <label class="text-sm font-medium text-gray-700 mb-2 block">Funkciók / jellemzők <span class="text-xs text-gray-400">(max. 20)</span></label>
              <div v-for="(feature, i) in editForms[plan.id].features" :key="i" class="flex gap-2 mb-2">
                <input v-model="editForms[plan.id].features[i]" type="text" maxlength="500" class="flex-1 border-gray-300 rounded-lg shadow-sm focus:ring-primary-500 focus:border-primary-500 text-sm" />
                <button type="button" @click="removeFeature(editForms[plan.id], i)" class="p-2 text-red-500 hover:bg-red-50 rounded-lg" v-if="editForms[plan.id].features.length > 1">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
              </div>
              <p v-if="editForms[plan.id]?.errors?.features" class="text-red-600 text-xs mt-0.5">{{ editForms[plan.id].errors.features }}</p>
              <button type="button" @click="addFeature(editForms[plan.id])" :disabled="editForms[plan.id].features.length >= 20" class="text-sm text-primary-600 hover:text-primary-700 font-medium disabled:text-gray-400 disabled:cursor-not-allowed">+ Funkció hozzáadása</button>
            </div>

            <div class="flex gap-4">
              <label class="flex items-center gap-2"><input v-model="editForms[plan.id].is_featured" type="checkbox" class="rounded text-primary-600" /> <span class="text-sm">Kiemelt</span></label>
              <label class="flex items-center gap-2"><input v-model="editForms[plan.id].is_active" type="checkbox" class="rounded text-primary-600" /> <span class="text-sm">Aktív</span></label>
              <div class="flex items-center gap-2">
                <label class="text-sm">Sorrend: <span class="text-red-500">*</span></label>
                <input v-model.number="editForms[plan.id].sort_order" type="number" required min="0" max="999" class="w-16 border-gray-300 rounded-lg text-sm" />
              </div>
            </div>
            <p v-if="editForms[plan.id]?.errors?.sort_order" class="text-red-600 text-xs">{{ editForms[plan.id].errors.sort_order }}</p>

            <div class="flex gap-2 pt-2">
              <button type="submit" :disabled="editForms[plan.id]?.processing" class="px-4 py-2 bg-primary-600 text-white text-sm font-medium rounded-lg hover:bg-primary-700 disabled:opacity-50">
                <span v-if="editForms[plan.id]?.processing">Mentés...</span>
                <span v-else>Mentés</span>
              </button>
              <button type="button" @click="cancelEdit()" class="px-4 py-2 bg-gray-200 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-300">Mégse</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
