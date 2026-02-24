<script setup>
import Title from '../Title.vue';

const props = defineProps({
  blocks: Array,
  listItems: Array,
});

const iconColors = ['primary', 'secondary', 'accent'];

const icons = {
  clock: 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z',
  clipboard: 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4',
  smile: 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
};
</script>

<template>
  <section id="waiting-for" class="scroll-mt-16 py-20 lg:py-28 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Kiket várunk?</Title>
      
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Tartalom -->
        <div class="space-y-6">
          <div v-for="(block, idx) in blocks" :key="block.id" class="flex gap-4 items-start">
            <div :class="`w-12 h-12 bg-${iconColors[idx % iconColors.length]}-100 rounded-xl flex items-center justify-center flex-shrink-0`">
              <svg :class="`w-6 h-6 text-${iconColors[idx % iconColors.length]}-600`" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="icons[block.icon_type] || icons.clock" />
              </svg>
            </div>
            <div>
              <h3 class="font-display font-semibold text-lg text-dark mb-2">{{ block.title }}</h3>
              <p class="text-gray-600 leading-relaxed">{{ block.description }}</p>
            </div>
          </div>
        </div>
        
        <!-- Infó kártya -->
        <div class="bg-gradient-to-br from-primary-400 to-primary-600 rounded-3xl p-8 lg:p-10 text-white shadow-soft">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="font-display font-semibold text-xl">Fontos tudnivalók</h3>
          </div>
          
          <ul class="space-y-4">
            <li v-for="item in listItems" :key="item.id" class="flex items-start gap-3">
              <svg class="w-5 h-5 text-secondary-300 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-white/90">{{ item.title }}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>