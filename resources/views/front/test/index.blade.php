<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<span id="vue_app2">
    <button type="button" @click="test">Click me</button>

    <input type="text" v-model="name">
</span>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script src="https://cms.diu.ac/axios/axios.min.js"></script>

<script>

    $(document).ready(function () {
        var vue = new Vue({
            el: '#vue_app2',
            data: {
                config: {
                    base_path: "https://api.diu.ac",
                    token: "eyJpdiI6IkYxTGx1MkI5QzJ6WVNKNlNZVTRwbkE9PSIsInZhbHVlIjoidHFyaHJFa1pPa3AwZ1wvOFptcnUreEpWTWtRNmNmUzFjYW1GU3dtZmQ0alVKK3JWRDE1czRiR2UxQ0pGSG1ScnlWNnRPTzRudDBjWVRhNytrWGJLb24xTzVya1hcL3QyaG9yaWtOZG9HSmQrT3B0YTkzN0JmZCtmT05yMGVLa0xrTkNFQ2V1c3NaWUFmTFVpQ0pGSytDZWc9PSIsIm1hYyI6IjU1NmI0OWRlMzZhMTkwMDI0NjNhYWQzMTYyNDlkOWYxMmQxYzAyZmYxMWVlZmQ5MGUzYzdmOWMxM2E3YzU2NzEifQ==",
                },
                name: ''
            },

            methods: {

                test() {


                    window.newAxios.get(this.config.base_path + '/diu-website/programs').then(function (response) {

                        console.log(response.data);

                    }).catch(function (error) {

                    });
                },


            },

            created() {
                // this.test();
            }


        });
    });

</script>

<script>
    console.log(axios,'axios')
    window.newAxios = axios;
</script>

</body>
</html>
