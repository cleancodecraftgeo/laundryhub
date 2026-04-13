<template>
  <section class="py-16 md:py-24 bg-gray-50 dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Construction Section -->
      <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
        <div>
          <span class="text-emerald-500 font-semibold text-sm uppercase tracking-wider">Final</span>
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mt-2 mb-6">
            Construction and Fit-out Works
          </h2>
          <p class="text-gray-600 dark:text-gray-300 text-lg mb-8">
            After designing, we also offer the following services for the perfection and proper operation of your laundry:
          </p>
          <ul class="space-y-4">
            <li
              v-for="service in constructionServices"
              :key="service"
              class="flex items-start gap-3"
            >
              <span class="w-2 h-2 bg-emerald-500 rounded-full mt-2 flex-shrink-0"></span>
              <span class="text-gray-700 dark:text-gray-300" v-html="service"></span>
            </li>
          </ul>
        </div>
        <div class="relative group overflow-hidden rounded-2xl shadow-xl">
          <img
            src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&q=80&w=800"
            alt="Construction works"
            class="w-full h-80 md:h-96 object-cover transform group-hover:scale-105 transition-transform duration-700"
          >
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const constructionServices = [
  '<strong>Construction</strong> and repair works',
  '<strong>Electricity</strong> – arrangement of electric cabinet, interior lighting and wiring of equipment in accordance with the requirements of the factory-manufacturer',
  '<strong>Water supply</strong> – softened water supply and reserve tank',
  '<strong>Polluted water discharge</strong>',
  '<strong>Gasification</strong> – in case of need'
]
</script>
