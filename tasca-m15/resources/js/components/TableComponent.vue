<template>
	<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">% Success</th>
              <th scope="col">Last game</th>
            </tr>
          </thead>
          <tbody>
			<tr v-for="user in users" :key="user.id">
				<td>{{user.id}}</td>
				<td>{{user.name}}</td>
				<td>{{user.ranking}}</td>
				<td>{{user.last_game}}</td>
			</tr>
          </tbody>
        </table>
	</div>
</template>

<script>
	export default {
		data(){
			return{
				users:[]
			}
		},
		mounted() {
			axios.get('/api/players').then((response) => {
               this.users = response.data.users
            })
		}

	}

</script>
