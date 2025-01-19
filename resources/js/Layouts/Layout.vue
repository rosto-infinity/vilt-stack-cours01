<script setup>
// import { Link, Head } from '@inertiajs/vue3'

</script>

<template>
    <div>

        <Head>

            <meta name="description"
                content="Le rendu côté serveur (SSR) est une technique où le contenu d'une page web est généré sur le serveur et envoyé au client. Cela permet un chargement plus rapide et une meilleure optimisation pour le référencement (SEO).">
        </Head>
        <header>
            <nav>
                <div class="space-x-6">
                    <Link :href="route('home')" class="nav-link" prefetch>Home</Link>
                    <Link :href="route('about')" class="nav-link"  prefetch >About</Link>
                </div>
                <div class="space-x-6">
                    
                    <Link :href="route('register')" class="nav-link" prefetch>Register</Link>
                   
                </div>
            </nav>
        </header>
        <main class="p-4">
            <slot />
        </main>
    </div>
</template>