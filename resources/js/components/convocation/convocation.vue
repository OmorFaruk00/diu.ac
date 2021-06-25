<template>

    <div class="container">
        <div class="sec-title-2 mb-70 text-center">
            <h2>WELCOME TO OUR CONVOCATION</h2>
            <p>
                Convocation is a formal gathering of people who have been asked to come together, or a formal
                ceremony at a college or university where awards are given. Dhaka International University is
                organized the convocation ceremony to confer the degree to the graduate students almost every year.
            </p>
        </div>
        <div id="convocation" class="rs-accordion-style1">

            <div class="card" v-for="(row,index) in convocations" :key="index">
                <div class="card-header" :id="`ourConvocation${index}`">
                    <h3 class="acdn-title" :class="index != '0' ? 'collapsed' : ''" data-toggle="collapse"
                        :data-target="`#collapseOurMission${index}`"
                        aria-expanded="true" :aria-controls="`collapseOurMission${index}`">
                        {{ row.title }} <span class="convocation-sub-title">/ {{
                            stringLimit(row.short_description, 95)
                        }}</span>
                    </h3>
                </div>

                <div :id="`collapseOurMission${index}`" :class="index == '0' ? 'show' : ''" class="collapse" :aria-labelledby="`ourConvocation${index}`"
                     data-parent="#convocation">
                    <div class="card-body">

                        <div class="row">

                            <div class="col-12 description" style="font-weight: 700"
                                 v-html="row.short_description"></div>
                            <br>

                            <div class="col-12 description" v-html="row.description"></div>
                            <br>

                            <viewer :images="row.convoction_images">
                                <div class="row">
                                    <div v-for="(innerRow,innerIndex) in row.convoction_images" :key="innerIndex"
                                         class="col-lg-3 col-md-3 col-sm-6 mb-4">


                                        <img :src="innerRow.image_url" :alt="row.title" style="cursor: pointer">


                                    </div>
                                </div>
                            </viewer>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
import Form from '../../services/form'

export default {
    name: "convocation",
    data: () => ({
        form: new Form(),
        convocations: []
    }),

    methods: {
        getConvocations() {

            this.form.get("/public-diu-website/convocations").then((res) => {

                this.convocations = res;

            }).catch((error) => {
                console.log('programs error')
            });
        },

        stringLimit(text, count) {
            return text.slice(0, count) + (text.length > count ? " ..." : "");
        }
    },

    created() {
        this.getConvocations();
    }
}
</script>

<style>
.description {
    margin-left: 15px;
}

.description ul {
    list-style: circle !important;
}

</style>
