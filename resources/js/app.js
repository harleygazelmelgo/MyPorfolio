require('./bootstrap');

$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});

window.Vue = require('vue');

35
Vue.component('Root', require('./components/Root.vue').default);

Vue.component('AboutMeRoot', require('./components/AboutMeRoot.vue').default);
Vue.component('ContactRoot', require('./components/ContactRoot.vue').default);
Vue.component('ProjectRoot', require('./components/ProjectRoot.vue').default);






const app = new Vue({
    el: '#app',
});
