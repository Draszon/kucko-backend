<script setup>
import Title from '../Title.vue';

const props = defineProps({
  plans: Array,
});

const formatPrice = (price) => {
  return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ' ');
};
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
          
          <ul class="space-y-2 mb-6 text-sm">
            <li v-for="(feature, fIndex) in plan.features" :key="fIndex" class="flex items-start gap-2">
              <svg :class="['w-4 h-4 flex-shrink-0 mt-0.5', plan.is_featured ? 'text-secondary-300' : 'text-secondary-500']" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span :class="plan.is_featured ? 'text-white/90' : 'text-gray-600'">{{ feature }}</span>
            </li>
          </ul>
          
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