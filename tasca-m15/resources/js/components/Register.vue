<template>
  <div class="register">
    <form action class="form" @submit.prevent="register">
      <label class="form-label first" for="#email">Email:</label>
      <input
        v-model="email"
        class="form-input"
        type="email"
        id="email"
        required
        placeholder="Email"
      >
      <label class="form-label" for="#email">Name:</label>
      <input
        v-model="name"
        class="form-input"
        type="text"
        id="name"
        required
        placeholder="Name"
      >
      <label class="form-label" for="#password">Password:</label>
      <input
        v-model="password"
        class="form-input"
        type="password"
        id="password"
        placeholder="Password"
      >
      <label class="form-label" for="#password-repeat">Repeat password:</label>
      <input
        v-model="passwordRepeat"
        class="form-input"
        type="password"
        id="password-repeat"
        placeholder="Password"
      >
      <input class="form-submit" type="submit" value="Register">
    </form>
  </div>
</template>

<script>

export default {
  data: () => ({
    email: "",
    name: "",
    password: "",
    passwordRepeat: "",
    error: false
  }),
  methods: {
    async register() {
      try {
        await auth.register(this.email, this.password);
        this.$router.push("/")
      } catch (error) {
        console.log(error);
      }
    }
  }
};
</script>

<style>
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
</style>