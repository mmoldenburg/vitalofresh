<template>
    <AppLayout />
    <div>
        <table class="w-4/5 py-12 mx-auto mt-12 divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-6 text-lg font-medium tracking-wider text-left uppercase text-v-darkGreen">Name</th>
                <th class="px-6 py-3 text-lg font-medium tracking-wider text-left uppercase text-v-darkGreen">Anschrift</th>
                <th class="px-6 py-3 text-lg font-medium tracking-wider text-left uppercase text-v-darkGreen">Ort</th>
                <th class="px-6 py-3 text-lg font-medium tracking-wider text-left uppercase text-v-darkGreen">Kontaktperson</th>
                <th class="px-6 py-3 text-lg font-medium tracking-wider text-left uppercase text-v-darkGreen">Telefon</th>
            </tr>
        </thead>
        <tbody class="bg-gray-100 divide-y divide-gray-200 rounded-lg shadow-lg ">
            <tr>
                <td class="px-6 py-12 rounded-l-lg whitespace-nowrap">{{ rent.kundenname }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{  rent.straße }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{  rent.plz }} {{  rent.ort }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{  rent.kontakt }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{  rent.telefon }}</td>
                <td class="px-6 py-4 rounded-r-lg text-end whitespace-nowrap">
                    <div class="">
                        <Link
                        class="px-6 py-6 text-lg text-white rounded-lg shadow-xl bg-v-darkGreen hover:text-gray-300"
                        :href="`/rent/create/`">&rarr; neue Anlieferung / Rücknahme
                    </Link>
                    </div>


                </td>
            </tr>
        </tbody>
    </table>
    </div>


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
