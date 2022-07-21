<template>
    <Header></Header>
<!--    <div class="h-screen w-screen grid place-items-center text-2xl">Welcome</div>-->
    <div class="position-relative grid place-items-center h-screen">
        <img class="backgroundImage" src="/images/pexels-nemuel-sereti-6424589.jpg" alt="#"/>
        <div class="blueFilter"></div>
        <div>
            <h1 class="text-center">Hi, I'm Eugene.</h1>
            <h1>I am a self-taught full-stack developer.</h1>
            <span class="float-right">and welcome to my site.</span>

            <VueWriter class="mt-[120px] text-center text-2xl"
                       :array="arr"
                       :typeSpeed="70"
                       :erase-speed="180"
                       :delay="1200"
                       :start="800"
            />
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import router from "../../../router";
import Header from "../components/Header";

export default {
    components: {Header},
    data() {
        return {
            arr: [
              'Coding is fun...',
              'Lorem Ipsum...',
              'You thought that was a typo?'
            ],
            pokemons: [],
            sprites: [],
            title: 'Welcome',
            posts: [],
            loginData: {
                name: '',
                email: '',
                password: ''
            },
            token: ''
        }
    },
    beforeCreate() {
    },
    methods: {
        login() {
            const formData = new FormData();
            for (const key in this.loginData ) {
                formData.append(key, this.loginData[key]);
            }

            axios.post('/api/login', formData).then(res => {
                console.log(res.data)
                this.token = res.data.token
            }).catch(err => {
                console.log(err.data)
            })
        },
        logout() {
            axios.post('api/logout', '', {
                headers: {
                    "Authorization": "Bearer " + this.token
                }
            })
        }
    }
}
</script>

<style scoped>
.backgroundImage {
    position: absolute;
    width: 100vw;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -99;
    overflow: hidden;
}

.blueFilter {
    position: absolute;
    width: 100%;
    height: 100%;
    opacity: 0.6;
    background-color: #010048;
    z-index: -98;
}
</style>
