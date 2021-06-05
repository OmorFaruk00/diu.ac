<template>
    <h1>{{ greeting }}</h1>
</template>

<script>
export default {
    name: "HelloWorld",
    setup: () => ({
        greeting: 'Hello World from Vue 3!'
    })
}
</script>

<style scoped>

</style>
