<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Footer from '@/Components/Footer.vue';

import PieChart from '@/Components/PieChart.vue';
import BarChart from '@/Components/BarChart.vue';
import LineChart from '@/Components/LineChart.vue'

const props = defineProps({ labels: Object, dataset: Object })

</script>

<template>
    <Head title="Dashboard" />

    
    <div>
    <AuthenticatedLayout>
       
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

 

        <div class="flex my-10 ">

        <div class="flex-1 w-full ml-5">
            <grid class="grid grid-cols-2 gap-4 ml-5 mr-5">
                <div class="bg-white shadow-sm shadow-gray-500/50 p-2">
                    <h2 class="text-center text-lg mb-5 mt-5">ÍNDICE POR IDADE</h2>
                    <BarChart :label="props.labels" :dataset="props.dataset"></BarChart>
                </div>
                <div class="bg-white shadow-sm shadow-gray-500/50 p-2">
                    <h2 class="text-center text-lg mb-5 mt-5">ÍNDICE POR REGIÃO</h2>
                    <LineChart :label="props.labels" :dataset="props.dataset"></LineChart>
                  
                </div>
                <div class="bg-white shadow-sm shadow-gray-500/50 p-2">
                    <h2 class="text-center text-lg mb-5 mt-5">ÍNDICE POR SEXO</h2>
                    <PieChart :label="props.labels" :dataset="props.dataset"></PieChart>
                </div>
            </grid>

        </div>
        </div>

        <Footer class="mt-10"></Footer>  
    </AuthenticatedLayout>

     
</div>
</template>
