<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div><ModalLink href="/modal1">Modal 1</ModalLink></div>
            <div><ModalLink navigate href="/modal2">Modal 2</ModalLink></div>
            <div><a href="/modal3">Modal 3</a></div>
        </div>
    </AppLayout>
</template>
