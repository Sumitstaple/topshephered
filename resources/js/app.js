
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



import Vue from 'vue/dist/vue';
// import Vuetify from 'vuetify'
import VueRouter from 'vue-router'
import { BootstrapVue } from 'bootstrap-vue'

Vue.use(BootstrapVue)


Vue.use(VueRouter)


import Auth from './auth'

Vue.prototype.$auth = new Auth(window.user);

Vue.component('admin', require('./components/Admin.vue').default);

import Dashboard from './pages/Dashboard'
import AddNewUser from './pages/users/AddNewUser'
// import Users from './pages/Users'
// import Roles from './pages/Roles'
// import Permissions from './pages/Permissions'
// import Activities from './pages/Activities'

const routes = [
  {
      path: '/admin/',
      component: Dashboard
  },
  {
      path: '/admin/addnewusers',
      component: AddNewUser
  },
  // {
  //     path: '/admin/roles',
  //     component: Roles
  // },
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

