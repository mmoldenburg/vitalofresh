<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div class="py-12">

                <div class="flex items-center overflow-hidden sm:px-6 lg:px-8">
                    <Welcome />
                </div>

        </div>
    </AppLayout>
</template>
