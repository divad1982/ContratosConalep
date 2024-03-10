<script>
export default {
    name: 'TiposProveedorEdicion',

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
    TiposProveedor:{
        type: Object,
        required: true
    }
})
</script>

<template>
    <Head title="Edición de tipos de proveedor" />

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
                    <span>&nbsp;&nbsp; Tipos de proveedores</span>
                </div>        
            </div>
        </template>
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <p>Consulta y/o Modificación de los tipos de proveedores registraos en el sistema.</p>
                        <p><br></p>
                        <p><br></p>
                        <div class="mb-4 px-2 w-full">
                            <label class="block mb-1 text-sm" for="input3">Modifica el tipo de proveedor:</label>
                            <input id="input3" class="w-full border-green-500 border px-4 py-2 rounded focus:border focus:border-blue-500 focus:shadow-outline outline-none" type="text" placeholder="Tipo de proveedor..." />
                        </div>
                        <p><br></p>
                        <button class="mx-2 px-4 py-2 text-sm rounded text-white bg-teal-500 focus:outline-none hover:bg-teal-400 float-right">Guardar cambios</button>
                        <p><br></p>
                    </div>                        
                </div>
            </div>
        </div>    
    </AuthenticatedLayout>
</template>

