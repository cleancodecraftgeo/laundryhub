<script setup>
defineProps({ categories: Array, activeCategory: String,default: () => [] });
defineEmits(['change']);
</script>

<template>
    <div class="flex flex-wrap gap-2 my-8 justify-center">
        <button v-if="categories"
            v-for="cat in categories" :v-key="cat"
            @click="$emit('change', cat)"
            :class="[
                'px-4 py-2 rounded-xl text-sm transition-all',
                activeCategory === cat ? 'bg-teal-500 text-white' : 'bg-dark-800 text-gray-400'
            ]"
        >
            {{ cat }}
        </button>
    </div>
</template>
