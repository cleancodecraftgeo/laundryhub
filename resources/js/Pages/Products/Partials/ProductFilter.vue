<script setup>
// Burada hələ heç bir logic yoxdur
const props = defineProps({
  name: {
    type: String,
    default: ''
  }
})
</script>

<template>
  <div class="bg-white p-4 rounded-xl shadow flex flex-col sm:flex-row gap-4 items-center justify-between">

    <!-- START SEARCH -->
    <input
      type="text"
      placeholder="Search product..."
      class="border rounded-lg px-4 py-2 w-full sm:w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-400"
    />
    <!-- END SEARCH -->


    <!-- START SORT -->
    <select
      class="border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"
    >
      <option>Price Low → High</option>
      <option>Price High → Low</option>
      <option>Newest</option>
    </select>
    <!-- END SORT -->

  </div>
</template>
