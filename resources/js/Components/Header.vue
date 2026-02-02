<script setup>
import MenuButton from '@/Components/MenuButton.vue';
import MobileMenuButton from '@/Components/MobileMenuButton.vue';
import { ref, onMounted, onUnmounted } from 'vue';

const showMobileMenu = ref(false);
const isScrolled = ref(false);

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

const handleScroll = () => {
  isScrolled.value = window.scrollY > 20;
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
  handleScroll();
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
<header 
  :class="[
    'top-0 left-0 flex items-center fixed w-full h-16 z-50 transition-all duration-300',
    isScrolled 
      ? 'bg-white/95 backdrop-blur-lg shadow-soft' 
      : 'bg-transparent'
  ]"
>
  <div class="w-full max-w-7xl mx-auto px-4 lg:px-8">
    <div class="flex justify-between items-center">
      <!--Logó és szöveg-->
      <a href="#hero" class="flex items-center gap-3 group">
        <div class="w-10 h-10 bg-gradient-to-br from-primary-400 to-primary-600 rounded-xl flex items-center justify-center shadow-card group-hover:scale-105 transition-transform">
          <img src="/images/ures-haz.png" alt="logo" class="w-6 h-6">
        </div>
        <span :class="[
          'font-display font-bold text-lg tracking-tight transition-colors',
          isScrolled ? 'text-dark' : 'text-white'
        ]">
          Kuckó Tanulószoba
        </span>
      </a>
      
      <nav class="hidden lg:block">
        <ul class="flex flex-row gap-1 h-full items-center">
          <li v-for="button in menuList" :key="button.link">
            <a 
              :href="button.link"
              :class="[
                'px-4 py-2 rounded-lg font-medium text-sm transition-all duration-200',
                isScrolled 
                  ? 'text-gray-600 hover:text-primary-600 hover:bg-primary-50' 
                  : 'text-white/90 hover:text-white hover:bg-white/10'
              ]"
            >
              {{ button.label }}
            </a>
          </li>
        </ul>
      </nav>

      <!--Hamburger menü ikon-->
      <button 
        class="block lg:hidden p-2 rounded-lg transition-colors"
        :class="isScrolled ? 'hover:bg-gray-100' : 'hover:bg-white/10'"
        @click="showMobileMenu = !showMobileMenu"
      >
        <svg 
          :class="['w-6 h-6 transition-colors', isScrolled ? 'text-dark' : 'text-white']" 
          fill="none" 
          stroke="currentColor" 
          viewBox="0 0 24 24"
        >
          <path v-if="!showMobileMenu" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  </div>
</header>

<!--Mobil menü-->
<Transition
  enter-active-class="transition-all duration-300 ease-out"
  leave-active-class="transition-all duration-200 ease-in"
  enter-from-class="opacity-0 -translate-y-2"
  enter-to-class="opacity-100 translate-y-0"
  leave-from-class="opacity-100 translate-y-0"
  leave-to-class="opacity-0 -translate-y-2"
>
  <div 
    v-if="showMobileMenu"
    class="z-40 fixed top-16 left-0 right-0 bg-white/95 backdrop-blur-lg shadow-soft border-t border-gray-100 lg:hidden"
  >
    <div class="max-w-7xl mx-auto px-4 py-6">
      <ul class="flex flex-col gap-1">
        <li v-for="button in menuList" :key="button.link">
          <a 
            :href="button.link"
            @click="toggleMenu"
            class="block px-4 py-3 rounded-xl text-gray-700 hover:text-primary-600 hover:bg-primary-50 font-medium transition-colors"
          >
            {{ button.label }}
          </a>
        </li>
      </ul>
      <div class="mt-6 pt-6 border-t border-gray-100">
        <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-gray-50 transition-colors">
          <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
            <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
          </div>
          <span class="text-sm text-gray-600">Kuckó Tanulószoba Eger</span>
        </a>
      </div>
    </div>
  </div>
</Transition>
</template>