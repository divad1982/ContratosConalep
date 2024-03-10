<script>
export default {
    name: 'TiposProveedorConsulta'
}
</script>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
defineProps({
    Proveedor:{
        type: Object,
        required: true
    }
})
</script>

<style>
    
</style>

<template>
    <Head title="Consulta Estados" />

    <AuthenticatedLayout>
        <template #header>
            <div class="w-1/2 font-bold">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Sistema de gestión para contratos de bienes y servicios Conalep </p>
                <div class="flex">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <g fill="#000000">
                                <path d="M13,5c0-2.206-1.794-4-4-4s-4,1.794-4,4c0,1.949,1.402,3.572,3.25,3.924v4.326c0,.414,.336,.75,.75,.75s.75-.336,.75-.75v-4.326c1.848-.353,3.25-1.975,3.25-3.924Z" fill="#000000"></path>
                                <path d="M9,17c-2.971,0-8-.579-8-2.75,0-1.611,2.668-2.284,4.907-2.565,.409-.052,.786,.24,.837,.651,.052,.411-.24,.786-.651,.837-2.264,.285-3.322,.812-3.562,1.078,.365,.414,2.502,1.25,6.468,1.25s6.103-.836,6.468-1.25c-.24-.266-1.297-.793-3.562-1.078-.411-.052-.703-.427-.651-.837,.052-.411,.43-.703,.837-.651,2.239,.281,4.907,.955,4.907,2.565,0,2.171-5.029,2.75-8,2.75Z"></path>
                            </g>
                        </svg>
                    </span>
                    <span>&nbsp;&nbsp; Tipos de proveedor</span>
                </div>        
            </div>
        </template>
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table id="example" class="stripe hover py-3" style="width:100%;">
                            <thead>
                            <tr>
                                <th data-priority="1" width="7%">IdTipoProveedor</th>
                                <th data-priority="2" width="63%">Tipo de Proveedor</th>
                                <th data-priority="3" width="30%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="TiposProveedores in TiposProveedor.data" v-bind:key="TiposProveedores.IdTipoProveedor">
                                <td>{{ TiposProveedores.IdTipoProveedor }}</td>
                                <td>{{ TiposProveedores.TipoProveedor }}</td>
                                <td>
                                    <div class="flex items-center justify-center">
                                        <a :href="'/tiposproveedor/' + TiposProveedores.IdTipoProveedor + '/edit'" class="text-white font-bold py-2 px-4 rounded-full" style="background-color: rgb(20 83 45);">
                                        Editar
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="float-right">
                            Paginas:&nbsp;&nbsp;
                            <a :href="'/tiposproveedor?page=1'" class="inline-flex items-center rounded-l-md px-2 py-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <title>Inicio</title>
                                    <g fill="#000000">
                                        <path d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5"></path>
                                    </g>
                                </svg>
                            </a>
                            <a v-if="TiposProveedor.current_page > 1" :href="'' + TiposProveedor.prev_page_url + ''" class="inline-flex items-center rounded-l-md px-2 py-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <title>Anterior</title>
                                    <g fill="#000000">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12"></path>
                                    </g>
                                </svg>
                            </a>
                            <a v-else href="#" class="inline-flex items-center rounded-l-md px-2 py-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <title>Anterior</title>
                                    <g fill="#000000">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12"></path>
                                    </g>
                                </svg>
                            </a>
                            <span v-for="i in TiposProveedor.last_page" :key="i">
                                <a v-if="TiposProveedor.current_page == i" href="#" aria-current="page" class="inline-flex items-center rounded-l-md px-2 py-2 text-gray-400">{{ i }}</a>
                                <a v-else :href="'/TiposProveedores?page=' + i + ''" aria-current="page" class="inline-flex items-center rounded-l-md px-2 py-2 text-gray-400">{{ i }}</a>
                            </span>
                            <a v-if="TiposProveedor.current_page < TiposProveedor.last_page" :href="'' + estados.next_page_url + ''" class="inline-flex items-center rounded-l-md px-2 py-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <title>Siguiente</title>
                                    <g fill="#000000">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4z"></path>
                                    </g>
                                </svg>
                            </a>
                            <a v-else href="#" class="inline-flex items-center rounded-l-md px-2 py-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <title>Siguiente</title>
                                    <g fill="#000000">
                                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4z"></path>
                                    </g>
                                </svg>
                            </a>
                            <a :href="'' + TiposProveedor.last_page_url + ''" class="inline-flex items-center rounded-l-md px-2 py-2 text-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                    <title>Final</title>
                                    <g fill="#000000">
                                        <path d="M15.5 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V8.753l-6.267 3.636c-.54.313-1.233-.066-1.233-.697v-2.94l-6.267 3.636C.693 12.703 0 12.324 0 11.693V4.308c0-.63.693-1.01 1.233-.696L7.5 7.248v-2.94c0-.63.693-1.01 1.233-.696L15 7.248V4a.5.5 0 0 1 .5-.5"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <p><br></p>
                    </div>
                </div>
            </div>    
        </div>
    </AuthenticatedLayout>
</template>

