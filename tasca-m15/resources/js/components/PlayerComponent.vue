<template>
    <div class="container mt-3 mb-3 content">
        <div class="row">
            <div class="col-6">
                <p class="welcome">Welcome back <strong>{{ username }}</strong></p>

                <button @click="play(userid)" type="button" class="btn play btn-sm btn-outline-secondary">PLAY</button>
            </div>
            <div class="col-6">
                <h3>Setup profile</h3>  
                <button @click="delete_games(userid)" type="button" class="btn btn-sm btn-outline-secondary">Delete user games</button>

                <form v-on:submit.prevent="editUser()">
                    <div class="form-group">
                        <label for="name">Change user name:</label>
                        <input type="text" class="form-control" id="name" v-model="username">
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
        </div>
    </div>    
</template>

<script>
export default {
    data() {
        return {
                username: '',
                userid: '',
        };
    },
    beforeMount() {
        //Token
        if (localStorage.getItem('token')) {
            this.isAuthenticated = true;
        } else {
            this.isAuthenticated = false;
            this.$router.push({name: 'login'});
        }

        //Username
        if (localStorage.getItem('username')) {
            this.username = localStorage.getItem('username');
            this.userid = localStorage.getItem('userid');
        } else {
            this.username = '';
        }
    },
    methods: {
        play(user_id) {
            let currentUrl = window.location.href;
            let url =  `${currentUrl}api/players/${user_id}/games`;

            axios.post(url).then(() => {
                this.$router.push({name: 'home'})
            });
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
        padding: 15px;
    }
    .welcome {
        text-align: center;
    }
    .play {
        cursor: pointer;
        background: #1a34b1;
        border: none;
        color: white;
        margin-top: 0;
        padding: 2rem 7rem;
        transition: background 0.2s;
        font-size: 30px;
        margin: 0 auto;
        display: block;
    }
    .btn:hover {
        background-color: #3f5df0;
    }
</style>