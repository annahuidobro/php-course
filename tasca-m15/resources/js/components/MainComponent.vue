<template>
    <div>
        <h1>The most exciting game of dices</h1>
         <router-link class="btn btn-sm btn-outline-secondary" :to='{name: "play", params: {id: user_id}}'>Let's play!!</router-link>
        <button @click="play(user.id)" type="button" calss="btn btn-sm btn-outline-secondary">PLAY</button>
    </div>    
</template>

<script>
export default {
    name: "mainPage",
    data() {
        return [];
    },
    methods: {
        play(user_id) {
            alert(user_id);
        }
    }

}
</script>

<style>

</style>