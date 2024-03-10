<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout2.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Contratos CONALEP" />
    <AuthenticatedLayout>
        <template #header> 
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">
                            Usuario: {{ $page.props.auth.user.name }}
                        </div>
                        <div class="font-medium text-sm text-gray-500">
                            Correo electrónico: {{ $page.props.auth.user.email }}
                        </div>
                        <div class="font-medium text-sm text-gray-500">
                            Tipo de usuario: {{ $page.props.tipoPerfil.Des_Perfil }}
                        </div>
                        <div class="font-medium text-sm text-gray-500">
                            {{ $page.props.menu }}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
