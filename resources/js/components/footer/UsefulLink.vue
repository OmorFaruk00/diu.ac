<template>
    <h5 class="footer-title">Useful Links</h5>
    <ul class="sitemap-widget useful-link">


        <li class="active" v-for="(row,index) in usefulLinks" :key="index">
            <a :href="row.url" target="_blank" :title="row.title"><i
                class="fa fa-angle-right" aria-hidden="true"></i>{{ row.title }}</a>
        </li>

    </ul>
</template>

<script>
import {usefulLinks} from '../../data/usefulLinks'

export default {
    name: "UsefulLink",
    data: () => ({
        usefulLinks
    }),
}
</script>

<style scoped>

</style>
