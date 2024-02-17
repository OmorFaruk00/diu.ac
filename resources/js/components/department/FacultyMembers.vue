<template>
    <div class="container" v-if="faculties?.length > 0">
        <div class="sec-title-2 mb-50 text-center">
            <h2>Faculty Members</h2>
        </div>

        <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true"
             data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true"
             data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
             data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
             data-ipad-device-dots="true" data-md-device="4" data-md-device-nav="true" data-md-device-dots="true">


            <teamSection v-for="(team,index) in faculties" :team="team" :key="index"/>

        </div>
    </div>
</template>

<script>
import {teams} from '../../data/teams';
import teamSection from '../molecule/Faculty';

export default {
    name: "FacultyMembers",
    data: () => ({
        teams
    }),
    props: {
        faculties: {
            type: Array,
            required: true
        }
    },
    components: {
        teamSection
    },
}
</script>

<style scoped>

</style>
