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
    <tbody class="bg-gray-100 divide-y divide-gray-200 rounded-lg shadow-lg">
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ rent.kundenname }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{  rent.straße }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{  rent.plz }} {{  rent.ort }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{  rent.kontakt }}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{  rent.telefon }}</td>
            <td class="px-6 py-4 whitespace-nowrap">
                <div v-if="useradmin !== 2">
                <Link :href="`/rent/${rent.id}/edit`" class="px-6 py-2 text-lg text-white rounded-lg shadow-xl justify-right bg-v-darkGreen">Edit</Link>
                <button  class="px-4 py-2 ml-2 font-medium text-white transition duration-150 ease-in-out bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600">Delete</button>
                </div>

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
    rent: Object
})
const page = usePage()
const useradmin = computed(() => page.props.useradmin)

</script>
