<script setup>
import MenuButton from '@/Components/MenuButton.vue';
import MobileMenuButton from '@/Components/MobileMenuButton.vue';
import { ref } from 'vue';

const showMobileMenu = ref(false);
const menuList = [
  {link: '#hero', label: 'Főoldal'},
  {link: '#goals', label: 'Céljaink'},
  {link: '#waiting-for', label: 'Kiket várunk'},
  {link: '#who-we-are', label: 'Kik vagyunk'},
  {link: '#prices', label: 'Árak'},
  {link: '#admission', label: 'Felvételi'},
  {link: '#room-rental', label: 'Terembérlés'},
  {link: '#contacts', label: 'Elérhetőségek'},
]

const toggleMenu = () => {
  showMobileMenu.value = !showMobileMenu.value;
}
</script>

<template>
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
        <ul class="flex flex-row gap-5 h-full items-center cursor-pointer text-xl">
          <li v-for="button in menuList">
            <MenuButton :href=button.link>
              {{ button.label }}
            </MenuButton>
          </li>
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
        <MobileMenuButton
          @click="toggleMenu"
          v-for="button in menuList"
          :link=button.link
        >
          {{ button.label }}
        </MobileMenuButton>
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
</template>