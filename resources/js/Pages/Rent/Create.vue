<template>
    <AppLayout />
    <div >
        <p class="my-8 text-2xl font-semibold text-center text-v-darkGreen">Firma </p>
    </div>
    <div class="w-4/5 mx-auto bg-gray-100 border-2 rounded-lg shadow-xl border-v-darkGreen ">
         <form @submit.prevent="create" >
            <div>
                <table class="w-full grid-cols-8 gap-2">
                    <thead class="">
                        <th class="col-span-2 px-2 "></th>
                        <th class="col-span-1 px-2 py-6 font-semibold text-center text-v-darkGreen">Flaschen</th>
                        <th class="col-span-1 px-2 my-4 font-semibold text-center text-v-darkGreen">Bowls</th>
                        <th class="col-span-1 px-2 my-4 font-semibold text-center text-v-darkGreen">Gläser</th>
                        <th class="col-span-1 px-2 my-4 font-semibold text-center text-v-darkGreen">Thermobox groß</th>
                        <th class="col-span-1 px-2 my-4 font-semibold text-center text-v-darkGreen">Thermobox klein</th>
                        <th class="col-span-1 px-2 my-4 font-semibold text-center text-v-darkGreen">Backup-Box</th>
                    </thead>
                    <tbody class="">
                        <tr class="">
                            <th class="py-6" scope="col">geliefert</th>

                        </tr>
                        <tr>
                            <th scope="col">zurück</th>

                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-span-6 my-8 text-center">
                <button
                    class="px-6 py-3 text-white rounded-lg shadow-xl bg-v-darkGreen hover:scale-105"
                    type="submit">Speichern
                </button>
            </div >
        </form>
    </div>

</template>

<script setup>
import { useForm, usePage } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue';
import { computed, ref } from 'vue';


const page = usePage()
//const userhub = computed(() => page.props.userhub)
const username = computed(() => page.props.username)

const g_bowls = ref(0)
const z_bowls = ref(0)
const g_flasche = ref(0)
const z_flasche = ref(0)



const form = useForm({
    'gel_bowls': g_bowls,
    'zur_bowls': z_bowls,
    'g_flasche': g_flasche,
    'z_flasche': z_flasche,
    'created_by': username,
})


//const create = () => form.post('/company')
</script>
