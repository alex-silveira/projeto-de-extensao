<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import MenuPrincipal from '@/Components/MenuPrincipal.vue';
import Footer from '@/Components/Footer.vue';
import FlashMessages from '@/Shared/FlashMessages.vue';
import { useForm } from '@inertiajs/vue3'
import axios from 'axios';

import InputText from 'primevue/inputtext';
import InputMask from 'primevue/inputmask';
import SelectRegion from '@/Components/SelectRegion.vue';
import Select from 'primevue/select';
import { ref } from "vue";

defineProps({errors: Object})

const selectedFamilyincome = ref();
const selectedEducation = ref();
const selectedCity = ref();
const selectedRegion = ref();
const selectedState = ref();
const selectedGender = ref();
const regions = ref([]);

const form = reactive({
  firstname: null,
  lastname: null,
  gender: null,
  phone: null,
  birthdate: null,
  address: null,
  city: null,
  state: null,
  region: null,
  cep: null,
  education: null,
  familyincome: null,
  course: null,
})

const getRegions = () => {
  axios
    .get("https://servicodados.ibge.gov.br/api/v1/localidades/estados/df/subdistritos")
    .then(response => response.data.forEach(element => {
            regions.value.push(
                { name: element.nome }
            )
        })
    )
};

getRegions();

function submit() {
  form.familyincome = selectedFamilyincome.value.name;
  form.education = selectedEducation.value.name;
  form.city = selectedCity.value.name;
  form.gender = selectedGender.value.name;
  form.region = selectedRegion.value.name;
  form.state = selectedState.value.name;
  router.post('/desemprego/criar', form, {
    onSuccess: () => console.log(form),
  })
} 

</script>

<template>
    <div >

    <MenuPrincipal></MenuPrincipal>
    <FlashMessages></FlashMessages>
    <div class="bg-gray-50 flex justify-center items-center">
        <form  @submit.prevent="submit" class="p-20">
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12 my-6">
                <h2 class="text-base font-semibold leading-7 text-gray-900 text-4xl">Informações pessoais</h2>
                <div class="mt-20 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                    <label for="firstname" class="block text-sm font-medium leading-6 text-gray-900">Primeiro nome</label>
                    <div class="mt-2">
                        <InputText type="text" id="firstname" name="firstname" v-model="form.firstname" class="w-full"/>
                    </div>

                    <div v-if="!form.firstname">
                      <span v-if="errors.firstname">
                        {{ errors.firstname }}
                    </span>
                    </div>
                    </div>

                    <div class="sm:col-span-3">
                    <label for="lastname" class="block text-sm font-medium leading-6 text-gray-900">Último nome</label>
                    <div class="mt-2">
                      <InputText type="text" id="lastname" name="lastname" v-model="form.lastname" class="w-full"/>
                    </div>
                    <div v-if="!form.lastname">
                      <span v-if="errors.lastname">
                        {{ errors.lastname }}
                    </span>
                    </div>
                    </div>

                    <div class="sm:col-span-2">
                      <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Genêro</label>
                      <div class="mt-2">
                        <Select 
                        id="gender"
                        name="gender"
                        v-model="selectedGender" 
                        :options="[
                          { name: 'Feminino' },
                          { name: 'Masculino' },
                        ]" 
                        optionLabel="name"  
                        checkmark 
                        :highlightOnSelect="false"
                        placeholder="Selecione o genêro" 
                        class="w-full md:w-56" 
                      />
                      </div>
                      <div v-if="!form.gender">
                        <span v-if="errors.gender">
                          {{ errors.gender }}
                      </span>
                      </div>
                    </div>

                    <div class="sm:col-span-2">
                      <label for="birthdate" class="block text-sm font-medium leading-6 text-gray-900">Data de Nascimento</label>
                      <div class="mt-2">
                        <InputMask name="birthdate" id="birthdate" v-model="form.birthdate" mask="99/99/9999" placeholder="99/99/9999" class="w-full"/>
                      </div>
                      <div v-if="!form.birthdate">
                        <span v-if="errors.birthdate">
                          {{ errors.birthdate }}
                      </span>
                      </div>
                    </div>

                    <div class="sm:col-span-2">
                      <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Telefone</label>
                      <div class="mt-2">
                          <InputMask name="phone" id="phone" v-model="form.phone" mask="(99) 99999-9999" placeholder="(99) 99999-9999" />
                        </div>
                      <div v-if="!form.phone">
                        <span v-if="errors.phone">
                          {{ errors.phone }}
                      </span>
                      </div>
                    </div>

                    <div class="col-span-2">
                      <label for="cep" class="block text-sm font-medium leading-6 text-gray-900">CEP</label>
                      <div class="mt-2">
                        <InputMask name="cep" id="cep" v-model="form.cep" mask="99999-999" placeholder="99999-999" inputTextClass="w-full"/>
                      </div>
                      <div v-if="!form.cep">
                        <span v-if="errors.cep">
                          {{ errors.cep }}
                      </span>
                      </div>                     
                    </div>

                    <div class="col-span-4">
                      <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Endereço</label>
                      <div class="mt-2">
                          <InputText type="text" id="address" name="address" v-model="form.address" class="w-full"/>
                      </div>
                      <div v-if="!form.address">
                        <span v-if="errors.address">
                          {{ errors.address }}
                      </span>
                      </div>
                    </div>

                    <div class="sm:col-span-2">
                    <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Cidade</label>
                    <div class="mt-2">

                      <Select 
                        id="city"
                        name="city"
                        v-model="selectedCity" 
                        :options="[
                          { name: 'Brasília' },
                        ]" 
                        optionLabel="name"  
                        checkmark 
                        :highlightOnSelect="false"
                        placeholder="Selecione a cidade" 
                        class="w-full md:w-56" 
                      />
                    </div>
                    <div v-if="!form.city">
                      <span v-if="errors.city">
                        {{ errors.city }}
                    </span>
                    </div>                    
                    </div>

                    <div class="sm:col-span-2">
                    <label for="state" class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                    <div class="mt-2">
                      
                      <Select 
                        id="state" 
                        name="state"
                        v-model="selectedState" 
                        :options="[
                          { name: 'DF' },
                        ]" 
                        optionLabel="name"  
                        checkmark 
                        :highlightOnSelect="false" 
                        placeholder="Selecione o estado" 
                        class="w-full md:w-56" 
                      />
                    </div>
                    <div v-if="!form.state">
                      <span v-if="errors.state">
                        {{ errors.state }}
                    </span>
                    </div>                     
                    </div>

                    <div class="sm:col-span-2">
                    <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Região</label>
                    <div class="mt-2">
                      
                    <Select v-model="selectedRegion" :options="regions" optionLabel="name" placeholder="Selecione a região" checkmark :highlightOnSelect="false" class="w-full md:w-56" />
                    </div>
                    <div v-if="!form.region">
                      <span v-if="errors.region">
                        {{ errors.region }}
                    </span>
                    </div>                     
                    </div>
                </div>
                </div>

    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900 text-4xl">Informações complementares</h2>
      <div class="mt-10 space-y-10">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <div class="sm:col-span-3">
          <label for="education" class="block text-sm font-medium leading-6 text-gray-900">Grau de escolaridade </label>
          <div class="mt-2">
            <Select 
              id="education"
              name="education"
              v-model="selectedEducation" 
              :options="[
                { name: 'Ensino fundamental completo' },
                { name: 'Ensino fundamental incompleto' },
                { name: 'Ensino médio completo' },
                { name: 'Ensino médio incompleto' }
              ]" 
              optionLabel="name"  
              checkmark 
              :highlightOnSelect="false"
              placeholder="Selecione o grau de escolaridade" 
              class="w-full" 
            />
          </div>
          <div v-if="!form.education">
            <span v-if="errors.education">
              {{ errors.education }}
            </span>
          </div>           
        </div>


        <div class="sm:col-span-3">
          <label for="familyincome" class="block text-sm font-medium leading-6 text-gray-900">Renda familiar </label>
          <div class="mt-2">
            <Select 
              id="familyincome"
              name="familyincome"
              v-model="selectedFamilyincome" 
              :options="[
                { name: 'Até 1 salário mínimo' },
                { name: 'Mais de 1 salário mínimo' },
              ]" 
              optionLabel="name"  
              checkmark 
              :highlightOnSelect="false" 
              placeholder="Selecione a renda familiar"
              class="w-full" 
            />
          </div>
          <div v-if="!form.familyincome">
            <span v-if="errors.familyincome">
              {{ errors.familyincome }}
            </span>
          </div>           
        </div>

        <div class="col-span-full">
          <label for="course" class="block text-sm font-medium leading-6 text-gray-900">Possui algum curso extra curricular?</label>
          <p class="mt-1 text-sm leading-6 text-gray-600">Se sim, insira o nome do curso abaixo.</p>
          <div class="mt-2">
            <InputText type="text" id="course" name="course" v-model="form.course" class="w-full"/>
          </div>
          <div v-if="!form.course">
            <span v-if="errors.course">
              {{ errors.course }}
            </span>
          </div>  
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
    </div>

</template>

<style scoped>
.p-inputmask{
  width: 100%;
}
</style>