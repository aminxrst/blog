<template>
    <div class="shadow-[0_23px_72px_rgba(0,0,0,0.06)] py-3 rounded-2xl flex flex-col justify-center gap-7 items-center min-h-[315px]">
        <div class="p-1 flex w-[160px] h-[160px] justify-center items-center rounded-full bg-gray-200">
            <div class="flex rounded-full overflow-hidden w-full h-full">
                <img class="object-cover" :src="item.img" alt="دکتر متخصص">
            </div>
        </div>

        <div class="flex flex-col justify-center items-center gap-2">
            <h2 class="text-lg font-bold">{{item.name}}</h2>
            <h3 class="font-medium text-xs text-[#717171]">{{item.speciality}}</h3>
            <div class="flex justify-center items-center gap-1">
                <StarComponent />
                <StarComponent />
                <StarComponent />
                <StarComponent />
                <StarComponent />
            </div>
        </div>
    </div>
</template>

<script>
import StarComponent from "@/Components/Expert/StarComponent.vue";
export default {
    name: "ExpertCardComponent",
    components: {StarComponent},
    props: {
        item: {
            type: Object,
            required: true,
        }
    }
}
</script>

<style scoped>

</style>
