<template>
    <div class="container mt-3">
        <div class="col-12">
            <h1>Total players resoluts</h1>
            <table class="table table-striped table-sm">
				<thead>
					<tr>
					<th scope="col">Total success</th>
					<th scope="col">Sum success</th>
					<th scope="col">Total plays</th>
					<th scope="col">Winner</th>
					<th scope="col">Loser</th>
					</tr>
				</thead>
				<tbody>
                    <tr>
                        <td>{{ totals.total_average }}</td>
                        <td>{{ totals.sum_success }}</td>
                        <td>{{ totals.total_plays }}</td>
                        <td>{{ winner.winner_player }}</td>
                        <td>{{ loser.loser_player }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            totals: {
                succes: '',
                total_average: '',
                sum_success: '',
                total_plays: ''
            },
            winner: {
                success: '',
                winner_player: '',
                percent_succes_winner: ''
            },
            loser: {
                success: '',
                loser_player: '',
                percent_succes_winner: ''
            }
        };
    },
    beforeMount() {
        watch: {
            let url = `/api/players/ranking`;
            axios.get(url)
            .then((response) => {
                this.totals = response.data;
            });
            
            url = `/api/players/ranking/winner`;
            axios.get(url)
            .then((response) => {
                this.winner = response.data;
            });


            
            url = `/api/players/ranking/loser`;
            axios.get(url)
            .then((response) => {
                this.loser = response.data;
            });
        }
    }
}
</script>
<style>

</style>