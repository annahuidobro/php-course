<template>
	<div>Example Component</div>
</template>

<script>
	
	export default {

	}

</script>

<style>

</style>

import { createApp } from 'vue';
import ExampleComponent from  './components/ExampleComponent'

createApp({
	components: {
		ExampleComponent,
	}
}).mount('#app');