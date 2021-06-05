<template>
    <div class="rs-carousel owl-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true"
         data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true"
         data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
         data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
         data-ipad-device-dots="true" data-md-device="4" data-md-device-nav="true" data-md-device-dots="true">


        <div class="team-item" v-for="(row,index) in 8" :key="row">
            <div class="team-img">
                <img src="http://webdev.diu.ac/front/images/team/2.jpg" alt="team Image"/>
                <div class="normal-text">
                    <h3 class="team-name">Luyes Figery {{ row }}</h3>
                    <span class="subtitle">A. Professor</span>
                </div>
            </div>
            <div class="team-content">
                <div class="overly-border"></div>
                <div class="display-table">
                    <div class="display-table-cell">
                        <h3 class="team-name"><a href="javaScript:void(0)">Luyes Figery</a></h3>
                        <span class="team-title">A. Professor</span>
                        <p class="team-desc">Entrusted with planning, implementation and evaluation.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
export default {
    name: "ExperienceStaffs"
}
</script>

<style scoped>

</style>
