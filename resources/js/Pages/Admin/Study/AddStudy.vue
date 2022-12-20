<template>
    <AdminHeaderComponent page="addstudy"/>
    <div class="flex flex-col px-4 py-3 lg:px-8 lg:py-6 gap-6">
        <div class="flex flex-col">
            <div class="flex">
                <h2 class="text-base lg:text-xl font-semibold text-gray-700">افزودن مقاله</h2>
            </div>
            <div class="flex">
                <p class="text-sm md:text-base text-gray-700">در اینجا میتوانید مقالات خود را اضافه کنید.</p>
            </div>
        </div>

        <div class="w-full">
            <form>
                <div class="flex flex-col w-full">
                    <div class="flex grid grid-cols-12 w-full gap-3">
                        <div class="flex col-span-12 lg:col-span-6 flex-col w-full justify-center gap-1">
                            <label class="text-gray-700 font-semibold" for="title">عنوان مقاله</label>
                            <input class="rounded-md text-gray-700 bg-gray-100 border-0 focus:outline-none focus:ring-0"
                                   type="text" id="title">
                        </div>
                        <div class="flex flex-col col-span-12 md:col-span-6 lg:col-span-3 w-full justify-center gap-1 ">
                           <div class="flex flex-col w-full justify-center gap-1 ">
                               <label class="text-gray-700 font-semibold" for="category">دسته بندی</label>
                               <div class=" w-full gap-1 relative">
                                   <input @click="enableParentBox" v-model="parent" class="w-full rounded-md text-gray-700 bg-gray-100 border-0 focus:outline-none focus:ring-0"
                                          type="text" id="category">
                                   <div v-if="showParent" class="flex flex-col justify-center items-center absolute mt-3 right-0 left-0 bg-white rounded-md shadow-sm px-6 py-3 gap-2 z-10">
                                       <div @click="selectParent(cat.title)" v-for="(cat,index) in cats.filter(item => !item.parent)" :key="index"
                                            class="bg-gray-50 w-full flex items-center justify-center rounded-md p-2 cursor-pointer group hover:bg-gray-100 transition-all delay-100">
                                           <p class="tracking-wider text-gray-700 group-hover:text-green-500 group-hover:font-semibold transition-all delay-100 ">
                                               {{ cat.title }}</p>
                                       </div>
                                   </div>
                               </div>

                           </div>

                        </div>
                        <div class="flex flex-col col-span-12 md:col-span-6 lg:col-span-3 w-full justify-center gap-1 ">
                            <div class="flex flex-col w-full justify-center gap-1 ">
                                <label class="text-gray-700 font-semibold" for="child">دسته فرزند</label>
                                <div class=" w-full gap-1 relative">
                                    <input @click="enableChildBox" v-model="child" class="w-full rounded-md text-gray-700 bg-gray-100 border-0 focus:outline-none focus:ring-0"
                                           type="text" id="child">
                                    <div v-if="showChild" class="flex flex-col justify-center items-center absolute mt-3 right-0 left-0 bg-white rounded-md shadow-sm px-6 py-3 gap-2 z-10">
                                        <div @click="selectChild(child.title)" v-for="(child, index) in filterChildes" :key="index" class="bg-gray-50 w-full flex items-center justify-center rounded-md p-2 cursor-pointer group hover:bg-gray-100 transition-all delay-100">
                                            <p class="tracking-wider text-gray-700 group-hover:text-green-500 group-hover:font-semibold transition-all delay-100 ">
                                               {{child.title}} </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

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
    components: {AdminHeaderComponent},
    props: {
        cats: {
            type: Array,
            required: true
        }
    },
    data(){
        return {
            showParent: false,
            parent: null,
            showChild: false,
            child: null
        }
    },
    methods:{
        enableParentBox(){
            this.showParent = !this.showParent
        },
        selectParent(title){
            this.parent = title
            this.enableParentBox()
        },
        enableChildBox(){
            this.showChild = !this.showChild
        },
        selectChild(title){
            this.child = title
            this.enableChildBox()
        }
    },
    computed:{
        filterChildes(){
            if (this.parent) {
                let parentCats = this.cats.filter(item => !item.parent);
                let parentObj = parentCats.filter(cat => cat.title === this.parent);
                return this.cats.filter(cat => cat.parent === parentObj[0].id)
            }

            return [{title: "ابتدا دسته والد را انتخاب کنید"}]

        }
    }
}
</script>

<style scoped>

</style>
