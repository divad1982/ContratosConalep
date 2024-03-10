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
    var app1 = '<?=json_encode({{ $page.props.menu1 }})?>';
    alert(app1);
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
                <div class="hidden sm:flex">
                    <NavLink  @click="toggleDark()" v-if="isDark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <title>Pagina de Inicio</title>
                            <g fill="#212121" stroke="#212121">
                                <path d="M5.75,15.75v-4.75c0-.69,.56-1.25,1.25-1.25h0c.69,0,1.25,.56,1.25,1.25v4.75" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                <line x1="10.75" y1="9.75" x2="12.25" y2="9.75" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></line>
                                <path d="M2.655,6.45L9,1.75l6.345,4.7c.255,.189,.405,.487,.405,.804v6.496c0,1.105-.895,2-2,2H4.25c-1.105,0-2-.895-2-2V7.254c0-.317,.15-.615,.405-.804Z" fill="none" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                <line x1="13.75" y1="2.75" x2="13.75" y2="5.269" fill="none" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></line>
                            </g>
                        </svg>
                    </NavLink>
                </div>
                <div class="hidden sm:flex sm:items-center">
                    <!-- Opciones menú izquierdo -->
                    <Dropdown align="right" width="48" class="custom-dropdown">
                        <template #trigger>
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <title>Operaciones con provedores</title>
                                        <g fill="#212121" stroke="#212121">
                                            <circle cx="8" cy="5.5" r="3.75" fill="none" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                                            <path d="M1.953,15c1.298-1.958,3.522-3.25,6.047-3.25" fill="none" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                            <path d="M14.925,16.25h-6.175l1.868-4.203c.08-.181,.259-.297,.457-.297h5.406c.362,0,.604,.372,.457,.703l-1.556,3.5c-.08,.181-.259,.297-.457,.297Z" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                            <line x1="8.75" y1="16.25" x2="5.75" y2="16.25" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></line>
                                        </g>
                                    </svg>
                                    &nbsp;
                                    Provedores
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </span>
                        </template>
                        <template #content>                                                
                            <DropdownLink>Alta</DropdownLink>
                            <DropdownLink>Consulta y/o Modificación</DropdownLink>
                        </template>
                    </Dropdown>
                    <NavLink>
                        
                        
                    </NavLink>
                    
                </div>
            </div>
            <div class="hidden sm:flex sm:ml-6">
                <div class="hidden sm:flex sm:items-center">
                    <!-- Opciones menú derecho -->
                    <Dropdown align="right" width="48" class="custom-dropdown">
                        <template #trigger>
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <g fill="#212121">
                                            <circle cx="8" cy="5.5" r="4.5" fill="#212121"></circle>
                                            <path d="M8.75,11.75c0-.414-.336-.75-.75-.75-2.689,0-5.184,1.34-6.673,3.585-.229,.345-.135,.811,.21,1.04,.128,.084,.271,.125,.414,.125,.243,0,.481-.118,.626-.335,1.21-1.825,3.237-2.914,5.423-2.914,.414,0,.75-.336,.75-.75Z" fill="#212121"></path>
                                            <path d="M17.529,11.57c-.231-.357-.623-.57-1.049-.57h-5.405c-.494,0-.942,.292-1.143,.742l-1.67,3.758h-2.512c-.414,0-.75,.336-.75,.75s.336,.75,.75,.75H14.925c.494,0,.942-.292,1.143-.742l1.555-3.499c.174-.388,.139-.833-.093-1.189Z"></path>
                                        </g>
                                    </svg>
                                    &nbsp;
                                    Perfil
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </span>
                        </template>
                        <template #content>                                                
                            <DropdownLink>Alta</DropdownLink>
                            <DropdownLink>Consulta y/o modificación</DropdownLink>
                        </template>
                    </Dropdown>
                    <Dropdown align="right" width="48" class="custom-dropdown">
                        <template #trigger>
                            <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                        <g fill="#212121">
                                            <circle cx="9" cy="4.5" r="3.5"></circle>
                                            <path d="M9,9c-2.764,0-5.274,1.636-6.395,4.167-.257,.58-.254,1.245,.008,1.825,.268,.591,.777,1.043,1.399,1.239,1.618,.51,3.296,.769,4.987,.769s3.369-.259,4.987-.769c.622-.196,1.132-.648,1.399-1.239,.262-.58,.265-1.245,.008-1.825-1.121-2.531-3.631-4.167-6.395-4.167Z" fill="#212121"></path>
                                        </g>
                                    </svg>
                                    &nbsp;
                                    Usuarios
                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </span>
                        </template>
                        <template #content>                                                
                            <DropdownLink>Alta</DropdownLink>
                            <DropdownLink>Consulta y/o modificación</DropdownLink>
                            <DropdownLink>Baja</DropdownLink>
                        </template>
                    </Dropdown>
                </div>
                <div class="hidden sm:flex">
                    <NavLink  @click="toggleDark()" v-if="isDark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <title>Cerrar sessión</title>
                            <g fill="#212121" stroke="#212121">
                                <path d="M11.75,5.75V3.25c0-.552-.448-1-1-1H4.25c-.552,0-1,.448-1,1V14.75c0,.552,.448,1,1,1h6.5c.552,0,1-.448,1-1v-2.5" fill="none" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                <polyline points="14.5 6.25 17.25 9 14.5 11.75" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></polyline>
                                <line x1="17.25" y1="9" x2="11.25" y2="9" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></line>
                                <path d="M3.457,2.648l3.321,2.059c.294,.182,.473,.504,.473,.85v6.887c0,.346-.179,.667-.473,.85l-3.322,2.06" fill="none" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                            </g>
                        </svg>
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