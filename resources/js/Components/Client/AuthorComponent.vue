<template>
    <div class="flex items-center gap-2">
        <img class="object-cover w-[46px] h-[46px]" :src="author.img" alt="نویسنده">
        <div class="flex flex-col">
            <div class="font-bold text-xs"><p>نویسنده : {{author.name}}</p></div>
            <div class="font-medium text-xs"><p>موضوع : {{author.category}}</p></div>
        </div>
    </div>
</template>

<script>
export default {
    name: "AuthorComponent",
    props: {
        author: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
