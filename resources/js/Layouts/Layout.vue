<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
    <div>
        <header class="bg-green-600 text-white">
            <nav class="flex max-w-screen-lg items-center justify-between p-4">
            <div class="space-x-6">
                <Link href="/" prefetch>Home</Link>
              <Link href="/about" prefetch>About</Link>
            </div>
            </nav>
        </header>
        <main class="p-4">
            <slot />
        </main>
    </div>
</template>