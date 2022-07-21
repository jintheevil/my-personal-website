import { createRouter, createWebHistory } from "vue-router/dist/vue-router.esm-browser";

import Welcome from "../resources/js/pages/Welcome";
import About from "../resources/js/pages/About";
import Blog from "../resources/js/pages/Blog";

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/blog',
        name: 'blog',
        component: Blog
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;
