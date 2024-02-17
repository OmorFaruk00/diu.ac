<template>
    <ul class="sub-menu">
        <li v-for="(program,index) in programs" :key="index">
            <a :href="route('department-details',{slug:program.slug})">{{ program.title }}</a>
        </li>
    </ul>
</template>

<script>

import Form from '../../services/form'

export default {
    name: "SubMenu",
    data: () => ({
        form: new Form(),
        programs: []
    }),

    methods: {
        getPrograms() {

            this.form.get("public-diu-website/programs").then((res) => {

                this.programs = res.data;

            }).catch((error) => {
                console.log('programs error')
            });
        }
    },
    created() {
        this.getPrograms();
    }
}
</script>

<style scoped>

</style>
