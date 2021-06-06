<template>

    <h2>Our Journals</h2>

    <ul>
        <li v-for="(row,index) in 10" :key="index">
            <i class="fa fa-arrow-circle-right"></i>
            <a href="javaScript:void(0)" target="_blank"> DIU Journal of Law and Human Rights {{ row }}</a>
        </li>
    </ul>

</template>

<script>
export default {
    name: "Journal"
}
</script>

<style scoped>

</style>
