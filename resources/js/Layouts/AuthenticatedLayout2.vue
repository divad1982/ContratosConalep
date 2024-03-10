<script setup>
    import Men from '@/Layouts/Men3.vue';
</script>
<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <Men></Men>
            </nav>
            <nav class="bg-white border-b border-gray-100">        
                <header class="bg-white" v-if="$slots.header">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 font-bold">
                        Sistema de gestión para contratos de bienes y servicios Conalep
                    </div>
                </header>
            </nav>
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
