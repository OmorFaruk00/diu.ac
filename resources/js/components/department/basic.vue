<template>
    <div class="row">

<!--        {{ route().params.slug }}-->

        <div class="col-lg-12 col-md-12">
            <div class="sec-title">
                <h2>INTRODUCTION</h2>
            </div>
            <div class="about-desc">
                <p>The Department of Computer Science and Engineering (CSE) at Dhaka International University
                    (also known as DIU) is a place where brightest minds from all over the country and abroad
                    assembles for a greater future. We have a strong alumni association to exchange academic and
                    professional knowledge and experience among the existing and former students of DIU in the
                    field of CSE. Our alumni serve in the top ranking universities as teachers and researchers
                    and in the top companies all around the world as software engineers and IT specialists. We
                    organize various co-curricular and extra-curriculum activities. Such as Programming contest,
                    Workshop, job Fair, The Debating Club, Seminar, Intra-Department Football/Cricket
                    Tournament, Indoor Games, etc. Our students are well equipped to take the challenge to stand
                    out as the leaders of tomorrow. We welcome all in our community who are willing to take the
                    challenge and who are trying to be the best in their future. Welcome to CSEDIU.</p>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="sec-title">
                <h2>MISSION</h2>
            </div>
            <div class="about-desc">
                <p>The mission of department of computer Science and Engineering (CSE) is to teach and prepare
                    educated, skilled, & ethically sound computer scientists and engineers for leadership and
                    professional careers and for advanced studies.</p>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="sec-title">
                <h2>VISION</h2>
            </div>
            <div class="about-desc">
                <p>To produce competent professionals who shall be leaders in technology, industry and research
                    at the national and international level.</p>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "../../services/form";

export default {
    name: "basic",
    data: () => ({
        form: new Form(),
        programs: []
    }),

    methods: {
        getPrograms() {

            this.form.get("public-diu-website/programs").then((res) => {

                this.programs = res.data;

            }).catch((error) => {
                console.log('programs error')
            });
        }
    },
    created() {
        // this.getPrograms();
    }
}
</script>

<style scoped>

</style>
