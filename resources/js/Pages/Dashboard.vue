<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="w-1/2 font-bold">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Sistema de gestión para contratos de bienes y servicios Conalep </p>
                <div class="flex">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <g fill="#000000">
                                <path d="M9,8.25c-.205,0-.399,.042-.582,.107L4.404,4.343c-.293-.293-.768-.293-1.061,0s-.293,.768,0,1.061l4.014,4.014c-.065,.183-.107,.377-.107,.582,0,.965,.785,1.75,1.75,1.75s1.75-.785,1.75-1.75-.785-1.75-1.75-1.75Z" fill="#000000"></path>
                                <path d="M14.657,4.343c-.006-.006-.014-.008-.02-.013-1.447-1.439-3.44-2.33-5.637-2.33-1.154,0-2.268,.241-3.311,.715-.377,.171-.543,.616-.372,.993s.617,.543,.993,.372c.619-.281,1.269-.459,1.939-.536v1.205c0,.414,.336,.75,.75,.75s.75-.336,.75-.75v-1.203c1.231,.142,2.356,.63,3.28,1.363l-.848,.848c-.293,.293-.293,.768,0,1.061,.146,.146,.338,.22,.53,.22s.384-.073,.53-.22l.848-.848c.733,.924,1.22,2.049,1.363,3.28h-1.203c-.414,0-.75,.336-.75,.75s.336,.75,.75,.75h1.187c-.138,1.204-.587,2.337-1.341,3.286l-.854-.854c-.293-.293-.768-.293-1.061,0s-.293,.768,0,1.061l1.414,1.414c.146,.146,.338,.22,.53,.22s.384-.073,.53-.22c1.511-1.511,2.343-3.52,2.343-5.657,0-2.197-.891-4.189-2.33-5.637-.006-.006-.007-.014-.013-.02Z" fill="#000000"></path>
                                <path d="M4.757,13.182l-.854,.854c-.754-.948-1.203-2.082-1.341-3.286h1.187c.414,0,.75-.336,.75-.75s-.336-.75-.75-.75h-1.205c.077-.671,.254-1.321,.536-1.939,.171-.377,.005-.822-.372-.993-.376-.17-.821-.005-.993,.372-.475,1.043-.715,2.157-.715,3.311,0,2.137,.832,4.146,2.343,5.657,.146,.146,.338,.22,.53,.22s.384-.073,.53-.22l1.414-1.414c.293-.293,.293-.768,0-1.061s-.768-.293-1.061,0Z" fill="#000000"></path>
                            </g>
                        </svg>
                        
                    </span>
                    <span>&nbsp;&nbsp; Dasboard</span>
                </div>        
            </div>
        </template>
        <div class="h-screen">
            <div class="py-2">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 mb-auto">
                            <p>Bienvenido:{{ $page.props.auth.user.name }}</p>
                            <p>Correo electrónico: {{ $page.props.auth.user.email }}</p>
                            <p>Tipo de usuario:{{ $page.props.tipoPerfil }}</p>
                            <div class="col-span-12 mt-8">
                                <div class="grid grid-cols-12 gap-6 mt-5 z-0">
                                    <div class="p-5 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                                        <div class="flex justify-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                            </svg>
                                            <div
                                                class="bg-green-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">30%</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                                <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-5 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                                        <div class="flex justify-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                            </svg>
                                            <div
                                                class="bg-red-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">30%</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                                <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-5 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                                        <div class="flex justify-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                            </svg>
                                            <div
                                                class="bg-yellow-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">30%</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                                <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-5 shadow-xl rounded-lg col-span-12 sm:col-span-6 xl:col-span-3 intro-y bg-white">
                                        <div class="flex justify-between">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-400"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                            </svg>
                                            <div
                                                class="bg-blue-500 rounded-full h-6 px-2 flex justify-items-center text-white font-semibold text-sm">
                                                <span class="flex items-center">30%</span>
                                            </div>
                                        </div>
                                        <div class="ml-2 w-full flex-1">
                                            <div>
                                                <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                                <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
