<script setup>
import ListingAddress from '@/Components/ListingAddress.vue'

defineProps({
  listing: Object,
})
</script>

<template>
  <listing-address :listing="listing" />
</template>

<style scoped>

</style>
