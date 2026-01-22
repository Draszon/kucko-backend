<script setup lang="ts">
import Title from '../Title.vue';
</script>

<template>
  <section id="goals" class="scroll-mt-16 font-open px-2 pt-10 mb-20 flex justify-center text-dark">
    <div class="max-w-[1200px]">
      <div class="mb-10 sm:mb-20 flex flex-col sm:flex-row sm:items-center gap-5">
        <div class="flex flex-col gap-5 mb-10 sm:basis-1/2 sm:mb-0 lg:leading-loose">
          <Title>Tanulószobánk célja</Title>
          <p>Egy barátságos környezet kialakítása a gyerekek számára, ahol könnyebb és örömtelibb a tanulás. Nálunk nem csak leckét írnak, hanem valódi segítséget kapnak az iskolai tananyag megértéséhez és elsajátításához.</p>
          <p>Kis létszámú csoportjaink lehetővé teszik az egyéni figyelmet, így minden gyermek saját tempójában fejlődhet. A házi feladatok elkészítésén és a tananyag átismétlésén túl arra próbálunk törekedni, hogy magabiztosabbá váljanak, önállóan is tudjanak tanulni.</p>
        </div>
        <div class="flex justify-center sm:basis-1/2 shrink-0">
          <img class="rounded-md w-64 lg:w-80 shadow-lg" src="/images/irogep.webp" alt="írógép">
        </div>
      </div>

      <div class="mb-10 flex flex-col-reverse sm:flex-row sm:items-center">
        <div class="flex justify-center sm:basis-1/2 shrink-0">
          <img class="rounded-md w-64 lg:w-80 shadow-lg" src="/images/tanulas_vagott.webp" alt="írógép">
        </div>
        <div class="flex flex-col gap-5 mb-10 sm:basis-1/2 lg:leading-loose">
          <p>Nagy hangsúlyt fektetünk a szociális készségek fejlesztésére is. Számos szabadtéri játékkal foglaljuk le őket a tanulás végeztével. Programjaink során a gyerekek nem csak tudással, hanem új barátságokkal is gazdagodnak. A város különböző iskoláiba járnak, itt lehetőség van egymás megismerésére.</p>
          <p>Ha szeretné, hogy gyermeke olyan közösségben tanuljon, ahol figyelem és gondoskodás veszi körül, akkor nálunk a helye. Mi azért dolgozunk, hogy minden gyereknek sikerélménye legyen és jó jegyek legyenek a bizonyítványban.</p>
        </div>
      </div>
      <div>
        <h2 class="text-3xl md:text-4xl lg:text-5xl text-center font-patrick">Mert együtt tényleg könnyebb a tanulás!</h2>
      </div>
    </div>
  </section>
</template>