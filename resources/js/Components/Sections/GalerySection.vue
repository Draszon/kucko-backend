<script setup lang="ts">
import Arrow from '../Arrow.vue';
import Title from '../Title.vue';

</script>

<template>
  <section id="galery" class="scroll-mt-16 w-full text-dark flex justify-center py-10">
    <div class="px-2 max-w-[1200px]">
      <Title>Nézz be hozzánk!</Title>
      <div>
        <div class="flex flex-col items-center">
          <div class="flex flex-col items-center gap-5">
            <div class="max-w-[700px]">
              <img class="rounded-xl shadow-lg" src="/images/galery/kucko1.webp" alt="galéria kép">
            </div>
            
            <div class="flex justify-center gap-20 m-5">
              <Arrow link="/images/right-arrow.webp" alt="bal nyíl" :direction="false"/>
              <Arrow link="/images/right-arrow.webp" alt="jobb nyíl" :direction="true"/>
            </div>
          </div>
          <div class="max-w-[550px] flex flex-col items-center">
            <h3 class="font-patrick font-semibolt text-3xl mb-3">Nagy tanulószoba</h3>
            <p>Ez a fő termünk, itt lehet a legtöbb gyerekkel egyszerre foglalkozni. De tanulás után akár le is lehet pihenni. Itt tartjuk a felvételi felkészítőket is.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>