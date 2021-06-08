<template>
    <ul class="sub-menu">
        <li>
            <a href="">
                Department of Business Administration</a>
        </li>

        <li>
            <a href="">
                Department of Business Administration</a>
        </li>
    </ul>
</template>

<script>
import Form from 'vform'
export default {
    name: "SubMenu",
    data: () => ({
        form: new Form
    }),

    methods: {
         login() {
            const response = this.form.get('https://api.diu.ac/diu-website/programs');
             console.log('working')


            // alert(response.data)
        }
    },
    created() {
        this.login();
    }
}
</script>

<style scoped>

</style>
