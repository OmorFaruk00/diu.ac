<template>
    <div class="row rs-vertical-middle">

        <div v-if="basic?.chairman_name" class="col-lg-7 col-md-12">
            <div class="sec-title">
                <h2>Department Head</h2>
            </div>

            <p v-if="basic?.department_head_speach" v-html="basic.department_head_speach" class="mobile-mb-50"></p>

            <div class="row about-signature">
                <div class="col-md-12">
                    <h4>{{ basic.chairman_name }}</h4>
                    <span>{{ basic.chairman_designation }}</span> <br>
                    <span><a
                        :href="`mailto:${basic.chairman_office_email}`">{{ basic.chairman_office_email }}</a></span>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-md-12">
            <div class="about-img rs-image-effect-shine text-center">
                <a :href="`https://profile.diu.ac/${basic.chairman_slug}`" target="_blank">
                    <img :src="basic.chairman_image" :alt="basic.chairman_name">

                    <!--                    <img v-lazy="{ src: basic.chairman_image }" :alt="basic.chairman_name"/>-->

                </a>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "../../services/form";

export default {
    name: "chairman",
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
