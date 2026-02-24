<script setup lang="ts">
import { ref, computed } from 'vue';
import Title from '../Title.vue';

interface Testimonial {
  id: number;
  quote: string;
  author_name: string;
  author_role: string;
  sort_order: number;
  is_active: boolean;
}

const props = defineProps<{
  testimonials: Testimonial[];
}>();

const currentIndex = ref(0);
const slideDirection = ref<'slide-left' | 'slide-right'>('slide-left');
const isAnimating = ref(false);

const prevIndex = computed(() =>
  (currentIndex.value - 1 + props.testimonials.length) % props.testimonials.length
);

const nextIndex = computed(() =>
  (currentIndex.value + 1) % props.testimonials.length
);

function navigate(newIndex: number, direction: 'slide-left' | 'slide-right') {
  if (isAnimating.value || newIndex === currentIndex.value) return;
  isAnimating.value = true;
  slideDirection.value = direction;
  currentIndex.value = newIndex;
}

function goNext() {
  navigate(nextIndex.value, 'slide-left');
}

function goPrev() {
  navigate(prevIndex.value, 'slide-right');
}

function goTo(index: number) {
  if (index === currentIndex.value) return;
  const direction = index > currentIndex.value ? 'slide-left' : 'slide-right';
  navigate(index, direction);
}

function onAfterLeave() {
  isAnimating.value = false;
}
</script>

<template>
  <section id="they-sad" class="scroll-mt-16 py-20 lg:py-28 bg-gradient-to-br from-accent-50 via-white to-primary-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Rólunk mondták</Title>

      <!-- Carousel -->
      <div class="relative flex items-center justify-center">
        <!-- Bal nyíl -->
        <button
          @click="goPrev"
          class="absolute left-0 z-20 w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-white shadow-md flex items-center justify-center text-primary-500 hover:bg-primary-50 transition-colors"
          aria-label="Előző"
        >
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
          </svg>
        </button>

        <!-- Kártyák -->
        <div class="w-full overflow-hidden py-8 relative">
          <Transition :name="slideDirection" @after-leave="onAfterLeave">
            <div
              :key="currentIndex"
              class="w-full flex items-center justify-center gap-4 lg:gap-6"
            >
              <!-- Bal (háttér) kártya -->
              <div class="hidden md:flex flex-shrink-0 w-[300px] lg:w-[340px] opacity-50 scale-90">
                <div class="bg-white rounded-3xl shadow-soft p-6 lg:p-8 w-full">
                  <div class="text-primary-200 mb-3">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                  </div>
                  <blockquote class="text-sm lg:text-base text-gray-600 leading-relaxed mb-5 line-clamp-4">
                    "{{ testimonials[prevIndex].quote }}"
                  </blockquote>
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                      {{ testimonials[prevIndex].author_name.charAt(0) }}
                    </div>
                    <div>
                      <p class="font-display font-semibold text-dark text-sm">{{ testimonials[prevIndex].author_name }}</p>
                      <p class="text-gray-400 text-xs">{{ testimonials[prevIndex].author_role }}</p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Középső (kiemelt) kártya -->
              <div class="flex-shrink-0 w-full max-w-[380px] lg:max-w-[440px] z-10">
                <div class="bg-white rounded-3xl shadow-xl ring-1 ring-primary-100 p-8 lg:p-10 relative">
                  <div class="text-primary-200 mb-4">
                    <svg class="w-10 h-10 lg:w-12 lg:h-12" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                  </div>
                  <blockquote class="text-lg lg:text-xl text-gray-700 leading-relaxed text-center font-medium mb-6">
                    "{{ testimonials[currentIndex].quote }}"
                  </blockquote>
                  <div class="flex flex-col items-center">
                    <div class="w-14 h-14 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full flex items-center justify-center text-white font-bold text-lg mb-2">
                      {{ testimonials[currentIndex].author_name.charAt(0) }}
                    </div>
                    <p class="font-display font-semibold text-dark">{{ testimonials[currentIndex].author_name }}</p>
                    <p class="text-gray-500 text-sm">{{ testimonials[currentIndex].author_role }}</p>
                  </div>
                </div>
              </div>

              <!-- Jobb (háttér) kártya -->
              <div class="hidden md:flex flex-shrink-0 w-[300px] lg:w-[340px] opacity-50 scale-90">
                <div class="bg-white rounded-3xl shadow-soft p-6 lg:p-8 w-full">
                  <div class="text-primary-200 mb-3">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                    </svg>
                  </div>
                  <blockquote class="text-sm lg:text-base text-gray-600 leading-relaxed mb-5 line-clamp-4">
                    "{{ testimonials[nextIndex].quote }}"
                  </blockquote>
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-primary-400 to-primary-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                      {{ testimonials[nextIndex].author_name.charAt(0) }}
                    </div>
                    <div>
                      <p class="font-display font-semibold text-dark text-sm">{{ testimonials[nextIndex].author_name }}</p>
                      <p class="text-gray-400 text-xs">{{ testimonials[nextIndex].author_role }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </Transition>
        </div>

        <!-- Jobb nyíl -->
        <button
          @click="goNext"
          class="absolute right-0 z-20 w-10 h-10 lg:w-12 lg:h-12 rounded-full bg-white shadow-md flex items-center justify-center text-primary-500 hover:bg-primary-50 transition-colors"
          aria-label="Következő"
        >
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
          </svg>
        </button>
      </div>

      <!-- Navigáció pontok -->
      <div class="flex justify-center gap-2 mt-4">
        <button
          v-for="(_, index) in testimonials"
          :key="index"
          @click="goTo(index)"
          :class="[
            'w-3 h-3 rounded-full transition-all duration-300',
            index === currentIndex ? 'bg-primary-500 w-8' : 'bg-gray-300 hover:bg-gray-400'
          ]"
        ></button>
      </div>
    </div>
  </section>
</template>

<style scoped>
/* Slide balra (következő) */
.slide-left-enter-active,
.slide-left-leave-active {
  transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.slide-left-enter-from {
  opacity: 0;
  transform: translateX(80px);
}

.slide-left-leave-to {
  opacity: 0;
  transform: translateX(-80px);
}

.slide-left-leave-active {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}

/* Slide jobbra (előző) */
.slide-right-enter-active,
.slide-right-leave-active {
  transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

.slide-right-enter-from {
  opacity: 0;
  transform: translateX(-80px);
}

.slide-right-leave-to {
  opacity: 0;
  transform: translateX(80px);
}

.slide-right-leave-active {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}
</style>