<template>
    <Layout>
    <h1>About page {{ user }}</h1>
    </Layout>
</template>

<script setup>
import Layout from '../Layouts/Layout.vue';

defineProps({
    user: String
})
</script>

