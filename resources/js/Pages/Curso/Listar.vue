<script setup>
import MenuPrincipal from '@/Components/MenuPrincipal.vue';
import Footer from '@/Components/Footer.vue';
import Badge from 'primevue/badge';
import DataView from 'primevue/dataview';

const props = defineProps({ courses: Object })

</script>

<template>

<MenuPrincipal></MenuPrincipal>
<div class="p-20 ">
<DataView v-for="items in $page.props.courses" :value="items" paginator :rows="5">
    <template #list="slotProps">
        <div class="flex flex-col">
            <div v-for="(item, index) in slotProps.items" :key="index">
             
              <a :href="item.link" target="__blank">
                <div class="flex flex-col sm:flex-row sm:items-center p-6 gap-4" :class="{ 'border-t border-surface-200 dark:border-surface-700': index !== 0 }">
                    <div class="md:w-40 relative">
                      <i class="pi pi-bookmark" style="font-size: 2rem; color:#10b981"></i>
                    </div>
                    <div class="flex flex-col md:flex-row justify-between md:items-center flex-1 gap-6">
                        <div class="flex flex-row md:flex-col justify-between items-start gap-2">
                            <div>
                                <div class="text-lg font-medium mt-2">{{ item.titulo }}</div>
                                <span class="font-medium text-surface-500 dark:text-surface-400 text-sm">{{item.descricao}}</span>
                            </div>
                        </div>
                        <div class="flex flex-col md:items-end gap-8">
                          <Badge >{{ item.created_at }}</Badge>
 
                            <div class="flex flex-row-reverse md:flex-row gap-2">
                                <Button icon="pi pi-heart" outlined></Button>
                                <Button icon="pi pi-shopping-cart" label="Buy Now" :disabled="item.inventoryStatus === 'OUTOFSTOCK'" class="flex-auto md:flex-initial whitespace-nowrap"></Button>
                            </div>
                        </div>
                    </div>
                </div>
              </a>
            </div>
        </div>
    </template>
</DataView>
</div>

<Footer></Footer>
</template>