<template>

    <div class="container">
        <div class="abt-title mb-70 text-center">
            <h2>WELCOME TO OUR Certificate Verification</h2>
        </div>
    </div>

    <form @submit.prevent="checkCertificate">

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="roll">Roll</label>
                <select v-model="form.roll" class="form-control" required>
                    <option value="" selected disabled hidden>Select roll</option>
                    <option v-for="(row,index) in 600" :value="row">{{ padLeadingZeros(row, 2) }}</option>
                </select>
                <small v-if="errors.roll" class="text-danger with-errors"
                       v-html="errors.roll[0]"></small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="session">Session</label>
                <select v-model="form.session" class="form-control" required>
                    <option value="" selected disabled hidden>Select session</option>
                    <option v-for="(row,index) in years" :value="sessionCreate(row)">{{ sessionCreate(row) }}</option>
                </select>
                <small v-if="errors.session" class="text-danger with-errors"
                       v-html="errors.session[0]"></small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="reg_code">Reg Code</label>
                <input name="reg_code" type="text" v-model="form.reg_code" class="form-control"
                       placeholder="Enter reg code.Ex: 123456">
                <small v-if="errors.reg_code" class="text-danger with-errors"
                       v-html="errors.reg_code[0]"></small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <div class="form-group">
                <label for="passingYear">Passing Year</label>
                <input type="text" v-model="form.passing_year" class="form-control"
                       placeholder="Enter passing year.Ex:2021">
                <small v-if="errors.passing_year" class="text-danger with-errors"
                       v-html="errors.passing_year[0]"></small>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
            <button type="submit" class="btn btn-outline-info btn-block contact-button">Search
                <span v-if="loading" class="fa fa-spinner fa-pulse"></span>
            </button>

            <button v-if="transcript != '' || transcriptStatus" type="button" @click="clearButton"
                    class="btn btn-outline-danger btn-block mt-2">Clear
            </button>
        </div>

    </form>

    <div v-if="transcript != ''" class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3 mt-4">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 140px;">Name</th>
                            <td> {{ transcript.name }}</td>
                        </tr>

                        <tr>
                            <th>Roll</th>
                            <td>{{ transcript.roll }}</td>
                        </tr>


                        <tr>
                            <th>Program</th>
                            <td>{{ transcript.program }}</td>
                        </tr>

                        <tr>
                            <th>Batch</th>
                            <td>{{ transcript.batch }}</td>
                        </tr>

                        <tr>
                            <th>Session</th>
                            <td>{{ transcript.session }}</td>
                        </tr>

                        <tr>
                            <th>CGPA/Class</th>
                            <td>{{ transcript.cgpa }}</td>
                        </tr>

                        <tr>
                            <th>Passing Year</th>
                            <td>{{ transcript.passing_year }}</td>
                        </tr>

                    </table>
                </div>

            </div>
        </div>
    </div>

    <div v-if="transcriptStatus" class="col-lg-6 col-md-6 col-sm-12 offset-lg-3 offset-md-3 mt-4">
        <div class="card">
            <div class="card-body">

                <h4 class="text-center">{{ transcriptStatus }}</h4>

            </div>
        </div>
    </div>

</template>

<script>
import Form from '../../services/form'

export default {
    name: "index",
    data: () => ({
        form: new Form({
            'roll': '',
            'session': '',
            'reg_code': '',
            'passing_year': '',
        }),
        loading: false,
        transcript: [],
        transcriptStatus: '',
        errors: [],
    }),

    computed: {
        years() {
            const year = new Date().getFullYear()
            return Array.from({length: year - 1993}, (value, index) => 1993 + index)
        }
    },

    methods: {
        checkCertificate() {

            this.loading = true;
            this.form.post("transcript_verification").then((res) => {
                this.transcript = res.data;
                this.transcriptStatus = '';

                toast.fire({
                    icon: 'success',
                    title: 'Transcript found.'
                });

            }).catch((error) => {

                if (error.response.status == 404) {
                    this.transcriptStatus = error.response.data.error;
                    this.transcript = '';

                    toast.fire({
                        icon: 'info',
                        title: error.response.data.error
                    });

                } else if (error.response.status == 422) {
                    this.errors = error.response.data;
                    this.transcript = '';
                    this.transcriptStatus = '';
                } else {
                    console.log('certificate verification fail')
                }
            }).finally((res) => {
                this.loading = false;
            });

        },

        padLeadingZeros(num, size) {
            var s = num + "";
            while (s.length < size) s = "0" + s;
            return s;
        },

        sessionCreate(row) {
            let newYear = parseInt(row) + parseInt(1);
            return `${row}-${parseInt(row) + parseInt(1)}`;
        },

        clearButton() {
            this.form.roll = '';
            this.form.session = '';
            this.form.reg_code = '';
            this.form.passing_year = '';
            this.errors = '';
            this.transcript = '';
            this.transcriptStatus = '';
        }
    },
}
</script>

<style scoped>

</style>
