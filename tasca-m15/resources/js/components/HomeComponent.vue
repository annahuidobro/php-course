<template>
    <header-component></header-component>
    
    <div class="container">
        <div v-if="!isAuthenticated" class="row">
            <div class="col-12 mt-3">
                <div class="notice">
                    <p>Please login or register</p>
                </div>
            </div>
            <div class="col-6 relative">
                <login></login>
                <div class="separator"></div>
            </div>
            <div class="col-6">
                <register></register>
            </div>    
        </div>
        <div v-else class="row">
            <player-component></player-component>
            <general-rankings></general-rankings>
            <table-component></table-component>
        </div>
    </div>
    
    
    <router-views></router-views>
</template>

<script>
import HeaderComponent from  './HeaderComponent'
import Login from './Login.vue'
import PlayerComponent from './PlayerComponent'
import Register from './Register.vue'
import TableComponent from './TableComponent'
import GeneralRankins from './GeneralRankings'
import GeneralRankings from './GeneralRankings.vue'

export default {
    components: {
        HeaderComponent,
        PlayerComponent,
        TableComponent,
        Login,
        Register,
        GeneralRankings,
    },
    data() {       
        return {
            isAuthenticated: false
        }
    },
    watch: {
        $route() {
            //Token
            if (localStorage.getItem('token'))
                this.isAuthenticated = true
            else {
                this.isAuthenticated = false
                this.$router.push({name: 'login'})
            }
            //Username
            if (localStorage.getItem('username'))
                this.username = localStorage.getItem('username')
            else
                this.username = ''
        }
    },
    methods: {
        logout() {
            axios.defaults.headers.common = {
                Authorization: "Bearer " + localStorage.getItem("token")
            };

            let currentUrl = window.location.href;
            let url =  `${currentUrl}api/auth/logout`;

            axios.post(url).then(() => {
                localStorage.removeItem('token')
                localStorage.removeItem('username')
                this.$router.push({name: 'login'})
            });
        }
    }
}
</script>
<style>
.notice p {
  display: block;
    padding: 30px;
    border: 1px dashed #ff00003d;
    width: 350px;
    text-align: center;
    margin: 0 auto;
    background-color: #ff00001a;
}

    .relative {
        position: relative;
    }

    .separator {
        width: 1px;
        height: 330px;
        background-color: black;
        top: 170px;
        position: absolute;
        right: 0;
    }
</style>