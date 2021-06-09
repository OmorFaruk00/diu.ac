<template>

    <div class="container">
        <div class="sec-title mb-50 text-center">
            <h2>OUR Programs</h2>
        </div>

        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="false"
             data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true"
             data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
             data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
             data-ipad-device-dots="true" data-md-device="4" data-md-device-nav="true" data-md-device-dots="true">

            <div class="product-item" v-for="(program ,index) in programs.data" :key="index">

                <div class="product-img">
                    <a href="javaScript:void(0)">
                        <img style="height: 250px" :src="program.image_url" :alt="program.title"/>
                    </a>
                </div>

                <h4 class="product-title"><a href="javaScript:void(0)">{{ program.title }}</a></h4>
                <div class="product-btn">
                    <a href="https://admission.diu.ac/register" target="_blank">Apply Now</a>
                </div>

            </div>

        </div>
    </div>


</template>

<script>
import Form from '../../services/form'

export default {
    name: "OurProgram",
    data: () => ({
        form: new Form(),
        programs: [],
        programDetails: false
    }),
    props: {
        programs: {
            type: Array,
        }
    },

    methods: {
        async getPrograms() {

            await this.form.get("diu-website/programs").then((res) => {

                this.programs = res.data;
                this.programDetails = true;

                console.log(res.data, 'data');
                console.log(this.programDetails)

            }).catch((error) => {
                console.log('programs error')
            });
        }
    },
    created() {
        // this.getPrograms();
    }
}
</script>

<style scoped>
.product-item{
    height: 400px!important;
}
</style>
