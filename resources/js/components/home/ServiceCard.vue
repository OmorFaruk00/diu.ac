<template>
    <div class="services-item rs-animation-hover">
        <div class="services-icon">
            <i class="rs-animation-scale-up" :class="icon"></i>
        </div>
        <div class="services-desc">
            <h4 class="services-title"> {{ title }}</h4>
            <p class="text-center"> {{ details }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "ServiceCard",
    props: {
        icon: {
            default: 'fa fa-american-sign-language-interpreting',
            required: true
        },
        title: {
            default: '',
            required: true
        },
        details: {
            default: '',
            required: true
        }
    }
}
</script>

<style scoped>

</style>
