<script>
export default {
    name: 'ProveedorAgregar',

  components: {
    CustomInput,
  },
  data() {
    return {
      inputValue: "",
    };
  },
}
</script>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import CustomInput from "@/Components/CustomInput.vue";
import { Head } from '@inertiajs/vue3';
defineProps({
    Proveedor:{
        type: Object,
        required: true
    }
})
</script>

<template>
    <Head title="Agregar provedores a nuestro sistema" />

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
                    <span>&nbsp;&nbsp; Proveedores</span>
                </div>        
            </div>
        </template>
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 ">
                        <p>Agregar un nuevo proveedor en el sistema.</p>
                        <p><br></p>
                        <p><br></p>

                        <table id="example" class="stripe hover py-3" style="width:100%;">
                            <thead>
                            <tr>
                                <th data-priority="1" width="50%"></th>
                                <th data-priority="2" width="50%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Nombre del proveedor:</label>
                                        <input id="input3" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none" type="text" placeholder="Agregar un nuevo tipo de proveedor..." />
                                    </div>
                                </td>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">R.F.C.:</label>
                                        <input id="input3" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none" type="text" placeholder="Agregar un nuevo tipo de proveedor..." />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Tipo de identificación:</label>
                                        
                                        <button class="relative group transition-all duration-200 focus:overflow-visible w-max h-max p-2 overflow-hidden flex flex-row items-center justify-center bg-white gap-2 rounded-lg border border-zinc-200">
                                            <span>
                                                Seleccione un tipo de identificación
                                            </span>
                                            <svg class="rotate-90 group-focus:rotate-180" xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                d="m12 10.8l-3.9 3.9q-.275.275-.7.275t-.7-.275q-.275-.275-.275-.7t.275-.7l4.6-4.6q.3-.3.7-.3t.7.3l4.6 4.6q.275.275.275.7t-.275.7q-.275.275-.7.275t-.7-.275z" />
                                            </svg>
                                            <div
                                                class="absolute shadow-lg -bottom-40 left-0 w-full h-max p-2 bg-white border border-zinc-200 rounded-lg flex flex-col gap-2">
                                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                    d="M12 5q-.425 0-.712-.288T11 4V2q0-.425.288-.712T12 1q.425 0 .713.288T13 2v2q0 .425-.288.713T12 5m4.95 2.05q-.275-.275-.275-.687t.275-.713l1.4-1.425q.3-.3.712-.3t.713.3q.275.275.275.7t-.275.7L18.35 7.05q-.275.275-.7.275t-.7-.275M20 13q-.425 0-.713-.288T19 12q0-.425.288-.712T20 11h2q.425 0 .713.288T23 12q0 .425-.288.713T22 13zm-8 10q-.425 0-.712-.288T11 22v-2q0-.425.288-.712T12 19q.425 0 .713.288T13 20v2q0 .425-.288.713T12 23M5.65 7.05l-1.425-1.4q-.3-.3-.3-.725t.3-.7q.275-.275.7-.275t.7.275L7.05 5.65q.275.275.275.7t-.275.7q-.3.275-.7.275t-.7-.275m12.7 12.725l-1.4-1.425q-.275-.3-.275-.712t.275-.688q.275-.275.688-.275t.712.275l1.425 1.4q.3.275.288.7t-.288.725q-.3.3-.725.3t-.7-.3M2 13q-.425 0-.712-.288T1 12q0-.425.288-.712T2 11h2q.425 0 .713.288T5 12q0 .425-.288.713T4 13zm2.225 6.775q-.275-.275-.275-.7t.275-.7L5.65 16.95q.275-.275.687-.275t.713.275q.3.3.3.713t-.3.712l-1.4 1.4q-.3.3-.725.3t-.7-.3M12 18q-2.5 0-4.25-1.75T6 12q0-2.5 1.75-4.25T12 6q2.5 0 4.25 1.75T18 12q0 2.5-1.75 4.25T12 18m0-2q1.65 0 2.825-1.175T16 12q0-1.65-1.175-2.825T12 8q-1.65 0-2.825 1.175T8 12q0 1.65 1.175 2.825T12 16m0-4" />
                                                </svg>
                                                <p>INE</p>
                                                </span>
                                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                    d="M12 21q-3.775 0-6.387-2.613T3 12q0-3.45 2.25-5.988T11 3.05q.325-.05.575.088t.4.362q.15.225.163.525t-.188.575q-.425.65-.638 1.375T11.1 7.5q0 2.25 1.575 3.825T16.5 12.9q.775 0 1.538-.225t1.362-.625q.275-.175.563-.162t.512.137q.25.125.388.375t.087.6q-.35 3.45-2.937 5.725T12 21m0-2q2.2 0 3.95-1.213t2.55-3.162q-.5.125-1 .2t-1 .075q-3.075 0-5.238-2.163T9.1 7.5q0-.5.075-1t.2-1q-1.95.8-3.163 2.55T5 12q0 2.9 2.05 4.95T12 19m-.25-6.75" />
                                                </svg>
                                                <p>Licencia de conducir</p>
                                                </span>
                                                <span class="flex flex-row gap-2 items-center hover:bg-zinc-100 p-2 rounded-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 48 48">
                                                    <g fill="none" stroke="currentColor" stroke-width="4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 32h10v9H19z" />
                                                    <rect width="38" height="24" x="5" y="8" rx="2" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M22 27h4M14 41h20" />
                                                    </g>
                                                </svg>
                                                <p>Pasaporte</p>
                                                </span>
                                            </div>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Cedula R.F.C.:</label>
                                        <label for="doc" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none flex items-center gap-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <g fill="#000000">
                                                        <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <div>
                                                <h4>Subir Archivo</h4>
                                                <span>Max 2 MO </span>
                                            </div>
                                            <input type="file" id="doc" name="doc" hidden/>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Identificación:</label>
                                        <label for="doc" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none flex items-center gap-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <g fill="#000000">
                                                        <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <div>
                                                <h4>Subir Archivo</h4>
                                                <span>Max 2 MO </span>
                                            </div>
                                            <input type="file" id="doc" name="doc" hidden/>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Correo electrónico:</label>
                                        <input id="input3" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none" type="text" placeholder="Agregar un nuevo tipo de proveedor..." />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Telefono:</label>
                                        <input id="input3" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none" type="text" placeholder="Agregar un nuevo tipo de proveedor..." />
                                    </div>
                                </td>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Nombre del representante legal:</label>
                                        <input id="input3" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none" type="text" placeholder="Agregar un nuevo tipo de proveedor..." />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">R.F.C. del representante legal:</label>
                                        <input id="input3" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none" type="text" placeholder="Agregar un nuevo tipo de proveedor..." />
                                    </div>
                                </td>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Poder notarial:</label>
                                        <label for="doc" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none flex items-center gap-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <g fill="#000000">
                                                        <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <div>
                                                <h4>Subir Archivo</h4>
                                                <span>Max 2 MO </span>
                                            </div>
                                            <input type="file" id="doc" name="doc" hidden/>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Acta constitutiva:</label>
                                        <label for="doc" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none flex items-center gap-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <g fill="#000000">
                                                        <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <div>
                                                <h4>Subir Archivo</h4>
                                                <span>Max 2 MO </span>
                                            </div>
                                            <input type="file" id="doc" name="doc" hidden/>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Tipo de proveedor:</label>
                                        <input id="input3" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none" type="text" placeholder="Agregar un nuevo tipo de proveedor..." />
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Estado:</label>
                                        <input id="input3" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none" type="text" placeholder="Agregar un nuevo tipo de proveedor..." />
                                    </div>
                                </td>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Domicilio:</label>
                                        <textarea id="textarea1" class="w-full border px-4 py-2 rounded focus:border-blue-500 focus:shadow-outline outline-none" rows="5" placeholder="Textarea placeholder..."></textarea>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="mb-4 px-2 w-full">
                                        <label class="block mb-1 text-sm" for="input3">Comprobante de domicilio:</label>
                                        <label for="doc" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none flex items-center gap-2">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                    <g fill="#000000">
                                                        <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <div>
                                                <h4>Subir Archivo</h4>
                                                <span>Max 2 MO </span>
                                            </div>
                                            <input type="file" id="doc" name="doc" hidden/>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <p><br></p>
                        <button class="mx-2 px-4 py-2 text-sm rounded text-white bg-teal-500 focus:outline-none hover:bg-teal-400 float-right">Agregar proveedor</button>
                        <p><br></p>
                    </div>                        
                </div>
            </div>
        </div>   
    </AuthenticatedLayout>
</template>

