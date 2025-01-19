<template>
    <Layout>

        <Head title="Register" />
        <h1 class="title">Créer un nouveau compte</h1>

        <div class="w-2/4 mx-auto">
            <form @submit.prevent="submit">
                <div class="mb-6">
                    <label for="nom">Nom</label>
                    <input id="nom" type="text"  v-model="form.name"/>
                </div>
                <div class="mb-6">
                    <label for="e-mail">E-mail</label>
                    <input id="e-mail" type="text" v-model="form.email"/>
                </div>
                <div class="mb-6">
                    <label for="pass">Mot de passe</label>
                    <input id="pass" type="password" v-model="form.password"/>
                </div>
                <div class="mb-6">
                    <label for="conf-pass">Confirmez le mot de passe</label>
                    <input id="conf-pass" type="password" v-model="form.password_confirmation"/>
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
import { router } from '@inertiajs/vue3'

const form = reactive({
    name:null,
    email:null,
    password:null,
    password_confirmation:null,
})

const submit = ()=>{
    // console.log(form);
    router.post('/register',form)    
}
</script>

<style></style>
