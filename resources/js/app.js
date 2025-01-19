import './bootstrap';
import '../css/app.css'

import { createApp, h } from 'vue'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/index.js'
import { createInertiaApp, Head, Link } from '@inertiajs/vue3'

createInertiaApp({
    title: (title) => ` ${title} | Devinsto` ,
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue, Ziggy)
      .component('Head', Head)
      .component('Link', Link)
      .mount(el)
  },
  progress: {
    color: 'yellow',
    showSpinner:true
  }
})

