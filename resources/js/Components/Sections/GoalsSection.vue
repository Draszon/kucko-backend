<script setup lang="ts">
import Title from '../Title.vue';
</script>

<template>
  <section id="goals" class="scroll-mt-16 py-20 lg:py-28 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Tanulószobánk célja</Title>
      
      <!-- Timeline elrendezés -->
      <div class="relative">
        <!-- Középső vonal (csak desktop) -->
        <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-0.5 bg-gradient-to-b from-primary-200 via-secondary-200 to-accent-200 -translate-x-1/2"></div>
        
        <!-- Első elem - Barátságos környezet -->
        <div class="relative lg:flex lg:items-center lg:gap-12 mb-16 lg:mb-24">
          <!-- Kör jelölő -->
          <div class="hidden lg:flex absolute left-1/2 -translate-x-1/2 w-12 h-12 bg-white border-4 border-primary-400 rounded-full items-center justify-center z-10">
            <svg class="w-5 h-5 text-primary-500" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
          </div>
          
          <!-- Bal oldali tartalom -->
          <div class="lg:w-1/2 lg:pr-16 lg:text-right mb-6 lg:mb-0">
            <span class="inline-block bg-primary-100 text-primary-700 px-4 py-1.5 rounded-full text-sm font-medium mb-4">
              Barátságos környezet
            </span>
            <h3 class="font-display font-bold text-xl text-dark mb-3">Örömteli tanulás</h3>
            <p class="text-gray-600 leading-relaxed">
              Egy barátságos környezet kialakítása a gyerekek számára, ahol könnyebb és örömtelibb a tanulás. Nálunk nem csak leckét írnak, hanem valódi segítséget kapnak az iskolai tananyag megértéséhez.
            </p>
          </div>
          
          <!-- Jobb oldali kép -->
          <div class="lg:w-1/2 lg:pl-16">
            <img 
              class="rounded-2xl shadow-card w-full h-56 lg:h-64 object-cover" 
              src="/images/irogep.webp" 
              alt="Tanulás"
            >
          </div>
        </div>

        <!-- Második elem - Egyéni figyelem -->
        <div class="relative lg:flex lg:items-center lg:gap-12 mb-16 lg:mb-24">
          <!-- Kör jelölő -->
          <div class="hidden lg:flex absolute left-1/2 -translate-x-1/2 w-12 h-12 bg-white border-4 border-secondary-400 rounded-full items-center justify-center z-10">
            <svg class="w-5 h-5 text-secondary-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
            </svg>
          </div>
          
          <!-- Bal oldali kép -->
          <div class="lg:w-1/2 lg:pr-16 order-2 lg:order-1 mt-6 lg:mt-0">
            <img 
              class="rounded-2xl shadow-card w-full h-56 lg:h-64 object-cover" 
              src="/images/tanulas_vagott.webp" 
              alt="Egyéni figyelem"
            >
          </div>
          
          <!-- Jobb oldali tartalom -->
          <div class="lg:w-1/2 lg:pl-16 order-1 lg:order-2">
            <span class="inline-block bg-secondary-100 text-secondary-700 px-4 py-1.5 rounded-full text-sm font-medium mb-4">
              Egyéni figyelem
            </span>
            <h3 class="font-display font-bold text-xl text-dark mb-3">Saját tempóban</h3>
            <p class="text-gray-600 leading-relaxed">
              Kis létszámú csoportjaink lehetővé teszik, hogy minden gyermek saját tempójában fejlődhessen. A házi feladatok mellett arra törekszünk, hogy magabiztosabbá váljanak.
            </p>
          </div>
        </div>

        <!-- Harmadik elem - Közösség -->
        <div class="relative lg:flex lg:items-center lg:gap-12">
          <!-- Kör jelölő -->
          <div class="hidden lg:flex absolute left-1/2 -translate-x-1/2 w-12 h-12 bg-white border-4 border-accent-400 rounded-full items-center justify-center z-10">
            <svg class="w-5 h-5 text-accent-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
          </div>
          
          <!-- Bal oldali tartalom -->
          <div class="lg:w-1/2 lg:pr-16 lg:text-right mb-6 lg:mb-0">
            <span class="inline-block bg-accent-100 text-accent-700 px-4 py-1.5 rounded-full text-sm font-medium mb-4">
              Közösség és barátság
            </span>
            <h3 class="font-display font-bold text-xl text-dark mb-3">Több mint tanulás</h3>
            <p class="text-gray-600 leading-relaxed">
              Szabadtéri játékok, közös programok – a gyerekek nem csak tudással, hanem új barátságokkal is gazdagodnak. Figyelem és gondoskodás veszi körül őket.
            </p>
          </div>
          
          <!-- Jobb oldali - CTA kártya -->
          <div class="lg:w-1/2 lg:pl-16">
            <div class="bg-gradient-to-br from-primary-400 to-primary-600 rounded-2xl p-8 text-white text-center">
              <p class="text-xl lg:text-2xl font-display font-semibold mb-4">
                Mert együtt tényleg<br>könnyebb a tanulás!
              </p>
              <a href="#contacts" class="inline-flex items-center gap-2 bg-white text-primary-600 font-semibold px-6 py-2.5 rounded-xl hover:bg-white/90 transition-colors">
                Jelentkezés
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>