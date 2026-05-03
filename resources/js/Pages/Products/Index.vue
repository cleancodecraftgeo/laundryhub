<script setup>
import { computed } from 'vue'
import { useHelpers } from '../../helpers'
import {Link, router, usePage} from '@inertiajs/vue3'

const { truncate, price } = useHelpers()

const props = defineProps({
    products: {
        type: Object,
        default: () => { }
    },
})

const goToProduct = (id) => {
  console.log('CLICK ID:', id)
  router.visit(`/products/${id}`)
}

const emit = defineEmits(['page-change'])

const changePage = (page) => {
    const { current_page, last_page } = props.products.meta
    if (page < 1 || page > last_page || page === current_page) return
    emit('page-change', page)
}

const visiblePages = computed(() => {
    const { current_page, last_page } = props.products.meta
    const pages = []

    if (last_page <= 7) {
        for (let i = 1; i <= last_page; i++) pages.push(i)
        return pages
    }

    pages.push(1)

    if (current_page > 3) pages.push('...')

    const start = Math.max(2, current_page - 1)
    const end = Math.min(last_page - 1, current_page + 1)

    for (let i = start; i <= end; i++) pages.push(i)

    if (current_page < last_page - 2) pages.push('...')

    pages.push(last_page)

    return pages
})

</script>

<template>
    <!-- Breadcrumb -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <nav class="flex items-center gap-2 text-sm">
            <a href="index.html" class="text-gray-500 hover:text-teal-500 transition-colors">Home</a>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-gray-900 dark:text-white">Products</span>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="flex flex-col lg:flex-row gap-8">

            <!-- Sidebar Filters -->
            <aside class="lg:w-64 flex-shrink-0">
                <div class="lg:sticky lg:top-24 space-y-6">
                    <!-- Filter Header -->
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Filters</h2>
                        <button class="text-teal-500 text-sm hover:text-teal-600">Clear All</button>
                    </div>

                    <!-- Categories -->
                    <div class="bg-white dark:bg-gray-700 rounded-xl p-4 border border-gray-100 dark:border-dark-700">
                        <h3 class="font-medium text-gray-900 dark:text-white mb-3 ">Categories</h3>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Kitchen
                                    Appliances</span>
                                <span class="text-gray-400 text-xs ml-auto">1,240</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Refrigeration</span>
                                <span class="text-gray-400 text-xs ml-auto">680</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Heating</span>
                                <span class="text-gray-400 text-xs ml-auto">240</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Smart
                                    Electronics</span>
                                <span class="text-gray-400 text-xs ml-auto">1,020</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Cleaning
                                    & Laundry</span>
                                <span class="text-gray-400 text-xs ml-auto">560</span>
                            </label>
                        </div>
                    </div>

                    <!-- Price Range
                    <div class="bg-white dark:bg-dark-800 rounded-xl p-4 border border-gray-100 dark:border-dark-700">
                        <h3 class="font-medium text-gray-900 dark:text-white mb-3">Price Range</h3>
                        <div class="space-y-4">
                            <input type="range" min="0" max="100000" value="50000" class="w-full">
                            <div class="flex items-center gap-2">
                                <div class="relative flex-1">
                                    <span
                                        class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm">₹</span>
                                    <input type="number" value="0"
                                        class="w-full bg-gray-100 dark:bg-dark-700 text-gray-900 dark:text-white pl-7 pr-3 py-2 rounded-lg text-sm">
                                </div>
                                <span class="text-gray-400">-</span>
                                <div class="relative flex-1">
                                    <span
                                        class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 text-sm">₹</span>
                                    <input type="number" value="100000"
                                        class="w-full bg-gray-100 dark:bg-dark-700 text-gray-900 dark:text-white pl-7 pr-3 py-2 rounded-lg text-sm">
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- Brands -->
                    <div class="bg-white dark:bg-gray-700 rounded-xl p-4 border border-gray-100 dark:border-dark-700">
                        <h3 class="font-medium text-gray-900 dark:text-white mb-3">Brands</h3>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">LG</span>
                                <span class="text-gray-400 text-xs ml-auto">245</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Samsung</span>
                                <span class="text-gray-400 text-xs ml-auto">189</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Whirlpool</span>
                                <span class="text-gray-400 text-xs ml-auto">156</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Godrej</span>
                                <span class="text-gray-400 text-xs ml-auto">98</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Haier</span>
                                <span class="text-gray-400 text-xs ml-auto">87</span>
                            </label>
                        </div>
                        <button class="text-teal-500 text-sm mt-3 hover:text-teal-600">+ View More</button>
                    </div>

                    <!-- Stock Status -->
                    <div class="bg-white dark:bg-gray-700 rounded-xl p-4 border border-gray-100 dark:border-dark-700">
                        <h3 class="font-medium text-gray-900 dark:text-white mb-3">Stock Status</h3>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500"
                                    checked>
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">In
                                    Stock</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Low
                                    Stock</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="checkbox"
                                    class="custom-checkbox w-4 h-4 rounded border-gray-300 dark:border-gray-600 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Pre-order</span>
                            </label>
                        </div>
                    </div>

                    <!-- MOQ -->
                    <div class="bg-white dark:bg-dark-teal rounded-xl p-4 border border-gray-100 dark:border-dark-700">
                        <h3 class="font-medium text-gray-900 dark:text-white mb-3">Minimum Order Qty</h3>
                        <div class="space-y-2">
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="radio" name="moq" class="w-4 h-4 text-teal-500 focus:ring-teal-500"
                                    checked>
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">Any</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="radio" name="moq" class="w-4 h-4 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">10+
                                    units</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="radio" name="moq" class="w-4 h-4 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">50+
                                    units</span>
                            </label>
                            <label class="flex items-center gap-3 cursor-pointer group">
                                <input type="radio" name="moq" class="w-4 h-4 text-teal-500 focus:ring-teal-500">
                                <span
                                    class="text-gray-600 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white transition-colors text-sm">100+
                                    units</span>
                            </label>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Products Grid -->
            <main class="flex-1">
                <!-- Header -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">All Products</h1>
                        <p class="text-gray-500 text-sm">
                            Showing {{ products.meta.from }}-{{ products.meta.to }} of
                            {{ products.meta.total }} products
                        </p>
                    </div>

                </div>
                <!-- showing filter counts ends -->
                <!-- Active Filters -->
                <div class="flex flex-wrap items-center gap-2 mb-6">
                    <span class="text-gray-500 text-sm">Active filters:</span>
                    <span
                        class="bg-teal-500/10 text-teal-600 dark:text-teal-400 px-3 py-1 rounded-full text-sm flex items-center gap-2">
                        In Stock
                        <button class="hover:text-teal-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </span>
                    <span
                        class="bg-teal-500/10 text-teal-600 dark:text-teal-400 px-3 py-1 rounded-full text-sm flex items-center gap-2">
                        Kitchen Appliances
                        <button class="hover:text-teal-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </span>
                </div>

              <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">

    <!-- PRODUCT CARD -->
    <div
      v-for="product in products?.items ?? []"
      :key="product.id"
      class="bg-white dark:bg-[#1e293b] rounded-2xl overflow-hidden border border-gray-100 dark:border-transparent group hover:shadow-lg transition"
    >

      <!-- IMAGE -->
      <div class="h-48 bg-gray-100 dark:bg-gray-800 relative">
        <img
          :src="product.image"
          class="w-full h-full object-cover"
        />

        <!-- STOCK BADGE -->
        <span
          class="absolute top-3 left-3 bg-green-500 text-white text-xs px-2 py-1 rounded-full"
        >
          In Stock
        </span>
      </div>

      <!-- BODY -->
      <div class="p-4">

        <!-- TITLE -->
        <h3 class="font-semibold text-gray-900 dark:text-white mb-2 line-clamp-2">
          {{ truncate(product.title) }}
        </h3>

        <!-- PRICE (B2B SAFE) -->
        <div class="mb-3">

          <p v-if="product.price !== null && product.price !== undefined"
             class="text-xl font-bold text-teal-500"
          >
            {{ price(product.price) }}
          </p>

          <p v-else class="text-sm text-orange-500 font-semibold">
            Contact for price
          </p>

        </div>

        <!-- ACTION -->
       <Link
            :href="`/${currentLang}/products/${product.id}`"
            class="block text-center bg-teal-500 hover:bg-teal-600 text-white py-2 rounded-lg text-sm font-medium"
          >
            Detail
          </Link>

      </div>

    </div>

  </div>


                <!-- Pagination -->

                <div class="flex items-center justify-between mt-8">
                    <p class="text-gray-500 text-sm">
                        Showing {{ products.meta.from }}-{{ products.meta.to }} of
                        {{ products.meta.total }} products
                    </p>

                    <div class="flex items-center gap-2">
                        <!-- Prev button -->
                        <button @click="changePage(products.meta.current_page - 1)"
                            :disabled="products.meta.current_page === 1"
                            class="w-10 h-10 rounded-lg border border-gray-200 dark:border-dark-600 text-gray-400 hover:text-gray-900 dark:hover:text-white hover:border-gray-400 transition-colors flex items-center justify-center disabled:opacity-40 disabled:cursor-not-allowed">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>

                        <!-- Page buttons -->
                        <template v-for="page in visiblePages" :key="page">
                            <span v-if="page === '...'" class="text-gray-400">...</span>
                            <button v-else @click="changePage(page)" :class="[
            'w-10 h-10 rounded-lg flex items-center justify-center transition-colors',
            page === products.meta.current_page
              ? 'bg-teal-500 text-white'
              : 'border border-gray-200 dark:border-dark-600 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white hover:border-teal-500'
          ]">
                                {{ page }}
                            </button>
                        </template>

                        <!-- Next button -->
                        <button @click="changePage(products.meta.current_page + 1)"
                            :disabled="products.meta.current_page === products.meta.last_page"
                            class="w-10 h-10 rounded-lg border border-gray-200 dark:border-dark-600 text-gray-400 hover:text-gray-900 dark:hover:text-white hover:border-gray-400 transition-colors flex items-center justify-center disabled:opacity-40 disabled:cursor-not-allowed">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>

            </main>
        </div>
    </div>

</template>
