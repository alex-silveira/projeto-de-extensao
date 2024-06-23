<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import MenuPrincipal from '@/Components/MenuPrincipal.vue';
import Footer from '@/Components/Footer.vue';
import FlashMessages from '@/Shared/FlashMessages.vue';
import { useForm } from '@inertiajs/vue3'

defineProps({errors: Object})

const form = useForm({
  titulo: 'Banco de dados',
  descricao: 'Curso de banco de dados MYSQL',
  link: 'www.google.com'
})

function submit() {
  router.post('/curso/criar', form)
} 
  
</script>

<template>

  <MenuPrincipal></MenuPrincipal>

  <FlashMessages></FlashMessages>

  <div class="flex justify-center items-center">
    <form  @submit.prevent="submit" class=" p-20">
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12 my-6">
          <h2 class="text-base font-semibold leading-7 text-gray-900 text-center text-4xl">Adicionar curso</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-3">
                <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                <div class="mt-2">
                    <input type="text" name="titulo" id="titulo" v-model="form.titulo" autocomplete="titulo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>

                <div v-if="!form.titulo">
                  <span v-if="errors.titulo">
                    {{ errors.titulo }}
                </span>
                </div>
                </div>

                <div class="sm:col-span-3">
                <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Último nome</label>
                <div class="mt-2">
                    <input type="text" name="lastname" id="lastname" v-model="form.link" autocomplete="lastname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                <div v-if="!form.link">
                  <span v-if="errors.link">
                    {{ errors.link }}
                </span>
                </div>
                </div>

                <div class="col-span-full">
                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Endereço</label>
                
                <div class="mt-2">
                    <textarea rows="4" type="text" name="address" id="address" v-model="form.descricao" autocomplete="address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>

                <div v-if="!form.descricao">
                  <span v-if="errors.descricao">
                    {{ errors.descricao }}
                  </span>
                </div>
            </div>
          </div>
        </div>
      </div>

    <div class="mt-6 my-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900" v-on:click="form.reset()">Cancelar</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Salvar</button>
    </div>
    </form>
  </div>

   <Footer></Footer>
 

   

</template>