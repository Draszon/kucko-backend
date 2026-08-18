<script setup> 
  import HeroIcons from '../HeroIcons.vue';
</script>

<template>
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">
  <!-- Háttér gradiens - lágyabb átmenet -->
  <!--<div class="absolute inset-0 bg-gradient-to-br from-primary-400 via-primary-500 to-primary-600"></div>-->

  <div class="absolute inset-0">
    <img class="h-full w-full object-cover" src="/images/index_hatter1.jpeg" alt="index háttér">
  </div>

  <div class="absolute inset-0 bg-gradient-to-br from-primary-400/30 via-primary-500/30 to-primary-600/30 backdrop-blur-md"></div>
  
  <!-- Tartalom -->
  <div class="relative z-10 max-w-5xl mx-auto px-4 py-20 text-center">
    <!-- Logó -->
    <div class="mb-8">
      <div class="inline-flex items-center justify-center w-[200px] h-[200px] mb-6">
        <img class="w-[160px]" src="/images/kucko-logo-jo.webp" alt="kuckó logó">
      </div>
    </div>
    
    <!-- Főcím -->
    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-display font-bold text-white mb-6 leading-tight">
      Tanulás könnyedén,
      <span class="text-secondary-300">együtt!</span>
    </h1>
    
    <!-- Alcím -->
    <p class="text-lg sm:text-xl text-white/80 max-w-2xl mx-auto mb-12 leading-relaxed">
      Segítünk, hogy gyermeked sikeresen vegye az iskolai akadályokat. 
      Barátságos környezet, egyéni figyelem, közös siker.
    </p>
    
    <!-- Funkció kártyák -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6 max-w-3xl mx-auto mb-12">
      <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 hover:bg-white/20 transition-all duration-300 group">
        <div class="w-16 h-16 bg-accent-400/20 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
          <svg class="w-8 h-8 text-accent-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </div>
        <h3 class="text-white font-semibold text-lg">Tanulás</h3>
        <p class="text-white/60 text-sm mt-1">Hatékony módszerek</p>
      </div>
      
      <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 hover:bg-white/20 transition-all duration-300 group">
        <div class="w-16 h-16 bg-yellow-400/20 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
          <svg class="w-8 h-8 text-accent-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
          </svg>
        </div>
        <h3 class="text-white font-semibold text-lg">Siker</h3>
        <p class="text-white/60 text-sm mt-1">Jobb jegyek, önbizalom</p>
      </div>
      
      <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 hover:bg-white/20 transition-all duration-300 group">
        <div class="w-16 h-16 bg-accent-400/20 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
          <svg class="w-8 h-8 text-yellow-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <h3 class="text-white font-semibold text-lg">Játék</h3>
        <p class="text-white/60 text-sm mt-1">Tanulás után lazulás</p>
      </div>
    </div>
    
    <!-- CTA gombok -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="#contacts" class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-semibold rounded-xl shadow-soft hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300">
        Kapcsolatfelvétel
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
      <a href="#goals" class="inline-flex items-center justify-center px-8 py-4 bg-white/10 text-white font-semibold rounded-xl backdrop-blur-sm hover:bg-white/20 transition-all duration-300">
        Tudj meg többet
      </a>
    </div>
  </div>
  
  <!-- Scroll indikátor -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
    <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
    </svg>
  </div>
</section>
</template>