import { createRouter, createWebHistory } from "vue-router";

import App from '@/App.vue';
import Main from '@/Pages/Main.vue';
import Note from '@/Pages/Note.vue';
import Prices from '@/Pages/Prices.vue';



const routes = [
    {
        path: '/',
        name: 'home',
        component: Main
    },
    {
        path: '/pradinis',
        name: 'main',
        component: Main
    },
    {
        path: '/#services',
        name: 'services',
        hash: '#services',
        component: Main,
    },
    {
        path: '/#about',
        name: 'about',
        hash: '#about',
        component: Main,
    },
    {
        path: '/#contacts',
        name: 'contacts',
        hash: '#contacts',
        component: Main,
    },
    {
        path: '/uzklausa',
        name: 'note',
        component: Note
    },
    {
        path: '/kainos',
        name: 'prices',
        component: Prices
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
    scrollBehavior(to, from, savedPosition) {
        if (to.hash) {
          // This ensures that if hash is provided to router.push it works as expected.
          //  & since we have used "behavior: 'smooth'" the browser will slowly come to this hash position.
          return {
            el: to.hash,
            behavior: 'smooth',
          }
        }
      }
});

export default router;