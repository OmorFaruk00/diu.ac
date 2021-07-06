<template>
    <div class="about-desc">
        <h3>Other Facilities</h3>
    </div>
    <div id="facilitiesAccordion" class="rs-accordion-style1">

        <div v-for="(otherFacility,index) in otherFacilities" :key="index" class="card">
            <div class="card-header" :id="`otherFacility${index}`">
                <h3 class="acdn-title collapsed" data-toggle="collapse"
                    :data-target="`#collapseAcademicSession${index}`"
                    aria-expanded="true" :aria-controls="`collapseAcademicSession${index}`">
                    {{ otherFacility.title }}
                </h3>
            </div>
            <div :id="`collapseAcademicSession${index}`" class="collapse" :aria-labelledby="`otherFacility${index}`"
                 data-parent="#facilitiesAccordion">
                <div class="card-body">
                    {{ otherFacility.description }}
                </div>
            </div>
        </div>

    </div>
</template>

<script>
import {otherFacilities} from "../../data/otherFacilities";

export default {
    name: "OtherFacilities",
    data() {
        return {
            otherFacilities
        }
    }
}
</script>

<style scoped>

</style>
