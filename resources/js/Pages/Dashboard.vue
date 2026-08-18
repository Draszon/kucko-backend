<script setup>
import { ref, computed } from 'vue';
import { usePage } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import SectionEditor from '@/Components/Admin/SectionEditor.vue';
import PricingPlanEditor from '@/Components/Admin/PricingPlanEditorSimple.vue';

const props = defineProps({
  waitingForBlocks: Array,
  waitingForListItems: Array,
  teamMembers: Array,
  galleryImages: Array,
  testimonials: Array,
  pricingPlans: Array,
  admissionSubjects: Array,
  admissionPrices: Array,
  roomRentals: Array,
  contacts: Array,
});

const flash = computed(() => usePage().props.flash?.message);

const tabs = [
  { key: 'waiting', label: 'Kiket várunk', icon: 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z' },
  { key: 'team', label: 'Kik vagyunk', icon: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z' },
  { key: 'gallery', label: 'Nézz be hozzánk', icon: 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z' },
  { key: 'testimonials', label: 'Rólunk mondták', icon: 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z' },
  { key: 'pricing', label: 'Áraink', icon: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z' },
  { key: 'admission', label: 'Felvételi', icon: 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253' },
  { key: 'rental', label: 'Terembérlés', icon: 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4' },
  { key: 'contacts', label: 'Elérhetőségek', icon: 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z' },
];

const activeTab = ref('waiting');

// Field definitions for SectionEditor
const waitingBlockFields = [
  { key: 'title', label: 'Cím', type: 'text', required: true, maxLength: 255 },
  { key: 'description', label: 'Leírás', type: 'textarea', maxLength: 5000 },
  { key: 'icon_type', label: 'Ikon típus', type: 'select', options: [
    { value: 'clock', label: 'Óra' },
    { value: 'clipboard', label: 'Vágólap' },
    { value: 'smile', label: 'Mosoly' },
  ]},
  { key: 'sort_order', label: 'Sorrend', type: 'number', required: true, min: 0, max: 999 },
  { key: 'is_active', label: 'Aktív', type: 'boolean' },
];

const waitingListFields = [
  { key: 'title', label: 'Cím', type: 'text', required: true, maxLength: 255 },
  { key: 'sort_order', label: 'Sorrend', type: 'number', required: true, min: 0, max: 999 },
  { key: 'is_active', label: 'Aktív', type: 'boolean' },
];

const teamFields = [
  { key: 'name', label: 'Név', type: 'text', required: true, maxLength: 255 },
  { key: 'role', label: 'Pozíció', type: 'text', required: true, maxLength: 255 },
  { key: 'image_path', label: 'Profilkép', type: 'image' },
  { key: 'bio', label: 'Bemutatkozás', type: 'textarea', maxLength: 5000 },
  { key: 'facebook_url', label: 'Facebook URL', type: 'url', maxLength: 500, placeholder: 'https://facebook.com/...' },
  { key: 'email', label: 'E-mail cím', type: 'text', maxLength: 255, placeholder: 'pelda@email.hu' },
  { key: 'sort_order', label: 'Sorrend', type: 'number', required: true, min: 0, max: 999 },
  { key: 'is_active', label: 'Aktív', type: 'boolean' },
];

const galleryFields = [
  { key: 'image_path', label: 'Kép', type: 'image', required: true },
  { key: 'title', label: 'Cím', type: 'text', required: true, maxLength: 255 },
  { key: 'description', label: 'Leírás', type: 'textarea', maxLength: 2000 },
  { key: 'sort_order', label: 'Sorrend', type: 'number', required: true, min: 0, max: 999 },
  { key: 'is_active', label: 'Aktív', type: 'boolean' },
];

const testimonialFields = [
  { key: 'quote', label: 'Idézet', type: 'textarea', required: true, maxLength: 5000 },
  { key: 'author_name', label: 'Szerző neve', type: 'text', required: true, maxLength: 255 },
  { key: 'author_role', label: 'Szerző szerepe', type: 'text', required: true, maxLength: 255 },
  { key: 'sort_order', label: 'Sorrend', type: 'number', required: true, min: 0, max: 999 },
  { key: 'is_active', label: 'Aktív', type: 'boolean' },
];

const admissionSubjectFields = [
  { key: 'name', label: 'Tantárgy neve', type: 'text', required: true, maxLength: 255 },
  { key: 'description', label: 'Leírás', type: 'textarea', maxLength: 5000 },
  { key: 'sort_order', label: 'Sorrend', type: 'number', required: true, min: 0, max: 999 },
  { key: 'is_active', label: 'Aktív', type: 'boolean' },
];

const admissionPriceFields = [
  { key: 'label', label: 'Megnevezés', type: 'text', required: true, maxLength: 255 },
  { key: 'price', label: 'Ár', type: 'text', required: true, maxLength: 255 },
  { key: 'sort_order', label: 'Sorrend', type: 'number', required: true, min: 0, max: 999 },
  { key: 'is_active', label: 'Aktív', type: 'boolean' },
];

const roomRentalFields = [
  { key: 'title', label: 'Megnevezés', type: 'text', required: true, maxLength: 255 },
  { key: 'description', label: 'Leírás', type: 'textarea', maxLength: 5000 },
  { key: 'image_path', label: 'Kép', type: 'image' },
  { key: 'price_label', label: 'Ár megnevezés', type: 'text', required: true, maxLength: 255 },
  { key: 'price', label: 'Ár', type: 'text', required: true, maxLength: 255 },
  { key: 'sort_order', label: 'Sorrend', type: 'number', required: true, min: 0, max: 999 },
  { key: 'is_active', label: 'Aktív', type: 'boolean' },
];

const contactFields = [
  { key: 'label', label: 'Megnevezés', type: 'text', required: true, maxLength: 255 },
  { key: 'value', label: 'Érték', type: 'textarea', required: true, maxLength: 2000 },
  { key: 'sort_order', label: 'Sorrend', type: 'number', required: true, min: 0, max: 999 },
];
</script>

<template>
  <AppLayout title="Admin">
    <template #header>
      <div class="flex items-center justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Tartalom kezelése
        </h2>
        <a href="/" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition-colors shadow-sm">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
          </svg>
          Főoldal megtekintése
        </a>
      </div>
    </template>

    <div class="py-8">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Flash üzenet -->
        <Transition
          enter-active-class="transition ease-out duration-300"
          enter-from-class="opacity-0 -translate-y-2"
          enter-to-class="opacity-100 translate-y-0"
          leave-active-class="transition ease-in duration-200"
          leave-from-class="opacity-100 translate-y-0"
          leave-to-class="opacity-0 -translate-y-2"
        >
          <div v-if="flash" class="mb-6 bg-green-50 border border-green-200 text-green-800 px-4 py-3 rounded-xl text-sm font-medium flex items-center gap-2">
            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            {{ flash }}
          </div>
        </Transition>

        <!-- Tab navigáció -->
        <div class="mb-6 bg-white rounded-xl shadow-sm border border-gray-200 p-1.5">
          <div class="flex flex-wrap gap-1">
            <button
              v-for="tab in tabs"
              :key="tab.key"
              @click="activeTab = tab.key"
              :class="[
                'flex items-center gap-2 px-4 py-2.5 text-sm font-medium rounded-lg transition-all duration-200',
                activeTab === tab.key
                  ? 'bg-primary-600 text-white shadow-sm'
                  : 'text-gray-600 hover:text-gray-800 hover:bg-gray-100'
              ]"
            >
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="tab.icon" />
              </svg>
              {{ tab.label }}
            </button>
          </div>
        </div>

        <!-- Tab tartalom -->
        <div class="space-y-6">
          <!-- Kiket várunk -->
          <template v-if="activeTab === 'waiting'">
            <SectionEditor
              title="Info blokkok"
              :items="waitingForBlocks"
              :fields="waitingBlockFields"
              route-prefix="admin.waiting-for-items"
            />
            <SectionEditor
              title="Lista elemek (oldalsó kártya)"
              :items="waitingForListItems"
              :fields="waitingListFields"
              route-prefix="admin.waiting-for-items"
            />
          </template>

          <!-- Kik vagyunk -->
          <template v-if="activeTab === 'team'">
            <SectionEditor
              title="Csapattagok"
              :items="teamMembers"
              :fields="teamFields"
              route-prefix="admin.team-members"
              :can-add="true"
              :can-delete="true"
            />
          </template>

          <!-- Galéria -->
          <template v-if="activeTab === 'gallery'">
            <SectionEditor
              title="Galéria képek"
              :items="galleryImages"
              :fields="galleryFields"
              route-prefix="admin.gallery-images"
              :can-add="true"
              :can-delete="true"
            />
          </template>

          <!-- Rólunk mondták -->
          <template v-if="activeTab === 'testimonials'">
            <SectionEditor
              title="Vélemények"
              :items="testimonials"
              :fields="testimonialFields"
              route-prefix="admin.testimonials"
              :can-add="true"
              :can-delete="true"
            />
          </template>

          <!-- Áraink -->
          <template v-if="activeTab === 'pricing'">
            <PricingPlanEditor :plans="pricingPlans" />
          </template>

          <!-- Felvételi -->
          <template v-if="activeTab === 'admission'">
            <SectionEditor
              title="Tantárgyak"
              :items="admissionSubjects"
              :fields="admissionSubjectFields"
              route-prefix="admin.admission-subjects"
            />
            <SectionEditor
              title="Felvételi árak"
              :items="admissionPrices"
              :fields="admissionPriceFields"
              route-prefix="admin.admission-prices"
            />
          </template>

          <!-- Terembérlés -->
          <template v-if="activeTab === 'rental'">
            <SectionEditor
              title="Terembérlési csomagok"
              :items="roomRentals"
              :fields="roomRentalFields"
              route-prefix="admin.room-rentals"
            />
          </template>

          <!-- Elérhetőségek -->
          <template v-if="activeTab === 'contacts'">
            <SectionEditor
              title="Elérhetőségek"
              :items="contacts"
              :fields="contactFields"
              route-prefix="admin.contacts"
              :can-add="true"
              :can-delete="true"
            />
          </template>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
