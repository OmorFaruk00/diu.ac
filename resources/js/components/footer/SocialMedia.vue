<template>
    <div class="footer-share">
        <ul>
            <li v-for="(socialMedia,index) in socialMedias" :key="index">
                <a :href="socialMedia.url" target="_blank" :title="socialMedia.title">
                    <i :class="socialMedia.icon"></i>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
import {socialMedias} from "../../data/socialMedias";

export default {
    name: "SocialMedia",
    data: () => ({
        socialMedias
    }),
}
</script>

<style scoped>

</style>
