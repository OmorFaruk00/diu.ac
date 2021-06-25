<template>
    <div class="container">
        <div class="sec-title-2 mb-50 text-center">
            <h2>WELCOME TO OUR CLUB</h2>
            <p>Dhaka International University has formally formed different
                separate clubs for development of student . The following clubs are run successfully by the students
                and teachers.</p>
        </div>
        <div class="rs-timeline">

            <div class="rs-timeline-block" v-for="(club,index) in clubs" :key="index">

                <div class="rs-timeline-icon">
                    <i :class="club.icon"></i>
                </div>

                <div class="rs-timeline-content">
                    <h3>{{ club.title }}</h3>
                    <p>{{ club.description }}</p>
                    <a v-if="club.url" :href="club.url" target="_blank" class="rs-read-more">Read more</a>
                    <span class="rs-date">{{ club.title }}</span>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
import {clubs} from '../../data/clubs'


export default {
    name: "ClubInfo",
    data: () => ({
        clubs
    })
}
</script>

<style scoped>

</style>
