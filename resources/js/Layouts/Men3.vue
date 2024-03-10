<script setup>
    import { ref } from 'vue';
    import Dropdown from '@/Components/Dropdown.vue';
    import DropdownLink from '@/Components/DropdownLink.vue';
    import NavLink from '@/Components/NavLink.vue';
    import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
    import { Link } from '@inertiajs/vue3';
    import { useDark, useToggle } from '@vueuse/core'
    
    const showingNavigationDropdown = ref(false);
    const isDark = useDark();
    const toggleDark = useToggle();

    
</script>
<style>
    .custom-dropdown:hover {
        /* Agrega aquí los estilos adicionales o cambios que deseas al hacer hover */
        background-color: #E2E8F0;
        color: #2D3748;
        /* Puedes agregar más propiedades según tus necesidades */
    }
    .toggle-switch {
        position: relative;
        display: inline-block;
        width: 40px;
        height: 20px;
    }

    .toggle-switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ffffff;
        border-radius: 40px;
        cursor: pointer;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.6);
        transition: 0.4s;
    }
    .slider:before {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        left: 4px;
        bottom: 2px;
        background-color: #000000;
        border-radius: 50%;
        box-shadow: 0 0 6px rgba(0, 255, 55, 0.432);
        transition: 0.4s;
    }

    input:checked + .slider{
        background-color: #000000;
        box-shadow: inset 0 0 5px rgba(255, 254, 254, 0.6);
    }

    input:checked + .slider:before {
        transform: translateX(16px);
        box-shadow: 0 0 12px rgba(0, 255, 55, 0.432);
        background-color: #ffffff; /* Cambiar a blanco */
    }

</style>
<template>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center bg-white">
                    <img src="../../../public/imagenes/logo-hori.jpg" class="block h-7 w-auto fill-current text-gray-800 dark:text-gray-200" alt="logo" v-if="isDark">
                    <img src="../../../public/imagenes/logo-hori.jpg" class="block h-7 w-auto fill-current text-gray-800 dark:text-gray-200" alt="logo" v-else>
                </div>
                &nbsp;&nbsp;
                
                <div :class="{ 'hidden sm:flex ': Recorrido.Tipo === 'B', 'hidden sm:flex sm:items-center': Recorrido.Tipo === 'M' }" v-for="Recorrido in $page.props.menu" :key="Recorrido.Principal">
                    <NavLink v-if="Recorrido.Tipo === 'B' && Recorrido.Ubicacion === 'I'">
                        <span v-html="Recorrido.Icono"></span>
                    </NavLink>
                    <Dropdown align="right" width="48" class="custom-dropdown" v-else-if="Recorrido.Tipo === 'M' && Recorrido.Ubicacion === 'I'">
                        <template #trigger>
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <span v-html="Recorrido.Icono"></span>
                                    &nbsp;
                                    {{ Recorrido.Opcion }}
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </span>
                        </template>
                        <template #content>
                            <div v-for="RecorridoInterno in $page.props.menu" :key="RecorridoInterno.Principal">
                                <DropdownLink v-if="Recorrido.Principal === RecorridoInterno.Dependencia">
                                    {{ RecorridoInterno.Opcion }}
                                </DropdownLink>
                            </div>
                        </template>
                    </Dropdown>
                </div>
            </div>
            <div class="hidden sm:flex sm:ml-6">
                <div :class="{ 'hidden sm:flex ': Recorrido.Tipo === 'B', 'hidden sm:flex sm:items-center': Recorrido.Tipo === 'M' }" v-for="Recorrido in $page.props.menu" :key="Recorrido.Principal">
                    <Dropdown align="right" width="48" class="custom-dropdown" v-if="Recorrido.Tipo === 'M' && Recorrido.Ubicacion === 'D'">
                        <template #trigger>
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <span v-html="Recorrido.Icono"></span>
                                    &nbsp;
                                    {{ Recorrido.Opcion }}
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </span>
                        </template>
                        <template #content>
                            <div v-for="RecorridoInterno in $page.props.menu" :key="RecorridoInterno.Principal">
                                <DropdownLink v-if="Recorrido.Principal === RecorridoInterno.Dependencia">
                                    {{ RecorridoInterno.Opcion }}
                                </DropdownLink>
                            </div>
                        </template>
                    </Dropdown>
                </div>
                <div :class="{ 'hidden sm:flex ': Recorrido.Tipo === 'B', 'hidden sm:flex sm:items-center': Recorrido.Tipo === 'M' }" v-for="Recorrido in $page.props.menu" :key="Recorrido.Principal">
                    <NavLink v-if="Recorrido.Tipo === 'B' && Recorrido.Ubicacion === 'D'">
                        <span v-html="Recorrido.Icono"></span>
                    </NavLink>
                </div>
            </div>
            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button
                    @click="showingNavigationDropdown = !showingNavigationDropdown"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path
                            :class="{
                                hidden: showingNavigationDropdown,
                                'inline-flex': !showingNavigationDropdown,
                            }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                        <path
                            :class="{
                                hidden: !showingNavigationDropdown,
                                'inline-flex': showingNavigationDropdown,
                            }"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div
        :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
        class="sm:hidden"
    >
        <div class="pt-2 pb-3 space-y-1">
            <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                Dashboard
            </ResponsiveNavLink>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">
                    Sessión
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <ResponsiveNavLink :href="route('logout.keycloak')" method="get" as="button">
                    Salir
                </ResponsiveNavLink>
                
            </div>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        arreglo() {
            return this.$page.props.menu1.filter(item => item.Dependencia === this.Recorrido.Principal);
        },
    },
};
</script>