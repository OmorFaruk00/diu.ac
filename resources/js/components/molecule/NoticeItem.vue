<template>
    <div class="event-item-new mb-10">
        <div class="event-date">
            <div class="vertical-align">
                <span class="day">{{ row.published_date }}</span>
            </div>
        </div>
        <div class="event-des">
            <h4 class="title">
                <a v-if="row.type == 'notice'" :href="route('notice-board-details',{slug:row.slug})">{{ stringLimit(row.title, 40) }}</a>
                <a v-if="row.type == 'event'" :href="route('event-board-details',{slug:row.slug})">{{ stringLimit(row.title, 40) }}</a>
            </h4>
        </div>
    </div>
</template>

<script>
export default {
    name: "NoticeItem",
    props: {
        row: {
            type: Object,
            required: true
        }
    },
    methods: {
        stringLimit(text, count) {
            return text.slice(0, count) + (text.length > count ? " ..." : "");
        }
    }
}
</script>

<style scoped>

</style>
