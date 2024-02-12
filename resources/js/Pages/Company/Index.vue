<template>
<AppLayout />
    <div v-if="useradmin !== 2" class="mt-6 mr-6 text-right ">
            <Link
                class="px-6 py-3 text-lg text-white rounded-lg shadow-xl justify-right bg-v-darkGreen "
                :href="`/company/create`">+neuer Kunde
            </Link>
    </div>

    <div class="my-12 text-4xl font-bold text-center text-v-darkGreen ">
        <p>HUB {{ userhub }} - Unsere vitalofresh Kunden</p>

    </div>
    <div class="grid w-4/5 grid-cols-3 gap-6 mx-auto my-8">
        <div v-for="company in companies" :key="company.id" class="px-4 bg-gray-100 border-2 rounded-lg shadow-xl border-v-darkGreen text-v-darkGreen hover:scale-105 hover:bg-gray-200">
            <Link :href="`/company/${company.id}`" class="grid h-20 grid-cols-4">
               <p class="col-span-3 my-auto">{{ company.kundenname }} - {{ company.ort }}</p>
                <img v-if="company.aktiv" src="../../../../public/images/aktiv.png" alt="" class="h-8 my-auto ml-12">
                <img v-if="!company.aktiv" src="../../../../public/images/inaktiv.png" alt="" class="h-8 my-auto ml-12">
            </Link>
        </div>
    </div>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue';
import { computed } from 'vue';

const props = defineProps({
    'companies': Array,

})

const page = usePage()
const userhub = computed(() => page.props.userhub)
const useradmin = computed(() => page.props.useradmin)


</script>
