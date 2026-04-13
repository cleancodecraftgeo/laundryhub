<template>
  <section class="py-16 md:py-24 bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="space-y-20">
        <StepCard
          v-for="(step, index) in steps"
          :key="step.id"
          :step="step"
          :index="index"
          :is-reversed="index % 2 !== 0"
        />
      </div>
    </div>
  </section>
</template>

<script setup>
import StepCard from './StepCard.vue'

const steps = [
  {
    id: 1,
    stepNumber: 'Step One',
    title: 'Preliminary Drawing',
    description: 'Do you have a general idea of what you would like your laundry facility to look like? LaundryHub is available to help you get all of your ideas down on paper and fill in the details. You\'ll go over room dimensions, window and door locations, accessory options, incoming utility line locations, and equipment mix. The quick sketch and rough notes produced during this initial meeting can be turned into a professional and polished Preliminary Drawing that allows you to envision the final outcome.',
    image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&q=80&w=800',
    imageAlt: 'Preliminary floor plan drawing'
  },
  {
    id: 2,
    stepNumber: 'Step Two',
    title: 'Utility Schedule',
    description: 'Once your equipment has been determined, we recommend creating a Utility Schedule. This powerful tool allows you to see at a glance the requirements needed for electrical, drain, gas, exhaust/venting, water, and more. It will be useful when discussing installation with your general contractor.',
    image: 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&q=80&w=800',
    imageAlt: 'Utility schedule document',
    isDocument: true
  },
  {
    id: 3,
    stepNumber: 'Step Three',
    title: 'Construction Drawing',
    description: 'Do you have a general idea of what you would like your laundry facility to look like? LaundryHub is available to help you get all of your ideas down on paper and fill in the details. You\'ll go over room dimensions, window and door locations, accessory options, incoming utility line locations, and equipment mix. The quick sketch and rough notes produced during this initial meeting can be turned into a professional and polished Preliminary Drawing that allows you to envision the final outcome.',
    image: 'https://images.unsplash.com/photo-1503387762-592deb58ef4e?auto=format&fit=crop&q=80&w=800',
    imageAlt: 'Construction drawing with equipment layout'
  },
  {
    id: 4,
    stepNumber: 'Step Four',
    title: '3D View',
    description: 'Visualize your facility taking shape before construction has even started with our 3D View drawing. The 3D View\'s representation of height, width, and depth provides a better vision of your finished laundry.',
    image: 'https://images.unsplash.com/photo-1632215111364-f7e60d9a0e54?auto=format&fit=crop&q=80&w=800',
    imageAlt: '3D isometric view of laundry facility'
  },
  {
    id: 5,
    stepNumber: 'Step Five',
    title: 'Laundry Showcase',
    description: 'Realistic images allow you to see a virtual representation of your laundry facility. Laundry Showcase images can be customized with your color schemes, furniture, flooring, and accessories.',
    image: 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?auto=format&fit=crop&q=80&w=800',
    imageAlt: 'Modern laundry facility interior'
  },
  {
    id: 6,
    stepNumber: 'Step six',
    title: 'Employee Training',
    description: 'As you know, knowledge is important in all business areas! That\'s why LaundryHub offers employee training. They learn how to operate with machines, how to use programs, and solutions. This will help you quickly grow your business and provide quality services.',
    image: 'https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&q=80&w=800',
    imageAlt: 'Employee training session'
  }
]
</script>
