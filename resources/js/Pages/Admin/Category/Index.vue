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

        <div v-if="$page.props.flash.message" class="bg-green-400">
            <p>{{$page.props.flash.message}}</p>
        </div>
        <div class="flex">
            <Link :href="route('category.addcategory')" class="bg-blue-400 rounded-md px-8 py-2 shadow-md flex items-center justify-center gap-4 hover:bg-blue-600">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 text-white">
                    <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                </svg>
                <p class="text-white">افزودن دسته بندی</p>
            </Link>
        </div>

            <div class="w-full flex flex-col bg-gray-100 justify-center items-center px-6 py-3 rounded-md gap-2">
                <div class="w-full flex justify-between items-center">
                    <div class="w-full flex justify-center items-center">
                        <p class="text-md text-gray-600">ردیف</p>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <p class="text-md text-gray-600">دسته والد</p>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <p class="text-md text-gray-600">زیردسته ها</p>
                    </div>
                </div>
                <div v-for="(cat, index) in cats" :key="index" class="w-full flex justify-between items-center bg-gray-50 p-2 rounded-md">
                    <div class="w-full flex justify-center items-center">
                        <p class="text-md text-gray-600">{{index + 1}}</p>
                    </div>
                    <div class="w-full flex justify-center items-center">
                        <p class="text-md text-gray-600">{{cat.title}}</p>
                    </div>
                    <Link :href="route('admin.child', cat.id)" class="w-full flex justify-center items-center cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-500 group-hover:text-red-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </Link>
                </div>
            </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import AdminHeaderComponent from "@/Layouts/Admin/Header/AdminHeaderComponent.vue";
export default {
    name: "Index",
    components: {AdminHeaderComponent, Link},
     props:{
        cats : {
            type : Array,
            required : true
        }
     }
}
</script>

<style scoped>

</style>
