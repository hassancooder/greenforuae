<!-- HERO SECTION -->
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-amber-500 to-rose-200 opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon()"></div>
    </div>
    <div class="mx-auto h-2/4 max-w-2xl mt-10 py-32 sm:py-48 lg:py-36">
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-textPrimary sm:text-6xl">
                <span class="lang-english">Our Portfolio</span>
                <span class="lang-arabic hidden">محفظتنا</span>
            </h1>

            <p class="mt-6 text-lg leading-8 text-textSecondary">
                <span class="flex justify-center items-center">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <?php
                    $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
                    echo '<span class="lang-english">Home / ' . ucwords(str_replace('-', ' ', implode(' / ', $url))) . '</span>';
                    echo '<span class="lang-arabic hidden">الرئيسية / محفظتنا</span>';
                    ?>
                </span>
            </p>
        </div>
    </div>
</div>
<!-- gradient end -->

<section class="py-16 mt-12">

    <div class="container p-4 max-w-screen-xl mx-auto">
        <h3 class="text-3xl font-bold text-textPrimary my-2 lang-english">Our Portfolio</h3>
        <h3 class="text-3xl font-bold text-textPrimary my-2 lang-arabic hidden">محفظتنا</h3>
        <span class="text-textSecondary lang-english">Our portfolio showcases a variety of projects, highlighting our versatility and commitment to quality.
            From luxury villas to commercial facilities, we have successfully delivered projects to our clients. We
            have worked and successfully completed our projects in the following areas and neighborhoods; most of
            our clients database is developed from below areas;</span>
        <span class="text-textSecondary lang-arabic hidden">تُظهر محفظتنا مجموعة متنوعة من المشاريع، مما يبرز مرونتنا و التزامنا بالجودة.
            من الفيلات الفاخرة إلى المرافق التجارية، قمنا بتسليم المشاريع بنجاح لعملائنا. لقد عملنا وأكملنا بنجاح مشاريعنا في المناطق والأحياء التالية، حيث تم تطوير قاعدة بيانات معظم عملائنا من المناطق أدناه؛</span>
    </div>

    <div class="flex flex-wrap -mx-4 mt-16 max-w-7xl mx-auto">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Al Barsha South</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">البرشاء الجنوبية</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Al Barsha 2nd and 3rd</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">البرشاء 2 و 3</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Al Quoz 2 and 4</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">القصيص 2 و 4</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Al Warqa 4</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">الورقاء 4</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Al Mizhar 1st</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">المزهر 1</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Muhaisnah 1st</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">المحيصنة 1</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Oud al Muteena 1st</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">عود المطنقة 1</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Umm Suqiem 2nd</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">أم سقيم 2</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Al Safa 2</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">الصفا 2</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Madinat Hind 4th</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">مدينة الهند 4</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Al Khawaneej</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">الخوانيج</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 border-[5px] rounded-lg border-double border-gray-400 text-textPrimary text-center">
                <h4 class="font-semibold text-xl lang-english">Al Aweer</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">العوير</h4>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="py-16 mt-12" data-aos="fade-up">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Projects Gallery</span>
            <span class="lang-arabic hidden">معرض المشاريع</span>

        </h1>
    </div>

    <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
            <div class="col-span-2 sm:col-span-1 md:col-span-2 h-auto md:h-full flex flex-col">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                    <img src="<?= getAsset('portfolio-1.webp', 'images/'); ?>" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                </a>
            </div>

            <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                    <img src="<?= getAsset('portfolio-11.webp', 'images/'); ?>" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                </a>
            </div>

            <div class="col-span-2 sm:col-span-1 md:col-span-1 h-auto md:h-full flex flex-col">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                    <img src="<?= getAsset('portfolio-12.webp', 'images/'); ?>" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">

                </a>
            </div>

            <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                    <img src="<?= getAsset('portfolio-8.webp', 'images/'); ?>" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                </a>
            </div>

            <div class="col-span-2 sm:col-span-1 md:col-span-1 h-auto md:h-full flex flex-col">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                    <img src="<?= getAsset('portfolio-9.webp', 'images/'); ?>" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">

                </a>
            </div>

            <div class="col-span-2 sm:col-span-1 md:col-span-2">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                    <img src="<?= getAsset('portfolio-10.webp', 'images/'); ?>" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">

                </a>
            </div>

            <div class="col-span-2 sm:col-span-1 md:col-span-1 h-auto md:h-full flex flex-col">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                    <img src="<?= getAsset('portfolio-5.webp', 'images/'); ?>" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">

                </a>
            </div>

            <div class="col-span-2 sm:col-span-1 md:col-span-2">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                    <img src="<?= getAsset('portfolio-4.webp', 'images/'); ?>" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">

                </a>
            </div>

            <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                    <img src="<?= getAsset('portfolio-6.webp', 'images/'); ?>" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">

                </a>
            </div>
        </div>
    </div>
</section>