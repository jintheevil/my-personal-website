<template>
    <Header></Header>
    <div class="emptySpace"></div>
    <div class="background">
        <div class="grid place-items-center bg-blue-600 h-[8rem] titleCard">
            <h1>The Journal of a self-taught programmer.</h1>
        </div>
    </div>
</template>

<script>
import Header from "../components/Header";
import axios from "axios";

export default {
    components: {
        Header
    },
    data(){
    },
}
</script>

<style scoped>
.background {
    height: calc(100vh - 80px);
    width: 100vw;
    padding: 1rem;
    background-color: #010048;
}
.titleCard{
    width: 100vw;
    margin-top: -16px;
    margin-left: -16px;
    margin-right: -16px;
}
</style>
