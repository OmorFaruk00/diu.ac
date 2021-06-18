<template>

    <div v-if="galleries?.length > 0" class="container">
        <div class="sec-title-2 mb-50 text-center">
            <h2>GALLERY</h2>
            <p>Our students engage themselves in various interesting extra curricular activities all through the
                year.</p>
        </div>

        <viewer :images="galleries">
            <div class="card-columns">
                <div class="card" v-for="(src,index) in galleries" :key="index">
                    <img class="card-img-top" :src="src.image_url" :alt="src.title" style="cursor: pointer;">
                    <div class="card-body">
                        <p class="card-text">{{ src.title }}</p>
                    </div>
                </div>
            </div>
        </viewer>

        <nav aria-label="Page navigation example">
            <ul class="pagination pagination-sm justify-content-center">

                <li class="page-item" :class="meta.current_page >1 ? '' :  'disabled'">
                    <a class="page-link fa fa-angle-left" href="javaScript:void(0)" @click="paginatePreview"></a>
                </li>

                <li class="page-item" v-for="(row,index) in meta?.last_page" :key="index">
                    <a class="page-link" :class="row == meta?.current_page ? 'active' : ''"
                       @click="paginatePageWise(row)"
                       href="javaScript:void(0)">{{ row }}</a>
                </li>


                <li class="page-item" :class="meta.last_page > meta.current_page ? '' : 'disabled'">
                    <a class="page-link fa fa-angle-right" href="javaScript:void(0)" @click="paginateNext"></a>
                </li>


            </ul>
        </nav>
    </div>


</template>

<script>
import Form from "../../services/form";

export default {
    name: "gallery",
    data: () => ({
        form: new Form(),
        galleries: [],
        links: [],
        meta: [],
    }),

    methods: {
        getGalleryInfo() {

            this.form.get(`public-diu-website/department-gallery/${route().params.slug}`).then((res) => {

                this.galleries = res.data;
                this.links = res.links;
                this.meta = res.meta;

            }).catch((error) => {
                console.log('galleries Info')
            });
        },

        paginatePreview() {
            let page_number = parseInt(this.meta.current_page - 1);
            this.fetchGalleryPaginateInfo(page_number);
        },

        paginateNext() {

            let page_number = parseInt(this.meta.current_page + 1);
            this.fetchGalleryPaginateInfo(page_number);

        },

        paginatePageWise(row) {
            this.fetchGalleryPaginateInfo(row);
        },

        fetchGalleryPaginateInfo(page) {

            this.form.get(`public-diu-website/department-gallery/${route().params.slug}?page=${page}`).then((res) => {

                this.galleries = res.data;
                this.links = res.links;
                this.meta = res.meta;

            }).catch((error) => {
                console.log('galleries Info')
            });
        },

    },

    created() {
        this.getGalleryInfo();
    }
}
</script>

<style scoped>

</style>
