<template>
    <div class="team-item">
        <div class="team-img">
            <img :src="team.image_url" :alt="team.name"/>
            <div class="normal-text">
                <h3 class="team-name">{{ team.name }}</h3>
                <span class="subtitle">{{ team.title }}</span>
            </div>
        </div>
        <div class="team-content">
            <div class="overly-border"></div>
            <div class="display-table">
                <div class="display-table-cell">
                    <h3 class="team-name text-white">{{ team.name }}</h3>
                    <span class="team-title text-white">{{ team.title }}</span>
<!--                    <p class="team-desc">{{ team.email }}</p>-->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Team",
    props: {
        team: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>
.team-img{
    height: 300px!important;
}
</style>
