<template>
    <div class="flex flex-col gap-2">
        <div class="flex justify-center items-center justify-between">
            <div class="flex justify-between">
                <AuthorComponent :author="study" />
            </div>
            <div class="flex justify-center items-center gap-2">
                <div class="flex">
                    <StarComponent />
                    <StarComponent />
                    <StarComponent />
                    <StarComponent />
                    <StarComponent />
                </div>
                <div>
                    |
                </div>
                <div class="text-[#747474] text-xs font-bold">
                    <span>1401/08/19</span>
                </div>
                <div class="text-[#747474]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[16px] h-[16px]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                </div>
            </div>
        </div>
        <div>
            <p class="text-[#686868] font-normal text-sm text-justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
        </div>
    </div>
</template>

<script>
import AuthorComponent from "@/Components/Client/AuthorComponent.vue";
import StarComponent from "@/Components/Expert/StarComponent.vue";
export default {
    name: "SingleComment",
    components: {StarComponent, AuthorComponent},
    props: {
        study: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
