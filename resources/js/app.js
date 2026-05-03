import './bootstrap'
import '../css/app.css'
import { createApp, h, nextTick } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import PublicLayout from '@/Layouts/PublicLayout.vue'
import * as lucide from 'lucide'
import { createHead } from '@vueuse/head'

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]

        page.default.layout = page.default.layout || PublicLayout
        return page
    },
    setup({ el, App, props, plugin }) {
        const vueApp = createApp({
            render: () => h(App, props),
        })

        const head = createHead()
        vueApp.use(plugin)
        vueApp.use(head)

        vueApp.mount(el)

        nextTick(() => {
            lucide.createIcons({ icons: lucide.icons })
        })
    },

})
