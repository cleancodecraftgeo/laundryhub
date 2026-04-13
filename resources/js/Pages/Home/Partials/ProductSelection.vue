<script setup>
import { ref } from 'vue';

const categories = ['Washing Machines', 'Refrigerators', 'Air Conditioners', 'Kitchen Appliances'];
const activeCategory = ref('Washing Machines');

const products = [
  {
    id: 1,
    name: 'Front Load Professional Series',
    brand: 'Samsung',
    category: 'Washing Machines',
    price: 'Bulk Pricing Available',
    specs: '8kg | Inverter Direct Drive',
    image_color: 'bg-slate-700'
  },
  {
    id: 2,
    name: 'Industrial Smart Cooling 500L',
    brand: 'LG',
    category: 'Refrigerators',
    price: 'Bulk Pricing Available',
    specs: 'Side-by-Side | Frost Free',
    image_color: 'bg-zinc-700'
  },
  {
    id: 3,
    name: 'Hyper Inverter AC 1.5 Ton',
    brand: 'Daikin',
    category: 'Air Conditioners',
    price: 'Bulk Pricing Available',
    specs: '5 Star | Copper Condenser',
    image_color: 'bg-teal-900/40'
  },
  {
    id: 4,
    name: 'Commercial Microwave Oven',
    brand: 'Panasonic',
    category: 'Kitchen Appliances',
    price: 'Bulk Pricing Available',
    specs: '32L | Convection',
    image_color: 'bg-orange-900/20'
  }
];

// Filtrləmə məntiqi
const filteredProducts = () => {
  return products.filter(p => p.category === activeCategory.value);
};
</script>

<template>
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
      <div>
        <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Product Selection</h2>
        <p class="text-gray-400 max-w-xl">
          Direct access to the latest inventory from top global brands at wholesale rates.
        </p>
      </div>

      <div class="flex flex-wrap gap-2 bg-dark-800 p-1.5 rounded-2xl border border-dark-700">
        <button
          v-for="cat in categories"
          :key="cat"
          @click="activeCategory = cat"
          :class="[
            'px-5 py-2.5 rounded-xl text-sm font-semibold transition-all duration-300',
            activeCategory === cat
              ? 'bg-teal-500 text-white shadow-lg shadow-teal-500/20'
              : 'text-gray-400 hover:text-white hover:bg-dark-700'
          ]"
        >
          {{ cat }}
        </button>
      </div>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <div
        v-for="product in filteredProducts()"
        :key="product.id"
        class="group bg-dark-800 rounded-3xl border border-dark-700 overflow-hidden hover:border-teal-500/50 transition-all duration-500"
      >
        <div :class="['relative h-56 flex items-center justify-center p-8 overflow-hidden', product.image_color]">
          <div class="absolute inset-0 bg-gradient-to-t from-dark-800 to-transparent opacity-60"></div>

          <div class="relative w-32 h-40 bg-white/10 backdrop-blur-md rounded-xl border border-white/20 shadow-2xl group-hover:scale-110 transition-transform duration-500 flex items-center justify-center">
             <svg class="w-12 h-12 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
             </svg>
          </div>

          <div class="absolute top-4 left-4 px-3 py-1 bg-dark-900/80 backdrop-blur-md rounded-lg text-[10px] font-bold text-teal-400 border border-teal-500/30 uppercase tracking-widest">
            {{ product.brand }}
          </div>
        </div>

        <div class="p-6">
          <h3 class="text-white font-bold mb-2 group-hover:text-teal-400 transition-colors line-clamp-1">
            {{ product.name }}
          </h3>
          <p class="text-gray-500 text-xs mb-4 uppercase tracking-tighter">
            {{ product.specs }}
          </p>

          <div class="flex items-center justify-between pt-4 border-t border-dark-700">
            <span class="text-teal-400 font-bold text-sm">{{ product.price }}</span>
            <button class="p-2 bg-dark-700 hover:bg-teal-500 text-gray-400 hover:text-white rounded-lg transition-all">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-12 text-center">
      <button class="inline-flex items-center gap-2 text-gray-400 hover:text-teal-400 font-semibold transition-colors">
        Explore full inventory
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </button>
    </div>
  </section>
</template>
