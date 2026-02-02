<script setup>
import Title from '../Title.vue';

</script>

<template>
  <section id="prices" class="scroll-mt-16 py-20 lg:py-28 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Tanszobai árak</Title>
      
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Heti 2 délután -->
        <div class="bg-white border-2 border-gray-100 rounded-3xl p-6 hover:border-primary-200 hover:shadow-soft transition-all duration-300">
          <div class="mb-5">
            <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="font-display font-bold text-lg text-dark mb-1">Heti 2 délután</h3>
            <p class="text-gray-500 text-sm">Kipróbáláshoz ideális</p>
          </div>
          
          <div class="mb-5">
            <span class="text-3xl font-bold text-dark">32 000</span>
            <span class="text-gray-500 text-sm"> Ft / hó</span>
          </div>
          
          <ul class="space-y-2 mb-6 text-sm">
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-gray-600">Két választott délután</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-gray-600">Elfoglalt családoknak</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-gray-600">Kiegészítő támogatás</span>
            </li>
          </ul>
          
          <div class="text-center text-xs text-primary-600 font-medium mb-4">
            Testvérek: 3 000 Ft/fő kedvezmény
          </div>
          
          <a href="#contacts" class="block w-full py-2.5 px-4 text-center font-semibold rounded-xl bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors text-sm">
            Érdeklődöm
          </a>
        </div>

        <!-- Heti 3 délután -->
        <div class="bg-white border-2 border-gray-100 rounded-3xl p-6 hover:border-primary-200 hover:shadow-soft transition-all duration-300">
          <div class="mb-5">
            <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
              </svg>
            </div>
            <h3 class="font-display font-bold text-lg text-dark mb-1">Heti 3 délután</h3>
            <p class="text-gray-500 text-sm">Jó választás a kezdéshez</p>
          </div>
          
          <div class="mb-5">
            <span class="text-3xl font-bold text-dark">37 000</span>
            <span class="text-gray-500 text-sm"> Ft / hó</span>
          </div>
          
          <ul class="space-y-2 mb-6 text-sm">
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-gray-600">Három délután a héten</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-gray-600">Intenzív készségfejlesztés</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-gray-600">Fókuszált tanulási program</span>
            </li>
          </ul>
          
          <div class="text-center text-xs text-primary-600 font-medium mb-4">
            Testvérek: 3 000 Ft/fő kedvezmény
          </div>
          
          <a href="#contacts" class="block w-full py-2.5 px-4 text-center font-semibold rounded-xl bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors text-sm">
            Érdeklődöm
          </a>
        </div>

        <!-- Heti 4 délután -->
        <div class="bg-white border-2 border-gray-100 rounded-3xl p-6 hover:border-primary-200 hover:shadow-soft transition-all duration-300">
          <div class="mb-5">
            <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
            </div>
            <h3 class="font-display font-bold text-lg text-dark mb-1">Heti 4 délután</h3>
            <p class="text-gray-500 text-sm">Rugalmas megoldás</p>
          </div>
          
          <div class="mb-5">
            <span class="text-3xl font-bold text-dark">42 000</span>
            <span class="text-gray-500 text-sm"> Ft / hó</span>
          </div>
          
          <ul class="space-y-2 mb-6 text-sm">
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-gray-600">Négy választott délután</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-gray-600">Egyéb programokkal összehangolható</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-gray-600">Egyéni ütemezés</span>
            </li>
          </ul>
          
          <div class="text-center text-xs text-primary-600 font-medium mb-4">
            Testvérek: 3 000 Ft/fő kedvezmény
          </div>
          
          <a href="#contacts" class="block w-full py-2.5 px-4 text-center font-semibold rounded-xl bg-primary-100 text-primary-700 hover:bg-primary-200 transition-colors text-sm">
            Érdeklődöm
          </a>
        </div>

        <!-- Heti 5 délután - Kiemelt -->
        <div class="bg-gradient-to-br from-primary-400 to-primary-600 rounded-3xl p-6 text-white shadow-soft relative overflow-hidden">
          <div class="absolute top-3 right-3">
            <span class="bg-white/20 backdrop-blur-sm text-white text-xs font-semibold px-2.5 py-1 rounded-full">
              Ajánlott
            </span>
          </div>
          
          <div class="mb-5">
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg>
            </div>
            <h3 class="font-display font-bold text-lg mb-1">Heti 5 délután</h3>
            <p class="text-white/70 text-sm">A legjobb megoldás</p>
          </div>
          
          <div class="mb-5">
            <span class="text-3xl font-bold">47 000</span>
            <span class="text-white/70 text-sm"> Ft / hó</span>
          </div>
          
          <ul class="space-y-2 mb-6 text-sm">
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-300 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-white/90">Hétfőtől péntekig</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-300 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-white/90">Folyamatos mentorálás</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 text-secondary-300 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-white/90">Rendszeres támogatás</span>
            </li>
          </ul>
          
          <div class="text-center text-xs text-white/80 font-medium mb-4">
            Testvérek: 3 000 Ft/fő kedvezmény
          </div>
          
          <a href="#contacts" class="block w-full py-2.5 px-4 text-center font-semibold rounded-xl bg-white text-primary-600 hover:bg-white/90 transition-colors text-sm">
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