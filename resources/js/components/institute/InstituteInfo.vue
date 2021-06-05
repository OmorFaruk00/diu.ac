<template>
    <div class="rs-timeline">

        <div class="rs-timeline-block" v-for="(institute,index) in institutes" :key="index">
            <div class="rs-timeline-icon">
                <i :class="institute.icon"></i>
            </div>

            <div class="rs-timeline-content">
                <h3>{{ institute.title }}</h3>
                <p>{{ institute.description }}</p>
                <a v-if="institute.url" :href="institute.url" target="_blank" class="rs-read-more">Read more</a>
                <span class="rs-date">{{ institute.title }}</span>
            </div>
        </div>

    </div>
</template>

<script>
import {institutes} from '../../data/institutes'

export default {
    name: "InstituteInfo",
    data() {
        return {
            institutes
        }
    }
}
</script>

<style scoped>

</style>
