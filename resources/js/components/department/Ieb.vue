<template>
    <div class="container" v-if="IebMembership">
        <div class="row">

            <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50" v-html="IebMembership.youtube_url"></div>

            <div class="col-lg-6 col-md-12">

                <div class="abt-title">
                    <h2>{{ IebMembership.title }}</h2>
                </div>

                <div class="about-desc">
                    <p v-html="IebMembership.description"></p>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
import Form from "../../services/form";

export default {
    name: "Ieb",
    data: () => ({
        form: new Form(),
        IebMembership: ''
    }),

    methods: {
        getIebMembershipInfo() {

            this.form.get(`public-diu-website/department-ieb-membership/${route().params.slug}`).then((res) => {
                this.IebMembership = res
            }).catch((error) => {
                console.log('ieb-membership')
            });
        }
    },
    created() {
        this.getIebMembershipInfo();
    }
}
</script>

<style scoped>

</style>
