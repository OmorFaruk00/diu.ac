<template>
    <div class="col-lg-6">
        <h2 class="uppercase title pb-50 md-pb-30">Our Latest Notice</h2>
        <div class="rs-latest-list">

            <NoticeItem v-for="(n,index) in 20" :row="n" :key="index"/>

            <div class="event-item-new d-block mb-10">
                <div class="event-des text-right">

                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-sm justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <h2 class="uppercase title pb-50 md-pb-30">Our Latest Events</h2>
        <div class="rs-latest-list">

            <NoticeItem v-for="(n,index) in 20" :row="n" :key="index"/>

            <div class="event-item-new d-block mb-10">
                <div class="event-des text-right">

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
import NoticeItem from "../molecule/NoticeItem";

export default {
    name: "NoticeEvent",
    components: {
        NoticeItem
    }
}
</script>

<style scoped>

</style>
