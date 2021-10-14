<template>
  <div class="container-fluid fluid">
    <div class="container">
      <div class="cover-container d-flex w-100 h-10 mb-3 mx-auto flex-column">
        <header class="mb-auto">
          <h1 class="float-md-start mb-0">Dices Game</h1>
          <nav v-if="isAuthenticated" class="nav nav-masthead justify-content-center float-md-end">
            <li class=nav-link v-if="isAuthenticated">  
              <button class="btn btn-sm" v-on:click="logout">Logout</button>
            </li>   
          </nav>
        </header>
        <div class="home">
          <h3>The most exciting game of dices</h3>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name: "Header",
    data() {
        return{
            isAuthenticated: false
        }
    },
    beforeMount() {
      watch: {
          if (localStorage.getItem('token')) {
            this.isAuthenticated = true;
          }
      }
    },
    methods: {
        logout() {
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("token")
            };

            let currentUrl = window.location.href;
            let url =  `${currentUrl}api/auth/logout`;

            axios.post(url)
            .then(() => {
                localStorage.removeItem('token');
                localStorage.removeItem('username');
                localStorage.removeItem('userid');
                this.$router.push({name: 'login'});
            });
        }
  }
}
</script>

<style>
.fluid {
    background: rgba(19, 35, 47, 0.9);
    border-radius: 5px;
    box-shadow: 0 4px 10px 4px rgba(0, 0, 0, 0.3);
    color: white;
    padding: 15px 15px 5px 15px;
}
h1 {
  font-size: 25px;
}
h3 {
      font-size: 20px;
      font-weight: normal;
}
.btn {
    background: #1ab188;
    border: none;
    color: white;
    margin-top: 0;
    padding: 1rem 2rem;
    transition: background 0.2s;
}
.btn:hover {
    background: #0b9185;
}
</style>
