<template>
  <div
    class="grid md:grid-cols-2 gap-8 md:gap-16 items-center"
    :class="{ 'md:flex-row-reverse': isReversed }"
  >
    <!-- Content -->
    <div :class="{ 'md:order-2': isReversed }">
      <span class="text-emerald-500 font-semibold text-sm uppercase tracking-wider">
        {{ step.stepNumber }}
      </span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mt-2 mb-6">
        {{ step.title }}
      </h2>
      <p class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed">
        {{ step.description }}
      </p>
    </div>

    <!-- Image -->
    <div :class="{ 'md:order-1': isReversed }">
      <div class="relative group overflow-hidden rounded-2xl shadow-xl bg-gray-100 dark:bg-gray-800">
        <img
          :src="step.image"
          :alt="step.imageAlt"
          class="w-full h-64 md:h-96 object-cover transform group-hover:scale-105 transition-transform duration-700"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
      </div>
    </div>
  </div>
</template>

<script setup>
defineProps({
  step: {
    type: Object,
    required: true
  },
  index: {
    type: Number,
    required: true
  },
  isReversed: {
    type: Boolean,
    default: false
  }
})
</script>
