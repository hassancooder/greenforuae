<!-- HERO SECTION -->
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-amber-500 to-rose-200 opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon()"></div>
    </div>
    <div class="mx-auto h-2/4 max-w-2xl mt-10 py-32 sm:py-48 lg:py-36">
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-textPrimary sm:text-6xl">
                <span class="lang-english">Our Services</span>
                <span class="lang-arabic hidden">خدماتنا</span>
            </h1>
            <p class="mt-6 text-lg leading-8 text-textSecondary">
                <span class="flex justify-center items-center">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <?php
                    $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
                    echo '<span class="lang-english">Home / ' . ucwords(str_replace('-', ' ', implode(' / ', $url))) . '</span>';
                    echo '<span class="lang-arabic hidden">الرئيسية / خدماتنا</span>';
                    ?>

                </span>
            </p>
        </div>
    </div>
</div>
<!-- gradient end -->

<div class="max-w-7xl mx-auto px-5 my-20">
    <div class="container p-4 max-w-screen-xl mx-auto">
        <span class="text-textSecondary lang-english">At our company, we offer a wide range of construction services tailored to meet the unique needs of our clients. Our expertise includes residential construction, commercial development, renovation and remodeling, as well as project management services. We pride ourselves on delivering projects on time and within budget while maintaining the highest quality standards. Our dedicated team works closely with clients to ensure their vision is realized in every project, big or small.</span>

        <span class="text-textSecondary lang-arabic hidden">نحن نقدم مجموعة واسعة من خدمات البناء المصممة لتلبية الاحتياجات الفريدة لعملائنا. تشمل خبرتنا البناء السكني، والتطوير التجاري، والتجديد وإعادة التصميم، بالإضافة إلى خدمات إدارة المشاريع. نفخر بتسليم المشاريع في الوقت المحدد وفي حدود الميزانية مع الحفاظ على أعلى معايير الجودة. يعمل فريقنا المخلص بشكل وثيق مع العملاء لضمان تحقيق رؤيتهم في كل مشروع، سواء كان كبيرًا أو صغيرًا.</span>
    </div>

    <div class="flex flex-wrap -mx-4 mt-16">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-blue-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Project Management</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">إدارة المشاريع</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-green-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Architectural Design</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">التصميم المعماري</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-yellow-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">General Contracting</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">المقاولة العامة</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-red-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Renovations and Fit-Outs</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">التجديدات والتجهيزات الداخلية</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-purple-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Consulting Services</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">خدمات الاستشارات</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-indigo-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Villas and Service Block Construction</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">بناء الفيلات والكتل الخدمية</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-blue-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Mohammed Bin Rashid Housing Establishment Works</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">أعمال مؤسسة محمد بن راشد للإسكان</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-green-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Villa Maintenance, Modification, and Addition Works</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">أعمال صيانة الفيلات والتعديل والإضافة</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-yellow-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Renovation, Tiling, Ceiling, and Painting Works</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">أعمال التجديد والتبليط والأسقف والدهانات</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-red-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Gypsum Partitions and Ceilings</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">القواطع والأسقف الجبسية</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-purple-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Interior Design and Fit-Out Works</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">أعمال التصميم الداخلي والتجهيزات</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-indigo-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Warehouse Construction</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">بناء المستودعات</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-blue-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Aluminium and Glazing Works</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">أعمال الألمنيوم والزجاج</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-green-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Electrical, Plumbing, and Air-Conditioning Works</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">أعمال الكهرباء والسباكة والتكييف</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] border-double border-yellow-500 rounded-lg text-center">
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Drawings Approval and Construction Permit from Dubai Municipality</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">موافقة الرسومات وتصريح البناء من بلدية دبي</h4>
            </div>
        </div>
    </div>
</div>