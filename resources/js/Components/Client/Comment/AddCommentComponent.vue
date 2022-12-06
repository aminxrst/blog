<template>
    <div class="shadow-[0_23px_72px_rgba(0,0,0,0.06)] flex flex-col w-full rounded-2xl p-5 gap-4">
        <div class="bg-[#F2F2F2] rounded-2xl p-2 h-[140px] w-full">
            <textarea class="w-full h-full bg-transparent focus:ring-0 resize-none border-none" name="" placeholder="نظر خود را بنویسید"></textarea>
        </div>
        <div class="flex justify-between justify-center items-center">
            <div class="flex">
                <button class="bg-[#00B8EC] text-white rounded-2xl py-1 px-9">ارسال</button>
            </div>
            <div class="flex justify-between gap-4">
                <div><p class="text-xs font-semibold" >میزان رضایت خود را با امتیاز به ما نشان دهید</p></div>
                <div class="flex">
                    <StarComponent />
                    <StarComponent />
                    <StarComponent />
                    <StarComponent />
                    <StarComponent />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import StarComponent from "@/Components/Expert/StarComponent.vue";
export default {
    name: "AddCommentComponent",
    components: {StarComponent}
}
</script>

<style scoped>

</style>
