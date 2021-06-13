<template>

    <div class="gridFilter">
        <button class="active" data-filter="*">All</button>

        <button  v-for="(type,index) in types" :key="index" :data-filter="`.filter${type.id}`">{{ type.title }}</button>


    </div>

    <div class="row grid">

        <div v-for="(person,index) in persons" :key="index" :class="`col-lg-3 col-md-4 grid-item filter${person.vital_person_type_id}`">
            <div class="cource-item">

                <div class="governing-img">
                    <img :src="person.image_url" :alt="person.name"/>
                </div>

                <div class="course-body">
                    <h5 class="course-title">{{ person.name }}</h5>
                    <div class="course-desc">
                        <p>
                            {{ person.title }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
export default {
    name: "GoverningBodies",
    props:{
        types:{
            type:Array,
            require:true
        },
        persons:{
            type:Array,
            require:true
        },
    }
}
</script>

<style scoped>

</style>
