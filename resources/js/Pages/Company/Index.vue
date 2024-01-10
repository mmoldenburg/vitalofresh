<template>

    <div v-for="company in companies" :key="company.id">
        <Link :href="`/company/${company.id}`">
            {{ company.kundenname }} - {{ company.ort }}
        </Link>
    </div>


</template>

<script setup>
import {Link} from '@inertiajs/vue3'
defineProps({
    companies: Array
})

</script>
