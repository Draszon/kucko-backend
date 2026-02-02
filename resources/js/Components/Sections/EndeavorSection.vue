<script setup lang="ts">
import Title from '../Title.vue';

</script>

<template>
  <section class="scroll-mt-16 py-20 lg:py-28 bg-gradient-to-br from-secondary-50 via-white to-primary-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Törekvésünk, hogy a gyerekek</Title>
      
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
        <!-- Kártya 1 -->
        <div class="group bg-white rounded-2xl p-6 shadow-soft hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
          <div class="w-16 h-16 bg-gradient-to-br from-primary-100 to-primary-200 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
          </div>
          <h3 class="font-display font-semibold text-lg text-dark mb-2">Megtanuljanak tanulni</h3>
          <p class="text-gray-500 text-sm">Hatékony tanulási módszerek elsajátítása az önálló munkához.</p>
        </div>

        <!-- Kártya 2 -->
        <div class="group bg-white rounded-2xl p-6 shadow-soft hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
          <div class="w-16 h-16 bg-gradient-to-br from-accent-100 to-accent-200 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg class="w-8 h-8 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="font-display font-semibold text-lg text-dark mb-2">Merjenek kérdezni</h3>
          <p class="text-gray-500 text-sm">Bátorítjuk a kíváncsiságot és a kérdéseket minden területen.</p>
        </div>

        <!-- Kártya 3 -->
        <div class="group bg-white rounded-2xl p-6 shadow-soft hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
          <div class="w-16 h-16 bg-gradient-to-br from-secondary-100 to-secondary-200 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg class="w-8 h-8 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="font-display font-semibold text-lg text-dark mb-2">Jól érezzék magukat</h3>
          <p class="text-gray-500 text-sm">A tanulás lehet élvezetes és motiváló élmény.</p>
        </div>

        <!-- Kártya 4 -->
        <div class="group bg-white rounded-2xl p-6 shadow-soft hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
          <div class="w-16 h-16 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
            </svg>
          </div>
          <h3 class="font-display font-semibold text-lg text-dark mb-2">Önbizalmat építsenek</h3>
          <p class="text-gray-500 text-sm">Ismerjék meg saját értékeiket és képességeiket.</p>
        </div>
      </div>
    </div>
  </section>
</template>