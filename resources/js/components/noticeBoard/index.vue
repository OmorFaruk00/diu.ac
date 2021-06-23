<template>
    <div class="col-lg-6">
        <h2 class="uppercase title pb-50 md-pb-30">Our Latest Notice</h2>
        <div class="rs-latest-list">

            <NoticeItem v-for="(n,index) in notices" :row="n" :key="index"/>

            <div class="event-item-new d-block mb-10">
                <div class="event-des text-right">

                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-sm justify-content-center">

                            <li class="page-item" :class="noticeMeta.current_page >1 ? '' :  'disabled'">
                                <a class="page-link fa fa-angle-left" href="javaScript:void(0)"
                                   @click="paginateNoticePreview"></a>
                            </li>

                            <li class="page-item" v-for="(row,index) in noticeMeta?.last_page" :key="index">
                                <a class="page-link" :class="row == noticeMeta?.current_page ? 'active' : ''"
                                   @click="paginateNoticePageWise(row)"
                                   href="javaScript:void(0)">{{ row }}</a>
                            </li>


                            <li class="page-item"
                                :class="noticeMeta.last_page > noticeMeta.current_page ? '' : 'disabled'">
                                <a class="page-link fa fa-angle-right" href="javaScript:void(0)"
                                   @click="paginateNoticeNext"></a>
                            </li>


                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <h2 class="uppercase title pb-50 md-pb-30">Our Latest Events</h2>
        <div class="rs-latest-list">

            <NoticeItem v-for="(n,index) in events" :row="n" :key="index"/>

            <div class="event-item-new d-block mb-10">
                <div class="event-des">

                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-sm justify-content-center">

                            <li class="page-item" :class="eventMeta.current_page >1 ? '' :  'disabled'">
                                <a class="page-link fa fa-angle-left" href="javaScript:void(0)"
                                   @click="paginateEventPreview"></a>
                            </li>

                            <li class="page-item" v-for="(row,index) in eventMeta?.last_page" :key="index">
                                <a class="page-link" :class="row == eventMeta?.current_page ? 'active' : ''"
                                   @click="paginateEventPageWise(row)"
                                   href="javaScript:void(0)">{{ row }}</a>
                            </li>


                            <li class="page-item"
                                :class="eventMeta.last_page > eventMeta.current_page ? '' : 'disabled'">
                                <a class="page-link fa fa-angle-right" href="javaScript:void(0)"
                                   @click="paginateEventNext"></a>
                            </li>


                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NoticeItem from "../molecule/NoticeItem";
import Form from "../../services/form";

export default {

    name: "NoticeEvent",
    components: {
        NoticeItem
    },
    data: () => ({
        form: new Form(),
        notices: [],
        noticeLinks: [],
        noticeMeta: [],

        events: [],
        eventLinks: [],
        eventMeta: [],
    }),

    methods: {
        getNotice() {
            this.form.get(`/public-diu-website/notice-event?type=notice`).then((res) => {

                this.notices = res.data;
                this.noticeLinks = res.link;
                this.noticeMeta = res.meta;

            }).catch((error) => {
                console.log('notice error')
            });

        },

        paginateNoticePreview() {
            let page_number = parseInt(this.noticeMeta.current_page - 1);
            this.fetchNoticePaginateInfo(page_number);
        },

        paginateNoticeNext() {

            let page_number = parseInt(this.noticeMeta.current_page + 1);
            this.fetchNoticePaginateInfo(page_number);

        },

        paginateNoticePageWise(row) {
            this.fetchNoticePaginateInfo(row);
        },

        fetchNoticePaginateInfo(page) {

            this.form.get(`/public-diu-website/notice-event?type=notice&page=${page}`).then((res) => {

                this.notices = res.data;
                this.noticeLinks = res.links;
                this.noticeMeta = res.meta;

            }).catch((error) => {
                console.log('notice Info')
            });
        },

        getEvent() {

            this.form.get("/public-diu-website/notice-event?type=event").then((res) => {

                this.events = res.data;
                this.eventLinks = res.links;
                this.eventMeta = res.meta;

            }).catch((error) => {
                console.log('event error')
            });
        },

        paginateEventPreview() {
            let page_number = parseInt(this.eventMeta.current_page - 1);
            this.fetchEventPaginateInfo(page_number);
        },

        paginateEventeNext() {

            let page_number = parseInt(this.eventMeta.current_page + 1);
            this.fetchEventPaginateInfo(page_number);

        },

        paginateEventPageWise(row) {
            this.fetchEventPaginateInfo(row);
        },

        fetchEventPaginateInfo(page) {

            this.form.get(`/public-diu-website/notice-event?type=event&page=${page}`).then((res) => {

                this.events = res.data;
                this.eventLinks = res.links;
                this.eventMeta = res.meta;

            }).catch((error) => {
                console.log('notice Info')
            });
        },


    },

    created() {
        this.getNotice();
        this.getEvent();
    }
}
</script>

<style scoped>

</style>
