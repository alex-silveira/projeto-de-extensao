<template>
    <Select v-model="selectedRegion" :options="regions" optionLabel="name" placeholder="Selecione a região" checkmark :highlightOnSelect="false" class="w-full md:w-56" />
</template>

<script>

import axios from 'axios';
import Select from 'primevue/select';
import { ref } from "vue";


const selectedRegion = ref();
const regions = ref([]);

export default {
  name: 'Home',
  components: {
    Select
  },
  data() {
    return{
        regions, selectedRegion
    }
  },
  mounted () {
    axios
    .get('https://servicodados.ibge.gov.br/api/v1/localidades/estados/df/subdistritos')
    .then(response => response.data.forEach(element => {
            regions.value.push(
                { name: element.nome }
            )
        })
    )


  }
}


</script>

