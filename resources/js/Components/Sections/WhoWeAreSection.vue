<script setup lang="ts">
import Title from '../Title.vue';

</script>

<template>
  <section id="who-we-are" class="scroll-mt-16 w-full text-dark flex justify-center py-10">
    <div class="sm:px-2 max-w-[1200px]">
      <Title>Kik vagyunk?</Title>

      <div class="bg-gray-300/70 rounded-xl p-5 md:p-20 flex flex-col lg:flex-row">
        <div class="flex justify-center my-10 lg:mr-10">
          <img class="max-w-36 rounded-xl shadow-lg" src="/images/profilkep.webp" alt="profilkép">
        </div>
        
        <div>
          <div>
            <p class="text-xl font-semibold">Borosné Müller Tímea</p>
            <p class="text-lg font-semibold">Alapító</p>
            <div class="border-b-2 border-gray-400/80 rounded-full my-3"></div>
          </div>

          <div class="mb-5">
            <h3 class="italic font-semibold">Fontos hogy tudd, kire bízod a gyermeked, ha a Kuckó Tanulószobát választjátok!</h3>
          </div>

          <div class="flex flex-col gap-5">
            <p>Borosné Müller Tímea vagyok, a Kuckó Tanulószoba alapítója. Az Eszterházy Károly Tanárképző Főiskolán végeztem matematika-számítástechnika tanári szakon 1994-ben, majd a Debreceni Egyetem informatika kiegészítőjét végeztem el. Pályafutásomat napközis nevelőként kezdtem, majd informatikát és matematikát tanítottam általános és több középiskolában is. Harmadik fiam születése óta a családi vállalkozásunk tagja vagyok, de mindig is visszavágytam a tanításhoz.</p>
            <p>Sajnos a mai közoktatásban nem minden gyermek tudja megtanulni, begyakorolni a tananyagot. Ezen szeretnénk segíteni a Tanulószobánkban, ahol a gyerekekkel együtt elkészítjük a házi feladatot, az esetleges lemaradásokat bepótoljuk. Nem egy tantárgyból korrepetálunk, hanem szinte mindenből felkészülünk. Célunk, hogy egyedül is menjen a tanulás, több tanulási módszert is alkalmazunk. A folyamatos tanulás a jegyeken is meglátszik.</p>
            <p class="font-semibold">Ha szeretnél gyermekeddel csatlakozni hozzánk, keress bátran!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>