<template>
    <form @submit.prevent="create()">

        <fieldset>

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>First Name*</label>
                        <input v-model="contactForm.first_name" name="first_name" id="first_name"
                               placeholder="Enter first name" class="form-control"
                               type="text" required>
                        <small v-if="errors.first_name" class="text-danger with-errors"
                               v-html="errors.first_name[0]"></small>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Last Name*</label>
                        <input v-model="contactForm.last_name" name="last_name" id="last_name" placeholder="Enter last name"
                               class="form-control"
                               type="text" required>

                        <small v-if="errors.last_name" class="text-danger with-errors"
                               v-html="errors.last_name[0]"></small>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Email*</label>
                        <input v-model="contactForm.email" name="email" id="email" placeholder="Enter email"
                               class="form-control"
                               type="email" required>

                        <small v-if="errors.email" class="text-danger with-errors"
                               v-html="errors.email[0]"></small>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Subject *</label>
                        <input v-model="contactForm.subject" name="subject" id="subject" placeholder="Enter subject"
                               class="form-control"
                               type="text" required>
                        <small v-if="errors.subject" class="text-danger with-errors"
                               v-html="errors.subject[0]"></small>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea v-model="contactForm.message" cols="40" rows="4" placeholder="Enter message" id="message"
                                  name="message"
                                  class="textarea form-control" required></textarea>
                        <small v-if="errors.message" class="text-danger with-errors"
                               v-html="errors.message[0]"></small>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 offset-lg-4 offset-md-4">
                    <button type="submit" class="btn btn-secondary btn-block">Send <i class="fa fa-rocket"></i></button>
                </div>

            </div>

        </fieldset>

    </form>
</template>

<script>
import Form from '../../services/form'

export default {
    name: "ContactForm",
    data: () => ({
        contactForm: new Form({
            first_name: '',
            last_name: '',
            email: '',
            subject: '',
            message: '',
        }),
        errors: '',
    }),
    methods: {
        create() {

            this.contactForm.post("public-diu-website/contact-form").then((res) => {
                toast.fire({
                    icon: 'success',
                    title: res.message
                });

                this.contactForm.first_name = '';
                this.contactForm.last_name = '';
                this.contactForm.email = '';
                this.contactForm.subject = '';
                this.contactForm.message = '';
                this.errors = '';

            }).catch((error) => {

                console.log('contact-form error');

                if (error.response.status == 422) {
                    this.errors = error.response.data;
                }
            });

            // contact-form
        }
    }
}
</script>

<style scoped>

</style>
