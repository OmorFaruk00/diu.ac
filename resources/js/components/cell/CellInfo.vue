<template>
    <div class="rs-timeline">

        <div class="rs-timeline-block" v-for="(cell,index) in cell" :key="index">
            <div class="rs-timeline-icon">
                <i :class="cell.icon"></i>
            </div>

            <div class="rs-timeline-content">
                <h3>{{ cell.title }}</h3>
                <p>{{ cell.description }}</p>
                <a v-if="cell.url" :href="cell.url" target="_blank" class="rs-read-more">Read more</a>
                <span class="rs-date">{{ cell.title }}</span>
            </div>
        </div>

    </div>
</template>

<script>
import {cell} from '../../data/cell'

export default {
    name: "InstituteInfo",
    data() {
        return {
            cell
        }
    }
}
</script>

<style scoped>

</style>
