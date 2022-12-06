<template>
<AdminHeaderComponent page="category"/>
    <div class="flex flex-col px-8 py-6 gap-6">
        <div class="flex flex-col">
            <div class="flex">
                <h2 class="text-xl font-semibold text-gray-700">دسته بندی</h2>
            </div>
            <div class="flex">
                <p class="text-base text-gray-700">در اینجا میتوانید دسته بندی های سایت خود را مدیریت کنید.</p>
            </div>
        </div>

        <div class="flex">
            <Link :href="route('category.addcategory')" class="bg-blue-400 rounded-md px-8 py-2 shadow-md flex items-center justify-center gap-4 hover:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white">
                    <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>
                <p class="text-white">افزودن دسته بندی</p>
            </Link>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import AdminHeaderComponent from "@/Layouts/Admin/Header/AdminHeaderComponent.vue";
export default {
    name: "Index",
    components: {AdminHeaderComponent, Link}
}
</script>

<style scoped>

</style>
