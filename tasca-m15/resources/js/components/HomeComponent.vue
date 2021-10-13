<template>
    <header-component></header-component>
    <player-component></player-component>
    <table-component></table-component>
    <router-views></router-views>
</template>

<script>
    import HeaderComponent from  './HeaderComponent'
    import PlayerComponent from './PlayerComponent'
    import TableComponent from './TableComponent'
    import Register from './Register'

    export default {
        components: {
            HeaderComponent,
            PlayerComponent,
            TableComponent,
            Register
        },
        data() {       
            return {
                users: [
                    {
                        id: '1',
                        name: 'User 1',
                        ranking: 0,
                        lastgame: '2021-10-01'
                    },
                    {
                        id: '2',
                        name: 'User 2',
                        ranking: 1000,
                        lastgame: '2021-10-09'
                    }
                ]
            }
        },
	}
</script>