<template>
    <div class="container" v-if="objectives?.length > 0">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="sec-title">
                    <h2>Objectives</h2>
                </div>
                <div class="about-desc">
                    <ul>

                        <span v-for="(objective,index) in objectives" :key="index">
                            <li v-if="objective?.title"><i class="fa fa-arrow-circle-o-right"></i> {{ objective.title }}</li>
                            <ul>
                                <li style="list-style: square;margin-left: 20px">{{ objective.description }}</li>
                            </ul>
                        </span>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "../../services/form";

export default {
    name: "Objectives",
    data: () => ({
        form: new Form(),
        objectives: []
    }),

    methods: {
        getObjectives() {

            this.form.get(`public-diu-website/department-objectives/${route().params.slug}`).then((res) => {

                this.objectives = res

            }).catch((error) => {
                console.log('Basic Info')
            });
        }
    },

    created() {
        this.getObjectives();
    }
}
</script>

<style scoped>

</style>
