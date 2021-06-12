<template>

    <h2>Our Journals</h2>

    <ul>
        <li v-for="(row,index) in journals" :key="index">
            <i class="fa fa-arrow-circle-right mr-2"></i>
            <a :href="row.image_url" target="_blank"> {{ row.title }}</a>
        </li>
    </ul>

</template>

<script>
import Form from '../../services/form'
export default {
    name: "Journal",
    data: () => ({
        form: new Form(),
        journals: [],
    }),

    methods: {
        getJournals() {

            this.form.get("public-diu-website/publication").then((res) => {

                this.journals = res;

            }).catch((error) => {
                console.log('programs error')
            });
        }
    },

    created() {
        this.getJournals();
    }
}
</script>

<style scoped>

</style>
