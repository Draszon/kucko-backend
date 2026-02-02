<script setup lang="ts">
import Title from '../Title.vue';

</script>

<template>
  <section id="who-we-are" class="scroll-mt-16 py-20 lg:py-28 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Kik vagyunk?</Title>

      <div class="bg-white rounded-3xl shadow-soft overflow-hidden">
        <div class="grid lg:grid-cols-3">
          <!-- Profilkép szekció -->
          <div class="bg-gradient-to-br from-primary-500 to-primary-600 p-8 lg:p-10 flex flex-col items-center justify-center text-white">
            <div class="w-32 h-44 lg:w-40 lg:h-56 rounded-2xl overflow-hidden shadow-lg mb-6 ring-4 ring-white/20">
              <img class="w-full h-full object-cover object-top" src="/images/profilkep.webp" alt="Borosné Müller Tímea">
            </div>
            <h3 class="font-display font-bold text-xl lg:text-2xl text-center">Borosné Müller Tímea</h3>
            <p class="text-white/80 text-center mt-1">Alapító, tanár</p>
            
            <div class="flex gap-4 mt-6">
              <a href="#" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
              </a>
              <a href="#contacts" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </a>
            </div>
          </div>
          
          <!-- Tartalom -->
          <div class="lg:col-span-2 p-8 lg:p-10">
            <div class="mb-6">
              <span class="inline-flex items-center gap-2 bg-primary-100 text-primary-700 px-4 py-2 rounded-full text-sm font-medium">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg>
                Fontos, hogy tudd kire bízod a gyermeked!
              </span>
            </div>

            <div class="space-y-5 text-gray-600 leading-relaxed">
              <p>
                Borosné Müller Tímea vagyok, a Kuckó Tanulószoba alapítója. Az Eszterházy Károly Tanárképző Főiskolán végeztem matematika-számítástechnika tanári szakon 1994-ben, majd a Debreceni Egyetem informatika kiegészítőjét végeztem el.
              </p>
              <p>
                Pályafutásomat napközis nevelőként kezdtem, majd informatikát és matematikát tanítottam általános és több középiskolában is. Harmadik fiam születése óta a családi vállalkozásunk tagja vagyok, de mindig is visszavágytam a tanításhoz.
              </p>
              <p>
                Sajnos a mai közoktatásban nem minden gyermek tudja megtanulni, begyakorolni a tananyagot. Ezen szeretnénk segíteni a Tanulószobánkban, ahol a gyerekekkel együtt elkészítjük a házi feladatot, az esetleges lemaradásokat bepótoljuk. Nem egy tantárgyból korrepetálunk, hanem szinte mindenből felkészülünk.
              </p>
              
              <div class="bg-secondary-50 rounded-xl p-5 border-l-4 border-secondary-500">
                <p class="font-medium text-secondary-800">
                  Ha szeretnél gyermekeddel csatlakozni hozzánk, keress bátran!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>