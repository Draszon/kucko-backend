<script setup>
const props = defineProps(['icons', 'alt']);
</script>

<template>
  <div class="flex flex-col items-center">
    <img class="w-16 sm:w-32" :src=props.icons :alt=props.alt>
    <p>
      <slot />
    </p>
  </div>
</template>