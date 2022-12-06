<template>
<AdminHeaderComponent page="addstudy"/>
    <div class="flex flex-col px-8 py-6 gap-6">
        <div class="flex flex-col">
            <div class="flex">
                <h2 class="text-xl font-semibold text-gray-700">افزودن مقاله</h2>
            </div>
            <div class="flex">
                <p class="text-base text-gray-700">در اینجا میتوانید مقالات خود را اضافه کنید.</p>
            </div>
        </div>

        <div class="w-full">
            <form>
                <div class="flex flex-col w-full">
                    <div class="flex w-full gap-3">
                        <div class="flex flex-col w-full justify-center gap-1">
                            <label class="text-gray-700 font-semibold" for="title">عنوان مقاله</label>
                            <input class="rounded-md text-gray-700 bg-gray-100 border-0 focus:outline-none focus:ring-0" type="text" id="title">
                        </div>
                        <div class="flex flex-col w-full justify-center gap-1">
                            <label class="text-gray-700 font-semibold" for="category">دسته بندی</label>
                            <input class="rounded-md text-gray-700 bg-gray-100 border-0 focus:outline-none focus:ring-0" type="text" id="category">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import AdminHeaderComponent from "@/Layouts/Admin/Header/AdminHeaderComponent.vue";
export default {
    name: "AddStudy",
    components: {AdminHeaderComponent}
}
</script>

<style scoped>

</style>
