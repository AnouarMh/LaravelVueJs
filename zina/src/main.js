import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import AddAdmin from './components/AddAdmin.vue';
import SignIn from './components/SignIn.vue';
import App from './App.vue';

const routes = [
  {
    path: '/admins/ajouter',
    name: 'AddAdmin',
    component: AddAdmin,
  },
  {
    path: '/admins/signin',
    name: 'Signin',
    component: SignIn,
  }
  // Autres routes...
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App)
  .use(router)
  .mount('#app');
