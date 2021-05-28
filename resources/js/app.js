
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



import Vue from 'vue/dist/vue';
// import Vuetify from 'vuetify'
import VueRouter from 'vue-router'
import { BootstrapVue } from 'bootstrap-vue'
import 'vue-loaders/dist/vue-loaders.css';
import VueLoaders from 'vue-loaders';
import VueSimpleAlert from "vue-simple-alert";
import VueLazyload from 'vue-lazyload'
 import { library } from '@fortawesome/fontawesome-svg-core'
import { faUserSecret, faGlobe,faStar,faEdit,faTrash,faVideo} from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faUserSecret)
library.add(faGlobe)
library.add(faStar)
library.add(faEdit)
library.add(faTrash)
library.add(faVideo)

Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.use(VueLazyload)

 
Vue.use(VueSimpleAlert);

Vue.use(VueLoaders);
//import VueLoaders from 'vue-loaders';

Vue.use(BootstrapVue)


Vue.use(VueRouter)

// Vue.config.silent = true;

import Auth from './auth'

Vue.prototype.$auth = new Auth(window.user);

Vue.component('admin', require('./components/Admin.vue').default);

global.jQuery = require('jquery');
var $ = global.jQuery;
window.$ = $;

import Dashboard from './pages/Dashboard'
import AddNewUser from './pages/users/AddNewUser'
import ViewAll from './pages/users/ViewAll'
import EditUser from './pages/users/EditUser'
import AddPet from './pages/pets/AddPet'
import EditPet from './pages/pets/EditPet'
import AllPets from './pages/pets/AllPets'
import AllLeads from './pages/leads/leads'


const routes = [
  {
      path: '/topshepered/admin/',
      component: Dashboard
  },
  {
      path: '/topshepered/admin/addnewusers',
      component: AddNewUser
  },
    {
      path: '/topshepered/admin/viewall',
      component: ViewAll
  },
  {
      path: '/topshepered/admin/edituser/:id(\\d+)',
      component: EditUser
  },
   {
      path: '/topshepered/admin/addnewpet',
      component: AddPet
  },
  {
      path: '/topshepered/admin/editpet/:id(\\d+)',
      component: EditPet
  },{
      path: '/topshepered/admin/allpets',
      component: AllPets
  },{
      path: '/topshepered/admin/leads',
      component: AllLeads
  }
  // {
  //     path: '/admin/permissions',
  //     component: Permissions
  // },
  // {
  //     path: '/admin/settings',
  //     component: Settings
  // },
  // {
  //     path: '/admin/activities',
  //     component: Activities
  // }
];

const router = new VueRouter({
  mode: 'history',
  routes
})


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});

