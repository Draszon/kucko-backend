<script setup>
const props = defineProps(['link']);
</script>

<template>
  <li class="border-b border-gray-500 px-10 pb-2">
    <a :href="props.link">
      <slot />
    </a>
  </li>
</template>