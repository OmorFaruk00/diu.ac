<template>
    <div class="container" v-if="facilities?.length > 0">
        <div class="sec-title mb-30 text-center">
            <h2>Facilities</h2>
        </div>

        <div class="row">

            <div class="card-columns">
                <div class="card text-center" v-for="(facility,index) in facilities" :key="index">
                    <div class="card-body">
                        <h5 class="card-title">{{ facility.title }}</h5>
                        <p class="card-text" v-html="facility.description"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import Form from "../../services/form";

export default {
    name: "Facilities",
    data: () => ({
        form: new Form(),
        facilities: []
    }),

    methods: {
        getFacilitiesInfo() {

            this.form.get(`public-diu-website/department-facilities/${route().params.slug}`).then((res) => {
                this.facilities = res
            }).catch((error) => {
                console.log('Facilities Info')
            });
        }
    },
    created() {
        this.getFacilitiesInfo();
    }
}
</script>

<style scoped>
.facilities {
    padding: 25px 15px 15px !important !important;
}

</style>
