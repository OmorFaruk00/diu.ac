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

import Form from '../../services/form'

export default {
    name: "SubMenu",
    data: () => ({
        form: new Form()
    }),

    methods: {
        login() {
            const response = this.form.get('diu-website/programs');

            /*axios.get('https://api.diu.ac/diu-website/programs', {
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Access-Control-Allow-Headers': 'Content-Type, Authorization',
                },
                proxy: {
                    host: '103.110.56.80',
                    port: 13005
                }
            })
                .then(function (response) {
                    // handle success
                    console.log(response, 'response');
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .then(function () {
                    // always executed
                });*/

            console.log(response,'working...')


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
