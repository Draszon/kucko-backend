<script setup lang="ts">
import Title from '../Title.vue';

</script>

<template>
  <section class="scroll-mt-16 w-full text-dark">
    <div class="w-full mb-[-5px]">
      <img class="origin-center rotate-180" src="/images/separator.webp" alt="szeparátor hullámvonal">
    </div>
    <div class="bg-sectionBg px-2 w-full pt-10">
      <div>
        <Title>Törekvésünk, hogy a gyerekek</Title>
      </div>
      
      <div class="w-full flex justify-center py-10">
        <div class="w-full flex flex-wrap justify-around gap-10 text-lg">
          <div class="flex flex-col items-center text-center gap-5 mb-10 lg:mb-0 w-80">
            <img class="w-52" src="/images/studying.webp" alt="tanulás logo">
            <p>Megtanuljanak tanulni</p>
          </div>

          <div class="flex flex-col items-center text-center gap-5 mb-10 lg:mb-0 w-80">
            <img class="w-52" src="/images/help.webp" alt="segítség logo">
            <p>Merjenek kérdezni</p>
          </div>

          <div class="flex flex-col items-center text-center gap-5 mb-10 lg:mb-0 w-80">
            <img class="w-52" src="/images/funy_to_study.webp" alt="tanulás logo">
            <p>Érezzék jól magukat tanulás közben</p>
          </div>

          <div class="flex flex-col items-center text-center gap-5 mb-10 lg:mb-0 w-80">
            <img class="w-52" src="/images/onbizalom.webp" alt="önbizalom logo">
            <p>Ne küzdjenek az önbizalomhiánnyal, ismerjék meg saját értékeiket, képességeiket</p>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full mt-[-5px]">
      <img src="/images/separator.webp" alt="szeparátor hullámvonal">
    </div>
  </section>
</template>