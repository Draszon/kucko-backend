<script setup>
import Title from '../Title.vue';

const props = defineProps(['title']);
</script>

<template>
  <section id="waiting-for" class="scroll-mt-16 py-20 lg:py-28 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Kiket várunk?</Title>
      
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Tartalom -->
        <div class="space-y-6">
          <div class="flex gap-4 items-start">
            <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h3 class="font-display font-semibold text-lg text-dark mb-2">Felső tagozatos tanulók</h3>
              <p class="text-gray-600 leading-relaxed">
                Tanulószobánkba általános iskola felső tagozatos tanulókat várunk, hétfőtől péntekig 13:30-tól 16:00-ig biztosítjuk a felügyeletüket. Igény szerint ettől el tudunk térni.
              </p>
            </div>
          </div>
          
          <div class="flex gap-4 items-start">
            <div class="w-12 h-12 bg-secondary-100 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
              </svg>
            </div>
            <div>
              <h3 class="font-display font-semibold text-lg text-dark mb-2">Házi feladat elkészítése</h3>
              <p class="text-gray-600 leading-relaxed">
                Elkészítjük az írásbeli házi feladatokat, mindenki megtanulja a szóbeli feladatokat, amit aztán ki is kérdezünk. Ha szükségesnek érezzük, még gyakoroljuk az anyagot.
              </p>
            </div>
          </div>
          
          <div class="flex gap-4 items-start">
            <div class="w-12 h-12 bg-accent-100 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h3 class="font-display font-semibold text-lg text-dark mb-2">Pihenés és játék</h3>
              <p class="text-gray-600 leading-relaxed">
                Ha mindezzel készen vagyunk, lazítunk, pihenünk – társasjáték, beszélgetés, testmozgás. A könyveket és a füzeteket a tanulószobában is lehet hagyni.
              </p>
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
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-secondary-300 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-white/90">Felső tagozatos tanulók (5-8. osztály)</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-secondary-300 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-white/90">Hétfő-péntek: 13:30 - 16:00</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-secondary-300 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-white/90">Kis létszámú csoportok</span>
            </li>
            <li class="flex items-start gap-3">
              <svg class="w-5 h-5 text-secondary-300 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
              <span class="text-white/90">Tanszerek tárolása helyben</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>