<template>
  <div class="cover-container d-flex w-100 h-10 p-3 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h1 class="float-md-start mb-0">Dices Game</h1>
        <nav class="nav nav-masthead justify-content-center float-md-end">
          <li class=nav-link active>   
            <router-link class="btn btn-sm btn-outline-secondary" :to='{name: "home"}'>Home</router-link>
          </li>
          <li class=nav-link active>  
            <router-link class="btn btn-sm btn-outline-secondary" :to='{name: "login"}'>Sign-in</router-link>
            </li> 
          <li class=nav-link active>  
            <router-link class="btn btn-sm btn-outline-secondary" :to='{name: "register"}'>Register</router-link>
          </li>    
        </nav>
      </div>
    </header>
    <div class="home">
      <h3>Home</h3>
      <p v-if="userLogged">User loggued: {{userLogged}}</p>
    </div>
  </div>
</template>

<!--
const routes = [
    {
        path: '/login',
        name: 'login',
                components: {
            Login: login,
        }
    },
];  
-->

export default {
  name: "Home",
  computed: {
    userLogged() {
      // test
    }
  }
};
<style>
</style>
