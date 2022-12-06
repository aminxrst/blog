<template>
    <HeaderComponent />
    <StudyComponent />
</template>

<script>
import HeaderComponent from "@/Layouts/Header/HeaderComponent.vue";
import StudyComponent from "@/Components/Client/StudyComponent.vue";
export default {
    name: "Index",
    components: {StudyComponent, HeaderComponent}
}
</script>

<style scoped>

</style>
