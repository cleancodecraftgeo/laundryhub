<script setup>
const steps = [
  {
    title: 'Step 1: Browse Products',
    badge: 'Live filters',
    description: 'Explore appliances by category, brand, and spec with live stock visibility.',
    // Search Icon
    icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>`
  },
  {
    title: 'Step 2: Get Bulk Price',
    badge: 'Instant quotes',
    description: 'Unlock tiered pricing per quantity with negotiated rates and RFQs.',
    // Cash/Pricing Icon
    icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>`
  },
  {
    title: 'Step 3: Place Order',
    badge: 'GST-ready',
    description: 'Confirm order, choose credit terms, and auto-generate GST-compliant docs.',
    // Shopping Bag Icon
    icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>`
  },
  {
    title: 'Step 4: Track Delivery',
    badge: '24-72 hr',
    description: 'Live shipment tracking with delivery window notifications and POD.',
    // Clipboard/Track Icon
    icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>`
  }
];
</script>

<template>
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
    <div class="mb-10">
      <h2 class="text-2xl lg:text-3xl font-bold text-white mb-2">How it Works</h2>
      <p class="text-gray-400 max-w-2xl">
        From discovery to delivery, optimize your B2B procurement workflow.
      </p>
    </div>

    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="space-y-4">
        <div
          v-for="(step, index) in steps"
          :key="index"
          class="group flex gap-5 p-4 rounded-2xl bg-dark-800/40 border border-dark-700 hover:bg-dark-800 hover:border-teal-500/30 transition-all duration-300"
        >
          <div class="w-14 h-10 bg-teal-500 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg shadow-teal-500/20 group-hover:scale-110 transition-transform">
            <svg
              class="w-7 h-7 text-white"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              v-html="step.icon"
            ></svg>
          </div>

          <div class="flex-1 ">
            <div class="flex items-center justify-between mb-1">
              <h3 class="text-md font-medium text-white group-hover:text-teal-400 transition-colors">
                {{ step.title }}
              </h3>
              <span class="text-[10px] uppercase tracking-wider font-thin text-teal-400 bg-teal-500/10 px-2 py-1 rounded-md border border-teal-500/20">
                {{ step.badge }}
              </span>
            </div>
            <p class="text-gray-400 text-sm  font-light leading-relaxed">
              {{ step.description }}
            </p>
          </div>
        </div>
      </div>

      <div class="relative lg:block">
        <div class="bg-gradient-to-br from-dark-700 to-dark-800 rounded-3xl p-4 sm:p-8 border border-dark-600 relative overflow-hidden group">
          <div class="absolute -right-10 -top-10 w-40 h-40 bg-teal-500/10 blur-[80px] rounded-full"></div>
          <div class="absolute -left-10 -bottom-10 w-40 h-40 bg-teal-500/10 blur-[80px] rounded-full"></div>

          <div class="relative bg-dark-900 rounded-xl overflow-hidden shadow-2xl border border-dark-600 transform group-hover:scale-[1.02] transition-transform duration-500">
            <div class="bg-dark-700 px-4 py-3 flex items-center gap-2 border-b border-dark-600">
              <div class="flex gap-1.5">
                <div class="w-3 h-3 bg-red-500/80 rounded-full"></div>
                <div class="w-3 h-3 bg-yellow-500/80 rounded-full"></div>
                <div class="w-3 h-3 bg-green-500/80 rounded-full"></div>
              </div>
              <div class="mx-auto w-1/2 h-4 bg-dark-800 rounded-md"></div>
            </div>

            <div class="p-5 space-y-4">
              <div class="bg-dark-800 rounded-lg p-3 flex items-center gap-3 border border-dark-700">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                <div class="h-2 w-32 bg-gray-700 rounded-full"></div>
              </div>

              <div class="grid grid-cols-2 gap-4">
                <div v-for="i in 2" :key="i" class="bg-dark-800 rounded-xl p-3 border border-dark-700">
                  <div :class="['w-full h-20 rounded-lg mb-3 bg-gradient-to-br', i === 1 ? 'from-teal-500/20 to-teal-500/5' : 'from-gray-700 to-gray-800']"></div>
                  <div class="h-2 w-full bg-gray-700 rounded mb-2"></div>
                  <div class="h-2 w-2/3 bg-gray-800 rounded"></div>
                </div>
              </div>

              <div class="pt-2 flex justify-end">
                <div class="w-24 h-8 bg-teal-500 rounded-lg"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
