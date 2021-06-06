<template>

    <div class="col-lg-6">
        <h2 class="uppercase title pb-50 md-pb-30">OUR LATEST NOTICE</h2>
        <div class="rs-latest-list">

            <NoticeItem v-for="(n,index) in 2" :row="n" :key="index"/>
            <div class="event-item-new d-block mb-10">
                <div class="event-des text-right">

                    <a :href="route('notice-board')" class="btn btn-success">See more..</a>

                </div>
            </div>

        </div>
    </div>

    <div class="col-lg-6">
        <h2 class="uppercase title pb-50 md-pb-30">OUR LATEST EVENTS</h2>
        <div class="rs-latest-list">

            <NoticeItem v-for="(n,index) in 2" :row="n" :key="index"/>
            <div class="event-item-new d-block mb-10">
                <div class="event-des text-right">

                    <a :href="route('notice-board')" class="btn btn-success">See more..</a>

                </div>
            </div>

        </div>
    </div>

</template>

<script>
import NoticeItem from "../molecule/NoticeItem";

export default {
    name: "NoticeEvent",
    components: {
        NoticeItem
    }

}
</script>

<style scoped>

</style>
