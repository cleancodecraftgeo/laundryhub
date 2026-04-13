<script setup>

const props = defineProps({
  product: Object
})

</script>

<template>
  <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-4">

    <!-- START IMAGE -->
    <img
      :src="product.image"
      alt="product"
      class="w-full h-48 object-cover rounded-lg"
    />
    <!-- END IMAGE -->


    <!-- START CONTENT -->
    <div class="mt-4">
      <h2 class="text-lg font-semibold text-gray-800">
        {{ product.name }}
      </h2>

      <p class="text-blue-600 font-bold mt-2">
        {{ product.price }} ₾
      </p>

      <p class="text-yellow-500 mt-1">
        ⭐ {{ product.rating }}
      </p>
    </div>
    <!-- END CONTENT -->

  </div>
</template>