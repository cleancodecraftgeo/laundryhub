<script setup>
import { Link } from '@inertiajs/vue3'; // Inertia Link-i mütləq import etməliyik

defineProps({
    post: Object
});
</script>

<template>
  <article class="bg-dark-800 rounded-2xl overflow-hidden border border-dark-700">
    <Link
      :href="`/blog/${post.slug}`"
      class="text-teal-400 font-bold hover:underline"
    >
      Read More
    </Link>
  </article>
</template>
