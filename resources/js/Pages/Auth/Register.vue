<template>
    <Layout>

        <Head title="Register" />
        <h1 class="title">Créer un nouveau compte</h1>

        <div class="w-2/4 mx-auto">
            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label>Nom</label>
                    <input type="text" />
                </div>
                <div class="mb-6">
                    <label>E-mail</label>
                    <input type="text" />
                </div>
                <div class="mb-6">
                    <label>Mot de passe</label>
                    <input type="password" />
                </div>
                <div class="mb-6">
                    <label>Confirmez le mot de passe</label>
                    <input type="password" />
                </div>

                <div>
                    <p class="text-slate-600 mb-2">
                        Avez-vous déjà un compte ? <a href="#" class="text-link"> Se connecter</a>
                    </p>
                    <button class="primary-btn">S'inscrire</button>
                </div>
            </form>
        </div>

    </Layout>

</template>

<script setup>
import Layout from '../../Layouts/Layout.vue';
import {reactive} from 'vue'

const form = reactive({
    name:null,
    email:null,
    password:null,
    password_confirmation:null,
})

const submit = ()=>{
    console.log('submit');    
}
</script>

<style></style>
