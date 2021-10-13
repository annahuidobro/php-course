<template>
    <div class="container mt-3 mb-3 content">
        <p v-if="!user">Hi, Sign-in or Register if you want to play :)</p>
        <div v-else class="col-12">
            <p>Welcome back <strong>{{user.name}}</strong></p>
        
            <button @click="play(user.id)" type="button" calss="btn btn-sm btn-outline-secondary">PLAY</button>
            <button @click="delete_games(user.id)" type="button" calss="btn btn-sm btn-outline-secondary">Delete user games</button>
            <form v-on:submit.prevent="editUser()">
            <div class="form-group">
                <label for="name">Change user name:</label>
                <input type="text" class="form-control" id="name" v-model="user.name">
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>    
</template>

<script>
let defaultUser = {
                name: '',
                id: '',  
                email: ' ',
                password: ' ',  
            };
export default {
    name: "playerPage",
        props: {
        edit: {
            default: false
        },
        idUser: {
            required: false
        }
    },
    data() {
        return {
            user: 
                {
                    id: '1',
                    name: 'User 1',
                    ranking: 0,
                    lastgame: '2021-12-01',
                    email: 'user1@gmail.com',
                    password: 'password'
                }
                
        };
    },
    methods: {
        play(user_id) {
            /*alert(user_id);*/
            const url = `api/players/${user_id}/games`;
            axios.post(url);
        },
        delete_games(user_id) {
            /*alert(user_id);*/
            const url = `api/players/${user_id}/games`;
            axios.delete(url);
        },
         editUser() {
             alert(user_name);
          /*  const url = `api/players/${user_id}`;
            axios.put(url, this.user).then((response) => {
               this.$router.push({name: 'user.name'});
           })*/
        },
    }

}
</script>

<style>
    .content {
        background-color: #e9e9e9;
        padding: 15px;
        border: 1px solid #c5c5c5;
        border-radius: 15px;
    }
</style>