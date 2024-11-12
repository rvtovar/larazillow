<script setup>
import { Link } from '@inertiajs/vue3'
import {ref} from 'vue'

const timer = ref(0)

setInterval(() => {
  timer.value++
}, 1000)
</script>


<template>
  <Link href="/">Home</Link>
  <Link href="/show">Show</Link>
  <div>It has been: {{ timer }} seconds</div>
  <slot />
</template>

<style scoped>

</style>
