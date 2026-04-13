<script setup>
// Bu bölmə Index səhifəsinə özəldir
</script>

<template>
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-24">
    <div class="grid lg:grid-cols-2 gap-12 items-center ">

      <div class="space-y-8 ">


        <h1 class="text-2xl sm:text-5xl lg:text-3xl font-extrabold text-gray-700 dark:text-gray-200 leading-tight">
          The Smarter Way to Buy <span class="gradient-text">Home Appliances</span> in Bulk
        </h1>

        <p class="text-gray-400 text-lg max-w-xl leading-tight">
          Trusted B2B marketplace with live inventory, negotiated bulk pricing, credit terms, and service-backed delivery across The Georgia.
        </p>

        <div class="flex flex-wrap gap-4">
          <button class="bg-teal-500 hover:bg-teal-600 text-white px-8 py-4 rounded-xl text-sm font-bold transition-all transform hover:scale-105 flex items-center gap-2 shadow-lg shadow-teal-500/20">
            Sign Up as a Business
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
            </svg>
          </button>

          <button class="bg-dark-800 border border-dark-600 hover:border-gray-500  hover:text-gray-800 px-8 py-4 rounded-xl text-sm font-bold transition-all text-gray-700 dark:text-gray-200">
            Book a Demo
          </button>
        </div>

        <div class="flex items-center gap-4 pt-4">
          <div class="flex -space-x-2">
            <div v-for="i in 3" :key="i" class="w-8 h-8 rounded-full border-2 border-dark-900 bg-dark-700"></div>
          </div>
          <p class="text-gray-500 text-xs text-left">
            Joined by <span class="text-white font-medium">50+ retailers</span> this month
          </p>
        </div>
      </div>

      <div class="relative hidden lg:block">
        <div class="absolute -inset-4 bg-teal-500/10 blur-3xl rounded-full"></div>

        <div class="relative bg-gradient-to-br from-dark-800 to-dark-900 rounded-[2.5rem] p-12 border border-dark-700 shadow-2xl">
          <div class="relative h-80 w-full flex items-center justify-center">

            <div class="absolute left-0 top-0 w-36 h-48 bg-gradient-to-b from-gray-200 to-gray-400 rounded-2xl shadow-2xl transform -rotate-12 flex flex-col p-4">
              <div class="w-full h-1 bg-gray-500/20 rounded-full mb-4"></div>
              <div class="w-24 h-24 border-[6px] border-gray-300 rounded-full mx-auto mt-4 flex items-center justify-center">
                <div class="w-16 h-16 border-2 border-gray-300 rounded-full border-dashed"></div>
              </div>
            </div>

            <div class="absolute right-0 bottom-4 w-44 h-28 bg-gradient-to-r from-teal-400 to-teal-600 rounded-2xl shadow-2xl transform rotate-6 p-4">
              <div class="w-10 h-10 bg-white/20 rounded-lg mb-2"></div>
              <div class="flex gap-2">
                <div class="w-full h-2 bg-white/20 rounded-full"></div>
                <div class="w-1/2 h-2 bg-white/20 rounded-full"></div>
              </div>
              <div class="absolute -bottom-2 left-6 w-6 h-6 bg-dark-900 rounded-full border-4 border-teal-700"></div>
              <div class="absolute -bottom-2 right-6 w-6 h-6 bg-dark-900 rounded-full border-4 border-teal-700"></div>
            </div>

            <div class="absolute right-12 top-0 w-16 h-16 bg-amber-500 rounded-xl shadow-xl transform rotate-12 flex items-center justify-center">
              <div class="w-10 h-1 bg-amber-600/50 rounded-full rotate-45"></div>
            </div>

            <div class="absolute left-1/2 bottom-0 -translate-x-1/2 w-24 h-32 bg-white rounded-xl shadow-2xl transform -rotate-3 p-4 flex flex-col gap-2">
                <div class="w-full h-2 bg-gray-100 rounded"></div>
                <div class="w-3/4 h-2 bg-gray-100 rounded"></div>
                <div class="w-full h-2 bg-gray-100 rounded"></div>
                <div class="mt-auto flex justify-between">
                    <div class="w-8 h-4 bg-teal-100 rounded"></div>
                    <div class="w-8 h-4 bg-gray-100 rounded"></div>
                </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>
</template>

<style scoped>
.gradient-text {
  background: linear-gradient(135deg, #2dd4bf 0%, #14b8a6 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
</style>
