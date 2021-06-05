<template>
    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true"
         data-autoplay-timeout="5000" data-smart-speed="1200" data-dots="true" data-nav="true"
         data-nav-speed="false" data-mobile-device="1" data-mobile-device-nav="true"
         data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="true"
         data-ipad-device-dots="true" data-md-device="3" data-md-device-nav="true" data-md-device-dots="true">

        <div v-for="(row,index) in 10" :key="index" class="team-item">

            <div class="team-img">
                <img src="http://webdev.diu.ac/front/images/sections/1.jpg" alt="team Image"/>
                <div class="normal-text">
                    <h3 class="team-name">Our Campus Life {{ row }}</h3>
                </div>
            </div>

            <div class="team-content">
                <div class="overly-border"></div>
                <div class="display-table">
                    <div class="display-table-cell">
                        <h3 class="team-name"><a href="javaScript:void(0)">Our Campus Life</a></h3>
                        <p class="team-desc">
                            DIU offers well-decorated hostel with modern facilities.At present there are seven
                            boys hostel (Nikunja, Khilkhet and Satarkul, Badda) and two girls hostels (Green
                            Road & Satarkul).
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</template>

<script>
export default {
    name: "OurCampusLife"
}
</script>

<style scoped>

</style>
