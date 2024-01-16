<template>
    <AppLayout />
    <div >
        <p class="my-8 text-2xl font-semibold text-center text-v-darkGreen">Neuen Kundenkontakt erstellen</p>
    </div>
    <div class="w-1/2 mx-auto bg-gray-100 border-2 rounded-lg shadow-xl border-v-darkGreen ">
         <form @submit.prevent="create" class="container grid grid-cols-6 gap 6">
            <div class="col-span-6 mx-6 my-4">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Firmenname</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                id="kundenname"
                type="text"
                v-model="form.kundenname">
            </div>
            <div class="col-span-6 mx-6 my-4">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Straße</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.straße">
            </div>
            <div class="col-span-1 mx-6 my-4">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">PLZ</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.plz">
            </div>
            <div class="col-span-5 mx-6 my-4">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Ort</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.ort">
            </div>
            <div class="col-span-6 mx-6 my-4">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Ansprechpartner</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.kontakt">
            </div>
            <div class="col-span-4 mx-6 my-4">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Telefon</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.telefon">
            </div>
            <div class="col-span-2 mx-6 my-4">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Aktiv: ja=1/nein=2</label>
                <input
                class="w-full h-12 px-4 mt-2 text-center bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.aktiv">
            </div>
            <div class="col-span-6 my-8 text-center">
                <button
                    class="px-6 py-3 text-white rounded-lg shadow-xl bg-v-darkGreen hover:scale-105"
                    type="submit">Speichern
                </button>
            </div>
        </form>
    </div>

</template>

<script setup>
import { useForm, usePage } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue';
import { computed } from 'vue';

const page = usePage()
const userhub = computed(() => page.props.userhub)
const username = computed(() => page.props.username)

const form = useForm({
    'kundenname': "",
    'hub': userhub,
    'straße': "",
    'plz': "",
    'ort': "",
    'kontakt':"",
    'telefon':"",
    'aktiv': '1',
    'created_by': username
})

const create = () => form.post('/company')
</script>
