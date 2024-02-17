<template>
    <div class="row">

        <div class="col-4 col-sm-4 col-md-2">
            <div class="rs-toolbar-left">
                <div class="welcome-message">

                    <a :href="route('homePage')">
                        <i class="fa fa-bank"></i>
                        <span>Welcome to DIU</span>
                    </a>

                </div>
            </div>
        </div>

        <div class="col-8 col-sm-8 col-md-10">
            <div class="rs-toolbar-right">
                <div class="toolbar-share-icon">
                    <ul>



                        <span class="large-device">

                            <li><a href="https://international.diu.ac" target="_blank">International</a></li>
                            <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                            <li><a :class="route().current() == 'club' ? 'toolbar-share-icon-active' : ''" :href="route('club')">Club</a></li>
                            <li><a href="https://jobs.diu.ac" target="_blank">Career</a></li>
                            <li><a :class="route().current() == 'publications' ? 'toolbar-share-icon-active' : ''" :href="route('publications')">Publications</a></li>
                            <li><a :class="route().current() == 'convocation' ? 'toolbar-share-icon-active' : ''" :href="route('convocation')">Convocation</a></li>
                            <li><a href="https://students.diu.ac" target="_blank">Students Portal</a></li>
                            <li><a :class="route().current() == 'certificate-verification' ? 'toolbar-share-icon-active' : ''" :href="route('certificate-verification')">Certificate Verification</a></li>

                        </span>

                        <span class="medium-device">

                            <li><a href="https://international.diu.ac" target="_blank">International</a></li>
                            <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                            <li><a :class="route().current() == 'club' ? 'toolbar-share-icon-active' : ''" :href="route('club')">Club</a></li>
                            <li><a href="https://jobs.diu.ac" target="_blank">Career</a></li>
                            <li><a :class="route().current() == 'publications' ? 'toolbar-share-icon-active' : ''" :href="route('publications')">Publications</a></li>

                            <li v-if="!seeMoreStatus"><a href="javaScript:void(0)" @click="seeMoreStatusChange">See
                                More...</a></li>
                            <template v-if="seeMoreStatus">

                                <li><a :class="route().current() == 'convocation' ? 'toolbar-share-icon-active' : ''" :href="route('convocation')">Convocation</a></li>
                                <li><a href="https://students.diu.ac" target="_blank">Students Portal</a></li>
                                <li><a :class="route().current() == 'certificate-verification' ? 'toolbar-share-icon-active' : ''" :href="route('certificate-verification')">Certificate Verification</a></li>
                            </template>
                        </span>

                        <span class="small-device">

                            <li><a href="https://international.diu.ac" target="_blank">International</a></li>
                            <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                            <li><a :class="route().current() == 'club' ? 'toolbar-share-icon-active' : ''" :href="route('club')">Club</a></li>

                            <li v-if="!seeMoreStatus"><a href="javaScript:void(0)" @click="seeMoreStatusChange">See
                                More...</a></li>
                            <template v-if="seeMoreStatus">


                                <li><a href="https://jobs.diu.ac" target="_blank">Career</a></li>
                                <li><a :class="route().current() == 'publications' ? 'toolbar-share-icon-active' : ''" :href="route('publications')">Publications</a></li>
                                <li><a :class="route().current() == 'convocation' ? 'toolbar-share-icon-active' : ''" :href="route('convocation')">Convocation</a></li>
                                <li><a href="https://students.diu.ac" target="_blank">Students Portal</a></li>
                                <li><a :class="route().current() == 'certificate-verification' ? 'toolbar-share-icon-active' : ''" :href="route('certificate-verification')">Certificate Verification</a></li>
                            </template>
                        </span>

                        <span class="extra-small-device">
                            <li><a href="https://international.diu.ac" target="_blank">International</a></li>


                            <li v-if="!seeMoreStatus"><a href="javaScript:void(0)" @click="seeMoreStatusChange">See
                                More...</a></li>
                            <template v-if="seeMoreStatus">
                                <li><a href="https://blog.diu.ac" target="_blank">Blog</a></li>
                                <li><a :class="route().current() == 'club' ? 'toolbar-share-icon-active' : ''" :href="route('club')">Club</a></li>
                                <li><a href="https://jobs.diu.ac" target="_blank">Career</a></li>
                                <li><a :class="route().current() == 'publications' ? 'toolbar-share-icon-active' : ''" :href="route('publications')">Publications</a></li>
                                <li><a :class="route().current() == 'convocation' ? 'toolbar-share-icon-active' : ''" :href="route('convocation')">Convocation</a></li>
                                <li><a href="https://students.diu.ac" target="_blank">Students Portal</a></li>
                                <li><a :class="route().current() == 'certificate-verification' ? 'toolbar-share-icon-active' : ''" :href="route('certificate-verification')">Certificate Verification</a></li>
                            </template>
                        </span>

                        <li v-if="seeMoreStatus">
                            <a title="Clear" href="javaScript:void(0)" @click="seeMoreStatusClose">
                                <i class="fa fa-close"></i>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "ToolBar",
    data: () => ({
        seeMoreStatus: false
    }),
    methods: {
        seeMoreStatusChange() {
            this.seeMoreStatus = true
        },
        seeMoreStatusClose() {
            this.seeMoreStatus = false
        }
    }
}
</script>

<style scoped>

</style>
