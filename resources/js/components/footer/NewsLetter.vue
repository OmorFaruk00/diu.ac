<template>
    <h5 class="footer-title">NEWSLETTER</h5>
    <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>


    <form @submit.prevent="newsletterFormSubmit" class="news-form">
        <div class="row">
            <div class="col-12">
                <input type="text" id="email" name="email" v-model="newsletter.email" class="form-input"
                       placeholder="Enter Your Email" required>

                <button type="submit" class="form-button">
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </button>
            </div>

            <div class="col-12">
                <small v-if="errors.email" class="text-danger with-errors"
                       v-html="errors.email[0]"></small>
            </div>

        </div>

        <div class="row">
            <div class="col-12 mt-2" style="max-width: 98%;margin: 0 auto;">
                <img src="/thumbnail_National-Helpline-DIU.jpg" class="img-fluid text-center" alt="DIU">
            </div>
        </div>

    </form>


</template>

<script>
import Form from '../../services/form'


export default {
    name: "NewsLetter",
    data: () => ({
        newsletter: new Form({
            'email': ''
        }),
        errors: ''
    }),
    methods: {
        newsletterFormSubmit() {

            this.newsletter.post("public-diu-website/newslatter").then((res) => {
                toast.fire({
                    icon: 'success',
                    title: res.message
                });
                this.newsletter.email = '';
                this.errors = '';
            }).catch((error) => {
                console.log('newsletter error');

                if (error.response.status == 422) {
                    this.errors = error.response.data;
                }
            });
        }
    }
}
</script>

<style scoped>

</style>
