<script setup lang="ts">
import { ref } from 'vue';
import Title from '../Title.vue';

const testimonials = [
  {
    quote: "Azt mondta ma az egyik tanítványom, hogy 'Timi, régebben nem értettem a geometriát, de mióta hozzád járok, már tudom!' - Ennél szebb dicséret nem is kell egy matektanárnak!",
    author: "Timi",
    role: "Tanár"
  }
];

const currentIndex = ref(0);
</script>

<template>
  <section id="they-sad" class="scroll-mt-16 py-20 lg:py-28 bg-gradient-to-br from-accent-50 via-white to-primary-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Rólunk mondták</Title>
      
      <div class="relative">
        <!-- Idézőjel dekoráció -->
        <div class="absolute -top-6 -left-4 lg:-left-8 text-primary-200">
          <svg class="w-16 h-16 lg:w-24 lg:h-24" fill="currentColor" viewBox="0 0 24 24">
            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
          </svg>
        </div>
        
        <!-- Testimonial kártya -->
        <div class="bg-white rounded-3xl shadow-soft p-8 lg:p-12 relative">
          <blockquote class="text-xl lg:text-2xl text-gray-700 leading-relaxed text-center font-medium mb-8">
            "{{ testimonials[currentIndex].quote }}"
          </blockquote>
          
          <div class="flex flex-col items-center">
            <div class="w-16 h-16 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full flex items-center justify-center text-white font-bold text-xl mb-3">
              {{ testimonials[currentIndex].author.charAt(0) }}
            </div>
            <p class="font-display font-semibold text-dark">{{ testimonials[currentIndex].author }}</p>
            <p class="text-gray-500 text-sm">{{ testimonials[currentIndex].role }}</p>
          </div>
        </div>
        
        <!-- Navigáció (ha több testimonial lesz) -->
        <div v-if="testimonials.length > 1" class="flex justify-center gap-2 mt-6">
          <button 
            v-for="(_, index) in testimonials" 
            :key="index"
            @click="currentIndex = index"
            :class="[
              'w-3 h-3 rounded-full transition-all',
              index === currentIndex ? 'bg-primary-500 w-8' : 'bg-gray-300 hover:bg-gray-400'
            ]"
          ></button>
        </div>
      </div>
    </div>
  </section>
</template>