<script setup>
import { computed } from 'vue';

const props = defineProps({
  link: String,
  alt: String,
  direction: {
    type: Boolean,
    default: false
  }
})

const classes = computed(() => {
  return props.direction === true
    ? 'w-8 cursor-pointer'
    : 'w-8 origin-center rotate-180 cursor-pointer';
});
</script>

<template>
  <div>
    <img :src="props.link" :class="classes" :alt="props.alt">
  </div>
</template>