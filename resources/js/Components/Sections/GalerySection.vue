<script setup lang="ts">
import { ref } from 'vue';
import Arrow from '../Arrow.vue';
import Title from '../Title.vue';

const images = [
  {
    src: '/images/galery/kucko1.webp',
    title: 'Nagy tanulószoba',
    description: 'Ez a fő termünk, itt lehet a legtöbb gyerekkel egyszerre foglalkozni. De tanulás után akár le is lehet pihenni. Itt tartjuk a felvételi felkészítőket is.'
  },
  {
    src: '/images/galery/kucko2.webp',
    title: 'Kis tanulószoba',
    description: 'Ez pedig a másik kép szövege!'
  }
];

const currentIndex = ref(0);
</script>

<template>
  <section id="galery" class="scroll-mt-16 py-20 lg:py-28 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Nézz be hozzánk!</Title>
      
      <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
        <!-- Galéria kép -->
        <div class="relative group">
          <div class="absolute -inset-4 bg-gradient-to-r from-primary-200 via-secondary-200 to-accent-200 rounded-3xl blur-2xl opacity-40 group-hover:opacity-60 transition-opacity"></div>
          <div class="relative rounded-2xl overflow-hidden shadow-card">
            <img 
              :src="images[currentIndex].src" 
              :alt="images[currentIndex].title"
              class="w-full aspect-[4/3] object-cover"
            >
            
            <!-- Navigáció -->
            <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 to-transparent p-6">
              <div class="flex justify-between items-center">
                <button 
                  @click="currentIndex = currentIndex > 0 ? currentIndex - 1 : images.length - 1"
                  class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors"
                >
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                  </svg>
                </button>
                
                <div class="flex gap-2">
                  <span 
                    v-for="(_, index) in images" 
                    :key="index"
                    :class="[
                      'w-2 h-2 rounded-full transition-all',
                      index === currentIndex ? 'bg-white w-6' : 'bg-white/50'
                    ]"
                  ></span>
                </div>
                
                <button 
                  @click="currentIndex = currentIndex < images.length - 1 ? currentIndex + 1 : 0"
                  class="w-10 h-10 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-colors"
                >
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Tartalom -->
        <div class="space-y-6">
          <div class="inline-flex items-center gap-2 bg-primary-100 text-primary-700 px-4 py-2 rounded-full text-sm font-medium">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
            </svg>
            Galéria
          </div>
          
          <h3 class="font-display font-bold text-2xl lg:text-3xl text-dark">
            {{ images[currentIndex].title }}
          </h3>
          
          <p class="text-gray-600 text-lg leading-relaxed">
            {{ images[currentIndex].description }}
          </p>

          <div class="flex flex-wrap gap-3 pt-4">
            <div class="flex items-center gap-2 bg-gray-100 px-4 py-2 rounded-lg">
              <svg class="w-5 h-5 text-secondary-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-600">Tágas terek</span>
            </div>
            <div class="flex items-center gap-2 bg-gray-100 px-4 py-2 rounded-lg">
              <svg class="w-5 h-5 text-secondary-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-600">Modern berendezés</span>
            </div>
            <div class="flex items-center gap-2 bg-gray-100 px-4 py-2 rounded-lg">
              <svg class="w-5 h-5 text-secondary-500" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-sm text-gray-600">Nyugodt környezet</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>