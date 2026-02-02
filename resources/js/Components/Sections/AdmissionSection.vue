<script setup>
  import Title from '../Title.vue';
</script>

<template>
  <section id="admission" class="scroll-mt-16 py-20 lg:py-28 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-dark pb-4">Felvételi felkészítő nyolcadikosoknak</h2>
        <div class="w-24 h-1 bg-gradient-to-r from-primary-300 to-primary-500 rounded-full mx-auto mb-6"></div>
        <p class="text-xl text-primary-600 font-semibold">Lépj magabiztosan a középiskolába!</p>
      </div>
      
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <!-- Tartalom -->
        <div class="space-y-6">
          <p class="text-gray-600 text-lg leading-relaxed">
            A középiskolai felvételi az egyik legfontosabb mérföldkő a diákok életében. Mi azért vagyunk, hogy ezt a kihívást is magabiztosan és felkészülten vegyék.
          </p>
          
          <p class="text-gray-600 text-lg leading-relaxed">
            <strong class="text-dark">Október elejétől a januári vizsgáig</strong> hetente egy-egy alkalommal 2×45 percben tartunk foglalkozásokat matematikából és magyar nyelvből. Szisztematikusan átismételjük az általános iskolai tananyagot, külön kitérve a felvételi feladatsorban leggyakrabban előforduló feladattípusokra.
          </p>
          
          <div class="grid sm:grid-cols-2 gap-4">
            <div class="bg-white rounded-xl p-5 shadow-soft">
              <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 bg-accent-100 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 text-accent-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                  </svg>
                </div>
                <h4 class="font-semibold text-dark">Magyar nyelv</h4>
              </div>
              <p class="text-gray-500 text-sm">Helyesírás, érvelés, szövegértés</p>
            </div>
            
            <div class="bg-white rounded-xl p-5 shadow-soft">
              <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 bg-secondary-100 rounded-lg flex items-center justify-center">
                  <svg class="w-5 h-5 text-secondary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                  </svg>
                </div>
                <h4 class="font-semibold text-dark">Matematika</h4>
              </div>
              <p class="text-gray-500 text-sm">Szöveges feladatok, geometria, algebra, logika</p>
            </div>
          </div>
          
          <p class="text-gray-600 text-lg leading-relaxed">
            A felkészülés vége felé több <strong class="text-dark">próbafelvételit</strong> írunk, együtt kijavítjuk, megbeszéljük a megoldásokat is. A kemény munka meghozza gyümölcsét: a gyerekek magabiztosan vágnak neki az első nagy megmérettetésüknek.
          </p>
          
          <!-- Árak -->
          <div class="bg-gradient-to-r from-primary-400 to-primary-600 rounded-2xl p-6 text-white">
            <h4 class="font-semibold text-lg mb-4">Áraink</h4>
            <div class="grid sm:grid-cols-2 gap-4">
              <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                <p class="text-white/70 text-sm mb-1">Tanszobásoknak</p>
                <p class="text-2xl font-bold">2 000 Ft<span class="text-base font-normal text-white/70"> / 90 perc</span></p>
              </div>
              <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
                <p class="text-white/70 text-sm mb-1">Külsősöknek</p>
                <p class="text-2xl font-bold">4 000 Ft<span class="text-base font-normal text-white/70"> / 90 perc</span></p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Kép -->
        <div class="relative">
          <div class="absolute -inset-4 bg-gradient-to-r from-primary-200 via-accent-200 to-secondary-200 rounded-3xl blur-2xl opacity-40"></div>
          <img 
            src="/images/felveteli2.webp" 
            alt="Felvételi felkészítő" 
            class="relative rounded-2xl shadow-card w-full object-cover"
          >
        </div>
      </div>
    </div>
  </section>
</template>