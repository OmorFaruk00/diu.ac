<template>
    <div class="container" v-if="tuitionFees?.length > 0">

        <div class="sec-title-2 mb-50 text-center">
            <h2>Tuition Fee</h2>
            <p>For Undergraduate/ Honors Program / Master’s / Graduate Program
                <br>
                (** Tuition fee may be changed as per instruction of the authority.)</p>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div id="tuitionFee" class="rs-accordion-style1">

                    <div class="card" v-for="(row,index) in tuitionFees" :key="index">
                        <div class="card-header" :id="`ourTuitionFee${index}`">
                            <h3 class="acdn-title" :class="index != '0' ? 'collapsed' : ''" data-toggle="collapse"
                                :data-target="`#collapseTuitionFee${index}`"
                                aria-expanded="true" :aria-controls="`collapseTuitionFee${index}`">
                                {{ row.name }}
                            </h3>
                        </div>

                        <div :id="`collapseTuitionFee${index}`" class="collapse" :class="index == '0' ? 'show' : ''"
                             :aria-labelledby="`ourTuitionFee${index}`"
                             data-parent="#tuitionFee">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Sl. No.</th>
                                            <th>Name of Program</th>
                                            <th>Duration</th>
                                            <th>Credit</th>
                                            <th>Total Fees (BDT)</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr v-for="(programs,innerRow) in row.programs" :key="innerRow">
                                            <td>{{ innerRow + 1 }}</td>
                                            <td>{{ programs.short_name }}</td>
                                            <td>{{ programs.duration }}</td>
                                            <td>{{ programs.credit }}</td>
                                            <td>{{ programs.total_fee }}</td>
                                            <td class="text-center">
                                                <a :href="`https://admission.diu.ac/register?program=${programs.short_name}`"
                                                   target="_blank" class="btn btn-success">Apply <i
                                                    class="fa fa-rocket"></i></a>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
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
    name: "TuitionFee",
    data: () => ({
        form: new Form(),
        tuitionFees: []
    }),

    methods: {
        getTuitionFee() {

            this.form.get("/tuition_fee").then((res) => {

                this.tuitionFees = res.data;

            }).catch((error) => {
                console.log('programs error')
            });
        }
    },

    created() {
        this.getTuitionFee();
    }
}
</script>

<style scoped>

</style>
