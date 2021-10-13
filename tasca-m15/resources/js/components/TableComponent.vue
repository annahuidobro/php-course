<template>
	<div class="container mt-3">
		<h1>Rankings</h1>
		<div class="row">
<div class="col-12">
			<table class="table table-striped table-sm">
			<thead>
				<tr>
				<th scope="col">#</th>
				<th scope="col">Name</th>
					<th scope="col">User tries</th>
				<th scope="col">% Success</th>
				<th scope="col">Last game</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="user in users" :key="user.id">
					<td>{{user.id}}</td>
					<td>{{user.name}}</td>
					<td>{{user.tries}}</td>
					<td>{{user.ranking}}</td>
					<td>{{user.last_game}}</td>
				</tr>
			</tbody>
        	</table>
		</div>
		</div>
		
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
			let currentUrl = window.location.href;
			let url =  `${currentUrl}api/players`;
			
			axios.get(url)
			.then((response) => {
               this.users = response.data.users
            });
		}

	}

</script>
