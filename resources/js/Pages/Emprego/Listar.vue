<script setup>
import MenuPrincipal from '@/Components/MenuPrincipal.vue';
import Footer from '@/Components/Footer.vue';
import Card from 'primevue/card';
import Button from 'primevue/button';
import Badge from 'primevue/badge';

const props = defineProps({ vagas: Object })

</script>

<template>

<MenuPrincipal></MenuPrincipal>
<div class="mt-20 grid grid-cols-3 mx-10 my-10 gap-x-10 gap-y-20" v-for="vagas in $page.props.vagas">
<Card style=" overflow: hidden" v-for="item in vagas">

    <template #title>
        <div class="flex">
            <div class="w-60">
                {{item.titulo}}
            </div>
            <div class="w-full text-right text-sm">
                <Badge >{{ item.created_at }}</Badge>
            </div>
        </div>
    </template>
    <template #content>
        <p class="m-0 h-72">
           {{item.descricao}}
        </p>
    </template>
    <template #footer >
        <div class="flex gap-4 justify-center static ">
            <a href="http://google.com" target="__blank">
                <Button label="Candidatar-se" c />
            </a>
        </div>
    </template>
</Card>
</div>

<Footer></Footer>

</template>

<style scoped>

</style>