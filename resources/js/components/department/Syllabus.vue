<template>
    <div class="container" v-if="syllabus?.length > 0">
        <div class="sec-title-2 mb-50 text-center">
            <h2>Syllabus</h2>
            <p>A proper syllabus is maintained for the best outcome of academic experience in our university.</p>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="convocation" class="rs-accordion-style1">

                    <div class="card" v-for="(row,index) in syllabus" :key="index">
                        <div class="card-header" :id="`ourConvocation${index}`">
                            <h3 class="acdn-title collapsed" data-toggle="collapse"
                                :data-target="`#collapseOurMission${index}`"
                                aria-expanded="true" :aria-controls="`collapseOurMission${index}`">
                                {{ row.title }}
                            </h3>
                        </div>

                        <div :id="`collapseOurMission${index}`" class="collapse"
                             :aria-labelledby="`ourConvocation${index}`"
                             data-parent="#convocation">
                            <div class="card-body">

<!--                                <div class="row">-->

                                    <div class="col-12 test">
                                        <div class="table-responsive">
                                            <span v-html="row.description"></span>
                                        </div>
                                    </div>

<!--                                </div>-->

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "../../services/form";

export default {
    name: "Syllabus",
    data: () => ({
        form: new Form(),
        syllabus: []
    }),

    methods: {
        getSyllabus() {

            this.form.get(`public-diu-website/department-syllabus/${route().params.slug}`).then((res) => {

                this.syllabus = res;

            }).catch((error) => {
                console.log('programs error')
            });
        }
    },

    created() {
        this.getSyllabus();
    }
}
</script>

<style>

.test table {
    width: 100% !important;
    margin-bottom: 1rem !important;
    background-color: transparent;
    border: 1px solid #dee2e6 !important;
}

.test table-bordered td, .test table-bordered th {
    border: 1px solid #dee2e6 !important;
}

.test table td, .test table th {
    padding: .75rem !important;
    vertical-align: top !important;
    border-top: 1px solid #dee2e6 !important;
    border: 1px solid #dee2e6 !important;
}

.test {
    /*margin-left: 15px!important;*/
}

.test ul {
    list-style: circle !important;
}

</style>
