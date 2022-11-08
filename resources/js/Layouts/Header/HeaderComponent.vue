<template>
<header class="m-5">
    <div class="flex justify-between p-2 items-center h-[70px] rounded-3xl shadow-header">
        <div class="flex gap-12 items-center">
            <div class="flex w-[100px] h-[20px]">
                <img class="object-cover" src="images/logo/logo.png" alt="لوگو">
            </div>
            <div>
                <ul class="flex justify-between gap-10">
                    <li class="text-base font-semibold text-[#2D2D2D]"><a href="#">صفحه اصلی</a></li>
                    <li class="text-base font-semibold text-[#2D2D2D]"><a href="#">درباره ما</a></li>
                    <li class="text-base font-semibold text-[#2D2D2D]"><a href="#">تماس با ما</a></li>
                    <li class="text-base font-semibold text-[#2D2D2D]"><a href="#">متخصصان</a></li>
                </ul>
            </div>
        </div>
        <div class="flex gap-5">
            <div class="flex relative w-[25px] justify-center">
                <div class="absolute left-[5%] top-[25%] border-[1.5px] rounded-full w-[19px] h-[19px] border-[#00B8EC]"></div>
                <div class="absolute border-[1.5px] w-[3.22px] h-[3.22px] rounded-full border-[#00B8EC] right-[16%] bottom-[25%] "></div>
            </div>
            <div>
                <button type="button" class="text-center rounded-3xl bg-[#00B8EC] py-2 px-4 text-white shadow-sky">ورود / ثبت نام</button>
            </div>
        </div>
    </div>
</header>
</template>

<script>
export default {
    name: "HeaderComponent",
    components: {}

}
</script>

<style scoped>

</style>
