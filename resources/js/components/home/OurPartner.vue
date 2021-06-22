<template>
    <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true"
         data-autoplay-timeout="2000" data-smart-speed="2000" data-dots="false" data-nav="false"
         data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false"
         data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false"
         data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false"
         data-md-device-dots="false">

        <div class="partner-item" v-for="(row,index) in partners" :key="index">

            <img

                v-lazy="{ src: row.image_url }"
                :alt="row.title">

        </div>

    </div>
</template>

<script>
export default {
    name: "OurPartner",
    props: {
        partners: {
            type: Array,
            required: true
        }
    },
}
</script>

<style scoped>

</style>
