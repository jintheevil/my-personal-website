<template>
    <div class="px-40 py-4 w-full bg-[#010048] text-[#fafafa] justify-content-center flex align-items-center h-[80px] headerBar">
            <router-link v-for="route in routes" class="nav-item text-lg text-[#fafafa] px-8 py-2 no-underline d-grid place-items-center" :class="{ active: isActive === route}" :to="route.path" @click="isActive">
                    {{ route.name }}
            </router-link>
    </div>
</template>

<script>
export default {
    data() {
       return {
           routes: [
               {
                   name: 'Home',
                   path: '/'
               },
               {
                   name: 'About',
                   path: '/about'
               },
               {
                   name: 'Blog',
                   path: '/blog'
               }

           ],
           isActive: false
       }
    }
}
</script>

<style>
a.router-link-active {
    background-color: #969696;
    border-radius: 8px;
}

a{
    border-bottom: 1px solid rgba(0,0,0,0);
}

a:hover{
    color: #aaaaaa !important;

}

@keyframes underline-nav {
    0% {opacity: 0}
    33% {opacity: 25%}
    66% {opacity: 50%}
    100% {opacity: 100%}
}

.headerBar {
    top: 0;
    position: fixed;
    z-index: 1000;
}

</style>
