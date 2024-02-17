<template>
    <div class="rs-timeline">

        <div class="rs-timeline-block" v-for="(campusAddress,index) in campusAddresses" :key="index">
            <div class="rs-timeline-icon">
                <i :class="campusAddress.icon"></i>
            </div>

            <div class="rs-timeline-content">
                <h3>{{ campusAddress.title }}</h3>
                <p>Address: {{ campusAddress.address }}</p>
                <p>Mobile: {{ campusAddress.mobile }}</p>
                <p>E-mail: <a :href="`mailto:${campusAddress.email}`">{{ campusAddress.email }}</a></p>
                <p>Website: <a :href="`${campusAddress.website}`" target="_blank">{{ campusAddress.website }}</a>
                </p>
                <span class="rs-date">{{ campusAddress.title }}</span>
            </div>
        </div>

    </div>
</template>

<script>
import {campusAddresses} from '../../data/campusAddresses'

export default {
    name: "InstituteInfo",
    data() {
        return {
            campusAddresses
        }
    }
}
</script>

<style scoped>

</style>
