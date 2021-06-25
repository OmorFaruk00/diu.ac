<template>
    <div class="container">
        <div class="sec-title-2 mb-50 text-center">
            <h2>WELCOME TO OUR CELL</h2>
            <p>Dhaka International University formally formed various
                separate cell for development of DIU, Society as well as Bangladesh. Those cells are formed for work
                on specific purpose. Those cells actually work with various alliance, Government, non-governmental
                and international organizations work together.</p>
        </div>
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
