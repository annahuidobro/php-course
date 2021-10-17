<template>
    <div class="container">
        <h3>Totals</h3>
        <p>Total succes: {{ totals.total_average }}</p>
        <p>Sum succes: {{ totals.sum_success }}</p>
        <p>Sum succes: {{ totals.total_plays }}</p>
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
            }
        };
    },
    beforeMount() {
        watch: {
            const url = `/api/players/ranking`;
            axios.get(url)
            .then((response) => {
                this.totals = response.data;
            });
        }
    }
}
</script>
<style>

</style>