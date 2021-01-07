/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('quick-item', require('./components/QuickViewProductComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data(){
        return{
            fresh:[],
            trend:[],
            best:[],
        }
    },
    mounted(){
        this.loadHomeData();
    },
    methods:{
        loadHomeData(){
            axios.get('/api/home').then(result => {
                if (result.data.status === 200){
                    this.fresh = result.data.data.fresh;
                    this.trend = result.data.data.trend;
                    this.best = result.data.data.best
                }else {
                    toastr.error(result.data.message)
                }
            }).catch(err => {
                console.log(err)
            })
        }
    }
});
