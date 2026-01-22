<script setup>
import Header from '@/Components/Header.vue';
import HeroSection from '@/Components/Sections/HeroSection.vue';
import GoalsSection from '@/Components/Sections/GoalsSection.vue';
import EndeavorSection from '@/Components/Sections/EndeavorSection.vue';
import WaitingForSection from '@/Components/Sections/WaitingForSection.vue';
import WhoWeAreSection from '@/Components/Sections/WhoWeAreSection.vue';
import GalerySection from '@/Components/Sections/GalerySection.vue';
import { Head } from '@inertiajs/vue3';
import TheySad from '@/Components/Sections/TheySad.vue';
import Prices from '@/Components/Sections/Prices.vue';
</script>

<template>
<Head title="Főoldal" />

<!--Header menük-->
<Header />

<main class="text-black bg-bgWhite">

  <!--Hero szekció-->
  <HeroSection />

  <!--Céljaink szekció-->
  <GoalsSection />

  <!--Törekvésünk szekció-->
  <EndeavorSection />

  <!--Kiket várunk szekció-->
  <WaitingForSection />

  <!--Bemutatkozás szekció-->
  <WhoWeAreSection />

  <!--Nézz be hozzánk szekció-->
  <GalerySection />

  <!--Rólunk mondták-->
  <TheySad />

  <!--Áraink szekció-->
  <Prices />
  
  <section id="admission" class="scroll-mt-16 w-full text-dark flex justify-center py-10"></section>

  <section id="room-rental" class="scroll-mt-16 w-full text-dark flex justify-center py-10"></section>

  <section id="contacts" class="scroll-mt-16 w-full text-dark flex justify-center py-10"></section>
</main>

<footer></footer>
</template>