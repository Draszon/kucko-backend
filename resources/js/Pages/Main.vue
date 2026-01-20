<script setup>
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';

const showMobileMenu = ref(false);

const toggleMenu = () => {
  showMobileMenu.value = !showMobileMenu.value;
}
</script>

<template>
<Head title="Főoldal" />

<header class="
  top-0 left-0 flex items-center font-patrick fixed
  w-full h-16 bg-bgWhite/50 z-50 text-dark backdrop-blur-xl"
>
  <div class="w-full">
    <div class="px-2 lg:px-5 w-full flex justify-between">
      <!--Logó és szöveg-->
      <div class="flex items-center">
        <img src="/images/ures-haz.png" alt="logo"
          class="w-8">
        <h1 class="uppercase text-xl">kuckó tanulószoba</h1>
      </div>
      <nav class="hidden lg:block ">
        <ul
          class="flex flex-row gap-5 h-full items-center cursor-pointer
          text-xl"
        >
          <li><a class="hover:border-b-2 border-gray-800" href="#hero">Kezdőlap</a></li>
          <li><a class="hover:border-b-2 border-gray-800" href="#goals">Céljaink</a></li>
          <li><a class="hover:border-b-2 border-gray-800" href="#waiting-for">Kiket várunk</a></li>
          <li><a class="hover:border-b-2 border-gray-800" href="#who-we-are">Kik vagyunk</a></li>
          <li><a class="hover:border-b-2 border-gray-800" href="#prices">Árak</a></li>
          <li><a class="hover:border-b-2 border-gray-800" href="#admission">Felvételi</a></li>
          <li><a class="hover:border-b-2 border-gray-800" href="#room-rental">Terembérlés</a></li>
          <li><a class="hover:border-b-2 border-gray-800" href="#contacts">Elérhetőségek</a></li>
        </ul>
      </nav>

      <!--Hamburger menü ikon-->
      <div class="block lg:hidden" @click="showMobileMenu = !showMobileMenu">
        <img src="/images/menu-open.svg" alt="hamburger menü" class="max-w-8">
      </div>
    </div>
  </div>
</header>
  <!--Mobil menü-->
  <Transition
    enter-active-class="transition-all duration-200 ease-out"
    leave-active-class="transition-all duration-200 ease-in"
    enter-from-class="opacity-0 -translate-y-4"
    enter-to-class="opacity-100 translate-y-0"
    leave-from-class="opacity-100 translate-y-0"
    leave-to-class="opacity-0 -translate-y-4"
  >
    <div v-if="showMobileMenu"
      class="z-40 fixed top-14 left-0 pt-2 bg-bgWhite/50 w-full flex flex-col rounded-md
        justify-center items-center text-xl backdrop-blur-xl font-patrick lg:hidden"
    >
      <div class="my-8">
        <ul class="flex flex-col gap-3">
          <li class="border-b border-gray-500 px-10 pb-2"><a @click="toggleMenu" href="#hero">Kezdőlap</a></li>
          <li class="border-b border-gray-500 px-10 pb-2"><a @click="toggleMenu" href="#goals">Céljaink</a></li>
          <li class="border-b border-gray-500 px-10 pb-2"><a @click="toggleMenu" href="#waiting-for">Kiket várunk</a></li>
          <li class="border-b border-gray-500 px-10 pb-2"><a @click="toggleMenu" href="#who-we-are">Kik vagyunk</a></li>
          <li class="border-b border-gray-500 px-10 pb-2"><a @click="toggleMenu" href="#prices">Árak</a></li>
          <li class="border-b border-gray-500 px-10 pb-2"><a @click="toggleMenu" href="#asmission">Felvételi</a></li>
          <li class="border-b border-gray-500 px-10 pb-2"><a @click="toggleMenu" href="#room-rental">Terembérlés</a></li>
          <li class="border-b border-gray-500 px-10 pb-2"><a @click="toggleMenu" href="#contacts">Elérhetőségek</a></li>
        </ul>
      </div>
      <div class="my-5">
        <a href="#" class="flex flex-row items-center gap-2">
          <img src="/images/facebook.png" alt="facebook ikon" class="max-w-5">
          <p class="text-base">Kuckó Tanulószoba Eger</p>
        </a>
      </div>
    </div>
  </Transition>

<main class="text-black bg-bgWhite">

  <!--Hero szekció-->
  <section id="hero" class="
    bg-[url('/images/index_hatter1.jpeg')] bg-fixed bg-center
    bg-no-repeat pt-16 h-screen bg-cover font-patrick text-white"
  >
  <div class="backdrop-blur-md h-full bg-gray-700/50">
    <div class="h-full flex flex-col items-center justify-center">
      <img class="w-72" src="/images/kucko-logo-jo.webp" alt="kuckó logó">
      <h1 class="text-4xl sm:text-6xl text-center my-8">Tanulás könnyedén, együtt!</h1>
      <div class="text-3xl lg:text-5xl flex flex-row justify-between sm:justify-evenly w-full px-2">
        <div class="flex flex-col items-center">
          <img class="w-16 sm:w-32" src="/images/sticker3.webp" alt="sticker">
          <p>Tanulás</p>
        </div>

        <div class="flex flex-col items-center">
          <img class="w-16 sm:w-32" src="/images/sticker1.webp" alt="sticker">
          <p>Játék</p>
        </div>

        <div class="flex flex-col items-center">
          <img class="w-16 sm:w-32" src="/images/sticker2.webp" alt="sticker">
          <p>Siker</p>
        </div>
      </div>
    </div>
  </div>
  </section>

  <!--Céljaink szekció-->
  <section id="goals" class="font-open px-2 md:py-10 flex justify-center">
    <div class="max-w-[1200px]">
      <div class="mb-10 sm:mb-20 flex flex-col sm:flex-row sm:items-center gap-5">
        <div class="flex flex-col gap-5 mb-10 sm:basis-1/2 sm:mb-0 lg:leading-loose">
          <h2 class="text-center font-patrick font-medium text-3xl md:text-4xl lg:text-5xl my-8">Tanulószobánk célja</h2>
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
        <h2 class="text-4xl text-center font-patrick">Mert együtt tényleg könnyebb a tanulás!</h2>
      </div>
    </div>
  </section>

  <!--Kiket várunk szekció-->
  <section id="waiting-for"></section>

  <!--Bemutatkizás szekció-->
  <section id="who-we-are"></section>

  <!--Áraink szekció-->
  <section id="prices"></section>
  
  <section id="admission"></section>

  <section id="room-rental"></section>

  <section id="contacts"></section>
</main>

<footer></footer>
</template>