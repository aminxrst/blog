<template>
    <div class="m-10 grid grid-cols-12 justify-between">
        <div class="col-span-9 p-2">
            <div class="gap-3 shadow-[0_23px_72px_rgba(0,0,0,0.06)] rounded-2xl p-1">
                <img class="object-cover" src="images/study/study1.png" alt="بچه های خوشحال">
                <div class="flex justify-between m-1 mt-3">
                    <AuthorComponent :author="study"/>
                    <div>
                        <span>1401/08/18</span>
                    </div>
                </div>
                <article class="pt-5">
                    <div>
                        <h2 class="text-2xl font-bold">بیماری پوستی کودکان چهارساله</h2>
                        <div class="flex gap-1 items-center">
                            <div class="bg-[#00B8EC4D] p-1 rounded-full text-[#00B8EC]">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor" class="w-[10px] h-[10px]">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"/>
                                </svg>
                            </div>
                            <p class="text-[#00B8EC]">به متنی آزمایشی و بی معنی در صنعت چاپ، صفحه آرایی و طراحی گرافیک
                                گفته
                                میشود.</p>
                        </div>
                    </div>
                    <div class="mt-7 font-normal font-xs text-[#686868] text-justify">
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                            درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                            بیشتری
                            را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در
                            این
                            صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان
                            رسد
                            وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                            اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است
                            و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می
                            باشد.
                            کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
                            با
                            نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در
                            زبان
                            فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و
                            شرایط
                            سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته
                            اهل
                            دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                            از
                            صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                            سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود
                            ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان
                            جامعه و
                            متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                            خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری
                            موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                            دستاوردهای
                            اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم
                            متن
                            ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون
                            بلکه
                            روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                            کاربردهای
                            متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                            آینده
                            شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                            ای
                            علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت
                            که
                            تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                            حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده
                            قرار
                            گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در
                            شصت
                            و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                            بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد
                            کرد.
                            در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به
                            پایان
                            رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود
                            طراحی
                            اساسا مورد استفاده قرار گیرد.</p>
                    </div>
                    <div class="mt-5">
                        <img class="object-cover w-full" src="/images/study/study1.png" alt="کودکان خندان">
                    </div>
                    <div class="mt-7 font-normal font-xs text-[#686868] text-justify">
                        <p>متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان
                            خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری
                            موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                            دستاوردهای
                            اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم
                            متن
                            ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون
                            بلکه
                            روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                            کاربردهای
                            متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                            آینده
                            شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                            ای
                            علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت
                            که
                            تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                            حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده
                            قرار
                            گیرد.</p>
                    </div>
                </article>
                <div class="shadow-[0_26px_121px_2px_rgba(0,0,0,0.06)] flex flex-col w-full rounded-2xl p-7 gap-10">
                    <AddCommentComponent/>
                    <SingleComment :study="study"/>
                    <hr>
                    <SingleComment :study="study"/>
                    <hr>
                    <SingleComment :study="study"/>
                </div>
            </div>
        </div>
        <div class="col-span-3 p-1">
            <div class="shadow-[0_23px_72px_rgba(0,0,0,0.06)] p-2 rounded-2xl flex flex-col gap-3 items-center">
                <div class="w-full font-bold text-2xl p-2"><h2 class="w-full text-right">متخصصان</h2></div>
                <div class="flex flex-col w-full gap-5 px-12">
                    <ExpertCardComponent v-for="(item, index) in experts" :key="index" :item="item"/>
                </div>
            </div>
            <div class=" shadow-[0_23px_72px_rgba(0,0,0,0.06)] rounded-2xl flex flex-col items-center">
                <div class="w-full font-bold text-2xl p-6">
                    <h2 class="w-full text-right">مطالب مشابه</h2>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <StudyCardComponent v-for="(item, index) in studies" :key="index" :item="item"/>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <img class="object-cover" src="/images/icon/message.png" alt="مسیج">
    </div>
    <div class="flex flex-col gap-10">
        <div class=" flex items-center justify-center"><h3 class="font-bold text-2xl">نظرات کاربران</h3></div>
        <div class="flex flex-col items-center justify-center">
            <div class="flex flex-col w-[630px]">
                <div class="flex flex-col shadow-[0_29px_125px_rgba(0,0,0,0.06)] rounded-2xl justify-center items-center gap-1">
                    <div class="p-0.5 flex justify-center items-center rounded-full bg-[#01B3E6]">
                        <div class="flex rounded-full overflow-hidden w-full h-full">
                            <img class="object-cover" src="/images/Client/client.png" alt="نطر کاربر">
                        </div>
                    </div>
                    <div class="text-base font-semibold"><span>علیرضا عابدینی</span></div>
                    <div><p class="text-center px-8 text-[#787878]"> طراحان سایت هنگام طراحی قالب سایت معمولا با این
                        موضوع رو برو هستند که محتوای اصلی صفحات آماده نیست. در نتیجه طرح کلی دید درستی به کار فرما
                        نمیدهد. اگر طراح بخواهد دنبال متن های مرتبط بگردد تمرکزش از روی کار اصلی برداشته میشود و اینکار
                        زمان بر خواهد بود. همچنین طراح به دنبال این است که پس از ارایه کار نظر دیگران را در مورد طراحی
                        جویا شود و نمی‌خواهد افراد روی متن های موجود تمرکز کنند.</p></div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import ExpertCardComponent from "@/Components/Expert/ExpertCardComponent.vue";
import AuthorComponent from "@/Components/Client/AuthorComponent.vue";
import StudyCardComponent from "@/Components/Client/StudyCardComponent.vue";
import AddCommentComponent from "@/Components/Client/Comment/AddCommentComponent.vue";
import SingleComment from "@/Components/Client/Comment/SingleComment.vue";

export default {
    name: "StudyComponent",
    components: {
        SingleComment,
        AddCommentComponent, AuthorComponent, ExpertCardComponent, StudyCardComponent
    },
    data: () => ({
        studies: [
            {
                img: "images/study/study2.jpg",
                category: "کودک بیمار",
                title: "کورک یک نوع عفونت پوستی است که خود را با قرمزی و احساس",
                description: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و ...",
                author: {
                    img: "/images/writer/Ellipse%2016.png",
                    name: "امین رستگار",
                    category: "کودک"
                }
            },
            {
                img: "images/study/study3.jpg",
                category: "بیش فعالی",
                title: "این عنوان تستی است",
                description: "این یک توضیحات تستی برای مطلب تستی اول می باشد...",
                author: {
                    img: "/images/writer/Ellipse%2016.png",
                    name: "داود رستگار",
                    category: "روانشنانی کودک"
                }
            },
            {
                img: "images/study/study4.jpg",
                category: "سبک تفکر",
                title: "عنوان تستی 2 می باشد",
                description: "توضیحات تستی را برای مطلب تستی دوم می نویسیم ولی بهتر است کمی طولانی تر از مطلب تستی قبل باشد",
                author: {
                    img: "/images/writer/Ellipse%2016.png",
                    name: "مهدی رستگار",
                    category: "کارشناس کودک"
                }
            }
        ],
        study: {
            img: "/images/writer/Ellipse%2016.png",
            name: "مهدی رستگار",
            category: "کارشناس کودک"
        },
        experts: [
            {
                img: "/images/doctor/dr.hamid.png",
                name: "دکتر حمید لولایی",
                speciality: "متخصص عفونت کودکان",
            },
            {
                img: "/images/doctor/dr.davood.jpg",
                name: "دکتر داود رستگار",
                speciality: "متخصص روانشناسی کودک",
            },
            {
                img: "/images/doctor/dr.amin.webp",
                name: "دکتر امین رستگار",
                speciality: "متخصص مغز و اطفال",
            }
        ],
    }),

}
</script>
