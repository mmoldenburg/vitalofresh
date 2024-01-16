<template>
    <AppLayout />
    <table class="w-4/5 mx-auto mt-8 divide-y divide-gray-200">
    <thead>
        <tr>
            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-v-darkGreen">Name</th>
            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-v-darkGreen">Anschrift</th>
            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-v-darkGreen">Ort</th>
            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-v-darkGreen">Kontaktperson</th>
            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left uppercase text-v-darkGreen">Telefon</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ company.kundenname }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{  company.straße }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{  company.plz }} {{  company.ort }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{  company.kontakt }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{  company.telefon }}</td>
            <td class="px-6 py-4 whitespace-nowrap">
                <button v-if="useradmin !== 2" class="px-4 py-2 font-medium text-white transition duration-150 ease-in-out bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600">Edit</button>
                <button v-if="useradmin !== 2" class="px-4 py-2 ml-2 font-medium text-white transition duration-150 ease-in-out bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600">Delete</button>
            </td>
        </tr>
    </tbody>
</table>

</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Link, usePage} from '@inertiajs/vue3'
import { computed } from 'vue';

defineProps({
    company: Object
})
const page = usePage()
const useradmin = computed(() => page.props.useradmin)
</script>
