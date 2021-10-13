import Vue from "vue";
import Router from "vue-router";

import App from "./App";
import Home from "./views/Home";
import Login from "./views/Login";
import Register from "./views/Register";
import PlayComponent from "./compopnents/Play"

Vue.use(Router);

const routes = [
  { path: "/", component: Home },
  { path: "/login", component: Login },
  { path: "/register", component: Register },
  { path: "/play", component: Play}
];

const router = new Router({
  routes
});