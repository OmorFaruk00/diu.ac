<template>
    <form @submit.prevent="create()">
        <fieldset>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>First Name*</label>
                        <input v-model="contactForm.first_name" name="first_name" id="first_name" placeholder="first name" class="form-control"
                               type="text">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Last Name*</label>
                        <input v-model="contactForm.last_name" name="last_name" id="last_name" placeholder="last name" class="form-control"
                               type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Email*</label>
                        <input v-model="contactForm.email" name="email" id="email" placeholder="email" class="form-control"
                               type="email">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Subject *</label>
                        <input v-model="contactForm.subject" name="subject" id="subject" placeholder="subject" class="form-control"
                               type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea v-model="contactForm.message" cols="40" rows="4" placeholder="message" id="message" name="message"
                                  class="textarea form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group mb-0 text-right">
                <button type="submit" class="btn btn-secondary">Send <i class="fa fa-rocket"></i></button>
            </div>

        </fieldset>
    </form>
</template>

<script>
export default {
    name: "ContactForm",
    data: () => ({
        contactForm: {
            first_name: '',
            last_name: '',
            email: '',
            subject: '',
            message: '',
        }
    }),
    methods: {
        create(){
            console.log('working....')
        }
    }
}
</script>

<style scoped>

</style>
