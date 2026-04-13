<template>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 p-8 rounded-3xl bg-slate-600 border border-slate-800 backdrop-blur-sm">
      <div v-for="(stat, index) in stats" :key="index" class="text-center">
        <div class="text-3xl font-bold text-white mb-1">{{ stat.value }}</div>
        <div class="text-gray-300 dark:text-gray-200 text-sm">{{ stat.label }}</div>
      </div>
    </div>
  </div>
</template>

<script setup>
const stats = [
  { value: '50+', label: 'Retail Partners' },
  { value: '25+', label: 'Top Brands' },
  { value: '10k+', label: 'Products Delivered' },
  { value: '24/7', label: 'Service Support' }
];
</script>
