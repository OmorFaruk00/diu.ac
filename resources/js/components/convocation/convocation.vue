<template>
    <div id="convocation" class="rs-accordion-style1">

        <div class="card" v-for="(row,index) in 5" :key="index">
            <div class="card-header" :id="`ourConvocation${index}`">
                <h3 class="acdn-title collapsed" data-toggle="collapse"
                    :data-target="`#collapseOurMission${index}`"
                    aria-expanded="true" :aria-controls="`collapseOurMission${index}`">
                    {{ row }} Convocation / Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, dolores!
                </h3>
            </div>

            <div :id="`collapseOurMission${index}`" class="collapse" :aria-labelledby="`ourConvocation${index}`"
                 data-parent="#convocation">
                <div class="card-body">

                    <div class="row">

                        <div class="col-12">
                            The mission of DIU is to produce capable leaders in the respective field of study
                            who can meet the challenges of present dynamic world. It wants to create
                            multidisciplinary knowledge, communication and interpersonal skills at the highest
                            level of excellence among the students which will make them honest, sincere and
                            dedicated in their thoughts and deeds.
                        </div>

                        <div v-for="row in 10" class="col-lg-3 col-md-3 col-sm-6 mb-4">
                            <img src="https://diu.ac/wp-content/themes/diu-theme-lite-v1/images/convocation-img.jpg"
                                 :alt="row">
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</template>

<script>
export default {
    name: "convocation"
}
</script>

<style scoped>

</style>
