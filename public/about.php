<style>
    .swiper-wrapper {
        height: max-content !important;

        width: max-content;
    }

    .swiper-button-next,
    .swiper-button-prev {
        top: 25%;
        z-index: 1000;
    }

    .swiper-button-next {
        right: -0px !important;
    }

    .swiper-button-prev {
        left: 0px !important;
    }

    .swiper-button-prev:after,
    .swiper-rtl .swiper-button-next:after {
        content: "" !important;
    }

    .mySwiper {
        max-width: 320px !important;
        margin: 0 auto !important;
    }

    .swiper-button-next:after,
    .swiper-rtl .swiper-button-prev:after {
        content: "" !important;
    }

    .mySwiper .swiper-slide.swiper-slide-thumb-active>.swiper-slide\:w-16 {
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .mySwiper .swiper-slide.swiper-slide-thumb-active>.swiper-slide\:border-indigo-600 {
        --tw-border-opacity: 1;
        border-color: rgb(79 70 229 / var(--tw-border-opacity));
    }

    .teamswiper .swiper-wrapper {
        height: max-content !important;
        padding-bottom: 64px !important;
    }

    .teamswiper .swiper-horizontal>.swiper-scrollbar,
    .teamswiper .swiper-scrollbar.swiper-scrollbar-horizontal {
        max-width: 140px !important;
        height: 3px !important;
        bottom: 25px !important;
        left: 50% !important;
        transform: translateX(-50%) !important;
    }

    .teamswiper .swiper-pagination-fraction {
        bottom: 0 !important;
        padding-top: 16px !important;
    }

    .teamswiper .swiper-slide.swiper-slide-active>.slide\:border-indigo-600 {
        --tw-border-opacity: 1;
        border-color: rgb(79 70 229 / var(--tw-border-opacity));
    }

    .teamswiper .swiper-pagination-total {
        color: rgb(156 163 175) !important;
    }

    .teamswiper .swiper-scrollbar-drag {
        background: rgb(79 70 229);
    }

    .teamswiper .swiper-pagination-fraction {
        bottom: 0 !important;
    }

    .teamswiper .swiper-button-prev:after,
    .teamswiper .swiper-rtl .swiper-button-next:after {
        content: '' !important;
    }

    .teamswiper .swiper-button-prev {
        top: 93% !important;
        left: 35% !important;
        z-index: 100 !important;
    }

    .teamswiper .swiper-button-next {
        top: 93% !important;
        right: 35% !important;
        z-index: 100 !important;
    }

    .teamswiper .swiper-button-next:after,
    .teamswiper .swiper-rtl .swiper-button-prev:after {
        content: '' !important;
    }

    .teamswiper .swiper-button-next svg,
    .teamswiper .swiper-button-prev svg {
        width: 24px !important;
        height: 24px !important;
    }
</style>
<!-- ABOUT US SECTION -->
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-secondary to-primary opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon()"></div>
    </div>
    <div class="mx-auto h-2/4 max-w-2xl mt-10 py-32 sm:py-48 lg:py-36">
        <div class="text-center">
            <!-- Title -->
            <h1 class="text-4xl font-bold tracking-tight text-textPrimary sm:text-6xl">
                <span class="lang-english">About Us</span>
                <span class="lang-arabic hidden">معلومات عنا</span>
            </h1>

            <!-- Breadcrumb -->
            <p class="mt-6 text-lg leading-8 text-textSecondary">
                <span class="flex justify-center items-center">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <?php
                    $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
                    echo '<span class="lang-english">Home / ' . ucwords(str_replace('-', ' ', implode(' / ', $url))) . '</span>';
                    echo '<span class="lang-arabic hidden">الرئيسية / معلومات عنا</span>';
                    ?>
                </span>
            </p>
        </div>
    </div>
</div>

<!-- About Us Section -->
<section class="container mx-auto max-w-6xl py-14" data-aos="fade-up">
    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary max-lg:text-center lang-english">Green Fort UAE</h2>
    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary my-6 hidden lang-arabic">جرين فورت الإمارات</h2>

    <p class="my-4 text-lg text-textSecondary px-4 md:text-left text-center leading-7 lang-english">
        Green Fort UAE is a leader in delivering high-quality construction projects in Dubai. Since our inception, we have specialized in sustainable and innovative construction, meeting the growing demands of the industry while upholding our core values of quality, safety, and integrity. Our team is committed to transforming ideas into reality, providing unmatched expertise and craftsmanship.
    </p>
    <p class="my-4 text-lg text-textSecondary px-4 md:text-left text-center leading-7 lang-arabic hidden">
        تعتبر جرين فورت الإمارات رائدة في تقديم مشاريع البناء عالية الجودة في دبي. منذ تأسيسنا، تخصصنا في البناء المستدام والمبتكر، لتلبية الطلبات المتزايدة في الصناعة مع الحفاظ على قيمنا الأساسية المتمثلة في الجودة والسلامة والنزاهة. نحن ملتزمون بتحويل الأفكار إلى واقع، وتقديم خبرة وحرفية لا مثيل لهما.
    </p>
    <p class="my-4 text-lg text-textSecondary px-4 md:text-left text-center leading-7 lang-english">
        Our portfolio ranges from residential projects to large-scale commercial developments, all reflecting our dedication to excellence. We ensure that each project is completed on time, within budget, and to the highest standards of quality.
    </p>
    <p class="my-4 text-lg text-textSecondary px-4 md:text-left text-center leading-7 lang-arabic hidden">
        تتراوح محفظتنا من المشاريع السكنية إلى التطورات التجارية الكبيرة، وكلها تعكس التزامنا بالتميز. نحن نضمن أن كل مشروع يتم الانتهاء منه في الوقت المحدد، وفي حدود الميزانية، ووفقًا لأعلى معايير الجودة.
    </p>
</section>

<!-- CEO Section -->
<section class="py-8 relative" data-aos="fade-up">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
            <!-- CEO Image -->
            <div class="img-box" data-aos="fade-right">
                <img src="<?= getAsset('ceo.webp', 'images/'); ?>" alt="Waleed Ahmad - CEO"
                    class="max-lg:mx-auto object-cover rounded-lg">
            </div>
            <!-- CEO Info -->
            <div class="lg:pl-[100px] flex items-center" data-aos="fade-up">
                <div class="data w-full">
                    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary max-lg:text-center lang-english">Waleed Ahmad</h2>
                    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary my-2 hidden lang-arabic">وليد أحمد</h2>
                    <p class="text-textSecondary mt-2 text-xl text-center lg:text-left lang-english">Chief Executive Officer</p>
                    <p class="text-textSecondary mt-2 text-xl text-center lg:text-left lang-arabic hidden">الرئيس التنفيذي</p>
                    <p class="font-normal text-xl leading-8 mt-6 text-textPrimary max-lg:text-center max-w-2xl mx-auto lang-english">
                        Under Waleed's leadership, Green Fort UAE has expanded its footprint in Dubai's competitive construction sector. His vision and dedication to excellence continue to drive the company towards innovative solutions and sustainable growth, while maintaining a commitment to client satisfaction.
                    </p>
                    <p class="font-normal text-xl leading-8 mt-6 text-textPrimary max-lg:text-center max-w-2xl mx-auto lang-arabic hidden">
                        تحت قيادة وليد، وسعت جرين فورت الإمارات نطاقها في قطاع البناء التنافسي في دبي. لا تزال رؤيته والتزامه بالتميز تدفع الشركة نحو حلول مبتكرة ونمو مستدام، مع الحفاظ على الالتزام برضا العملاء.
                    </p>
                    <div class="flex justify-center lg:justify-start mt-6">
                        <a href="/services" class="bg-primary text-white font-semibold rounded-full px-6 py-2 transition-all duration-300 lang-english">Explore Our Services</a>
                        <a href="/services" class="bg-primary text-white font-semibold rounded-full px-6 py-2 transition-all duration-300 hidden lang-arabic">استكشف خدماتنا</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- History Section -->
<section class="py-14 lg:py-24 relative" data-aos="fade-up">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
            <!-- History Content -->
            <div class="lg:pr-24 flex items-center" data-aos="fade-up">
                <div class="data w-full">
                    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary mb-6 max-lg:text-center lang-english">Our Journey</h2>
                    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary mb-6 hidden lang-arabic">رحلتنا</h2>
                    <p class="font-normal text-xl leading-8 text-textPrimary max-lg:text-center max-w-2xl mx-auto lang-english">
                        Since our founding in 2005, Green Fort UAE has been at the forefront of innovative construction solutions. We began with a simple yet ambitious goal: to redefine the construction landscape in Dubai through quality craftsmanship and sustainable practices.
                    </p>
                    <p class="font-normal text-xl leading-8 text-textPrimary max-lg:text-center max-w-2xl mx-auto hidden lang-arabic">
                        منذ تأسيسنا في عام 2005، كانت جرين فورت الإمارات في طليعة حلول البناء المبتكرة. بدأنا بهدف بسيط ولكنه طموح: إعادة تعريف مشهد البناء في دبي من خلال الحرفية العالية والممارسات المستدامة.
                    </p>

                    <div class="flex justify-center lg:justify-start mt-6">
                        <a href="/portfolio" class="bg-primary text-white font-semibold rounded-full px-6 py-2 transition-all duration-300 lang-english">View Our Portfolio</a>
                        <a href="/portfolio" class="bg-primary text-white font-semibold rounded-full px-6 py-2 transition-all duration-300 hidden lang-arabic">عرض محفظتنا</a>
                    </div>

                </div>
            </div>
            <!-- Image for History Section -->
            <div class="img-box" data-aos="fade-right">
                <img src="<?= getAsset('workers-1.webp', 'images/'); ?>" alt="Green Fort UAE - History"
                    class="object-cover rounded-lg">
            </div>
        </div>
    </div>
</section>


<!-- Vision & Mission Section -->
<section class="container px-4 mx-auto py-14" data-aos="fade-up">
    <h2 class="font-bold text-textPrimary md:text-left text-center text-4xl my-6 lang-english">Vision & Mission</h2>
    <h2 class="font-bold text-textPrimary md:text-left text-center text-4xl my-6 hidden lang-arabic">الرؤية و المهمة</h2>

    <p class="my-4 text-lg text-textSecondary md:text-left text-center leading-7 lang-english">
        Our vision is to be the leading construction company in the UAE, known for delivering exceptional projects that shape the future of the built environment. We aim to enhance the lives of people by creating spaces that are sustainable, innovative, and inspiring.
    </p>
    <p class="my-4 text-lg text-textSecondary md:text-left text-center leading-7 lang-arabic hidden">
        رؤيتنا هي أن نكون الشركة الرائدة في مجال البناء في الإمارات، معروفة بتنفيذ مشاريع استثنائية تشكل مستقبل البيئة المبنية. نسعى لتحسين حياة الناس من خلال إنشاء مساحات مستدامة ومبتكرة وملهمة.
    </p>
    <p class="my-4 text-lg text-textSecondary md:text-left text-center leading-7 lang-english">
        Our mission is to provide top-notch construction services by adopting modern technologies, maintaining strict quality standards, and prioritizing client satisfaction. We are committed to upholding our values of transparency, safety, and excellence in every project we undertake.
    </p>
    <p class="my-4 text-lg text-textSecondary md:text-left text-center leading-7 lang-arabic hidden">
        مهمتنا هي تقديم خدمات بناء عالية الجودة من خلال اعتماد تقنيات حديثة، والحفاظ على معايير الجودة الصارمة، وإعطاء الأولوية لرضا العملاء. نحن ملتزمون بالتمسك بقيمنا من الشفافية والسلامة والتميز في كل مشروع نقوم به.
    </p>
    <!-- Vision Image -->
    <img src="<?= getAsset('workers-2.webp', 'images/'); ?>" alt="Vision & Mission" class="w-full rounded-lg shadow-lg">
</section>


<!-- Arabic Translations -->

<!-- Green Fort UAE Section (Arabic) -->
<section class="container mx-auto max-w-6xl py-14 hidden lang-arabic" data-aos="fade-up">
    <h2 class="font-bold text-textPrimary text-4xl my-6">جرين فورت الإمارات</h2>
    <p class="my-4 text-lg text-textSecondary leading-7">
        جرين فورت الإمارات هي شركة رائدة في تنفيذ المشاريع الإنشائية عالية الجودة في دبي. منذ تأسيسها، تخصصنا في البناء المستدام والمبتكر، لتلبية متطلبات السوق المتزايدة مع الحفاظ على قيمنا الأساسية في الجودة والسلامة والنزاهة.
    </p>
    <p class="my-4 text-lg text-textSecondary leading-7">
        تشمل محفظتنا مشاريع سكنية وتجارية واسعة النطاق، وكلها تعكس التزامنا بالتميز وضمان أن كل مشروع يتم تسليمه في الوقت المحدد وضمن الميزانية ووفق أعلى معايير الجودة.
    </p>
</section>

<!-- CEO Section (Arabic) -->
<section class="py-8 relative hidden lang-arabic">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
            <div class="img-box" data-aos="fade-right">
                <img src="<?= getAsset('ceo.webp', 'images/'); ?>" alt="Waleed Ahmad - CEO" class="max-lg:mx-auto object-cover rounded-lg">
            </div>
            <div class="lg:pl-[100px] flex items-center" data-aos="fade-up">
                <div class="data w-full">
                    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary max-lg:text-center">وليد أحمد</h2>
                    <p class="text-textSecondary mt-2 text-xl text-center lg:text-left">الرئيس التنفيذي</p>
                    <p class="font-normal text-xl leading-8 mt-6 text-textPrimary max-lg:text-center max-w-2xl mx-auto">
                        تحت قيادة وليد، وسعت جرين فورت الإمارات بصمتها في قطاع البناء التنافسي في دبي. رؤيته والتزامه بالتميز يستمران في دفع الشركة نحو حلول مبتكرة ونمو مستدام.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- History Section (Arabic) -->
<section class="py-14 lg:py-24 relative hidden lang-arabic">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
            <div class="img-box" data-aos="fade-right">
                <img src="<?= getAsset('workers-1.webp', 'images/'); ?>" alt="جرين فورت الإمارات" class="block lg:hidden mb-9 mx-auto object-cover rounded-lg shadow-lg">
            </div>
            <div class="lg:pr-24 flex items-center" data-aos="fade-up">
                <div class="data w-full">
                    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary mb-6 max-lg:text-center">رحلتنا</h2>
                    <p class="font-normal text-xl leading-8 text-textPrimary max-lg:text-center max-w-2xl mx-auto">
                        منذ تأسيسنا في عام 2005، كانت جرين فورت الإمارات في طليعة الحلول الإنشائية المبتكرة. بدأنا بهدف بسيط ولكنه طموح: إعادة تعريف قطاع البناء في دبي من خلال جودة الحرفية والممارسات المستدامة.
                    </p>
                </div>
            </div>
            <div class="img-box hidden lg:block" data-aos="fade-up">
                <img src="<?= getAsset('workers-1.webp', 'images/'); ?>" alt="جرين فورت الإمارات" class="object-cover rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section (Arabic) -->
<section class="container px-4 mx-auto py-14 hidden lang-arabic" data-aos="fade-up">
    <h2 class="font-bold text-textPrimary text-4xl my-6">رؤيتنا و مهمتنا</h2>
    <p class="my-4 text-lg text-textSecondary leading-7">
        رؤيتنا أن نكون الشركة الرائدة في مجال البناء في الإمارات، معروفة بتنفيذ مشاريع استثنائية تشكل مستقبل البيئة المبنية. نسعى لتحسين حياة الناس من خلال إنشاء مساحات مستدامة ومبتكرة وملهمة.
    </p>
    <p class="my-4 text-lg text-textSecondary leading-7">
        مهمتنا هي تقديم خدمات بناء على أعلى مستوى من خلال تبني أحدث التقنيات والحفاظ على معايير الجودة الصارمة وإعطاء الأولوية لرضا العملاء.
    </p>
    <img src="<?= getAsset('workers-2.webp', 'images/'); ?>" alt="رؤيتنا و مهمتنا" class="w-full rounded-lg shadow-lg">
</section>


<section class="py-20 bg-white" data-aos="fade-up">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl text-center text-textPrimary font-bold mb-14 lang-english">Our Results in Numbers</h2>
        <h2 class="text-4xl text-center text-textPrimary font-bold mb-14 hidden lang-arabic">نتائجنا بالأرقام</h2>
        <div class="flex flex-col gap-5 xl:gap-8 lg:flex-row lg:justify-between">
            <div class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl border border-2 shadow-gray-100">
                <div class="flex gap-5">
                    <div class="text-2xl font-bold text-primary">240%</div>
                    <div class="flex-1">
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 lang-english">Company Growth</h4>
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 hidden lang-arabic">نمو الشركة</h4>
                        <p class="text-xs text-gray-500 leading-5 lang-english">
                            Company's remarkable growth journey as we continually innovate and drive towards new heights of success.
                        </p>
                        <p class="text-xs text-gray-500 leading-5 hidden lang-arabic">
                            الرحلة الرائعة لنمو الشركة حيث نستمر في الابتكار ونسعى لتحقيق آفاق جديدة من النجاح.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl border border-2 shadow-gray-100">
                <div class="flex gap-5">
                    <div class="text-2xl font-bold text-primary">175+</div>
                    <div class="flex-1">
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 lang-english">Talented Team Members</h4>
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 hidden lang-arabic">أعضاء فريق موهوبين</h4>
                        <p class="text-xs text-gray-500 leading-5 lang-english">
                            Our very talented team members are the powerhouse of Green Fort and pillars of our success.
                        </p>
                        <p class="text-xs text-gray-500 leading-5 hidden lang-arabic">
                            يعد أعضاء فريقنا الموهوبون هم القوة الدافعة لشركة جرين فورت وأعمدة نجاحنا.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl border border-2 shadow-gray-100">
                <div class="flex gap-5">
                    <div class="text-2xl font-bold text-primary">625+</div>
                    <div class="flex-1">
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 lang-english">Projects Completed</h4>
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 hidden lang-arabic">المشاريع المنجزة</h4>
                        <p class="text-xs text-gray-500 leading-5 lang-english">
                            We have accomplished more than 625 projects worldwide and we are still counting many more.
                        </p>
                        <p class="text-xs text-gray-500 leading-5 hidden lang-arabic">
                            لقد أكملنا أكثر من 625 مشروعًا في جميع أنحاء العالم وما زلنا نعد المزيد.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="py-12 mt-20" data-aos="fade-up" data-aos-duration="800">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
                <span class="lang-english">Quality Assurance</span>
                <span class="lang-arabic hidden">ضمان الجودة</span>
            </h1>
        </div>
        <div class="mx-auto mt-12 max-w-2xl sm:mt-20 lg:mt-16 lg:max-w-4xl">
            <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                <!-- Item 1 -->
                <div class="relative ps-16 rtl:pe-16 rtl:ps-0" data-aos="fade-right" data-aos-duration="800">
                    <div class="text-base font-semibold leading-7 text-textPrimary flex items-center">
                        <div class="absolute start-0 rtl:end-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-primary">
                            <i class="fas fa-check-circle flex justify-center items-center text-white h-6 w-6"></i>
                        </div>
                        <span class="lang-english">Comprehensive Quality Control</span>
                        <span class="lang-arabic hidden">رقابة الجودة الشاملة</span>
                    </div>
                    <div class="mt-2 text-base leading-7 text-textSecondary lang-english">
                        Our projects undergo rigorous quality control processes to ensure that every aspect meets the highest standards.
                    </div>
                    <div class="mt-2 text-base leading-7 text-textSecondary lang-arabic hidden">
                        تخضع مشاريعنا لعمليات رقابة جودة صارمة لضمان أن كل جانب يلبي أعلى المعايير.
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="relative ps-16 rtl:pe-16 rtl:ps-0" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                    <div class="text-base font-semibold leading-7 text-textPrimary flex items-center">
                        <div class="absolute start-0 rtl:end-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-primary">
                            <i class="fas fa-user-shield flex justify-center items-center text-white h-6 w-6"></i>
                        </div>
                        <span class="lang-english">Expert Quality Assurance Team</span>
                        <span class="lang-arabic hidden">فريق ضمان الجودة الخبير</span>
                    </div>
                    <div class="mt-2 text-base leading-7 text-textSecondary lang-english">
                        Our dedicated QA team ensures that every project adheres to industry best practices, safeguarding the integrity of our work.
                    </div>
                    <div class="mt-2 text-base leading-7 text-textSecondary lang-arabic hidden">
                        يضمن فريق ضمان الجودة المخصص لدينا أن كل مشروع يتوافق مع أفضل الممارسات في الصناعة، مما يحافظ على سلامة عملنا.
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="relative ps-16 rtl:pe-16 rtl:ps-0" data-aos="fade-up" data-aos-duration="800">
                    <div class="text-base font-semibold leading-7 text-textPrimary flex items-center">
                        <div class="absolute start-0 rtl:end-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-primary">
                            <i class="fas fa-clipboard-check flex justify-center items-center text-white h-6 w-6"></i>
                        </div>
                        <span class="lang-english">Regular Audits and Assessments</span>
                        <span class="lang-arabic hidden">عمليات تدقيق وتقييم منتظمة</span>
                    </div>
                    <div class="mt-2 text-base leading-7 text-textSecondary lang-english">
                        We conduct regular audits and assessments of our processes to identify areas for improvement and ensure optimal performance.
                    </div>
                    <div class="mt-2 text-base leading-7 text-textSecondary lang-arabic hidden">
                        نقوم بإجراء عمليات تدقيق وتقييم منتظمة لعملياتنا لتحديد مجالات التحسين وضمان الأداء الأمثل.
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="relative ps-16 rtl:pe-16 rtl:ps-0" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="text-base font-semibold leading-7 text-textPrimary flex items-center">
                        <div class="absolute start-0 rtl:end-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-primary">
                            <i class="fas fa-arrow-up flex justify-center items-center text-white h-6 w-6"></i>
                        </div>
                        <span class="lang-english">Commitment to Continuous Improvement</span>
                        <span class="lang-arabic hidden">الالتزام بالتحسين المستمر</span>
                    </div>
                    <div class="mt-2 text-base leading-7 text-textSecondary lang-english">
                        We are committed to continuously improving our processes, incorporating feedback and lessons learned to enhance our services.
                    </div>
                    <div class="mt-2 text-base leading-7 text-textSecondary lang-arabic hidden">
                        نحن ملتزمون بتحسين عملياتنا بشكل مستمر، ودمج التعليقات والدروس المستفادة لتعزيز خدماتنا.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- REVIEWS SECTION -->
<div id="reviews"></div>
<div class="bg-bgSecondary/30 mx-auto mt-12 px-4 py-16">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Customer Reviews</span>
            <span class="lang-arabic hidden">آراء العملاء</span>
        </h1>
    </div>
    <!-- Swiper Slider for Reviews -->
    <div class="reviews-swiper-container overflow-hidden mt-10">
        <div class="swiper-wrapper">
            <!-- Review Slide 1 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-textPrimary/20" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">"From planning to completion, they maintained a high standard of professionalism and delivered the project well within the timeline. Their ability to manage challenges efficiently was truly commendable, and we’re very satisfied with the results."<br> — <strong>Salama Mohammed Humaidan</strong></p>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">"من التخطيط إلى الإنجاز، حافظوا على مستوى عالٍ من الاحترافية وسلموا المشروع في الوقت المحدد. كانت قدرتهم على إدارة التحديات بكفاءة جديرة بالتقدير، ونحن راضون جداً عن النتائج."<br> — <strong>سلامة محمد حمدان</strong></p>
                    </blockquote>
                </figure>
            </div>
            <!-- Review Slide 2 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-textSecondary" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">"Working with Green Fort construction company has been an absolute pleasure. Their attention to detail, adherence to timelines, and commitment to quality surpassed our expectations."<br> — <strong>Salma Salem Mohammed Darwish</strong></p>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">"كان العمل مع شركة Green Fort للبناء متعة مطلقة. لقد تجاوزت انتباههم للتفاصيل والالتزام بالمواعيد النهائية والالتزام بالجودة توقعاتنا."<br> — <strong>سلامة سالم محمد دارويش</strong></p>
                    </blockquote>
                </figure>
            </div>
            <!-- Review Slide 3 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-textSecondary" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">"Working with Green Fort UAE was a fantastic experience. They delivered on time and exceeded our expectations."<br> — <strong>Younis Ali Mahmood Mohammed</strong></p>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">"كانت تجربة العمل مع [اسم شركتكم] تجربة رائعة. لقد قاموا بالتسليم في الوقت المحدد وتجاوزوا توقعاتنا."<br> — <strong>يونس علي محمود محمد</strong></p>
                    </blockquote>
                </figure>
            </div>
            <!-- Review Slide 4 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-textSecondary" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">"Their professionalism and attention to detail made a significant difference in our project."<br> — <strong>Ibrahim Fairooz Moosa</strong></p>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">"كانت احترافيتهم واهتمامهم بالتفاصيل فارقًا كبيرًا في مشروعنا."<br> — <strong>إبراهيم فيروز موسى</strong></p>
                    </blockquote>
                </figure>
            </div>
            <!-- Review Slide 5 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-textSecondary" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">"The professionalism and quality of work from Green Fort UAE are unmatched."<br> — <strong>Shahnaz Abdul Hamid</strong></p>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">"إن الاحترافية وجودة العمل من [اسم شركتكم] لا مثيل لها."<br> — <strong>شهناز عبد الحميد</strong></p>
                    </blockquote>
                </figure>
            </div>
            <!-- Review Slide 6 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-textSecondary" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">"They understood our needs and delivered beyond our expectations."<br> — <strong>Moosa Abbas Ghuloom Maroof</strong></p>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">"فهموا احتياجاتنا وقدموا ما يتجاوز توقعاتنا."<br> — <strong>موسى عباس غلوم معروف</strong></p>
                    </blockquote>
                </figure>
            </div>
            <!-- Review Slide 7 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-textSecondary" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">"They managed our complex project with remarkable efficiency and precision. Their proactive communication and problem-solving approach made the process smooth and stress-free. The final result is a testament to their craftsmanship and dedication to excellence."<br> — <strong>Laila Abbas Ghuloom Maroof Ahmad</strong></p>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">"أداروا مشروعنا المعقد بكفاءة ودقة ملحوظتين. جعلت اتصالاتهم الاستباقية ونهجهم في حل المشكلات العملية سلسة وخالية من التوتر. النتيجة النهائية شهادة على حرفيتهم وولائهم للتميز."<br> — <strong>ليلى عباس غلوم معروف أحمد</strong></p>
                    </blockquote>
                </figure>
            </div>
            <!-- Review Slide 8 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-textSecondary" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">"We’ve partnered with several construction firms, but this team stands out for their exceptional work ethic and commitment to client satisfaction. The quality of the build was impressive, and they delivered on time without compromising on any detail."<br> — <strong>Saeed Khamis Saeed Ali Alhamdani</strong></p>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">"لقد شاركنا مع عدة شركات بناء، لكن هذا الفريق يبرز بأخلاقيات عملهم الاستثنائية والتزامهم برضا العملاء. كانت جودة البناء مثيرة للإعجاب، وسلموا في الوقت المحدد دون التنازل عن أي تفاصيل."<br> — <strong>سعيد خميس سعيد علي الحمداني</strong></p>
                    </blockquote>
                </figure>
            </div>
            <!-- Review Slide 9 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto">
                    <svg class="h-12 mx-auto mb-3 text-textSecondary" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">"Their innovative approach and focus on sustainability were crucial for our project. They exceeded our expectations in terms of design, execution, and overall project management. We couldn't have asked for a more dedicated team."<br> — <strong>Ibrahim Khamis Saeed</strong></p>
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">"كان نهجهم المبتكر وتركيزهم على الاستدامة حاسمين لمشروعنا. لقد تجاوزوا توقعاتنا من حيث التصميم والتنفيذ والإدارة العامة للمشروع. لم نكن لنطلب فريقًا أكثر تفانيًا."<br> — <strong>إبراهيم خميس سعيد</strong></p>
                    </blockquote>
                </figure>
            </div>
        </div> <!-- Custom Next/Prev Buttons -->
        <div class="flex justify-center mt-5 md:mt-10 space-x-6" style="direction:ltr;">
            <!-- Previous Button -->
            <button class="custom-prev w-8 h-8 flex items-center border-2 border-primary justify-center rounded-full hover:bg-primary text-primary transition z-30 duration-300 ease-in-out hover:text-bgPrimary lang-english">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </button>

            <!-- Next Button -->
            <button class="custom-next w-8 h-8 flex items-center border-2 border-primary justify-center rounded-full hover:bg-primary text-primary transition z-30 duration-300 ease-in-out hover:text-bgPrimary lang-english">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.59 16.59L13.17 12l-4.58-4.59L10 6l6 6-6 6z" />
                </svg>
            </button>
        </div>
    </div>
</div>

<div class="bg-primary text-white py-16" data-aos="fade-up">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
            <span class="lang-english">Join Us in Making a Difference</span>
            <span class="lang-arabic hidden">انضم إلينا في إحداث فرق</span>
        </h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto">
            <span class="lang-english">Together, we can create a brighter future for our communities. Discover how you can get involved in our initiatives.</span>
            <span class="lang-arabic hidden">معًا، يمكننا إنشاء مستقبل مشرق لمجتمعاتنا. اكتشف كيف يمكنك المشاركة في مبادراتنا.</span>
        </p>
        <a href="/contact" class="inline-flex items-center justify-center bg-white text-amber-600 font-semibold rounded-full px-6 py-3 transition-all duration-300 hover:bg-gray-100">
            <span class="lang-english mr-2">Contact Us</span>
            <span class="lang-arabic hidden ml-2">تواصل معنا</span>
            <i class="fa fa-arrow-right lang-english"></i>
            <i class="fa fa-arrow-left lang-arabic hidden"></i>
        </a>
    </div>
</div>


<div class="container mx-auto py-20">
    <h2 class="text-4xl text-center text-textPrimary font-bold mb-10" data-aos="fade-up">
        <span class="lang-english">Sustainability Practices</span>
        <span class="lang-arabic hidden">ممارسات الاستدامة</span>
    </h2>
    <div class="grid grid-cols-1 gap-8 px-4 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Practice 1 -->
        <div class="bg-white p-6 rounded-2xl border border-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 text-center text-green-600">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary lang-english">Green Building Materials</h3>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary hidden lang-arabic">مواد البناء الخضراء</h3>
            </div>
            <h4 class="text-center text-gray-600 mt-2 lang-english">
                We prioritize eco-friendly and locally sourced materials to reduce our carbon footprint.
            </h4>
            <h4 class="text-center text-gray-600 mt-2 hidden lang-arabic">
                نحن نعطي الأولوية للمواد الصديقة للبيئة والمصادر المحلية لتقليل بصمتنا الكربونية.
            </h4>
        </div>
        <!-- Practice 2 -->
        <div class="bg-white p-6 rounded-2xl border border-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 text-center text-blue-500">
                    <i class="fas fa-tint"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary lang-english">Water Conservation</h3>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary hidden lang-arabic">الحفاظ على المياه</h3>
            </div>
            <h4 class="text-center text-gray-600 mt-2 lang-english">
                Implementing advanced water recycling systems and drought-resistant landscaping.
            </h4>
            <h4 class="text-center text-gray-600 mt-2 hidden lang-arabic">
                تنفيذ أنظمة متقدمة لإعادة تدوير المياه وتصميم المناظر الطبيعية المقاومة للجفاف.
            </h4>
        </div>
        <!-- Practice 3 -->
        <div class="bg-white p-6 rounded-2xl border border-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 text-center text-yellow-500">
                    <i class="fas fa-sun"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary lang-english">Solar Energy Integration</h3>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary hidden lang-arabic">تكامل الطاقة الشمسية</h3>
            </div>
            <h4 class="text-center text-gray-600 mt-2 lang-english">
                Harnessing Dubai's abundant sunlight with state-of-the-art solar panel installations.
            </h4>
            <h4 class="text-center text-gray-600 mt-2 hidden lang-arabic">
                استغلال وفرة الشمس في دبي من خلال تركيب الألواح الشمسية الحديثة.
            </h4>
        </div>
        <!-- Practice 4 -->
        <div class="bg-white p-6 rounded-2xl border border-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 text-center text-green-500">
                    <i class="fas fa-recycle"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary lang-english">Waste Reduction</h3>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary hidden lang-arabic">تقليل النفايات</h3>
            </div>
            <h4 class="text-center text-gray-600 mt-2 lang-english">
                Comprehensive recycling programs and innovative waste management solutions on all our sites.
            </h4>
            <h4 class="text-center text-gray-600 mt-2 hidden lang-arabic">
                برامج إعادة تدوير شاملة وحلول مبتكرة لإدارة النفايات في جميع مواقعنا.
            </h4>
        </div>
        <!-- Practice 5 -->
        <div class="bg-white p-6 rounded-2xl border border-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 text-center text-purple-600">
                    <i class="fas fa-building"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary lang-english">Energy-Efficient Design</h3>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary hidden lang-arabic">تصميم موفر للطاقة</h3>
            </div>
            <h4 class="text-center text-gray-600 mt-2 lang-english">
                Creating buildings that minimize energy consumption through smart design and technology.
            </h4>
            <h4 class="text-center text-gray-600 mt-2 hidden lang-arabic">
                إنشاء مباني تقلل من استهلاك الطاقة من خلال التصميم الذكي والتكنولوجيا.
            </h4>
        </div>
        <!-- Practice 6 -->
        <div class="bg-white p-6 rounded-2xl border border-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 text-center text-yellow-600">
                    <i class="fas fa-award"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary lang-english">Sustainability Certifications</h3>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary hidden lang-arabic">شهادات الاستدامة</h3>
            </div>
            <h4 class="text-center text-gray-600 mt-2 lang-english">
                Committed to achieving LEED and Estidama certifications for our projects.
            </h4>
            <h4 class="text-center text-gray-600 mt-2 hidden lang-arabic">
                ملتزمون بتحقيق شهادات LEED وEstidama لمشاريعنا.
            </h4>
        </div>
    </div>
</div>