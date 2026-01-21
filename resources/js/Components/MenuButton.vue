<script setup>
const props = defineProps(['link']);
</script>

<template>
  <a class="hover:border-b-2 border-gray-800" :href="props.link"><slot /></a>
</template>