<template>

    <div v-if="galleries?.length > 0" class="container">
        <div class="sec-title-2 mb-50 text-center">
            <h2>GALLERY</h2>
            <p>Our students engage themselves in various interesting extra curricular activities all through the
                year.</p>
        </div>

        <viewer :images="galleries">

            <div class="row">
                <div v-for="src in galleries" :key="src" class="col-lg-3 col-md-6 mb-4">

                    <div class="card">
                        <img :src="src.image_url" style="cursor: pointer">
                        <div class="card-body">

                            <p class="card-text">{{ src.title }}</p>

                        </div>
                    </div>
                </div>
            </div>

            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link dotted" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
                </ul>
            </nav>

        </viewer>
    </div>


</template>

<script>
import Form from "../../services/form";

export default {
    name: "gallery",
    data: () => ({
        form: new Form(),
        galleries: [],

    }),

    methods: {
        getGalleryInfo() {

            this.form.get(`public-diu-website/department-gallery/${route().params.slug}`).then((res) => {
                this.galleries = res.data;
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
