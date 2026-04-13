<script setup>
import { Link } from '@inertiajs/vue3';
import BlogCard from './Partials/BlogCard.vue';
import BlogFilters from './Partials/BlogFilter.vue';

// Laravel-dən gələn datanı qəbul edirik
const props = defineProps({
    posts: Object,
    filters: Object
});




</script>

<template>

        <BlogFilters :active-category="filters?.category" />

        <div class="grid grid-cols-3 gap-6">
            <BlogCard
                v-for="post in posts?.data"
                :key="post.id"
                :post="post"
            />
        </div>

        <div class="mt-10">
            <Link
                v-for="link in posts.links"
                :href="link.url"
                v-html="link.label"
                :class="{'text-teal-500 font-bold': link.active}"
            />
        </div>

</template>
