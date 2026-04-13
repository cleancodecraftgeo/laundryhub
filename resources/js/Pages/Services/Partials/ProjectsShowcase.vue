<template>
  <section class="py-16 md:py-24 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl md:text-4xl font-bold text-center text-gray-900 dark:text-white mb-12">
        Our Projects
      </h2>

      <div class="grid md:grid-cols-3 gap-6">
        <div
          v-for="project in projects"
          :key="project.id"
          class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer"
        >
          <img
            :src="project.image"
            :alt="project.title"
            class="w-full h-72 object-cover transform group-hover:scale-110 transition-transform duration-700"
          >
          <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <div class="absolute bottom-0 left-0 right-0 p-6">
              <h3 class="text-xl font-bold text-white mb-2">{{ project.title }}</h3>
              <p class="text-gray-200 text-sm">{{ project.location }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const projects = [
  {
    id: 1,
    title: 'Premium Laundry Lounge',
    location: 'Tbilisi, Georgia',
    image: 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&q=80&w=600'
  },
  {
    id: 2,
    title: 'Commercial Laundry Center',
    location: 'Batumi, Georgia',
    image: 'https://images.unsplash.com/photo-1604335399105-a0c585fd81a1?auto=format&fit=crop&q=80&w=600'
  },
  {
    id: 3,
    title: 'Hotel Laundry Facility',
    location: 'Kutaisi, Georgia',
    image: 'https://images.unsplash.com/photo-1626806775351-538068a21838?auto=format&fit=crop&q=80&w=600'
  }
]
</script>
