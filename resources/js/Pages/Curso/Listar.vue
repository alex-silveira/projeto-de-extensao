<script setup>
import MenuPrincipal from '@/Components/MenuPrincipal.vue';
import Footer from '@/Components/Footer.vue';
</script>

<template>

<MenuPrincipal></MenuPrincipal>

<div class="bg-gray-50 flex flex-col gap-5 p-10">
  
  <div class="columns-2">


  <!-- Card 1 -->

  <a class="rounded-sm w-1/2 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform" href="#">
    

    <!-- Icon -->
    <div class="col-span-12 md:col-span-1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="#2563eb">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
      </svg>
    </div>
    
    <!-- Title -->
    <div class="col-span-11 xl:-ml-5">
      <p class="text-blue-600 font-semibold"> Estatística - ENAP</p>
    </div>
    
    <!-- Description -->
    <div class="md:col-start-2 col-span-11 xl:-ml-5">
      <p class="text-sm text-gray-800 font-light"> O conhecimento sobre estatística é fundamental para a eficiente aplicação dos recursos oferecidos pelas linguagens voltadas para a análise de dados e para a construção de painéis gerenciais.</p>
    </div>

  </a>

  <a class="rounded-sm w-1/2 grid grid-cols-12 bg-white shadow p-3 gap-2 items-center hover:shadow-lg transition delay-150 duration-300 ease-in-out hover:scale-105 transform" href="#">
    

    <!-- Icon -->
    <div class="col-span-12 md:col-span-1">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="#2563eb">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
      </svg>
    </div>
    
    <!-- Title -->
    <div class="col-span-11 xl:-ml-5">
      <p class="text-blue-600 font-semibold"> Estatística - ENAP</p>
    </div>
    
    <!-- Description -->
    <div class="md:col-start-2 col-span-11 xl:-ml-5">
      <p class="text-sm text-gray-800 font-light"> O conhecimento sobre estatística é fundamental para a eficiente aplicação dos recursos oferecidos pelas linguagens voltadas para a análise de dados e para a construção de painéis gerenciais.</p>
    </div>

  </a>
</div>

  
</div>
<Footer></Footer>
</template>