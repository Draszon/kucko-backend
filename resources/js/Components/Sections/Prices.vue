<script setup>
import { computed } from 'vue';
import Title from '../Title.vue';

const props = defineProps({
  plans: Array,
});

const formatPrice = (price) => {
  return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
};

const includedFeatures = computed(() => props.plans?.[0]?.features ?? []);
</script>

<template>
  <section id="prices" class="scroll-mt-16 py-20 lg:py-28 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Tanszobai árak</Title>
      
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div 
          v-for="plan in plans" 
          :key="plan.id"
          :class="[
            'rounded-3xl p-6 transition-all duration-300',
            plan.is_featured 
              ? 'bg-gradient-to-br from-primary-400 to-primary-600 text-white shadow-soft relative overflow-hidden'
              : 'bg-white border-2 border-gray-100 hover:border-primary-200 hover:shadow-soft'
          ]"
        >
          <!-- Ajánlott badge -->
          <div v-if="plan.is_featured" class="absolute top-3 right-3">
            <span class="bg-white/20 backdrop-blur-sm text-white text-xs font-semibold px-2.5 py-1 rounded-full">
              Ajánlott
            </span>
          </div>
          
          <div class="mb-5">
            <div :class="[
              'w-12 h-12 rounded-xl flex items-center justify-center mb-4',
              plan.is_featured ? 'bg-white/20' : 'bg-gray-100'
            ]">
              <svg :class="['w-6 h-6', plan.is_featured ? 'text-white' : 'text-gray-600']" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path v-if="plan.is_featured" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 :class="['font-display font-bold text-lg mb-1', !plan.is_featured && 'text-dark']">{{ plan.title }}</h3>
            <p :class="['text-sm', plan.is_featured ? 'text-white/70' : 'text-gray-500']">{{ plan.subtitle }}</p>
          </div>
          
          <div class="mb-5">
            <span :class="['text-3xl font-bold', !plan.is_featured && 'text-dark']">{{ formatPrice(plan.price) }}</span>
            <span :class="['text-sm', plan.is_featured ? 'text-white/70' : 'text-gray-500']"> {{ plan.price_unit }}</span>
          </div>

          <div :class="['text-center text-xs font-medium mb-4', plan.is_featured ? 'text-white/80' : 'text-primary-600']">
            Testvérek: {{ plan.sibling_discount }}
          </div>
          
          <a 
            href="#contacts" 
            :class="[
              'block w-full py-2.5 px-4 text-center font-semibold rounded-xl transition-colors text-sm',
              plan.is_featured 
                ? 'bg-white text-primary-600 hover:bg-white/90'
                : 'bg-gray-100 text-gray-700 hover:bg-gray-200'
            ]"
          >
            Érdeklődöm
          </a>
        </div>
      </div>

      <div v-if="includedFeatures.length" class="mt-10 max-w-4xl mx-auto rounded-2xl border border-secondary-200 bg-gradient-to-br from-secondary-50 via-white to-primary-50 px-6 py-7 sm:px-8 shadow-soft">
        <div class="flex items-center justify-center gap-3 mb-6">
          <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-secondary-500 text-white shadow-sm">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
            </svg>
          </span>
          <h3 class="font-display font-semibold text-xl text-dark">Minden csomag tartalmazza</h3>
        </div>
        <ul class="grid sm:grid-cols-2 gap-3">
          <li v-for="feature in includedFeatures" :key="feature" class="flex items-center gap-3 rounded-lg bg-white/80 px-4 py-3 text-gray-700 shadow-sm">
            <span class="flex h-5 w-5 flex-shrink-0 items-center justify-center rounded-full bg-secondary-100 text-secondary-600">
              <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
              </svg>
            </span>
            <span class="text-sm font-medium">{{ feature }}</span>
          </li>
        </ul>
      </div>
      
      <!-- CTA -->
      <div class="text-center mt-12">
        <p class="text-gray-500 mb-4">Kérdésed van az árakkal kapcsolatban?</p>
        <a href="#contacts" class="inline-flex items-center gap-2 text-primary-600 font-semibold hover:text-primary-700 transition-colors">
          Vedd fel velünk a kapcsolatot
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </a>
      </div>
    </div>
  </section>
</template>