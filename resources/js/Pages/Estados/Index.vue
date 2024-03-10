<script>
export default {
    name: 'EstadosConsulta'
}
</script>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
defineProps({
    estados:{
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
                    <span>&nbsp;&nbsp; Estados</span>
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
                                <th data-priority="1" width="7%">IdEstado</th>
                                <th data-priority="2" width="63%">Estado</th>
                                <th data-priority="3" width="30%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="estado in estados.data" v-bind:key="estado.IdEstado">
                                <td>{{ estado.IdEstado }}</td>
                                <td>{{ estado.Estado }}</td>
                                <td>
                                    <div class="flex items-center justify-center">
                                        <a :href="'/estados/' + estado.IdEstado + '/edit'" class="text-white font-bold py-2 px-4 rounded-full" style="background-color: rgb(20 83 45);">
                                        Editar
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div><p><br><br></p></div>
                        <div class="flex justify-end">
                            <p></p>
                            <nav aria-label="Page navigation example">
                                <ul class="flex items-center -space-x-px h-8 text-sm">
                                    Paginas:&nbsp;&nbsp;
                                    <li>
                                        <a :href="'/estados?page=1'" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only">Início</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <title>Inicio</title>
                                                <g fill="#000000">
                                                    <path d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V8.753l6.267 3.636c.54.313 1.233-.066 1.233-.697v-2.94l6.267 3.636c.54.314 1.233-.065 1.233-.696V4.308c0-.63-.693-1.01-1.233-.696L8.5 7.248v-2.94c0-.63-.692-1.01-1.233-.696L1 7.248V4a.5.5 0 0 0-.5-.5"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a v-if="estados.current_page > 1" :href="'' + estados.prev_page_url + ''" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only">Anterior</span>
                                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                            </svg>
                                        </a>
                                        <a v-else href="#" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                                            <span class="sr-only">Anterior</span>
                                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li v-for="i in estados.last_page" :key="i">
                                        <a v-if="estados.current_page == i" href="#" aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ i }}</a>
                                        <a v-else :href="'/estados?page=' + i + ''" aria-current="page" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ i }}</a>
                                    </li>
                                    <li>
                                        <a v-if="estados.current_page < estados.last_page" :href="'' + estados.next_page_url + ''"  class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only">Siguiente</span>
                                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                            </svg>
                                        </a>
                                        <a v-else href="#" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                                            <span class="sr-only">Siguiente</span>
                                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a :href="'' + estados.last_page_url + ''" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only">Fin</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <title>Final</title>
                                                <g fill="#000000">
                                                    <path d="M15.5 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V8.753l-6.267 3.636c-.54.313-1.233-.066-1.233-.697v-2.94l-6.267 3.636C.693 12.703 0 12.324 0 11.693V4.308c0-.63.693-1.01 1.233-.696L7.5 7.248v-2.94c0-.63.693-1.01 1.233-.696L15 7.248V4a.5.5 0 0 1 .5-.5"></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </AuthenticatedLayout>
</template>

