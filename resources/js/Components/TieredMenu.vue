
<template>
    <div class="card flex justify-center">
        <TieredMenu :model="items" />
        <Toast />
    </div>
</template>

<script setup>
import { ref } from "vue";
import { useToast } from "primevue/usetoast";
import TieredMenu from 'primevue/tieredmenu';


const toast = useToast();

const items = ref([
    {
        label: 'Índice por idade',
        icon: 'pi pi-caret-right',
    },
    {
        separator: true
    },
    {
        label: 'Índice por região',
        icon: 'pi pi-caret-right',
        command: () => {
            toast.add({ severity: 'warn', summary: 'Search Results', detail: 'No results found', life: 3000 });
        }
    },
    {
        separator: true
    },
    {
        label: 'Índice por sexo',
        icon: 'pi pi-caret-right',
    }
]);
</script>
