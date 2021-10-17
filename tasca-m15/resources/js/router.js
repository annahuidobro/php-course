import Home from "./components/HomeComponent";
import Login from "./components/Login";
import Register from "./components/Register";
import { createRouter, createWebHistory } from "vue-router";

const routeInfos = [
  {
      path: '/',
      name: 'home',
      component: Home
  },
  {
      path: '/login',
      name: 'login',
      component: Login
  },
  {
      path: '/register',
      name: 'register',
      component: Register
  },
]

const router = createRouter({
  history: createWebHistory(),
  routes: routeInfos
})

export default router;