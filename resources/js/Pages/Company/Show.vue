<template>
    <div>
        {{ company.kundenname }} - {{ company.kontakt }} - {{ company.telefon }}
    </div>

</template>

<script setup>

defineProps({
    company: Object
})

</script>
