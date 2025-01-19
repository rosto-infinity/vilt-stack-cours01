<template>
   <Head title="About" />
   
    <h1>About page : {{ user}}</h1>
  
</template>

<script setup>
import Layout from '../Layouts/Layout.vue';
import {Head } from '@inertiajs/vue3'


defineProps({
    user: String,
})
    defineOptions({ layout:Layout})
</script>

