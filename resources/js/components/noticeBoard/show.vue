<template>
    <div class="container">
        <div class="row">

            <div class="col-12">

                <h4 class="uppercase title pb-50 md-pb-30">{{ noticeDetails.title }}</h4>
                <div class="rs-latest-list">

                    <h6>Published Date : {{ noticeDetails.published_date }}</h6>

                    <p v-html="noticeDetails.description"></p>

                    <p v-for="(notice_file,index) in noticeDetails?.notice_files" :key="index">
                        {{ notice_file.file_name }}
                        <a :href="notice_file.file_url" :download="notice_file.file_url" target="_blank">
                            <i class="ml-2 fa fa-download"></i>
                            Download
                        </a>
                    </p>

                </div>
            </div>

        </div>
    </div>
</template>

<script>
import Form from "../../services/form";

export default {
    name: "show",
    data: () => ({
        form: new Form(),
        noticeDetails: []
    }),

    methods: {
        getNoticeDetails() {

            this.form.get(`public-diu-website/notice/${route().params.slug}`).then((res) => {
                this.noticeDetails = res.data
            }).catch((error) => {
                console.log('Basic Info')
            });
        }
    },
    created() {
        this.getNoticeDetails();
    }
}
</script>

<style scoped>

</style>
