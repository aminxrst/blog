<template>
    <AdminHeaderComponent page="category"/>
    <div class="flex flex-col px-8 py-6 gap-6">
        <div class="flex flex-col">
            <div class="flex">
                <h2 class="text-xl font-semibold text-gray-700">افزودن دسته بندی</h2>
            </div>
            <div class="flex">
                <p class="text-base text-gray-700">در اینجا میتوانید دسته جدیدی اضافه کنید.</p>
            </div>
        </div>
        <div v-if="$page.props.flash.errorMessage" class="bg-red-400">
            <p>{{$page.props.flash.errorMessage}}</p>
        </div>
        <div class="w-full">
            <form @submit.prevent="form.post(route('category.create'))">
                <div class="flex flex-col w-full">
                    <div class="flex w-full gap-3">
                        <div class="flex flex-col w-full gap-1">
                            <div class="relative">
                                <div class="flex flex-col w-full justify-center gap-1 py-6 relative">
                                    <label class="text-gray-700 font-semibold" for="parent">دسته والد</label>
                                    <input @click="enableParentBox" v-model="form.parentValue"
                                        class="rounded-md text-gray-700 text-center bg-gray-100 border-0 focus:outline-none focus:ring-0"
                                        type="text" id="parent" autocomplete="off">

                                    <div v-if="errors.parentValue" class="absolute bottom-0">
                                        <p class="text-red-600">{{errors.parentValue}}</p>
                                    </div>
                                </div>



                                <div v-if="showParentBox"
                                    class="w-full max-h-[300px] bg-gray-100 rounded-lg p-5 flex flex-col gap-2 absolute mt-2 overflow-y-scroll no-scrollbar">
                                    <div @click="selectCat(cat.title)" v-for="(cat, index) in filteredSearch" :key="index"
                                         class="bg-gray-50 rounded-lg p-2 flex items-center justify-center hover:bg-white hover:text-red-600 hover:font-semibold cursor-pointer">
                                        {{ cat.title }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col w-full justify-center gap-1 py-6 relative">
                            <label class="text-gray-700 font-semibold" for="category">دسته فرزند</label>
                            <input v-model="form.category" class="rounded-md text-center text-gray-700 bg-gray-100 border-0 focus:outline-none focus:ring-0"
                                   type="text" id="category" autocomplete="off">
                            <div v-if="errors.category" class="absolute bottom-0">
                                <p class="text-red-600">{{errors.category}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-center mt-6">
                        <button :disabled="form.processing" class="flex justify-center items-center gap-2 bg-red-400 font-bold px-12 text-white py-2 rounded-lg hover:bg-red-700 hover:shadow-lg group" type="submit">
                            ثبت
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 hidden group-hover:flex">
                                <path fill-rule="evenodd" d="M13.28 3.97a.75.75 0 010 1.06L6.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5a.75.75 0 010-1.06l7.5-7.5a.75.75 0 011.06 0zm6 0a.75.75 0 010 1.06L12.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5a.75.75 0 010-1.06l7.5-7.5a.75.75 0 011.06 0z" clip-rule="evenodd" />
                            </svg>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</template>

<script>
import AdminHeaderComponent from "@/Layouts/Admin/Header/AdminHeaderComponent.vue";
import {useForm} from "@inertiajs/inertia-vue3";

export default {
    name: "AddCategory",
    components: {AdminHeaderComponent},
    props: {
        parent: {
            type: Array,
            required: true
        },
        errors: {
            type: Object
        }
    },
    data(){
        return {
            showParentBox: false,
        }
    },
    methods: {
        enableParentBox(){
            this.showParentBox = !this.showParentBox
        },
        selectCat(title){
            this.form.parentValue = title;
            this.enableParentBox();
        }
    },
    setup(){
        const form =  useForm({
            parentValue: null,
            category: null
        })

        return {form}
    },
    computed: {
        filteredSearch() {
            if (this.form.parentValue)
                return this.parent.filter(cat => cat.title.includes(this.form.parentValue));
            return  this.parent
        }
    }
}
</script>

<style scoped>

</style>
