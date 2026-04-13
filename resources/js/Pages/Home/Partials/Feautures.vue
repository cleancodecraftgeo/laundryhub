<script setup>
const features = [
  {
    title: 'Bulk Business Pricing',
    description: 'Volume-based price breaks and negotiated rates across brands and categories.',
    iconColor: 'from-amber-400 to-orange-500',
    // Dollar/Currency Icon
    icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>`
  },
  {
    title: 'Live Inventory & Stock Alerts',
    description: 'Real-time visibility with low-stock alerts and incoming supply schedules.',
    iconColor: 'from-blue-400 to-blue-600',
    // Chart Icon
    icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>`
  },
  {
    title: 'Georgia Deliveries',
    description: 'Reliable logistics network with delivery windows optimized for B2B operations.',
    iconColor: 'from-teal-400 to-teal-600',
    // Location Icon
    icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>`
  },
  {
    title: 'Warranty & Service Support',
    description: 'Authorized warranty handling and service coordination built into your orders.',
    iconColor: 'from-purple-400 to-purple-600',
    // Shield Icon
    icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>`
  },
  {
    title: 'GST Billing + Credit Terms',
    description: 'GST-ready invoices with net terms and credit lines for approved partners.',
    iconColor: 'from-green-400 to-green-600',
    // Document Icon
    icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>`
  },
  {
    title: 'Dedicated Account Support',
    description: 'A single point of contact to manage quotes, orders, and escalations.',
    iconColor: 'from-pink-400 to-pink-600',
    // Support Icon
    icon: `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>`
  }
];
</script>

<template>
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24">
    <div class="mb-12">
      <h2 class="text-3xl lg:text-4xl font-bold text-white mb-4">Our Advantages</h2>
      <p class="text-gray-400 max-w-2xl leading-relaxed">
        Purpose-built for B2B buyers: negotiated pricing, stock visibility, reliable service, and GST-friendly workflows.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div
        v-for="(feature, index) in features"
        :key="index"
        class="group relative bg-gradient-to-br from-dark-700 to-dark-800 rounded-2xl p-8 border border-dark-600 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-teal-500/10"
      >
        <div :class="['w-14 h-14 rounded-xl flex items-center justify-center mb-6 bg-gradient-to-br shadow-lg', feature.iconColor]">
          <svg
            class="w-7 h-7 text-white"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            v-html="feature.icon"
          ></svg>
        </div>

        <h3 class="text-xl font-bold text-gray-700 dark:text-gray-300 mb-3 group-hover:text-teal-400 transition-colors">
          {{ feature.title }}
        </h3>
        <p class="text-gray-400 text-sm leading-relaxed">
          {{ feature.description }}
        </p>

        <div class="absolute inset-0 rounded-2xl bg-teal-500/5 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
      </div>
    </div>
  </section>
</template>
