<script setup lang="ts">
import Title from '../Title.vue';
import { computed, ref } from 'vue';

const props = defineProps({
  members: Array,
});

const resolveImage = (path) => {
  if (!path) return null;
  if (path.startsWith('/') || path.startsWith('http')) return path;
  return '/storage/' + path;
};

const activeMemberId = ref(null);
const activeMember = computed(() => {
  if (!props.members?.length) return null;
  if (activeMemberId.value) return props.members.find(m => m.id === activeMemberId.value) || props.members[0];
  return props.members[0];
});

const selectMember = (id) => {
  activeMemberId.value = id;
};
</script>

<template>
  <section id="who-we-are" class="scroll-mt-16 py-20 lg:py-28 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
      <Title>Kik vagyunk?</Title>

      <!-- Csapattag választó — ha több mint 1 tag van -->
      <div v-if="members && members.length > 1" class="flex flex-wrap justify-center gap-3 mb-8">
        <button
          v-for="member in members"
          :key="member.id"
          @click="selectMember(member.id)"
          :class="[
            'flex items-center gap-3 px-4 py-2.5 rounded-xl text-sm font-medium transition-all duration-200 border',
            activeMember?.id === member.id
              ? 'bg-primary-600 text-white border-primary-600 shadow-md'
              : 'bg-white text-gray-700 border-gray-200 hover:border-primary-300 hover:bg-primary-50 shadow-sm'
          ]"
        >
          <img
            v-if="member.image_path"
            :src="resolveImage(member.image_path)"
            :alt="member.name"
            class="w-8 h-8 rounded-full object-cover object-top"
          />
          <div v-else class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 text-xs font-bold">
            {{ member.name?.charAt(0) }}
          </div>
          <span>{{ member.name }}</span>
        </button>
      </div>

      <div class="bg-white rounded-3xl shadow-soft overflow-hidden">
        <div class="grid lg:grid-cols-3">
          <!-- Profilkép szekció -->
          <div class="bg-gradient-to-br from-primary-500 to-primary-600 p-8 lg:p-10 flex flex-col items-center justify-center text-white">
            <div class="w-32 h-44 lg:w-40 lg:h-56 rounded-2xl overflow-hidden shadow-lg mb-6 ring-4 ring-white/20">
              <img v-if="activeMember?.image_path" class="w-full h-full object-cover object-top" :src="resolveImage(activeMember.image_path)" :alt="activeMember.name">
              <div v-else class="w-full h-full bg-white/20 flex items-center justify-center">
                <svg class="w-16 h-16 text-white/50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
              </div>
            </div>
            <h3 class="font-display font-bold text-xl lg:text-2xl text-center">{{ activeMember?.name }}</h3>
            <p class="text-white/80 text-center mt-1">{{ activeMember?.role }}</p>
            
            <div class="flex gap-4 mt-6">
              <a v-if="activeMember?.facebook_url" :href="activeMember.facebook_url" target="_blank" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors" title="Facebook">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
              </a>
              <a v-if="activeMember?.email" :href="'mailto:' + activeMember.email" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors" title="E-mail">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </a>
              <a v-if="!activeMember?.email" href="#contacts" class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center hover:bg-white/30 transition-colors" title="Kapcsolat">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
              </a>
            </div>
          </div>
          
          <!-- Tartalom -->
          <div class="lg:col-span-2 p-8 lg:p-10">
            <div class="mb-6">
              <span class="inline-flex items-center gap-2 bg-primary-100 text-primary-700 px-4 py-2 rounded-full text-sm font-medium">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg>
                Fontos, hogy tudd kire bízod a gyermeked!
              </span>
            </div>

            <div class="space-y-5 text-gray-600 leading-relaxed">
              <p v-for="(paragraph, idx) in activeMember?.bio?.split('\n\n')" :key="idx">
                {{ paragraph }}
              </p>
              
              <div v-if="!activeMember?.bio" class="text-gray-400 italic">
                Még nincs bemutatkozás.
              </div>

              <div class="bg-secondary-50 rounded-xl p-5 border-l-4 border-secondary-500">
                <p class="font-medium text-secondary-800">
                  Ha szeretnél gyermekeddel csatlakozni hozzánk, keress bátran!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>