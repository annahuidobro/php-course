<template>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <div class="col-12 bg-trans">
                    <p class="welcome">Welcome back <strong>{{ username }}</strong></p>

                    <button @click="play(userid)" type="button" class="btn play btn-sm btn-outline-secondary">PLAY</button>
                        <div v-if="is_played">
                            <h1 v-if="game.success">You win!</h1>
                            <h1 v-else>You lose :(</h1>
                            <p>Dice #1: <span><strong>{{ game.dice1 }}</strong></span></p>
                            <p>Dice #2: <span><strong>{{ game.dice2 }}</strong></span></p>
                        </div>

                    <div class="center player-results">
                        <p>Player results</p>
                        <div v-for="result in currentGames" :key="result.id">
                            <span v-if="result === 7" class="green">{{ result }}</span>
                            <span v-else>{{ result }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 bg-trans">
                <h3>Setup profile</h3>  
                <button @click="delete_games(userid)" type="button" class="btn btn-sm btn-outline-secondary mt-3">Delete user games</button>

                <form v-on:submit.prevent="editUser()" class="mt-5">
                    <label for="name">Change user name:</label>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" v-model="username">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-secondary btn-long">Change</button>
                            </div>
                        </div>
                    </div>
                </form>
                <h1>{{currentGames()}}</h1>
            </div>
        </div>
    </div>    
    <router-views></router-views>
</template>

<script>
export default {
    data() {
        return {
                username: '',
                userid: '',
                games: {
                    succes: '',
                    user: '',
                    resoults: []
                },
                game: {
                    user_id: '',
                    dice1: '' ,
                    dice2: '' ,
                    success: ''
                },
                is_played: false
        }
    },
    beforeMount() {
        //Token
        watch: {
            if (localStorage.getItem('token')) {
                this.isAuthenticated = true;
            } else {
                this.isAuthenticated = false;
                this.$router.push({name: 'login'});
            }
        }
        //Username
        this.getGames();
    },
    methods: {
        play(user_id) {
            let currentUrl = window.location.href;
            let url =  `${currentUrl}api/players/${user_id}/games`;

            axios.post(url)
            .then((response) => {
                this.game = response.data.game;
                this.is_played = true;
                this.getGames();
            });
        },
        delete_games(user_id) {
            /*alert(user_id);*/
            const url = `api/players/${user_id}/games`;
            axios.delete(url);
        },
        editUser() {
             const url = `api/players/${this.userid}`;
            axios.put(url, {id: this.userid, name: this.username})
            .then((response) => {
                //
           }).catch((error) => {
               alert(error);
           });
        },
        getGames(){
            this.username = localStorage.getItem('username');
            this.userid = localStorage.getItem('userid');

            const url=`api/players/${this.userid}/games`;

            axios.get(url)
            .then((response) => {
                this.games = response.data;
            });
        }
    },
    computed: {
        currentGames(){
            console.log(this.games.resoults);
            return this.games.resoults;
        }
    }
}
</script>

<style>
    .content {
        padding: 15px;
    }
    .welcome {
        text-align: center;
        font-size: 25px;
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
    .center {
        text-align:center;
    }
    .bg-trans {
        background-color: #b9b9b94d;
        border-radius: 20px;
        padding: 25px;
    }
    .player-results {
        display: inline-block;
    }
    .player-results p {
        margin-bottom: 0;
        margin-top: 40px;
    }
    .player-results div {
        float: left;
        margin: 0 5px;
        padding: 12px 0;
    }
    .player-results span {
        background-color: #ff5454;
        padding: 10px;
        border-radius: 10px;
        color: white;
    }
    .player-results span.green {
        background-color: #00b700;
    }
    .btn-long {
        width: 100%;
        height: 40px;
        padding: 0;
    }
</style>