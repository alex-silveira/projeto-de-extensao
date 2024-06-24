<script setup>
import MenuPrincipal from '@/Components/MenuPrincipal.vue';
import Footer from '@/Components/Footer.vue';
import Paginator from 'primevue/paginator';

const props = defineProps({ courses: Object })

</script>

<template>

<MenuPrincipal></MenuPrincipal>



<li v-for="item in $page.props.courses">
  {{ item }}
</li>
    <div class="card" v-for="item in $page.props.courses">
        <Paginator :rows="item.per_page" :totalRecords="item.total" :rowsPerPageOptions="[item.per_page]"></Paginator>
    </div>

<Footer></Footer>
</template>