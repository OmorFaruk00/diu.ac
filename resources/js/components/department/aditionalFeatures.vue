<template>
    <div v-if="facilities?.length > 0" class="container-fluid">
        <div class="sec-title mb-30 text-center">
            <h2>Facilities</h2>
        </div>
        <div class="rs-timeline-2">

            <ol>
                <li v-for="(facility,index) in facilities" :key="index">
                    <div>
                        <time>{{ facility.title }}</time>
                        {{ facility.description }}
                    </div>
                </li>
            </ol>

            <div class="arrows">
                <button class="arrow arrow__prev disabled" disabled></button>
                <button class="arrow arrow__next"></button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "aditionalFeatures",
    props: {
        facilities: {
            type: Array,
            required: true
        }
    },
}
</script>

<style scoped>

</style>
