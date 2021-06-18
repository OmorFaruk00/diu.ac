<template>
    <div class="row">

        <div v-if="basic?.introduction" class="col-lg-12 col-md-12">
            <div class="sec-title">
                <h2>INTRODUCTION</h2>
            </div>

            <div class="about-desc">
                <p v-html="basic.introduction"></p>
            </div>
        </div>

        <div v-if="basic?.mission" class="col-lg-12 col-md-12">
            <div class="sec-title">
                <h2>MISSION</h2>
            </div>
            <div class="about-desc">
                <p v-html="basic.mission"></p>
            </div>
        </div>

        <div v-if="basic?.vission" class="col-lg-12 col-md-12">
            <div class="sec-title">
                <h2>VISION</h2>
            </div>
            <div class="about-desc">
                <p v-html="basic.vission"></p>
            </div>
        </div>

    </div>
</template>

<script>
import Form from "../../services/form";

export default {
    name: "basic",
    data: () => ({
        form: new Form(),
        basic: []
    }),

    methods: {
        getBasicInfo() {

            this.form.get(`public-diu-website/department-basic-info/${route().params.slug}`).then((res) => {
                this.basic = res.data
            }).catch((error) => {
                console.log('Basic Info')
            });
        }
    },
    created() {
        this.getBasicInfo();
    }
}
</script>

<style scoped>

</style>
