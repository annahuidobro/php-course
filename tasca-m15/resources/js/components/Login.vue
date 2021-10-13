<template>
  <div class="login">
    <form action class="form" @submit.prevent="login">
      <label class="form-label first" for="#email">Email:</label>
      <input
        v-model="user.email"
        class="form-input"
        type="email"
        id="email"
        required
        placeholder="Email"
      >
      <label class="form-label" for="#password">Password:</label>
      <input
        v-model="user.password"
        class="form-input"
        type="password"
        id="password"
        placeholder="Password"
      >
      <p v-if="error" class="error">Has introducido mal el email o la contraseña.</p>
      <input class="form-submit" type="submit" value="Login">
    </form>
  </div>
</template>

<script>
//import auth from "@/logic/auth";
export default {
  data() {
        return {
            user: {
                email: '',
                password: '',
                remember: false
            },
            error: false
        }   
    },
    methods: {
        async login() {
            try {
                  let currentUrl = window.location.href.replace('login', '');
                  let url =  `${currentUrl}api/login`;

                  axios.post(url, this.user)
                  .then((response) => {
                      localStorage.username = response.data.user.name
                      localStorage.userid = response.data.user.id
                      localStorage.token = response.data.token
                      this.$router.push({name: 'home'})
                  });
            } catch {
                error = true;
            };
        }
    }
};

</script>

<style>
.login {
  margin-top: 150px;
}
.form {
  margin: 3rem auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 20%;
  min-width: 350px;
  max-width: 100%;
  background: rgba(19, 35, 47, 0.9);
  border-radius: 5px;
  padding: 40px;
  box-shadow: 0 4px 10px 4px rgba(0, 0, 0, 0.3);
}
.form-label {
  margin-top: 1.5rem;
  color: white;
  margin-bottom: 0.5rem;
}
.first {
  margin-top: 0;
}
.form-input {
  padding: 10px 15px;
  background: none;
  background-image: none;
  border: 1px solid white;
  color: white;
  &:focus {
    outline: 0;
    border-color: #1ab188;
  }
}
.form-submit {
  background: #1ab188;
  border: none;
  color: white;
  margin-top: 3rem;
  padding: 1rem 0;
  cursor: pointer;
  transition: background 0.2s;
}
.form-submit:hover {
  background: #0b9185;
}
.error {
  margin: 1rem 0 0;
  color: #ff4a96;
}
.msg {
  margin-top: 3rem;
  text-align: center;
}
</style>