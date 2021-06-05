<template>
    <div class="event-item-new mb-10">
        <div class="event-date">
            <div class="vertical-align">
                <span class="day">05 / Sep</span>
            </div>
        </div>
        <div class="event-des">
            <h4 class="title">
                <a href="#">Eshkool Gala Day For Kids {{ row }}</a>
            </h4>
        </div>
    </div>
</template>

<script>
export default {
    name: "NoticeItem",
    props:{
        row:''
    }
}
</script>

<style scoped>

</style>
