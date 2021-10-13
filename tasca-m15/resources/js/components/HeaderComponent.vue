<template>
  <div class="container-fluid fluid">
    <div class="container">
      <div class="cover-container d-flex w-100 h-10 mb-3 mx-auto flex-column">
        <header class="mb-auto">
          <h1 class="float-md-start mb-0">Dices Game</h1>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <!--li class=nav-link active>   
              <router-link class="btn btn-sm btn-outline-secondary" :to='{name: "home"}'>Home</router-link>
            </li-->
            <li class=nav-link active>  
              <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Sign-In</button>
            </li>
            <li class=nav-link active>  
              <router-link class="btn btn-sm btn-secondary" :to='{name: "register"}'>Register</router-link>
            </li>    
          </nav>
        </header>
        <div class="home">
          <h3>The most exciting game of dices</h3>
          <p v-if="user.name">User loggued: {{user.name}}</p>
          <p v-else>Please login</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form class="modal-content" @submit.prevent="login">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Sign-In</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <input
            v-model="email"
            class="form-input form-control"
            type="email"
            id="email"
            required
            placeholder="Email"
          >
          <br>
          <input
            v-model="password"
            class="form-input form-control"
            type="password"
            id="password"
            placeholder="Password"
          >
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>

  <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Header",
  data(){
			return{
				user:[]
			}
		},
  computed: {
    login() {
      let currentUrl = window.location.href;
			let url =  `${currentUrl}api/auth/login`;

      axios.post(url, {
        email: this.email, 
        password: this.password
      })
      .then(() => {
        alert("login ok");
      })
      .catch(() => {
        alert("error");
      });
    }
  }
}
</script>

<style>
.fluid {
    background-color: #34720d;
    color: white;
    padding: 15px 15px 5px 15px;
}
</style>
