<template>
    <Header></Header>
    <div class="emptySpace"></div>
    <div class="container">
        <div class="card">
            <VueWriter :array="title"
                       :typeSpeed="70"
                       :erase-speed="180"
                       :delay="1200"
                       :start="800"
                       class="card-title"
            ></VueWriter>
            <span class="card-text"> Test text </span>
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
            title: ['About me'],
        }
    },
    beforeCreate() {
    },
    methods: {
    }
}
</script>

<style scoped>
.card-title{
    color: #969696
}

.is-typed span.typed {
    color: #969696;
    font-size: 24px;
}
</style>
