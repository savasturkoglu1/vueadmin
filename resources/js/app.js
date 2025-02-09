require('./bootstrap');

window.Vue = require('vue');

Vue.component('App', require('./components/App.vue'));

import App from './components/App';
import router from './router';


const app = new Vue({
    el: '#app',
    template:'<App/>',
    components: { App },
    router:router


});
