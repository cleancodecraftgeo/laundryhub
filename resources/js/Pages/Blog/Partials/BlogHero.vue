<script setup>
defineProps(['search']);
defineEmits(['update:search']);
</script>

<template>
  <section class="py-16 border-b border-dark-800 bg-dark-900">
    <div class="max-w-7xl mx-auto px-4 text-center">
      <h1 class="text-4xl font-bold text-white mb-6">Blog & Insights</h1>
      <div class="max-w-xl mx-auto relative">
        <input
          :value="search"
          @input="$emit('update:search', $event.target.value)"
          type="text"
          placeholder="Məqalə axtar..."
          class="w-full bg-dark-800 border border-dark-700 text-white px-6 py-3 rounded-xl focus:border-teal-500 outline-none"
        >
      </div>
    </div>
  </section>
</template>
