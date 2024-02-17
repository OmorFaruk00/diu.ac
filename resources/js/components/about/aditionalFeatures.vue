<template>

    <div v-if="aboutFeatures?.length > 0" class="container-fluid">
        <div class="sec-title-2 mb-50 text-center">
            <h2>DIU Additional Features</h2>
            <p>These additional features make us unique and set us apart from other organizations.</p>
        </div>
        <div class="card-columns">
            <div class="card text-center" v-for="(facility,index) in aboutFeatures" :key="index">
                <div class="card-body">
                    <h5 class="card-title">{{ facility.title }}</h5>
                    <p class="card-text" v-html="facility.description"></p>
                </div>
            </div>
        </div>
    </div>

    <!--    <div class="rs-timeline-2">
            <ol>
                <li>
                    <div>
                        <time>Hostel</time>
                        DIU offers well-decorated hostel with modern facilities.At present there are seven boys
                        hostel (Nikunja, Khilkhet and Satarkul, Badda) and two girls hostels (Green Road &
                        Satarkul).
                    </div>
                </li>
                <li>
                    <div>
                        <time>Labs</time>
                        DIU has 8 Pharmacy labs, 10 Computer labs, 12 EETE labs & 10 Civil Labs. All labs are
                        designed by the experts from DU and BUET, and equipped with modern appliances
                    </div>
                </li>
                <li>
                    <div>
                        <time>English Proficiency</time>
                        In order to improve English proficiency of the students, DIU has set up a language institute
                        with expert tutors and modern language labs.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Library</time>
                        DIU library is equipped with up-to-date books and reading materials. More than fifty (50)
                        thousand books are available at DIU libraby. E-library has already been started.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Canteen & Common Rooms</time>
                        DIU has its own catering service and each building has big common & leisure rooms.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Class Rooms</time>
                        All class rooms of DIU are spacious, well-decorated, and equipped with multimedia projector.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Wi-Fi and Internet</time>
                        All DIU compuses are under Wi-Fi facilities. Internet facilities are available for all
                        students.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Transport</time>
                        Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus,
                        euismod quis ante.
                    </div>
                </li>
                <li>
                    <div>
                        <time>Medium of Instruction</time>
                        English is the medium of instruction for all programs at DIU.
                    </div>
                </li>

            </ol>
            <div class="arrows">
                <button class="arrow arrow__prev disabled" disabled></button>
                <button class="arrow arrow__next"></button>
            </div>
        </div>-->
</template>

<script>
import {aboutFeatures} from '../../data/aboutFeatures'

export default {
    name: "aditionalFeatures",
    data() {
        return {
            aboutFeatures
        }
    }
}
</script>

<style scoped>

</style>
