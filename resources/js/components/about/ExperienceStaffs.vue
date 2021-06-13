<template>
    <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true"
         data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true"
         data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
         data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
         data-ipad-device-dots="true" data-md-device="4" data-md-device-nav="true" data-md-device-dots="true">


        <teamSection v-for="(team,index) in persons.vital_persons" :team="team" :key="index"/>

    </div>
</template>

<script>
import teamSection from '../molecule/Team';

export default {
    name: "ExperienceStaffs",
    components: {
        teamSection
    },
    props: {
        persons: {
            type: Object,
        }
    },
}
</script>

<style scoped>

</style>
