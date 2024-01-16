<template>
    <AppLayout />
    <div >
        <p class="my-8 text-2xl font-semibold text-center text-v-darkGreen">Kundenkontakt bearbeiten</p>
    </div>
    <div class="w-1/2 mx-auto bg-gray-100 border-2 rounded-lg shadow-xl border-v-darkGreen ">
         <form @submit.prevent="update" class="container grid grid-cols-6 gap 6">
            <div class="col-span-6 mx-6 my-3">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Firmenname</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                id="kundenname"
                type="text"
                v-model="form.kundenname">
            </div>
            <div class="col-span-6 mx-6 my-3">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Straße</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.straße">
            </div>
            <div class="col-span-1 mx-6 my-3">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">PLZ</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.plz">
            </div>
            <div class="col-span-5 mx-6 my-3">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Ort</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.ort">
            </div>
            <div class="col-span-6 mx-6 my-3">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Ansprechpartner</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.kontakt">
            </div>
            <div class="col-span-4 mx-6 my-3">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Telefon</label>
                <input
                class="w-full h-12 px-4 mt-2 bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.telefon">
            </div>
            <div class="col-span-2 my-3 mr-6">
                <label class="block w-40 pl-6 text-v-darkGreen" for="">Aktiv: ja=1 /nein=2</label>
                <input
                class="w-full h-12 pl-4 mt-2 text-center bg-gray-200 rounded focus:outline-none focus:ring-2"
                type="text"
                v-model="form.aktiv">
            </div>
            <div class="flex flex-row col-span-4 my-8" >
                <button
                    class="px-6 py-3 ml-12 text-white bg-gray-500 rounded-lg shadow-xl hover:scale-105"
                    @click="back">Abbrechen
                </button>
                <button
                    class="px-8 py-3 ml-48 text-white rounded-lg shadow-xl bg-v-darkGreen hover:scale-105"
                    type="submit">Speichern
                </button>
            </div>
        </form>
    </div>

</template>

<script setup>
import { useForm, usePage } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue';
import { computed, resolveDirective } from 'vue';

const props = defineProps({
    company: Object
})


const page = usePage()
const userhub = computed(() => page.props.userhub)
const username = computed(() => page.props.username)

const form = useForm({
    'kundenname': props.company.kundenname,
    'hub': props.company.hub,
    'straße': props.company.straße,
    'plz': props.company.plz,
    'ort': props.company.ort,
    'kontakt':props.company.kontakt,
    'telefon':props.company.telefon,
    'aktiv': props.company.aktiv,
    'created_by': username
})

const update = () => form.put(`/company/${props.company.id}`)

const back = () => window.history.back()
</script>
