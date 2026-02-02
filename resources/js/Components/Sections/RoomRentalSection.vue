<script setup>

</script>

<template>
  <section id="room-rental" class="scroll-mt-16 py-20 lg:py-28 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-dark pb-4">Terembérlés</h2>
        <div class="w-24 h-1 bg-gradient-to-r from-primary-300 to-primary-500 rounded-full mx-auto mb-6"></div>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
          Szeretnél egy csendes, inspiráló környezetet tanuláshoz, megbeszélésekhez vagy kisebb rendezvényekhez?
        </p>
      </div>
      
      <div class="grid lg:grid-cols-2 gap-12 items-start">
        <!-- Bal oldal - Kép és felszereltség -->
        <div class="space-y-8">
          <div class="relative">
            <div class="absolute -inset-4 bg-gradient-to-r from-secondary-200 via-primary-200 to-accent-200 rounded-3xl blur-2xl opacity-40"></div>
            <img 
              src="/images/galery/kucko4.webp" 
              alt="Terembérlés" 
              class="relative rounded-2xl shadow-card w-full object-cover"
            >
          </div>
          
          <!-- Felszereltség -->
          <div class="bg-gray-50 rounded-2xl p-6">
            <h4 class="font-display font-semibold text-lg text-dark mb-4">Felszereltség</h4>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
              <div class="flex items-center gap-3">
                <svg class="w-5 h-5 text-secondary-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-600">Wi-Fi</span>
              </div>
              <div class="flex items-center gap-3">
                <svg class="w-5 h-5 text-secondary-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-600">Klíma és fűtés</span>
              </div>
              <div class="flex items-center gap-3">
                <svg class="w-5 h-5 text-secondary-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                </svg>
                <span class="text-gray-600">Társasjátékok</span>
              </div>
            </div>
            <p class="text-gray-500 text-sm mt-4">Kényelmes asztalok és székek variálható elrendezéssel</p>
          </div>
        </div>
        
        <!-- Jobb oldal - Tartalom -->
        <div class="space-y-6">
          <p class="text-gray-600 text-lg leading-relaxed">
            Termeink kényelmes és barátságos légkört biztosítanak, ahol zavartalanul koncentrálhatsz vagy együtt dolgozhatsz másokkal.
          </p>
          
          <!-- Használati esetek -->
          <div class="space-y-4">
            <div class="flex gap-4 items-start bg-white border border-gray-100 rounded-xl p-5 shadow-soft">
              <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path d="M12 14l9-5-9-5-9 5 9 5z" />
                  <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-dark mb-1">Tanulócsoportok, korrepetálások</h4>
                <p class="text-gray-500 text-sm">Ideális helyszín tanároknak és diákoknak</p>
              </div>
            </div>
            
            <div class="flex gap-4 items-start bg-white border border-gray-100 rounded-xl p-5 shadow-soft">
              <div class="w-12 h-12 bg-accent-100 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-dark mb-1">Workshopok, tréningek</h4>
                <p class="text-gray-500 text-sm">Kisebb előadásokhoz, fejlesztő foglalkozásokhoz</p>
              </div>
            </div>
            
            <div class="flex gap-4 items-start bg-white border border-gray-100 rounded-xl p-5 shadow-soft">
              <div class="w-12 h-12 bg-secondary-100 rounded-xl flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              </div>
              <div>
                <h4 class="font-semibold text-dark mb-1">Közösségi események, szülői találkozók</h4>
                <p class="text-gray-500 text-sm">Kötetlen beszélgetésekhez, közösségépítéshez</p>
              </div>
            </div>
          </div>
          
          <!-- Foglalás és árak -->
          <div class="bg-gradient-to-r from-secondary-500 to-secondary-600 rounded-2xl p-6 text-white">
            <h4 class="font-semibold text-lg mb-3">Foglalás és árak</h4>
            <p class="text-white/90 text-sm mb-4">
              Termeink hétköznap <strong>13 óráig</strong> vagy <strong>16 óra után</strong> bérelhetők.
            </p>
            <div class="grid sm:grid-cols-2 gap-4 mb-4">
              <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                <p class="text-white/70 text-sm mb-1">2-4 órás bérlés</p>
                <p class="text-2xl font-bold">3 500 Ft<span class="text-base font-normal text-white/70"> / óra</span></p>
              </div>
              <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                <p class="text-white/70 text-sm mb-1">4 órát meghaladó</p>
                <p class="text-2xl font-bold">3 000 Ft<span class="text-base font-normal text-white/70"> / óra</span></p>
              </div>
            </div>
            <p class="text-white/70 text-sm">Ezekről az összegekről számlát állítunk ki!</p>
          </div>
          
          <p class="text-gray-500 text-center">
            További részletekért keress e-mailben vagy telefonon!
          </p>
        </div>
      </div>
    </div>
  </section>
</template>