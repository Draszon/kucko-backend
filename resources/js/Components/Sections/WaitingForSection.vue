<script setup>
import Title from '../Title.vue';

const props = defineProps(['title']);
</script>

<template>
  <section id="waiting-for" class="scroll-mt-16 w-full text-dark flex justify-center py-10">
    <div class="px-2 max-w-[1200px]">
      <Title>Kiket várunk?</Title>
      <div class="flex flex-col gap-5">
        <p>Tanulószobánkba általános iskola felső tagozatos tanulókat várunk, hétfőtől péntekig 13:30-tól 16:00-ig biztosítjuk a felügyeletüket. Igény szerint ettől el tudunk térni.</p>
        <p>Ez idő alatt elkészítjük az írásbeli házi feladatokat, mindenki megtanulja a szóbeli feladatokat, amit aztán ki is kérdezünk a gyerekektől. Ha szükségesnek érezzük, akkor még gyakoroljuk az anyagot. Majd bepakoljuk a tanszereket a következő napra. A könyveket és a füzeteket a tanulószobában is lehet hagyni, így mindig kéznél vannak.</p>
        <p>Ha mindezzel készen vagyunk, lazítunk, pihenünk (társasjáték, beszélgetés, testmozgás, stb.).</p>
      </div>
    </div>
  </section>
</template>