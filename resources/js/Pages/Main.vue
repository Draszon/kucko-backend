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
import AdmissionSection from '@/Components/Sections/AdmissionSection.vue';
import RoomRentalSection from '@/Components/Sections/RoomRentalSection.vue';
import Footer from '@/Components/Footer.vue';
import ContactsSection from '@/Components/Sections/ContactsSection.vue';
</script>

<template>
<Head title="Főoldal" />

<!--Header menük-->
<Header />

<main class="text-dark bg-white antialiased">

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
  
  <!-- Felvételi szekció -->
  <AdmissionSection />

  <!-- Terembérlés szekció -->
  <RoomRentalSection />

  <!-- Elérhetőségek szekció -->
  <ContactsSection />
</main>

<!-- Footer -->
<Footer />
</template>