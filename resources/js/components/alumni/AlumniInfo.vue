<template>
    <div class="rs-timeline">

        <div class="rs-timeline-block" v-for="(alumni,index) in alumni" :key="index">
            <div class="rs-timeline-icon">
                <i :class="alumni.icon"></i>
            </div>

            <div class="rs-timeline-content">
                <h3>{{ alumni.title }}</h3>
                <p>{{ alumni.description }}</p>
                <a v-if="alumni.url" :href="alumni.url" target="_blank" class="rs-read-more">Read more</a>
                <span class="rs-date">{{ alumni.title }}</span>
            </div>
        </div>

    </div>
</template>

<script>
import {alumni} from '../../data/alumni'

export default {
    name: "AlumniInfo",
    data() {
        return {
            alumni
        }
    }
}
</script>

<style scoped>

</style>
