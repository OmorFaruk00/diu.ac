<template>

    <!--    <div class="gridFilter">
            <button class="active" data-filter="filter2">All</button>

            <button v-for="(type,index) in types" :key="index" :data-filter="`.filter${type.id}`">{{ type.title }}</button>

        </div>

        <div class="row grid">

            <div v-for="(person,index) in persons"
                 :key="index" :class="`col-lg-3 col-md-4 grid-item filter${person.vital_person_type_id}`">
                <div class="cource-item">

                    <div class="governing-img">
                        <img :src="person.image_url" :alt="person.name"/>
                    </div>

                    <div class="course-body">
                        <h5 class="course-title">{{ person.name }}</h5>
                        <div class="course-desc">
                            <p>
                                {{ person.title }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>-->


    <div class="row">
        <div class="col-lg-12 col-md-12">


            <div id="vitalPerson" class="rs-accordion-style1">

                <div class="card" v-for="(row,index) in vitalPersonType" :key="index">
                    <div class="card-header" :id="`diuVitalPerson${index}`">
                        <h3 class="acdn-title" :class="index != '0' ? 'collapsed' : ''" data-toggle="collapse"
                            :data-target="`#collapseVitalPerson${index}`"
                            aria-expanded="true" :aria-controls="`collapseVitalPerson${index}`">
                            {{ row.title }}
                        </h3>
                    </div>

                    <div :id="`collapseVitalPerson${index}`" class="collapse" :class="index == '0' ? 'show' : ''"
                         :aria-labelledby="`diuVitalPerson${index}`"
                         data-parent="#vitalPerson">
                        <div class="card-body">

                            <div class="row">
                                <div v-for="(person,index) in row.vital_persons" :key="index" class="col-lg-3 col-md-4">
                                    <div class="cource-item">

                                        <div class="governing-img">
                                            <img :src="person.image_url" :alt="person.name"/>
                                        </div>

                                        <div class="course-body">
                                            <h5 class="course-title">{{ person.name }}</h5>
                                            <div class="course-desc">
                                                <p>
                                                    {{ person.title }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
    name: "GoverningBodies",
    props: {
        types: {
            type: Array,
            require: true
        },
        persons: {
            type: Array,
            require: true
        },
    },

    data: () => ({
        form: new Form(),
        vitalPersonType: []
    }),

    methods: {
        getVitalPersonType() {

            this.form.get("/public-diu-website/diu-governing-bodies").then((res) => {
                this.vitalPersonType = res.vitalPersonType;
            }).catch((error) => {
                console.log('governing bodies error')
            });
        }
    },

    created() {
        this.getVitalPersonType();
    }
}
</script>

<style scoped>

</style>
