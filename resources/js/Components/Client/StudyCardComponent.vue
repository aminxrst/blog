<template>
    <div class="flex flex-col justify-center items-center">
        <div class="flex flex-col gap-3 p-4 justify-center items-center">
            <div class="flex">
                <img class="object-cover rounded-2xl" :src="item.img" alt="بیماری کورک">
            </div>
            <div class="w-full flex flex-col gap-2">
                <div class="text-xs font-normal">
                    <span class="text-blurgreen bg-blurgreen2 p-1 rounded-xl">{{item.category}}</span>
                </div>
                <div class="flex">
                    <h2 class="text-xl font-bold text-justify">{{item.title}}</h2>
                </div>
                <div class="flex">
                    <p class="text-justify font-normal text-sm text-[#686868]">{{item.description}}</p>
                </div>
                <AuthorComponent :author="item.author"/>
            </div>
        </div>
    </div>
</template>

<script>
import AuthorComponent from "@/Components/Client/AuthorComponent.vue";
export default {
    name: "StudyCardComponent",
    components: {AuthorComponent},
    props: {
        item: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
