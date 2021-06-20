<template>

    <div class="col-lg-6">
        <h2 class="uppercase title pb-50 md-pb-30">OUR LATEST NOTICE</h2>
        <div class="rs-latest-list">

            <NoticeItem v-for="(n,index) in notice" :row="n" :key="index"/>
            <div class="event-item-new d-block mb-10">
                <div v-if="notice == ''" class="event-des text-center">

                    <h4>Notice Not Found</h4>

                </div>

                <div v-if="notice != ''" class="event-des text-right">

                    <a v-if="notice?.length == 5" :href="route('notice-board')" class="btn btn-success">See more..</a>

                </div>
            </div>

        </div>
    </div>

    <div class="col-lg-6">
        <h2 class="uppercase title pb-50 md-pb-30">OUR LATEST EVENTS</h2>
        <div class="rs-latest-list">

            <!--            <NoticeItem v-for="(n,index) in notice" :row="n" :key="index"/>-->
            <div class="event-item-new d-block mb-10">
                <div class="event-des text-right">

                    <a :href="route('notice-board')" class="btn btn-success">See more..</a>

                </div>
            </div>

        </div>
    </div>

</template>

<script>
import NoticeItem from "../molecule/NoticeItem"
import Form from '../../services/form'


export default {
    name: "NoticeEvent",
    components: {
        NoticeItem
    },
    data: () => ({
        form: new Form(),
        notice: []
    }),

    methods: {
        getNotice() {

            this.form.get("/public-diu-website/notice").then((res) => {

                this.notice = res.data.slice(0, 5);

            }).catch((error) => {
                console.log('programs error')
            });
        }
    },

    created() {
        this.getNotice();
    }

}
</script>

<style scoped>

</style>
