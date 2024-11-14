<script setup>
defineProps({
  listing: Object,
})
</script>

<template>
  <div
    style="
  padding: 20px;
  border: 1px solid #e0e0e0;
  border-radius: 8px;
  background-color: #f9f9f9;
  font-family: Arial, sans-serif;
  font-size: 16px;
  color: #333;
  margin: 10px 0;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
"
  >
    {{ listing.street_nr }} {{ listing.street }} {{ listing.city }} for {{ listing.price }} <br />
  </div>
</template>

<style scoped>

</style>
