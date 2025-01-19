<template>
    <div>
    <h1>About page {{ user }}</h1>
    </div>
</template>

<script setup>
defineProps({
    user: String
})
</script>

