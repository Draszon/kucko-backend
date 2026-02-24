<script setup>
const props = defineProps({
  contacts: Object,
});
</script>

<template>
  <section id="contacts" class="scroll-mt-16 py-20 lg:py-28 bg-gradient-to-br from-primary-400 via-primary-500 to-primary-600">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white pb-4">Elérhetőségek</h2>
        <div class="w-24 h-1 bg-white/30 rounded-full mx-auto"></div>
      </div>
      
      <div class="grid lg:grid-cols-2 gap-8 mb-12">
        <!-- Bal oldal - Kontakt kártyák -->
        <div class="space-y-4">
          <!-- Cím -->
          <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 flex items-start gap-4">
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <div>
              <h3 class="text-white font-semibold text-lg mb-1">Cím</h3>
              <p class="text-white/80">{{ contacts?.address }}</p>
            </div>
          </div>
          
          <!-- Telefon -->
          <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 flex items-start gap-4">
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
            </div>
            <div>
              <h3 class="text-white font-semibold text-lg mb-1">{{ contacts?.contact_name }}</h3>
              <a :href="'tel:' + contacts?.phone?.replace(/\s/g, '')" class="text-white/80 hover:text-white transition-colors">{{ contacts?.phone }}</a>
            </div>
          </div>
          
          <!-- Facebook -->
          <a :href="contacts?.facebook_url" target="_blank" class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 flex items-start gap-4 hover:bg-white/20 transition-colors">
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
              </svg>
            </div>
            <div>
              <h3 class="text-white font-semibold text-lg mb-1">Facebook</h3>
              <p class="text-white/80">{{ contacts?.facebook_name }}</p>
            </div>
          </a>
          
          <!-- E-mail -->
          <a :href="'mailto:' + contacts?.email" class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 flex items-start gap-4 hover:bg-white/20 transition-colors">
            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div>
              <h3 class="text-white font-semibold text-lg mb-1">E-mail</h3>
              <p class="text-white/80">{{ contacts?.email }}</p>
            </div>
          </a>
        </div>
        
        <!-- Jobb oldal - Térkép -->
        <div class="space-y-4">
          <div class="bg-white rounded-2xl overflow-hidden shadow-soft h-80 lg:h-full min-h-[320px]">
            <iframe 
              :src="contacts?.maps_embed_url"
              width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen="" 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade"
              class="w-full h-full"
            ></iframe>
          </div>
          
          <!-- Megközelíthetőség -->
          <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6">
            <div class="flex items-start gap-3">
              <svg class="w-5 h-5 text-secondary-300 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
              </svg>
              <p class="text-white/90 text-sm leading-relaxed">
                {{ contacts?.accessibility_info }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>