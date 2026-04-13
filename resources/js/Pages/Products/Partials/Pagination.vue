<script setup>
// gələcəkdə links backend-dən gələcək
</script>

<template>
  <div class="flex justify-center mt-10 space-x-2">

    <!-- START STATIC PAGINATION -->
    <button class="px-4 py-2 bg-white border rounded-lg hover:bg-gray-100">
      1
    </button>
    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg">
      2
    </button>
    <button class="px-4 py-2 bg-white border rounded-lg hover:bg-gray-100">
      3
    </button>
    <!-- END STATIC PAGINATION -->


    <!-- ========================== -->
    <!-- DYNAMIC VERSION (FROZEN)   -->
    <!-- ========================== -->

    <!--
    <button
      v-for="link in props.links"
      :key="link.label"
      v-html="link.label"
      :class="[
        'px-4 py-2 rounded-lg',
        link.active
          ? 'bg-blue-600 text-white'
          : 'bg-white border hover:bg-gray-100'
      ]"
    />
    -->

  </div>
</template>