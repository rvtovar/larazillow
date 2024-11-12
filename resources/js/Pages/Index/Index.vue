<template>
  <h1>Index</h1>
  <p>Name: {{ name }}</p>
  <p>Age: {{ age }}</p>
  <p>Email: {{ email }}</p>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue'
defineProps(['name', 'age', 'email'])
</script>

<!--<script>-->
<!--import MainLayout from "../../Layouts/MainLayout.vue";-->
<!--export default {-->
<!--    layout: MainLayout-->
<!--}-->
<!--</script>-->
