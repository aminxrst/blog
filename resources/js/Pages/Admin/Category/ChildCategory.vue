<template>
<AdminHeaderComponent page="category"/>
    <div class="flex flex-col px-8 py-6 gap-6">
        <div class="flex flex-col">
            <div class="flex">
                <h2 class="text-xl font-semibold text-gray-700">دسته {{data.parent.title}}</h2>
            </div>
            <div class="flex">
                <p class="text-base text-gray-700">در اینجا میتوانید زیردسته های {{data.parent.title}} سایت خود را مدیریت کنید.</p>
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
            <div class="w-full flex justify-between items-center p-2">
                <div class="w-full flex justify-center items-center">
                    <p class="text-md text-gray-600">ردیف</p>
                </div>
                <div class="w-full flex justify-center items-center">
                    <p class="text-md text-gray-600">دسته</p>
                </div>
                <div class="w-full flex justify-center items-center">
                    <p class="text-md text-gray-600">اقدام</p>
                </div>
            </div>
            <div v-for="(child, index) in data.children" :key="index" class="w-full flex justify-between items-center bg-gray-50 p-2 rounded-md">
                <div class="w-full flex justify-center items-center">
                    <p class="text-md text-gray-600">{{index + 1}}</p>
                </div>
                <div class="w-full flex justify-center items-center">
                    <p class="text-md text-gray-600">{{child.title}}</p>
                </div>
                <div class="w-full flex justify-center items-center cursor-pointer group gap-3">
                    <div @click="showEditModal(child.title)" class="flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-blue-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>

                    </div>
                    <div class="flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-red-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div v-if="editModal">
        <BgBlurComponent />
        <div class="grid grid-cols-3 flex justify-center items-center fixed inset-0">
            <div class="flex flex-col col-start-2 bg-white w-full rounded-xl shadow-xl py-3 px-6">
                <div class="flex flex-col gap-3">
                    <div class="flex justify-between items-center">
                        <h2 class="text-base font-semibold tracking-wide text-gray-400">ویرایش دسته روانشناسی کودک</h2>
                        <div @click="switchEditModal" class="flex p-1 bg-gray-50 rounded-full cursor-pointer hover:ring-1 hover:ring-red-500 transition-all delay-100 group">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-gray-300 group-hover:text-red-500 transition-all delay-100">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                    </div>
                    <hr class="flex w-full bg-gray-500">
                </div>
                <div class="flex flex-col justify-between py-8 gap-10">
                    <div class="flex flex-col px-6 gap-1">
                        <label class="text-gray-500 text-sm tracking-wider" for="title">نام دسته</label>
                        <input v-model.trim="title" type="text" id="title" class="border-0 focus:outline-none focus:ring-0 bg-gray-50 rounded-md text-gray-500">
                    </div>
                    <div class="flex justify-center">
                        <button type="button" class="bg-red-600 px-12 py-2 rounded-md text-white tracking-wider font-semibold hover:bg-red-700 transition-all delay-100">ثبت</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import AdminHeaderComponent from "@/Layouts/Admin/Header/AdminHeaderComponent.vue";
import BgBlurComponent from "@/Components/Common/BgBlurComponent.vue";

export default {
    name: "ChildCategory",
    components: {BgBlurComponent, AdminHeaderComponent, Link},
    props:{
        data:{
            type:Array,
            required:true
        }
    },
    data(){
        return{
            editModal: false,
            title: null
        }
    },
    methods:{
        showEditModal(title){
            this.title=title;
            this.switchEditModal()
        },
        switchEditModal(){
            this.editModal = !this.editModal
        }
    }
}
</script>

<style scoped>

</style>
