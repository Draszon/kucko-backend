<script setup> 
  import HeroIcons from '../HeroIcons.vue';
</script>

<template>
<section id="hero" class="
    bg-[url('/images/index_hatter1.jpeg')] bg-fixed bg-center scroll-mt-16
    bg-no-repeat pt-16 h-screen bg-cover font-patrick text-white"
  >
  <div class="backdrop-blur-md h-full bg-gray-700/50">
    <div class="h-full flex flex-col items-center justify-center">
      <img class="w-72" src="/images/kucko-logo-jo.webp" alt="kuckó logó">
      <h1 class="text-4xl sm:text-6xl text-center my-8">Tanulás könnyedén, együtt!</h1>
      <div class="text-3xl lg:text-5xl flex flex-row justify-between sm:justify-evenly w-full px-2">
        <HeroIcons icons="/images/sticker3.webp" alt="sticker">Tanulás</HeroIcons>
        <HeroIcons icons="/images/sticker1.webp" alt="sticker">Játék</HeroIcons>
        <HeroIcons icons="/images/sticker2.webp" alt="sticker">Siker</HeroIcons>
      </div>
    </div>
  </div>
</section>
</template>