import Home from "./components/HomeComponent";
import Login from "./components/Login";
import Register from "./components/Register";
import PlayComponent from "./components/PlayComponent"
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
  {
      path: '/play',
      name: 'play',
      component: PlayComponent
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes: routeInfos
})

export default router;