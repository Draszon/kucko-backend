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

const props = defineProps({
  waitingForBlocks: Array,
  waitingForListItems: Array,
  teamMembers: Array,
  galleryImages: Array,
  testimonials: Array,
  pricingPlans: Array,
  admissionSubjects: Array,
  admissionPrices: Array,
  roomRentals: Array,
  contacts: Object,
});
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
  <WaitingForSection :blocks="waitingForBlocks" :list-items="waitingForListItems" />

  <!--Bemutatkozás szekció-->
  <WhoWeAreSection :members="teamMembers" />

  <!--Nézz be hozzánk szekció-->
  <GalerySection :images="galleryImages" />

  <!--Rólunk mondták-->
  <TheySad :testimonials="testimonials" />

  <!--Áraink szekció-->
  <Prices :plans="pricingPlans" />
  
  <!-- Felvételi szekció -->
  <AdmissionSection :subjects="admissionSubjects" :prices="admissionPrices" />

  <!-- Terembérlés szekció -->
  <RoomRentalSection :rentals="roomRentals" />

  <!-- Elérhetőségek szekció -->
  <ContactsSection :contacts="contacts" />
</main>

<!-- Footer -->
<Footer />
</template>