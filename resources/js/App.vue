<template>
    <nav class="absolute h-[70px] top-0 left-2/4 -translate-x-2/4 z-10 w-full bg-[#f8f8f8]" x-data="{ menuOpen: false }">
        <div class="hidden md:flex items-center justify-between mx-auto h-full mx-[32px] xl:mx-[105px]">
            <router-link to="/pradinis" class="flex flex-col leading-[13px] overflow-hidden">
                <transition appear
                    @before-enter="beforeEnterLogoFirst"
                    @enter="enterLogoFirst">
                    <span style="font-family: 'Paytone One', sans-serif;" class="text-[#1e2125]">KRAUPAS</span>
                </transition>
                <transition appear
                    @before-enter="beforeEnterLogoSecond"
                    @enter="enterLogoSecond">
                    <span style="font-family: 'Paytone One', sans-serif;" class="font-medium text-[#00008b] pl-[16px]">PRODUCTION</span>
                </transition>
            </router-link>
            <ul class="flex gap-[16px] font-medium">
                <li class=" block"><router-link to="/#services" class="relative before:bg-[#000] before:transition-all before:duration-500 before:ease-out block before:absolute before:-bottom-[3px] before:left-0 before:w-[0px] before:h-[3px] hover:before:w-full">Paslaugos</router-link></li>
                <li><router-link to="/kainos" class="relative before:bg-[#000] before:transition-all before:duration-500 before:ease-out block before:absolute before:-bottom-[3px] before:left-0 before:w-[0px] before:h-[3px] hover:before:w-full">Kainos</router-link></li>
                <li><router-link to="/#about" class="relative before:bg-[#000] before:transition-all before:duration-500 before:ease-out block before:absolute before:-bottom-[3px] before:left-0 before:w-[0px] before:h-[3px] hover:before:w-full">Apie mus</router-link></li>
                <li><router-link to="#contacts" class="relative before:bg-[#000] before:transition-all before:duration-500 before:ease-out block before:absolute before:-bottom-[3px] before:left-0 before:w-[0px] before:h-[3px] hover:before:w-full">Kontaktai</router-link></li>
                <!--<li><a href="" class="bg-[#00008b] hover:bg-[#1e2125] rounded-sm py-[8px] px-[20px] text-[#fff] transition-all duration-500">Užklausa</a></li>-->
            </ul>
        </div>
        <div class="h-full flex md:hidden items-center justify-between px-[26px] border-b border-[#e7e7e7]">
            <a href="" class="flex flex-col leading-[13px] overflow-hidden">
                <span style="font-family: 'Paytone One', sans-serif;" class="text-[#1e2125]">KRAUPAS</span>
                <span style="font-family: 'Paytone One', sans-serif;" class="font-medium text-[#00008b] pl-[16px]">PRODUCTION</span>
            </a>
            <div x-on:click="menuOpen = !menuOpen" class="block md:hidden z-50 cursor-pointer">
                <div class="bg-[#1e2125] my-[6px] w-[18px] h-[2px] bg-neutral-5 rounded-5px origin-left transition" x-bind:class="{ 'rotate-45 translate-y-[1.5px]': menuOpen }"></div>
                <div class="bg-[#1e2125] my-[6px] w-[18px] h-[2px] bg-neutral-5 rounded-5px transition" x-bind:class="{ 'opacity-0': menuOpen }"></div>
                <div class="bg-[#1e2125] my-[6px] w-[18px] h-[2px] bg-neutral-5 rounded-5px origin-left transition" x-bind:class="{ '-rotate-45 -translate-y-[1.5px]': menuOpen }"></div>
            </div>
        </div>
        <div class="absolute top-[70px] left-0 w-full h-screen" x-show="menuOpen">
            <ul class="flex flex-col font-medium">
                <li class="border-b border-[#e7e7e7] text-[#1e2125] px-[26px] py-[16px]"><router-link to="/#services" x-on:click="menuOpen = false">Paslaugos</router-link></li>
                <li class="border-b border-[#e7e7e7] text-[#1e2125] px-[26px] py-[16px]"><router-link to="/kainos" x-on:click="menuOpen = false">Kainos</router-link></li>
                <li class="border-b border-[#e7e7e7] text-[#1e2125] px-[26px] py-[16px]"><router-link to="/#about" x-on:click="menuOpen = false">Apie mus</router-link></li>
                <li class="border-b border-[#e7e7e7] text-[#1e2125] px-[26px] py-[16px]"><router-link to="#contacts" x-on:click="menuOpen = false">Kontaktai</router-link></li>
                <!--<li class="border-b border-[#e7e7e7] px-[36px] py-[16px]"><a href="" class="bg-[#00008b] hover:bg-[#1e2125] rounded-sm py-[8px] px-[20px] text-[#fff]">Užklausa</a></li>-->
            </ul>
        </div>
    </nav>
    <!--<Main></Main>-->  
    <RouterView v-slot="{ Component }">
        <component :is="Component" />
    </RouterView>
    <div class="follow-cursor"></div>
</template>

<script setup>

// Imports
import { ref, onMounted } from 'vue';
import { useRoute } from 'vue-router'
import Main from '@/Pages/Main.vue';
import Note from '@/Pages/Note.vue';
import gsap from 'gsap';

onMounted(() => {
    const route = useRoute()
  console.log(route);
});

// Refs
const beforeEnterLogoFirst = (el) => {
    el.style.transform = 'translateX(-300px)';
};
const enterLogoFirst = (el) => {
    gsap.to(el, {x:'0%', duration:1, stagger:0.2, delay: 1});
}

const beforeEnterLogoSecond = (el) => {
    el.style.transform = 'translateX(300px)';
};
const enterLogoSecond = (el) => {
    gsap.to(el, {x:'0%', duration:1, stagger:0.2, delay: 1});
}
onMounted(() => {

    const cursor = document.querySelector('.follow-cursor');

    window.addEventListener('mousemove', function(event) {
        const y = event.pageY;
        const x = event.pageX;
        const scrollLeft = (window.pageXOffset !== undefined) ? window.pageXOffset : (document.documentElement || document.body.parentNode || document.body).scrollLeft;
        const scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
        cursor.style.left =  x + 'px';
        cursor.style.top = y + 'px';
    });

    const links = document.querySelectorAll('li');
    links.forEach(function(elem, index){
        elem.addEventListener('mouseenter', e => {
            cursor.classList.add("active");        
        });
        
        elem.addEventListener('mouseleave', e => {
            cursor.classList.remove("active");
        });

    });

});

</script>

<style>
    .page-opacity-enter-active,
    .page-opacity-leave-active {
        transition: 600ms ease all;
    }
    .page-opacity-enter-from,
    .page-opacity-leave-to {
        transition: 600ms ease all;
    }
</style>