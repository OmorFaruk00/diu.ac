<template>
  <a :href="team.website" target="_blank">
    <div class="team-item">
      <div class="team-img">
        <img v-lazy="{ src: team.profilepic }" :alt="team.name"/>
        <div class="normal-text">
          <h3 class="team-name">{{ stringLimit(team.name, 25) }}</h3>
          <span class="subtitle">{{ stringLimit(team.designation, 25) }}</span>
        </div>
      </div>
      <div class="team-content">
        <div class="overly-border"></div>
        <div class="display-table">
          <div class="display-table-cell">
            <h4 class="team-name text-white">{{ team.name }}</h4>
            <span class="team-title text-white text-center">{{ team.designation }}</span>
            <p class="team-desc text-center">{{ team.office_email }}</p>
          </div>
        </div>
      </div>
    </div>
  </a>
</template>

<script>
export default {
  name: "Faculty",
  props: {
    team: {
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
.team-img {
  height: 300px !important;
}

.team-img img {
  height: 100%;
}

.normal-text {
  width: 100% !important;
}

.normal-text .team-name {
  font-size: 15px !important;
}

.normal-text .subtitle {
  font-size: 13px !important;
}

.team-desc {
  padding-top: 0 !important;
  font-size: 12px !important;
}
</style>
