<template>

    <nav class="sticky top-0 z-50 bg-dark-900/30 backdrop-blur-md border-b border-dark-700">

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex items-center justify-between h-16">

                <!-- LOGO -->
                <Link href="/" class="flex items-center gap-2">

                    <div class="w-8 h-8 bg-teal-500 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-sm">TH</span>
                    </div>

                    <div class="flex flex-col">
                        <span class="text-green-600 font-semibold text-sm leading-tight">TradeHub</span>
                        <span class="text-gray-500 text-xs leading-tight">B2B Appliances</span>
                    </div>

                </Link>


                <!-- DESKTOP NAV -->
                <div class="hidden md:flex items-center gap-8">

                    <Link v-for="link in navLinks" :key="link.name" :href="link.url"
                        @mouseenter="showCategory(link.slug)"
                        class="transition-colors text-sm pb-1 text-light-text dark:text-dark-text hover:text-green-600">

                        {{ link.name }}

                    </Link>



                    <!-- MEGA MENU -->
                    <div v-if="showCateg" @mouseenter="showCateg = true" @mouseleave="showCateg = false"
                        class="hidden md:block absolute left-0 top-[64px] w-full bg-white dark:bg-slate-900 border border-gray-500 shadow-xl z-20 py-12">

                        <div class="max-w-7xl mx-auto px-10 grid grid-cols-3 gap-x-20 gap-y-10">

                            <div v-for="categ in page.props.categories" :key="categ.id" class="space-y-3">

                                <div class="flex items-center gap-3 text-orange-600 font-semibold uppercase text-sm">

                                    <i data-lucide="settings" class="w-5 h-5 "></i>


                                    <Link :href="`/${locale}/category/${categ.slug}`" class="hover:underline text-lg font-semibold whitespace-nowrap">
                                        {{ categ.name_en }}
                                    </Link>

                                </div>

                                <ul class="space-y-1 ml-7 text-gray-700 text-sm">

                                    <li v-for="sub in categ.subcategories" :key="sub.id">

                                        <Link :href="`/${locale}/category/${categ.slug}/${sub.slug}`"
                                            class="hover:text-black dark:hover:text-white">
                                            • {{ sub.name_ge }}
                                        </Link>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>



               <!-- RIGHT SIDE -->
<div class="flex items-center gap-4">

    <!-- THEME TOGGLE -->
    <button @click="toggleTheme()"
        class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">

        <i data-lucide="sun" class="hidden dark:block w-5 h-5 text-yellow-400"></i>
        <i data-lucide="moon" class="block dark:hidden w-5 h-5 text-gray-600"></i>

    </button>


    <!-- 🌍 LANGUAGE SWITCH  -->
    <div class="relative">

        <button
            @click="isLangOpen = !isLangOpen"
            class="px-3 py-1 rounded-md bg-dark-800 text-sm text-white hover:bg-dark-700 transition"
        >
            {{ currentLang.toUpperCase() }}
        </button>

        <div
            v-if="isLangOpen"
            class="absolute right-0 mt-2 w-24 bg-white dark:bg-slate-900 border border-gray-200 dark:border-gray-700 rounded-md shadow-lg overflow-hidden"
        >
            <a @click.prevent="changeLang('en')" href="#"
               class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-slate-800">
                EN
            </a>

            <a @click.prevent="changeLang('ge')" href="#"
               class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-slate-800">
                GE
            </a>
        </div>

    </div>

</div>



                <!-- MOBILE BUTTON -->
                <button @click="isMobileMenuOpen = !isMobileMenuOpen"
                    class="md:hidden text-gray-300 hover:text-white focus:outline-none">

                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">

                        <path v-if="!isMobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />

                        <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />

                    </svg>

                </button>

            </div>


        </div>


        <!-- MOBILE MENU -->
        <transition enter-active-class="transition duration-200 ease-out" enter-from-class="opacity-0 -translate-y-2"
            enter-to-class="opacity-100 translate-y-0" leave-active-class="transition duration-150 ease-in"
            leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 -translate-y-2">

            <div v-if="isMobileMenuOpen" class="md:hidden bg-dark-800 border-t border-dark-700">

                <div class="px-4 py-4 space-y-3">

                    <Link v-for="link in navLinks" :key="link.name" :href="link.url"
                        class="block text-gray-300 hover:text-white py-2">

                        {{ link.name }}

                    </Link>

                </div>

            </div>

        </transition>

    </nav>

</template>



<script setup>

import { ref, onMounted,computed } from 'vue'
import { Link, usePage, router } from '@inertiajs/vue3'

import { Settings, User, LogOut } from 'lucide-vue-next';
const page = usePage()

const showCateg = ref(false)
const isMobileMenuOpen = ref(false)
const isLangOpen = ref(false)

const locale = computed(() => page.props.locale || 'en')

const changeLang = (lang) => {
    const currentPath = window.location.pathname
    const segments = currentPath.split('/').filter(Boolean)

    if (['en', 'ge'].includes(segments[0])) {
        segments[0] = lang
    } else {
        segments.unshift(lang)
    }

    const newPath = '/' + segments.join('/')

    router.visit(newPath)
}


const currentLang = computed(() => page.props.locale)

onMounted(() => {

    const savedTheme = localStorage.getItem('theme')

    if (savedTheme === 'dark') {
        document.documentElement.classList.add('dark')
    } else {
        document.documentElement.classList.remove('dark')
    }

})


const navLinks = [

    { name: 'Home', url: '/', slug: '' },
    { name: 'Products', url: '/products', slug: 'products' },
    { name: 'Services', url: '/services', slug: 'services' },
    { name: 'About', url: '/about', slug: 'about' },
    { name: 'Contact', url: '/contact', slug: 'contact' }

]


function showCategory(slug) {

    if (slug === 'products') {
        showCateg.value = true
    } else {
        showCateg.value = false
    }

}


const toggleTheme = () => {

    const html = document.documentElement

    if (html.classList.contains('dark')) {
        html.classList.remove('dark')
        localStorage.setItem('theme', 'light')
    } else {
        html.classList.add('dark')
        localStorage.setItem('theme', 'dark')
    }

}

</script>
