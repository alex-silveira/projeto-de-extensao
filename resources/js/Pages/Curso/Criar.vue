<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import MenuPrincipal from '@/Components/MenuPrincipal.vue';
import Footer from '@/Components/Footer.vue';
import FlashMessages from '@/Shared/FlashMessages.vue';
import InputText from 'primevue/inputtext';
import Textarea from 'primevue/textarea';
import { useForm } from '@inertiajs/vue3'

defineProps({errors: Object})

const form = useForm({
  titulo: null,
  descricao: null,
  link: null
})

function submit() {
  router.post('/curso/criar', form)
} 
  
</script>

<template>

  <MenuPrincipal></MenuPrincipal>

  <FlashMessages></FlashMessages>

  <div class="flex justify-center items-center bg-gray-50">
    <form  @submit.prevent="submit" class="p-20 w-3/4">
      <div class="space-y-12 bg-white shadow-sm shadow-gray-500/50 p-10">
        <div class="border-b border-gray-900/10 pb-12 my-6">
          <h2 class="text-base font-semibold leading-7 text-gray-900 text-xl/[27px]">Adicionar curso</h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-8">
                <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
                <div class="mt-2">
                    <InputText type="text" id="title" name="title" v-model="form.titulo" class="w-full"/>
                </div>

                <div v-if="!form.titulo">
                  <span v-if="errors.titulo">
                    {{ errors.titulo }}
                </span>
                </div>
                </div>

                <div class="sm:col-span-8">
                <label for="link" class="block text-sm font-medium leading-6 text-gray-900">Link</label>
                <div class="mt-2">
                    <InputText type="text" id="link" name="link" v-model="form.link" class="w-full"/>
                </div>
                <div v-if="!form.link">
                  <span v-if="errors.link">
                    {{ errors.link }}
                </span>
                </div>
                </div>

                <div class="col-span-8">
                <label for="descricao" class="block text-sm font-medium leading-6 text-gray-900">Descrição</label>
                
                <div class="mt-2">
                    <Textarea name="description" id="description" v-model="form.descricao" rows="5" cols="30"  class="w-full"/>
                </div>

                <div v-if="!form.descricao">
                  <span v-if="errors.descricao">
                    {{ errors.descricao }}
                  </span>
                </div>
            </div>
          </div>
        </div>
      <div class="mt-6 my-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900" v-on:click="form.reset()">Cancelar</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Salvar</button>
        </div>
      </div>


    </form>
  </div>

   <Footer></Footer>
 

   

</template>