<div id="hero-section" class="relative hero-image h-screen isolate bg-cover bg-no-repeat overflow-hidden w-full">
    <!-- Video Background -->
    <video class="video-background absolute top-0 left-0 w-full h-full object-cover -z-10" autoplay muted loop playsinline>
        <source src="<?= getAsset('home-bg.mp4', 'videos/'); ?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="w-full h-full bg-slate-950/30 px-6 lg:px-8">
        <div class="mx-auto max-w-3xl py-16 sm:py-20 lg:py-12">
            <div class="text-center">
                <!-- Logo -->
                <img src="<?= getAsset('weblogo-white.webp', 'images/'); ?>" alt="Logo" class="w-64 mb-5 mt-16 brightness-125 mx-auto rounded-full object-cover" data-aos="fade-up" data-aos-delay="100">

                <!-- English Headings -->
                <h1 id="heading-english" class="text-4xl font-bold tracking-tight text-white sm:text-6xl lang-english" data-aos="fade-up" data-aos-delay="200"></h1>
                <p class="mt-4 text-md leading-5 text-white/90 lang-english" data-aos="fade-up" data-aos-delay="300">
                    At Green Fort, we shape Dubai's skyline with leading construction solutions focused on innovation, quality, and sustainability.
                </p>

                <!-- Arabic Headings -->
                <h1 id="heading-arabic" class="text-4xl font-bold tracking-tight text-white sm:text-6xl lang-arabic hidden" data-aos="fade-up" data-aos-delay="200"></h1>
                <p class="mt-4 text-md leading-5 text-white/90 lang-arabic hidden" data-aos="fade-up" data-aos-delay="300">
                    في جرين فورت، نسهم في تشكيل أفق دبي من خلال حلول بناء رائدة، مع التركيز على الابتكار والجودة والاستدامة.
                </p>
            </div>

            <!-- Buttons -->
            <div class="mt-8 flex items-center justify-center gap-x-6" data-aos="fade-up" data-aos-delay="400">
                <a href="/#about" class="rounded-full bg-primary px-4 py-2.5 text-sm font-semibold text-bgPrimary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary transition group lang-english">
                    Learn more
                    <i class="fa fa-arrow-down ml-2 transition-transform duration-300 transform group-hover:translate-y-1"></i>
                </a>
                <a href="/#about" class="rounded-full bg-primary px-4 py-2.5 text-sm font-semibold text-bgPrimary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary transition group lang-arabic hidden">
                    اعرف المزيد
                    <i class="fa fa-arrow-down ml-2 transition-transform duration-300 transform group-hover:translate-y-1"></i>
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="flex items-center justify-center absolute bottom-5 left-[50%] transform -translate-x-[45%]">
                <div class="mt-20 text-center ring-1 ring-white rounded-full w-8 h-12 flex items-center justify-center">
                    <div class="w-3 h-3 rounded-full bg-white animate-ping"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        const englishHeadings = [
            "Redefining Construction Excellence in Dubai",
            "Innovative Solutions for Modern Living",
            "Building the Future with Integrity"
        ];

        const arabicHeadings = [
            "إعادة تعريف تميز البناء في دبي",
            "حلول مبتكرة للعيش العصري",
            "بناء المستقبل بنزاهة"
        ];

        let englishIndex = 0;
        let arabicIndex = 0;

        function typeWriter(element, text, delay) {
            let index = 0;

            function type() {
                if (index < text.length) {
                    $(element).append(text.charAt(index));
                    index++;
                    setTimeout(type, delay);
                } else {
                    setTimeout(() => {
                        $(element).empty();
                        index = 0;
                        if (element === '#heading-english') {
                            englishIndex = (englishIndex + 1) % englishHeadings.length;
                            typeWriter('#heading-english', englishHeadings[englishIndex], 100);
                        } else {
                            arabicIndex = (arabicIndex + 1) % arabicHeadings.length;
                            typeWriter('#heading-arabic', arabicHeadings[arabicIndex], 100);
                        }
                    }, 2000);
                }
            }
            type();
        }

        typeWriter('#heading-english', englishHeadings[englishIndex], 100);
        typeWriter('#heading-arabic', arabicHeadings[arabicIndex], 100);
    });
</script>
<section class="py-16 container mx-auto max-w-6xl" id="about">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h2 class="text-textPrimary text-4xl font-bold leading-2 lg:text-start text-center mb-2 lang-english" data-aos="fade-up" data-aos-duration="1000">
                Let’s Build the Future Together
            </h2>
            <p class="text-textSecondary text-base font-normal leading-relaxed lg:text-start text-center lang-english" data-aos="fade-up" data-aos-duration="1200">
                With over 25 years of experience spanning diverse sectors, General Construction Co. LLC delivers unparalleled service to our esteemed clients. Throughout our journey, we have honed our skills and mastered industry trends, contributing to our unwavering commitment to excellence in every project. Green Fort provides exceptional services in villa and service block construction, general maintenance, renovation, tiling, ceiling, and painting works, as well as interior design and fit-out works. Our expertise includes parquet, laminate, and vinyl floorings, warehouse construction, epoxy flooring, and parking marking and signage. Additionally, we offer carpentry, electrical, plumbing, air-conditioning works, external pavings, and annual maintenance for both residential and corporate premises.
            </p>

            <!-- Arabic Version -->
            <h2 class="text-textPrimary text-4xl font-bold leading-2 lg:text-start text-center mb-2 lang-arabic hidden" data-aos="fade-up" data-aos-duration="1000">
                دعونا نبني المستقبل معًا
            </h2>

            <p class="text-textSecondary text-base font-normal leading-relaxed lg:text-start text-center lang-arabic hidden" data-aos="fade-up" data-aos-duration="1200">
                مع أكثر من 25 عامًا من الخبرة التي تشمل مجالات متنوعة، تقدم شركة البناء العامة خدمات لا مثيل لها لعملائنا الكرام. على مدار رحلتنا، قمنا بصقل مهاراتنا وإتقان اتجاهات الصناعة، مما يسهم في التزامنا الثابت بالتميز في كل مشروع. توفر Green Fort خدمات استثنائية في بناء الفلل والمباني الخدمية، والصيانة العامة، والتجديد، والبلاط، والأسقف، وأعمال الطلاء، بالإضافة إلى التصميم الداخلي وأعمال التهيئة. تشمل خبرتنا الأرضيات الباركية، واللامينيت، والأرضيات الفينيل، وبناء المستودعات، والأرضيات الإيبوكسي، وعلامات مواقف السيارات. بالإضافة إلى ذلك، نقدم خدمات النجارة، والكهرباء، والسباكة، وتكييف الهواء، والأرصفة الخارجية، والصيانة السنوية للممتلكات السكنية والتجارية.
            </p>

            <div class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex mt-10" id="stats" data-aos="fade-up" data-aos-duration="500">

                <!-- English Version Stats -->
                <div class="flex-col justify-start items-start inline-flex md:text-left text-center lang-english">
                    <h3 class="text-textPrimary text-4xl font-bold leading-2 count ml-7 md:m-0" data-count="10">10+</h3>
                    <h6 class="text-textSecondary text-base font-normal leading-relaxed">Years of Experience</h6>
                </div>
                <div class="flex-col justify-start items-start inline-flex md:text-left text-center lang-english">
                    <h4 class="text-textPrimary text-4xl font-bold leading-2 count ml-7 md:m-0" data-count="110">110+</h4>
                    <h6 class="text-textSecondary text-base font-normal leading-relaxed">Projects Completed</h6>
                </div>
                <div class="flex-col justify-start items-start inline-flex md:text-left text-center lang-english">
                    <h4 class="text-textPrimary text-4xl font-bold leading-2 count ml-7 md:m-0" data-count="105">105+</h4>
                    <h6 class="text-textSecondary text-base font-normal leading-relaxed">Happy Customers</h6>
                </div>

                <!-- Arabic Version Stats -->
                <div class="flex-col justify-start items-start inline-flex md:text-left text-center lang-arabic hidden">
                    <h3 class="text-textPrimary text-4xl font-bold leading-2 count ml-7 md:m-0" data-count="10">10+</h3>
                    <h6 class="text-textSecondary text-base font-normal leading-relaxed">سنوات من الخبرة</h6>
                </div>
                <div class="flex-col justify-start items-start inline-flex md:text-left text-center lang-arabic hidden">
                    <h4 class="text-textPrimary text-4xl font-bold leading-2 count ml-7 md:m-0" data-count="110">110+</h4>
                    <h6 class="text-textSecondary text-base font-normal leading-relaxed">مشاريع مكتملة</h6>
                </div>
                <div class="flex-col justify-start items-start inline-flex md:text-left text-center lang-arabic hidden">
                    <h4 class="text-textPrimary text-4xl font-bold leading-2 count ml-7 md:m-0" data-count="105">105+</h4>
                    <h6 class="text-textSecondary text-base font-normal leading-relaxed">عملاء سعداء</h6>
                </div>
            </div>
        </div>
        <div>
            <div class="grid grid-cols-2 gap-4 mt-12">
                <img loading="lazy" src="<?= getAsset('handshake-1.webp', 'images/'); ?>" alt="arabic people doing handshake 1" class="object-contain hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
                <img loading="lazy" src="<?= getAsset('handshake-2.webp', 'images/'); ?>" alt="arabic people meeting 2" class="object-contain hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
                <img loading="lazy" src="<?= getAsset('arabic-1.webp', 'images/'); ?>" alt="arabic culture 1" class="object-contain hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
                <img loading="lazy" src="<?= getAsset('arabic-2.webp', 'images/'); ?>" alt="arabic culture 2" class="object-contain hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-bgSecondary/30" id="partners">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-8">WE'RE WORKING WITH</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Partner Logo 1 -->
            <div class="flex justify-center">
                <img loading="lazy" src="<?= getAsset('company-1.webp', 'images/'); ?>" alt="Company 1" class="h-24 rounded-xl object-contain">
            </div>
            <!-- Partner Logo 2 -->
            <div class="flex justify-center">
                <img loading="lazy" src="<?= getAsset('company-2.webp', 'images/'); ?>" alt="Company 2" class="h-24 rounded-xl object-contain">
            </div>
            <!-- Partner Logo 3 -->
            <div class="flex justify-center">
                <img loading="lazy" src="<?= getAsset('company-3.webp', 'images/'); ?>" alt="Company 3" class="h-24 rounded-xl object-contain">
            </div>
            <!-- Partner Logo 4 -->
            <div class="flex justify-center">
                <img loading="lazy" src="<?= getAsset('company-4.webp', 'images/'); ?>" alt="Company 4" class="h-24 rounded-xl object-contain">
            </div>
        </div>
    </div>
</section>

<div class="mx-auto px-4 py-16">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Our Clients</span>
            <span class="lang-arabic hidden">عملاؤنا</span>
        </h1>
    </div>
    <div class="projects-swiper-container overflow-hidden mt-10">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Maintenance<br> — <strong>Mr Bassam Dahman</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    صيانة فيلا<br> — <strong>السيد بسام دهمان</strong>
                </p>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition<br> — <strong>Mr Younis Ali Mahmoud Mohammed Al Bloushi</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة فيلا<br> — <strong>السيد يونس علي محمود محمد البلوشي</strong>
                </p>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition + Maintenance<br> — <strong>Mr Khamis Firooz Mousa Mohammed Bosoud</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة وصيانة فيلا<br> — <strong>السيد خميس فيروز موسى محمد بوسعود</strong>
                </p>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition + Maintenance<br> — <strong>Mr Hussain Abdulrahman Ali Mohammed Al Abadi</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة وصيانة فيلا<br> — <strong>السيد حسين عبدالرحمن علي محمد العبادي</strong>
                </p>
            </div>

            <!-- Slide 5 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition<br> — <strong>Mrs Shahnaz Abdul Hamid Sheikh</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة فيلا<br> — <strong>السيدة شهناز عبدالحميد شيخ</strong>
                </p>
            </div>

            <!-- Slide 6 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa First Floor Addition<br> — <strong>Mr Abdullah Khamis Rashid Habib Al Mazrouei</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة طابق فيلا<br> — <strong>السيد عبدالله خميس راشد حبيب المزروعي</strong>
                </p>
            </div>

            <!-- Slide 7 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Maintenance<br> — <strong>Mr Yousuf Ghuloom Ali Mohammed Al Bloushi</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    صيانة فيلا<br> — <strong>السيد يوسف غلوم على محمد البلوشي</strong>
                </p>
            </div>

            <!-- Slide 8 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition + Maintenance<br> — <strong>Mr Marwan Hassan Fakher Suleiman</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة وصيانة فيلا<br> — <strong>السيد مروان حسن فاخر سليمان</strong>
                </p>
            </div>

            <!-- Slide 9 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Renovation<br> — <strong>Mr Ahmed Abdullah Khalifa Al Suwaidi</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    تجديد فيلا<br> — <strong>السيد أحمد عبدالله خليفة السويدي</strong>
                </p>
            </div>

            <!-- Slide 10 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Modification<br> — <strong>Mrs Fatima Mohammed Al Qasimi</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    تعديل فيلا<br> — <strong>السيدة فاطمة محمد القاسمي</strong>
                </p>
            </div>

            <!-- Slide 11 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Extension<br> — <strong>Mr Salem Obaid Hassan Al Mansouri</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    تمديد فيلا<br> — <strong>السيد سالم عبيد حسن المنصوري</strong>
                </p>
            </div>

            <!-- Slide 12 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition + Renovation<br> — <strong>Mr Khalid Mohammed Al Mazrouei</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة وتجديد فيلا<br> — <strong>السيد خالد محمد المزروعي</strong>
                </p>
            </div>

            <!-- Slide 13 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Maintenance<br> — <strong>Mrs Layla Abdul Wahab Al Hashimi</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    صيانة فيلا<br> — <strong>السيدة ليلى عبد الوهاب الهاشمي</strong>
                </p>
            </div>

            <!-- Slide 14 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition<br> — <strong>Mr Ali Saeed Al Nuaimi</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة فيلا<br> — <strong>السيد علي سعيد النعيمي</strong>
                </p>
            </div>

            <!-- Slide 15 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa First Floor Addition<br> — <strong>Mrs Hessa Saeed Al Suwaidi</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة طابق فيلا<br> — <strong>السيدة حصة سعيد السويدي</strong>
                </p>
            </div>
            <!-- Slide 16 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Maintenance<br> — <strong>Mr Humaid Abbas Ghulam Ma'aruf Al Bloushi</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    صيانة فيلا<br> — <strong>السيد حميد عباس غلام معروف البلوشي</strong>
                </p>
            </div>

            <!-- Slide 17 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition + Maintenance<br> — <strong>Mrs Faheema Essa Juma Mohammed</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة وصيانة فيلا<br> — <strong>السيدة فهيمه عيسى جمعه محمد</strong>
                </p>
            </div>

            <!-- Slide 18 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition + Maintenance<br> — <strong>Ms Salma Salem Mohammed Darwish</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة وصيانة فيلا<br> — <strong>السيدة سلمى سالم محمد درويش</strong>
                </p>
            </div>

            <!-- Slide 19 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Maintenance<br> — <strong>Faisal Abdul Rahman Abdulla Ibrahim</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    صيانة فيلا<br> — <strong>فيصل عبدالرحمن عبدالله إبراهيم</strong>
                </p>
            </div>

            <!-- Slide 20 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition<br> — <strong>Mr Ahmed Mubarak Dhahi Firooz Bin Thalith</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة فيلا<br> — <strong>السيد أحمد مبارك ضاحي فيروز بن ثالث</strong>
                </p>
            </div>

            <!-- Slide 21 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Maintenance<br> — <strong>Mrs Leila Abbas Ghulam Ma'aruf Ahmed</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    صيانة فيلا<br> — <strong>السيدة ليلى عباس غلام معروف أحمد</strong>
                </p>
            </div>

            <!-- Slide 22 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Extension + Maintenance<br> — <strong>Mr Saeed Salem Salim Al Marri</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    تمديد وصيانة فيلا<br> — <strong>السيد سعيد سالم سليم المري</strong>
                </p>
            </div>

            <!-- Slide 23 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Maintenance + Architectural Modifications<br> — <strong>Mr Saeed Khamis Said Ali Al Hamadani</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    صيانة فيلا + تعديلات معمارية<br> — <strong>السيد سعيد خميس سعيد علي الحمداني</strong>
                </p>
            </div>

            <!-- Slide 24 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition + Maintenance<br> — <strong>Mrs Fawzia Abbas Ghulam Ma'aruf Ahmed</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة وصيانة فيلا<br> — <strong>السيدة فوزيه عباس غلام معروف أحمد</strong>
                </p>
            </div>

            <!-- Slide 25 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition + Maintenance<br> — <strong>Mr Fahad Rashid Al Humaidi Ali Khseif Al Kaabi</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة وصيانة فيلا<br> — <strong>السيد فهد راشد الحميدي علي خصيف الكعبي</strong>
                </p>
            </div>

            <!-- Slide 26 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition + Maintenance<br> — <strong>Mrs Salama Mohammed Humaidan, Wife of Yousuf Abdullah</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة وصيانة فيلا<br> — <strong>السيدة سلامة محمد حميدان زوجة يوسف عبدالله</strong>
                </p>
            </div>

            <!-- Slide 27 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Extension + Maintenance<br> — <strong>Anfal Saleh Khamis Bilal</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    تمديد وصيانة فيلا<br> — <strong>أنفال صالح خميس بلال</strong>
                </p>
            </div>

            <!-- Slide 28 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Addition + Maintenance<br> — <strong>Mrs Alia Salem Mohammed Darwish</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    إضافة وصيانة فيلا<br> — <strong>السيدة علياء سالم محمد درويش</strong>
                </p>
            </div>

            <!-- Slide 29 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Construction of Private Villa<br> — <strong>Mr Ahmad</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    بناء فيلا خاصة<br> — <strong>السيد أحمد</strong>
                </p>
            </div>

            <!-- Slide 30 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Construction of Private Villa<br> — <strong>Mr Ibrahim Khamis Said Ali Al Hamadani</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    بناء فيلا خاصة<br> — <strong>السيد إبراهيم خميس سعيد علي الحمداني</strong>
                </p>
            </div>

            <!-- Slide 31 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Maintenance<br> — <strong>Mr Waleed Abbas Ghulam Ma'aruf</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    صيانة فيلا<br> — <strong>السيد وليد عباس غلوم معروف</strong>
                </p>
            </div>

            <!-- Slide 32 -->
            <div class="swiper-slide">
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-english" data-aos="fade-up">
                    Villa Maintenance<br> — <strong>Mr Ahmed Ali Mohammed Yousuf</strong>
                </p>
                <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">
                    صيانة فيلا<br> — <strong>السيد أحمد علي محمد يوسف</strong>
                </p>
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

<section class="bg-bgSecondary/30 text-textPrimary" id="vision">
    <div class="container max-w-5xl px-4 py-12 mx-auto">
        <div class="grid gap-4 mx-4 sm:grid-cols-12">
            <!-- English Version -->
            <div class="col-span-12 sm:col-span-3 lang-english" data-aos="fade-right" data-aos-delay="100">
                <div class="text-center sm:text-left mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:bg-primary transition-all duration-300 ease-in-out">
                    <h3 class="text-3xl font-semibold transition-transform duration-300 ease-in-out">GreenFortUAE</h3>
                    <span class="text-sm font-bold tracking-wider uppercase dark:text-textSecondary transition-opacity duration-300 ease-in-out">Vision & Mission</span>
                </div>
            </div>
            <div class="relative col-span-12 space-y-6 sm:col-span-9 lang-english" data-aos="fade-left" data-aos-delay="200">
                <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:dark:bg-textSecondary">
                    <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-primary transition-all duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold tracking-wide transition-transform duration-300 ease-in-out">Our Vision</h3>
                        <p class="mt-3 text-textSecondary transition-opacity duration-300 ease-in-out">
                            At Green Fort, our vision is to become the most trusted and innovative construction company, recognized for delivering projects that enhance the built environment and improve the quality of life in communities.
                        </p>
                    </div>
                    <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-primary transition-all duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold tracking-wide transition-transform duration-300 ease-in-out">Our Mission</h3>
                        <p class="mt-3 text-textSecondary transition-opacity duration-300 ease-in-out">
                            We strive to lead the industry by adopting cutting-edge technologies, sustainable practices, and creative solutions that meet the evolving needs of our clients. Our commitment to excellence ensures that we deliver projects on time and within budget while exceeding client expectations.
                        </p>
                    </div>
                    <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-primary transition-all duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold tracking-wide transition-transform duration-300 ease-in-out">Our Goal</h3>
                        <p class="mt-3 text-textSecondary transition-opacity duration-300 ease-in-out">
                            Our goal is to create lasting value through excellence in construction, fostering long-term relationships with our clients, partners, and communities, while contributing to a greener and more sustainable future for generations to come. We believe in utilizing innovative and eco-friendly practices to achieve these aims.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Arabic Version -->
            <div class="col-span-12 sm:col-span-3 lang-arabic hidden" data-aos="fade-right" data-aos-delay="100">
                <div class="text-center sm:text-right mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:bg-primary transition-all duration-300 ease-in-out">
                    <h3 class="text-3xl font-semibold transition-transform duration-300 ease-in-out">جرين فورت الإمارات</h3>
                    <span class="text-sm font-bold tracking-wider uppercase dark:text-textSecondary transition-opacity duration-300 ease-in-out">الرؤية و المهمة</span>
                </div>
            </div>
            <div class="relative col-span-12 space-y-6 sm:col-span-9 lang-arabic hidden" data-aos="fade-left" data-aos-delay="200">
                <div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-right-3 before:dark:bg-textSecondary">
                    <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:right-[-35px] sm:before:z-[1] before:bg-primary transition-all duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold tracking-wide transition-transform duration-300 ease-in-out">رؤيتنا</h3>
                        <p class="mt-3 text-textSecondary transition-opacity duration-300 ease-in-out">
                            في جرين فورت، رؤيتنا هي أن نصبح الشركة الأكثر ثقة وابتكارًا في مجال البناء، حيث يتم الاعتراف بنا لتسليم مشاريع تعزز البيئة المبنية وتحسن جودة الحياة في المجتمعات.
                        </p>
                    </div>
                    <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:right-[-35px] sm:before:z-[1] before:bg-primary transition-all duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold tracking-wide transition-transform duration-300 ease-in-out">مهمتنا</h3>
                        <p class="mt-3 text-textSecondary transition-opacity duration-300 ease-in-out">
                            نسعى إلى قيادة الصناعة من خلال تبني أحدث التقنيات، والممارسات المستدامة، والحلول الإبداعية التي تلبي الاحتياجات المتطورة لعملائنا. إن التزامنا بالتميز يضمن لنا تقديم مشاريع في الوقت المحدد وضمن الميزانية مع تجاوز توقعات العملاء.
                        </p>
                    </div>
                    <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:right-[-35px] sm:before:z-[1] before:bg-primary transition-all duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold tracking-wide transition-transform duration-300 ease-in-out">هدفنا</h3>
                        <p class="mt-3 text-textSecondary transition-opacity duration-300 ease-in-out">
                            هدفنا هو خلق قيمة مستدامة من خلال التميز في البناء، وتطوير علاقات طويلة الأمد مع عملائنا وشركائنا ومجتمعاتنا، والمساهمة في مستقبل أكثر خضرة واستدامة للأجيال القادمة. نحن نؤمن باستخدام ممارسات مبتكرة وصديقة للبيئة لتحقيق هذه الأهداف.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="max-w-7xl mx-auto px-5 mt-16" id="services">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Services We Offer</span>
            <span class="lang-arabic hidden">الخدمات التي نقدمها</span>
        </h1>
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
                <h4 class="font-semibold text-xl text-textPrimary lang-english">Interior Design and Fit-Out Works</h4>
                <h4 class="font-semibold text-xl text-textPrimary lang-arabic hidden">أعمال التصميم الداخلي والتجهيزات</h4>
            </div>
        </div>
    </div>

    <!-- View All Services Button -->
    <div class="text-center mt-12">
        <a href="/services" class="group text-primary font-semibold py-1 px-6 rounded-full transition-all duration-300 border border-2 border-primary inline-flex items-center lang-english">
            <span class="mr-2">All Services</span>
            <i class="ml-2 fa fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-2"></i>
        </a>

        <a href="/services" class="group text-primary font-semibold py-1 px-6 rounded-full transition-all duration-300 border border-2 border-primary inline-flex items-center lang-arabic hidden">
            <span>جميع الخدمات</span>
            <i class="mr-2 fa fa-arrow-left transform transition-transform duration-300 group-hover:-translate-x-2"></i>
        </a>
    </div>

</div>



<div class="bg-bgSecondary/30 mx-auto p-10 mt-16" id="portfolio">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Covered Areas</span>
            <span class="lang-arabic hidden">المناطق المغطاة</span>

        </h1>
    </div>

    <div class="flex flex-wrap -mx-4 mt-16 max-w-7xl">
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




<section class="py-16 mt-12 container mx-auto" data-aos="fade-up">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Projects Gallery</span>
            <span class="lang-arabic hidden">معرض المشاريع</span>

        </h1>
    </div>

    <div class="gallery-swiper-container overflow-hidden px-3 mt-10">
        <div class="flex justify-center mb-5 md:mb-10 space-x-6" style="direction:ltr;">
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
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-1.webp', 'images/'); ?>" alt="gallery 1" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-2.webp', 'images/'); ?>" alt="gallery 2" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-3.webp', 'images/'); ?>" alt="gallery 3" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-4.webp', 'images/'); ?>" alt="gallery 4" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-5.webp', 'images/'); ?>" alt="gallery 5" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-6.webp', 'images/'); ?>" alt="gallery 6" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-7.webp', 'images/'); ?>" alt="gallery 7" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-8.webp', 'images/'); ?>" alt="gallery 8" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-9.webp', 'images/'); ?>" alt="gallery 9" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-10.webp', 'images/'); ?>" alt="gallery 10" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-11.webp', 'images/'); ?>" alt="gallery 11" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-12.webp', 'images/'); ?>" alt="gallery 12" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-13.webp', 'images/'); ?>" alt="gallery 13" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-14.webp', 'images/'); ?>" alt="gallery 14" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-15.webp', 'images/'); ?>" alt="gallery 15" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-16.webp', 'images/'); ?>" alt="gallery 16" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-17.webp', 'images/'); ?>" alt="gallery 17" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-18.webp', 'images/'); ?>" alt="gallery 18" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-19.webp', 'images/'); ?>" alt="gallery 19" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-20.webp', 'images/'); ?>" alt="gallery 20" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-21.webp', 'images/'); ?>" alt="gallery 21" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-22.webp', 'images/'); ?>" alt="gallery 22" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-23.webp', 'images/'); ?>" alt="gallery 23" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-24.webp', 'images/'); ?>" alt="gallery 24" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-25.webp', 'images/'); ?>" alt="gallery 25" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-26.webp', 'images/'); ?>" alt="gallery 26" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-27.webp', 'images/'); ?>" alt="gallery 27" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-28.webp', 'images/'); ?>" alt="gallery 28" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide">
                <img loading="lazy" src="<?= getAsset('gallery-29.webp', 'images/'); ?>" alt="gallery 29" class="object-cover hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>
        </div>
        <!-- View All Button -->
        <div class="text-center mt-12">
            <a href="/portfolio" class="group text-primary font-semibold py-1 px-6 rounded-full transition-all duration-300 border border-2 border-primary inline-flex items-center lang-english">
                <span class="mr-2">View All</span>
                <i class="ml-2 fa fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-2"></i>
            </a>

            <a href="/portfolio" class="group text-primary font-semibold py-1 px-6 rounded-full transition-all duration-300 border border-2 border-primary inline-flex items-center lang-arabic hidden">
                <span>عرض الكل</span>
                <i class="mr-2 fa fa-arrow-left transform transition-transform duration-300 group-hover:-translate-x-2"></i>
            </a>
        </div>
    </div>
</section>

<div class="relative py-16 text-white" data-aos="fade-up">
    <div class="absolute inset-0 bg-cover bg-center bg-[url('<?= getAsset('cta-bg.webp', 'images/'); ?>')]"></div>
    <div class="absolute inset-0 bg-primary opacity-60"></div> <!-- Overlay with opacity -->
    <div class="container mx-auto px-4 text-center relative z-10">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
            <span class="lang-english">Join Us in Making a Difference</span>
            <span class="lang-arabic hidden">انضم إلينا في إحداث فرق</span>
        </h2>
        <p class="text-lg mb-8 max-w-2xl mx-auto">
            <span class="lang-english">Together, we can create a brighter future for our communities. Discover how you can get involved in our initiatives.</span>
            <span class="lang-arabic hidden">معًا، يمكننا إنشاء مستقبل مشرق لمجتمعاتنا. اكتشف كيف يمكنك المشاركة في مبادراتنا.</span>
        </p>
        <a href="/contact" class="inline-flex items-center justify-center bg-white text-primary font-semibold rounded-full px-6 py-3 transition-all duration-300 hover:bg-gray-100">
            <span class="lang-english mr-2">Contact Us</span>
            <span class="lang-arabic hidden ml-2">تواصل معنا</span>
            <i class="fa fa-arrow-right lang-english"></i>
            <i class="fa fa-arrow-left lang-arabic hidden"></i>
        </a>
    </div>
</div>




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
                <div class="relative ps-16 rtl:pe-16 rtl:ps-0" data-aos="fade-left" data-aos-duration="800">
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
                <div class="relative ps-16 rtl:pe-16 rtl:ps-0" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
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

<!-- ====== FAQ Section Start -->
<section
    x-data="{
    openFaq1: true,
    openFaq2: false,
    openFaq3: false,
    openFaq4: false,
    openFaq5: false,
    openFaq6: false
  }"
    class="relative z-20 overflow-hidden bg-bgPrimary pt-20 pb-12"
    data-aos="fade-up">
    <div class="container mx-auto">
        <div class="mx-auto max-w-5xl mb-12 lg:text-center flex flex-col justify-center items-center">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
                <span class="lang-english">Frequently Asked Questions</span>
                <span class="lang-arabic hidden">الأسئلة الشائعة</span>
            </h1>
        </div>
        <div class="flex flex-wrap mx-1">
            <div class="w-full px-4 lg:w-1/2">
                <div class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4">
                    <button
                        class="flex w-full text-left faq-btn"
                        @click="openFaq1 = !openFaq1"
                        data-aos="fade-in">
                        <div class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <i :class="openFaq1 ? 'fa fa-chevron-down' : 'fa fa-chevron-right'" class="text-primary lang-english"></i>
                            <i :class="openFaq1 ? 'fa fa-chevron-down' : 'fa fa-chevron-left'" class="text-primary lang-arabic hidden"></i>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-textPrimary">
                                <span class="lang-english">How long does it take to complete a project?</span>
                                <span class="lang-arabic hidden">كم يستغرق إكمال المشروع؟</span>
                            </h4>
                        </div>
                    </button>
                    <div
                        x-show="openFaq1"
                        class="faq-content pl-[62px] transition-all duration-500 ease-in-out"
                        x-transition:enter="transform transition-opacity"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transform transition-opacity"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-english">
                            The completion time depends on the project’s scale and complexity. However, we ensure timely delivery with consistent communication.
                        </p>
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-arabic hidden">
                            يعتمد وقت الانتهاء على حجم وتعقيد المشروع. ومع ذلك، نضمن التسليم في الوقت المناسب مع التواصل المستمر.
                        </p>
                    </div>
                </div>

                <div class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4">
                    <button
                        class="flex w-full text-left faq-btn"
                        @click="openFaq2 = !openFaq2"
                        data-aos="fade-in">
                        <div class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <i :class="openFaq2 ? 'fa fa-chevron-down' : 'fa fa-chevron-right'" class="text-primary lang-english"></i>
                            <i :class="openFaq2 ? 'fa fa-chevron-down' : 'fa fa-chevron-left'" class="text-primary lang-arabic hidden"></i>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-textPrimary">
                                <span class="lang-english">What types of construction services do you offer?</span>
                                <span class="lang-arabic hidden">ما أنواع خدمات البناء التي تقدمها؟</span>
                            </h4>
                        </div>
                    </button>
                    <div
                        x-show="openFaq2"
                        class="faq-content pl-[62px] transition-all duration-500 ease-in-out"
                        x-transition:enter="transform transition-opacity"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transform transition-opacity"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-english">
                            We offer project management, general contracting, architectural design, renovations, fit-outs, and consulting services.
                        </p>
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-arabic hidden">
                            نقدم إدارة المشاريع، والمقاولات العامة، والتصميم المعماري، والتجديدات، والتجهيزات، وخدمات الاستشارات.
                        </p>
                    </div>
                </div>

                <div class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4">
                    <button
                        class="flex w-full text-left faq-btn"
                        @click="openFaq3 = !openFaq3"
                        data-aos="fade-in">
                        <div class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <i :class="openFaq3 ? 'fa fa-chevron-down' : 'fa fa-chevron-right'" class="text-primary lang-english"></i>
                            <i :class="openFaq3 ? 'fa fa-chevron-down' : 'fa fa-chevron-left'" class="text-primary lang-arabic hidden"></i>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-textPrimary">
                                <span class="lang-english">How do you ensure quality in your projects?</span>
                                <span class="lang-arabic hidden">كيف تضمن الجودة في مشاريعك؟</span>
                            </h4>
                        </div>
                    </button>
                    <div
                        x-show="openFaq3"
                        class="faq-content pl-[62px] transition-all duration-500 ease-in-out"
                        x-transition:enter="transform transition-opacity"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transform transition-opacity"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-english">
                            We follow strict quality assurance processes, utilize the best materials, and ensure ongoing supervision to deliver excellence.
                        </p>
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-arabic hidden">
                            نتبع عمليات ضمان الجودة الصارمة، ونستخدم أفضل المواد، ونضمن الإشراف المستمر لتقديم التميز.
                        </p>
                    </div>
                </div>
            </div>

            <div class="w-full px-4 lg:w-1/2">
                <div class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4">
                    <button
                        class="flex w-full text-left faq-btn"
                        @click="openFaq4 = !openFaq4"
                        data-aos="fade-in">
                        <div class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <i :class="openFaq4 ? 'fa fa-chevron-down' : 'fa fa-chevron-right'" class="text-primary lang-english"></i>
                            <i :class="openFaq4 ? 'fa fa-chevron-down' : 'fa fa-chevron-left'" class="text-primary lang-arabic hidden"></i>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-textPrimary">
                                <span class="lang-english">Do you offer post-construction support?</span>
                                <span class="lang-arabic hidden">هل تقدم دعمًا بعد البناء؟</span>
                            </h4>
                        </div>
                    </button>
                    <div
                        x-show="openFaq4"
                        class="faq-content pl-[62px] transition-all duration-500 ease-in-out"
                        x-transition:enter="transform transition-opacity"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transform transition-opacity"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-english">
                            Yes, we provide maintenance and support services even after the project is completed to ensure everything functions smoothly.
                        </p>
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-arabic hidden">
                            نعم، نقدم خدمات الصيانة والدعم حتى بعد اكتمال المشروع لضمان سير كل شيء بسلاسة.
                        </p>
                    </div>
                </div>

                <div class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4">
                    <button
                        class="flex w-full text-left faq-btn"
                        @click="openFaq5 = !openFaq5"
                        data-aos="fade-in">
                        <div class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <i :class="openFaq5 ? 'fa fa-chevron-down' : 'fa fa-chevron-right'" class="text-primary lang-english"></i>
                            <i :class="openFaq5 ? 'fa fa-chevron-down' : 'fa fa-chevron-left'" class="text-primary lang-arabic hidden"></i>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-textPrimary">
                                <span class="lang-english">How do you handle project delays?</span>
                                <span class="lang-arabic hidden">كيف تتعامل مع تأخيرات المشروع؟</span>
                            </h4>
                        </div>
                    </button>
                    <div
                        x-show="openFaq5"
                        class="faq-content pl-[62px] transition-all duration-500 ease-in-out"
                        x-transition:enter="transform transition-opacity"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transform transition-opacity"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-english">
                            We communicate transparently with clients, providing regular updates and creating contingency plans to mitigate delays.
                        </p>
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-arabic hidden">
                            نتواصل بشفافية مع العملاء، ونقدم تحديثات منتظمة ونضع خطط طوارئ للتخفيف من التأخيرات.
                        </p>
                    </div>
                </div>

                <div class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4">
                    <button
                        class="flex w-full text-left faq-btn"
                        @click="openFaq6 = !openFaq6"
                        data-aos="fade-in">
                        <div class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg">
                            <i :class="openFaq6 ? 'fa fa-chevron-down' : 'fa fa-chevron-right'" class="text-primary lang-english"></i>
                            <i :class="openFaq6 ? 'fa fa-chevron-down' : 'fa fa-chevron-left'" class="text-primary lang-arabic hidden"></i>
                        </div>
                        <div class="w-full">
                            <h4 class="mt-1 text-lg font-semibold text-textPrimary">
                                <span class="lang-english">Can I see your previous projects?</span>
                                <span class="lang-arabic hidden">هل يمكنني رؤية مشاريعك السابقة؟</span>
                            </h4>
                        </div>
                    </button>
                    <div
                        x-show="openFaq6"
                        class="faq-content pl-[62px] transition-all duration-500 ease-in-out"
                        x-transition:enter="transform transition-opacity"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transform transition-opacity"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0">
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-english">
                            While we respect our clients' privacy, we can share case studies and testimonials upon request.
                        </p>
                        <p class="py-3 text-base leading-relaxed text-textSecondary lang-arabic hidden">
                            بينما نحترم خصوصية عملائنا، يمكننا مشاركة دراسات الحالة والشهادات عند الطلب.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== FAQ Section End -->



<!-- ====== Contact Us Section Start ====== -->
<!-- <section>
    <div class="container px-6 py-12 mx-auto">
        <div class="mx-auto max-w-5xl mb-12 lg:text-center flex flex-col justify-center items-center">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
                <span class="lang-english">Contact Us</span>
                <span class="lang-arabic hidden">اتصل بنا</span>
            </h1>
        </div>

        <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-2">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
                <div>
                    <span class="inline-flex justify-center items-center p-3 text-primary rounded-full bg-primary/10">
                        <i class="fas fa-envelope w-5 h-5 flex justify-center items-center"></i>
                    </span>

                    <h2 class="mt-4 text-base font-medium text-textPrimary">
                        <span class="lang-english">Email</span>
                        <span class="lang-arabic hidden">البريد الإلكتروني</span>
                    </h2>
                    <p class="mt-2 text-sm text-textSecondary">
                        <span class="lang-english">Our team is here to assist you.</span>
                        <span class="lang-arabic hidden">فريقنا هنا لمساعدتك.</span>
                    </p>
                    <a href="mailto:info@greenforuae.com" target="_blank" class="mt-2 text-sm text-primary hover:underline">info@greenfortuae.com</a>
                </div>

                <div>
                    <span class="inline-flex justify-center items-center p-3 text-primary rounded-full bg-primary/10">
                        <i class="fab fa-whatsapp w-5 h-5 flex justify-center items-center"></i>
                    </span>

                    <h2 class="mt-4 text-base font-medium text-textPrimary">
                        <span class="lang-english">WhatsApp</span>
                        <span class="lang-arabic hidden">واتساب</span>
                    </h2>
                    <p class="mt-2 text-sm text-textSecondary">
                        <span class="lang-english">Chat with us on WhatsApp anytime.</span>
                        <span class="lang-arabic hidden">تواصل معنا عبر واتساب في أي وقت.</span>
                    </p>
                    <a href="https://wa.me/+971504235865" target="_blank" class="mt-2 text-sm text-primary hover:underline">+971 504235865</a>
                </div>

                <div>
                    <span class="inline-flex justify-center items-center p-3 text-primary rounded-full bg-primary/10">
                        <i class="fas fa-map-marker-alt w-5 h-5 flex justify-center items-center"></i>
                    </span>

                    <h2 class="mt-4 text-base font-medium text-textPrimary">
                        <span class="lang-english">Office</span>
                        <span class="lang-arabic hidden">المكتب</span>
                    </h2>
                    <p class="mt-2 text-sm text-textSecondary">
                        <span class="lang-english">Office 206, Al Saud Building, Al Qusais Ind 4th, Dubai, UAE</span>
                        <span class="lang-arabic hidden">مكتب 206، مبنى آل سعود، القوز الصناعية الرابعة، دبي، الإمارات العربية المتحدة</span>
                    </p>
                    <a href="https://maps.app.goo.gl/KdeVtAJAyEwmwxDR6" target="_blank" class="mt-2 text-sm text-primary hover:underline">
                        <span class="lang-english">Open In Google Maps</span>
                        <span class="lang-arabic hidden">فتح في خرائط جوجل</span>
                    </a>
                </div>

                <div>
                    <span class="inline-flex justify-center items-center p-3 text-primary rounded-full bg-primary/10">
                        <i class="fas fa-phone-alt w-5 h-5 transfom ml-0 flex justify-center items-center rotate-90"></i>
                    </span>

                    <h2 class="mt-4 text-base font-medium text-textPrimary">
                        <span class="lang-english">Phone</span>
                        <span class="lang-arabic hidden">الهاتف</span>
                    </h2>
                    <p class="mt-2 text-sm text-textSecondary">
                        <span class="lang-english">Available from Mon-Fri, 9am to 6pm.</span>
                        <span class="lang-arabic hidden">متاح من الإثنين إلى الجمعة، من الساعة 9 صباحًا إلى 6 مساءً.</span>
                    </p>
                    <a href="tel:+971504235865" target="_blank" class="mt-2 text-sm text-primary hover:underline">+971 504235865</a>
                </div>
            </div>

            <div class="p-4 py-6 rounded-lg bg-bgSecondary/40 md:p-8">
                <form>
                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-textSecondary">
                            <span class="lang-english">Full Name</span>
                            <span class="lang-arabic hidden">الاسم الكامل</span>
                        </label>
                        <input type="text" placeholder="John Doe" class="block w-full px-5 py-2.5 mt-2 text-textSecondary placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-primary/60 focus:ring-primary/20 focus:outline-none focus:ring focus:ring-opacity-40" required />
                    </div>

                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-textSecondary">
                            <span class="lang-english">Phone Number</span>
                            <span class="lang-arabic hidden">رقم الهاتف</span>
                        </label>
                        <input type="tel" placeholder="+971 55 123 4567" class="block w-full px-5 py-2.5 mt-2 text-textSecondary placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-primary/60 focus:ring-primary/20 focus:outline-none focus:ring focus:ring-opacity-40" required />
                    </div>

                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-textSecondary">
                            <span class="lang-english">Email Address</span>
                            <span class="lang-arabic hidden">عنوان البريد الإلكتروني</span>
                            <span class="text-textSecondary/60">
                                <span class="lang-english">(Optional)</span>
                                <span class="lang-arabic hidden">(اختياري)</span>
                            </span>
                        </label>
                        <input type="email" placeholder="johndoe@example.com" class="block w-full px-5 py-2.5 mt-2 text-textSecondary placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-primary/60 focus:ring-primary/20 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div class="w-full mt-4">
                        <label class="block mb-2 text-sm text-textSecondary">
                            <span class="lang-english">Message</span>
                            <span class="lang-arabic hidden">رسالة</span>
                        </label>
                        <textarea class="block w-full h-32 px-5 py-2.5 mt-2 text-textSecondary placeholder-gray-400 bg-white border border-gray-200 rounded-lg md:h-56 focus:border-primary/60 focus:ring-primary/20 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Write your message here"></textarea>
                    </div>

                    <button class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-primary rounded-lg hover:bg-primary/80 focus:outline-none focus:ring focus:ring-primary/20 focus:ring-opacity-50">
                        <span class="lang-english">Send Message</span>
                        <span class="lang-arabic hidden">إرسال الرسالة</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section> -->
<!-- ====== Contact Us Section End ====== -->