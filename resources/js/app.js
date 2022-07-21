require('./bootstrap');

import { createApp } from "vue";
import {BootstrapVue3} from "bootstrap-vue-3";
import router from "../../router";
import VueWriter from 'vue-writer';

import Welcome from "./pages/Welcome";
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue-3/dist/bootstrap-vue-3.css'

const app = createApp({})

app.use(router)
app.use(BootstrapVue3)
app.use(VueWriter)

app.mount('#app')
