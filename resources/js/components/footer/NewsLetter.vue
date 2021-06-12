<template>
    <h5 class="footer-title">NEWSLETTER</h5>
    <p>Sign Up to Our Newsletter to Get Latest Updates &amp; Services</p>
    <form @submit.prevent="newsletterFormSubmit" class="news-form">
        <input type="text" v-model="newsletter.email" class="form-input" placeholder="Enter Your Email">
        <button type="submit" class="form-button"><i class="fa fa-arrow-right" aria-hidden="true"></i>
        </button>
    </form>
</template>

<script>
import Form from '../../services/form'


export default {
    name: "NewsLetter",
    data: () => ({
        newsletter: new Form({
            'email': ''
        })
    }),
    methods: {
        newsletterFormSubmit() {

            toast.fire({
                icon: 'success',
                title: 'Signed in successfully'
            });

            console.log(this.newsletter);
            console.log('newsletter form submit');
        }
    }
}
</script>

<style scoped>

</style>
