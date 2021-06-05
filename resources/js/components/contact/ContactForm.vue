<template>
    <form id="contact-form" method="post" action="javaScript:void(0)">
        <fieldset>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>First Name*</label>
                        <input name="fname" id="fname" placeholder="first name" class="form-control"
                               type="text">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Last Name*</label>
                        <input name="lname" id="lname" placeholder="last number" class="form-control"
                               type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Email*</label>
                        <input name="email" id="email" placeholder="email" class="form-control"
                               type="email">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="form-group">
                        <label>Subject *</label>
                        <input name="subject" id="subject" placeholder="subject" class="form-control"
                               type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea cols="40" rows="4" placeholder="message" id="message" name="message"
                                  class="textarea form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group mb-0 text-right">
                <button class="btn btn-secondary">Send <i class="fa fa-rocket"></i></button>
            </div>

        </fieldset>
    </form>
</template>

<script>
export default {
    name: "ContactForm"
}
</script>

<style scoped>

</style>
