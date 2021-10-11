<template>
    <div class="container">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <header-component></header-component>
                <main-component></main-component>
                <h3>Players</h3>
                <table-component></table-component>
            </div>
        </div>
    </div>
    <router-views>
        
    </router-views>
</template>

<script>
    import HeaderComponent from  './HeaderComponent'
    import MainComponent from './MainComponent'
    import TableComponent from './TableComponent'
    export default {
        components: {
            HeaderComponent,
            MainComponent,
            TableComponent,
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