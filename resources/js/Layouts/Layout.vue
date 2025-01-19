<script setup>
import { Link, Head } from '@inertiajs/vue3'

</script>

<template>
    <div>
    <Head>
        <title>Devinsto</title>
        <meta name="description" content="Le rendu côté serveur (SSR) est une technique où le contenu d'une page web est généré sur le serveur et envoyé au client. Cela permet un chargement plus rapide et une meilleure optimisation pour le référencement (SEO).">
    </Head>
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