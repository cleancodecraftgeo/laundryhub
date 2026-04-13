
<script setup>

const props = defineProps({
  products: {
    type: Array,
    required: true
  }
})

import ProductCard from "./ProductCard.vue"

</script>

<template>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <ProductCard
      v-for="product in props.products"
      :key="product.id"
      :product="product"
    />

  </div>
</template>