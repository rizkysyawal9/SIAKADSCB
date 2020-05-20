/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('jquery');

window.Vue = require('vue');
import Vue from 'vue';
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import Axios from 'axios';
import { Form, HasError, AlertError } from 'vform'
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
import Swal from 'sweetalert2'

const toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })


window.toast = toast;
window.Swal = Swal;
window.Form = Form;

Vue.use(VueRouter,VueAxios,Axios);


import App from './components/App.vue';
import TambahSiswa from './components/siswa/TambahSiswa.vue';
import SiswaDashboard from './components/siswa/SiswaDashboard.vue';
import UpdateSiswa from './components/siswa/UpdateSiswa.vue';
import DetailSiswa from './components/siswa/DetailSiswa.vue';
import NilaiSiswa from './components/nilai/NilaiSiswa.vue';
import NilaiSatuSiswa from './components/nilai/NilaiSatuSiswa.vue';
import EditNilaiSiswa from './components/nilai/EditNilaiSiswa.vue';
import MataPelajaran from './components/matapelajaran/MataPelajaran.vue';
import EditMatpel from './components/matapelajaran/EditMatpel';
import Creatematpel from './components/matapelajaran/Creatematpel';

const routes = [
    {
        path: '/dashboard',
        component: SiswaDashboard
    },
    {
        path: '/create',
        component: TambahSiswa
    },
    {
        path: '/edit/:id',
        component: UpdateSiswa
    },
    {
        path: '/detail/:id',
        component: DetailSiswa
    },
    {
        path: '/nilaisiswa',
        component: NilaiSiswa
    },
    {
        path: '/nilaisiswa/:id',
        component: NilaiSatuSiswa
    },
    {
        path: '/editnilai/:nis/:semester/:kode',
        component: EditNilaiSiswa
    },
    {
        name: 'matpel',
        path: '/matpel',
        component: MataPelajaran
    },
    {
        name: 'editmatpel',
        path: '/edit/matpel/:id',
        component: EditMatpel
    },
    {
        name: 'creatematpel',
        path: '/create/matpel',
        component: Creatematpel
    },
    

]

const router = new VueRouter({ mode: 'history', routes: routes });
// const app = new Vue({
//     el: '#app',
//     components: { App },
//     router,
// });
new Vue(Vue.util.extend({ router }, App)).$mount("#app");
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });
