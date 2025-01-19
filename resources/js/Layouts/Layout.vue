<script setup>


</script>

<template>
    <div>
        <header class="bg-green-600 text-white">
            <nav class="flex max-w-screen-lg items-center justify-between p-4">
            <div class="space-x-6">
                <a href="/">Home</a>
                <a href="/about">About</a>
            </div>
            </nav>
        </header>
        <main class="p-4">
            <slot />
        </main>
    </div>
</template>