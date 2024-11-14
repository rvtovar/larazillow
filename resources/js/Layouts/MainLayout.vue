<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import {computed} from 'vue'
const page = usePage()
const flashSuccess = computed(() => page.props.flash.success)
</script>


<template>
  <Link href="/">Home</Link>
  <Link href="/show">Show</Link>
  <Link href="/listings">Listings</Link>
  <Link href="/listings/create">Create</Link>
  <div v-if="flashSuccess" class="success"> {{ flashSuccess }} </div>
  <slot />
</template>

<style scoped>
.success{
    background-color: green;
    color: white;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
}
</style>
