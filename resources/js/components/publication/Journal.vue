<template>

    <div class="container">
        <div class="sec-title-2 mb-70 text-center">
            <h2>WELCOME TO OUR publications</h2>
            <p>DIU is profoundly esteemed for it's own reputation which is
                built upon credibility, practical knowhow and a feasible archive of books, bulletins and journals.
                DIU has published a few original books written by its teachers and faculties. Whereas bulletins help
                students to keep upto date regarding their class and exam routines, schedule and other important
                notices. Both faculties and students of extraordinary merit are allowed to write their own
                journals.</p>
        </div>

        <h2>Our Journals</h2>

        <ul>
            <li v-for="(row,index) in journals" :key="index">
                <i class="fa fa-arrow-circle-right mr-2"></i>
                <a :href="row.image_url" target="_blank"> {{ row.title }}</a>
            </li>
        </ul>
    </div>

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
