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
                <p class="mt-4 text-md leading-5 text-white/90 lang-arabic hidden" data-aos="fade-up" data-aos-delay="300">في جرين فورت، نصنع أفق دبي من خلال حلول بناء رائدة تركز على الابتكار والجودة والاستدامة.</p>
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
            "Where the vision meets construction",
            "Grow green with GreenFort, your trusted construction partner",
            "Redefining Construction Excellence in Dubai",
            "Innovative Solutions for Modern Living",
            "Building the Future with Integrity"
        ];

        const arabicHeadings = [
            "حيث تلتقي الرؤية بالبناء",
            "انمُ أخضرًا مع جرين فورت، شريكك الموثوق في البناء",
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
<div class="mx-auto px-4 py-10 relative">
    <div class="home-about-swiper-container max-w-5xl mx-auto overflow-hidden mt-10 relative">
        <div class="swiper-wrapper max-w-2xl">
            <!-- Slide 1 -->
            <div class="swiper-slide flex justify-center align-center">
                <img loading="lazy" src="<?= getAsset('handshake-1.webp', 'images/'); ?>" alt="arabic people doing handshake 1" class="w-[60%] object-contain my-1 hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide flex justify-center align-center">
                <img loading="lazy" src="<?= getAsset('handshake-2.webp', 'images/'); ?>" alt="arabic people doing handshake 2" class="w-[60%] object-contain my-1 hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>

            <div class="swiper-slide flex justify-center align-center">
                <img loading="lazy" src="<?= getAsset('arabic-1.webp', 'images/'); ?>" alt="arabic people doing arabic 1" class="w-[60%] object-contain my-1 hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide flex justify-center">
                <img loading="lazy" src="<?= getAsset('arabic-2.webp', 'images/'); ?>" alt="arabic people doing arabic 2" class="w-[60%] object-contain my-1 hover:ring-primary ring-2 ring-transparent ring-offset-2 rounded-lg" data-aos="fade-left" data-aos-duration="1000">
            </div>
        </div>

        <!-- Custom Next/Prev Buttons -->
        <div class="absolute top-1/2 left-0 right-0 flex justify-between px-4 z-30" style="transform: translateY(-50%);">
            <!-- Previous Button -->
            <button class="custom-prev w-10 h-10 flex items-center justify-center">
                <img src="<?= getAsset('slider-arrow-left.png', 'images/'); ?>" alt="Previous" class="w-full h-full object-contain">
            </button>

            <!-- Next Button -->
            <button class="custom-next w-10 h-10 flex items-center justify-center">
                <img src="<?= getAsset('slider-arrow-right.png', 'images/'); ?>" alt="Next" class="w-full h-full object-contain">
            </button>
        </div>

    </div>
</div>

<section class="py-16 container mx-auto max-w-6xl" id="about">
    <div>
        <h2 class="text-textPrimary text-4xl font-bold leading-2 lg:text-start text-center mb-2 lang-english" data-aos="fade-up" data-aos-duration="1000">
            Let’s Build the Future Together
        </h2>
        <p class="text-textSecondary text-base font-normal leading-relaxed lg:text-start text-center lang-english" data-aos="fade-up" data-aos-duration="1200">
            With over 10 years of experience spanning diverse sectors, GreenFortUAE.com delivers unparalleled service to our esteemed clients. Green Fort provides exceptional services in the fields of villa and service block construction, general maintenance, modification and extension works, renovation, tiling, ceiling, painting works, gypsum partitions and ceilings, interior design and fit-out works, parquet, laminate and vinyl floorings, warehouse construction, epoxy flooring, parking marking and signage works, aluminium and glazing works, pergolas, canopies, parking sheds, carpentry and joinery works, electrical, plumbing and air-conditioning works, external pavings and interlocks, and annual maintenance for residential and corporate premises.
        </p>

        <!-- Arabic Version -->
        <h2 class="text-textPrimary text-4xl font-bold leading-2 lg:text-start text-center mb-2 lang-arabic hidden" data-aos="fade-up" data-aos-duration="1000">
            دعونا نبني المستقبل معًا
        </h2>

        <p class="text-textSecondary text-base font-normal leading-relaxed lg:text-start text-center lang-arabic hidden" data-aos="fade-up" data-aos-duration="1200"> مع أكثر من 10 سنوات من الخبرة التي تغطي قطاعات متنوعة، تقدم GreenFortUAE.com خدمات لا مثيل لها لعملائنا الكرام. توفر Green Fort خدمات استثنائية في مجالات بناء الفيلات والكتل الخدمية، والصيانة العامة، وأعمال التعديل والإضافة، والتجديد، والتبليط، والأسقف، وأعمال الطلاء، والقواطع والأسقف الجبسية، والتصميم الداخلي وأعمال التجهيز، والأرضيات الخشبية، واللامينيت، والفينيل، وبناء المستودعات، وأعمال الأرضيات الإيبوكسية، وعلامات وطلاء مواقف السيارات، وأعمال الألمنيوم والزجاج، والمظلات، والأغطية، وأعمال الخشب والتركيب، وأعمال الكهرباء والسباكة والتكييف، وأعمال paving الخارجية، والأرصفة، والصيانة السنوية للمباني السكنية والتجارية. </p>

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
</section>
<section class="py-16 bg-bgSecondary/30" id="partners">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-8 lang-english">WE'RE WORKING WITH</h2>
        <h2 class="text-3xl font-bold mb-8 lang-arabic hidden">نحن نعمل مع</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Partner Logo 1 -->
            <div class="flex justify-center">
                <img loading="lazy" src="<?= getAsset('company-1.webp', 'images/'); ?>" alt="Company 1" class="h-24 rounded-xl object-contain">
            </div>
            <!-- Partner Logo 4 -->
            <div class="flex justify-center">
                <img loading="lazy" src="<?= getAsset('company-4.webp', 'images/'); ?>" alt="Company 4" class="h-24 rounded-xl object-contain">
            </div>
            <!-- Partner Logo 2 -->
            <div class="flex justify-center">
                <img loading="lazy" src="<?= getAsset('company-2.webp', 'images/'); ?>" alt="Company 2" class="h-24 rounded-xl object-contain">
            </div>
            <!-- Partner Logo 3 -->
            <div class="flex justify-center">
                <img loading="lazy" src="<?= getAsset('company-3.webp', 'images/'); ?>" alt="Company 3" class="h-24 rounded-xl object-contain">
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
    <div class="projects-swiper-container px-4 overflow-hidden mt-10">
        <div class="swiper-wrapper m-2">
            <div class="swiper-slide p-3 bg-gradient-to-r from-cyan-50 via-blue-50 to-cyan-50 rounded-lg ring-1 ring-cyan-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-cyan-800">Al Safa</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-cyan-800 font-[Rubik]">الصفا</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-cyan-600 to-cyan-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-cyan-600 to-cyan-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-cyan-800">Mr Bassam Dahman</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-cyan-800 font-[Rubik]">بسام دهمان</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-pink-50 via-red-50 to-pink-50 rounded-lg ring-1 ring-pink-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-pink-600 to-pink-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-pink-600 to-pink-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800">Mr Younis Ali Mahmood Mohammed Al Blooshi</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800 font-[Rubik]">يونس علي محمود محمد البلوشي</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-green-50 via-teal-50 to-green-50 rounded-lg ring-1 ring-green-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-green-600 to-green-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-green-600 to-green-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800">Mr Khamis Fayrouz Mousa Mohammed Bousaad</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800 font-[Rubik]">خميس فيروز موسى محمد بوسعود</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-purple-50 via-indigo-50 to-purple-50 rounded-lg ring-1 ring-purple-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-purple-600 to-purple-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-purple-600 to-purple-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800">Mr Hussain Abdulrahman Ali Mohammed Al Abadi</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800 font-[Rubik]">حسين عبدالرحمن علي محمد العبادي</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-yellow-50 via-orange-50 to-yellow-50 rounded-lg ring-1 ring-yellow-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-yellow-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-yellow-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-yellow-600 to-yellow-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-yellow-600 to-yellow-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-yellow-800">Ms Shahnaaz Abdul Hamid Sheikh</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-yellow-800 font-[Rubik]">شهناز عبدالحميد شيخ</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-red-50 via-yellow-50 to-red-50 rounded-lg ring-1 ring-red-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-red-600 to-red-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-red-600 to-red-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800">Mr Abdullah Khamis Rashid Habib Al Mazrouei</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800 font-[Rubik]">عبدالله خميس راشد حبيب المزروعي</span></strong></p>
            </div>


            <div class="swiper-slide p-3 bg-gradient-to-r from-blue-50 via-indigo-50 to-blue-50 rounded-lg ring-1 ring-blue-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-blue-600 to-blue-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-blue-600 to-blue-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-800">Mr Yusuf Ghuloom Ali Mohammed Al Blooshi</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-800 font-[Rubik]">يوسف غلوم علي محمد البلوشي</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-orange-50 via-red-50 to-orange-50 rounded-lg ring-1 ring-orange-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-orange-600 to-orange-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-orange-600 to-orange-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-800">Mr Marwan Hassan Fakher Suleiman</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-800 font-[Rubik]">مروان حسن فاخر سليمان</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-amber-300 via-amber-200 to-amber-300 rounded-lg ring-1 ring-amber-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-amber-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-amber-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-amber-600 to-amber-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-amber-600 to-amber-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-amber-800">Mr Ahmad Bilal Salem Sanqoor</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-amber-600 to-amber-800 font-[Rubik]">أحمد بلال سالم صنقور</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-indigo-50 via-purple-50 to-indigo-50 rounded-lg ring-1 ring-indigo-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-indigo-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-indigo-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-indigo-600 to-indigo-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-indigo-600 to-indigo-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-indigo-800">Ms Azba Salim Bilal Mubarak Al Mehairi</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-indigo-800 font-[Rubik]">عذبه سالم بلال مبارك المهيري</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-teal-50 via-green-50 to-teal-50 rounded-lg ring-1 ring-teal-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-teal-600 to-teal-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-teal-600 to-teal-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800">Ms Leila Saleh Janahi Wife of Youssef Mustafa Abdullah Janahi</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800 font-[Rubik]">ليلى صالح جناحي زوجة يوسف مصطفى عبدالله الجناحي</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-lime-50 via-yellow-50 to-lime-50 rounded-lg ring-1 ring-lime-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-lime-600 to-lime-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-lime-600 to-lime-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-800">Ms Rubaya Saeed Salem Almarri</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-800 font-[Rubik]">ربا سعيد سالم المرّي</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-rose-50 via-pink-50 to-rose-50 rounded-lg ring-1 ring-rose-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-rose-800">Al Barsha 2</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-rose-800 font-[Rubik]">البرشاء 2</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-rose-600 to-rose-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-rose-600 to-rose-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-rose-800">Mr Waleed Jumaa Rashid Saif Al Marri</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-rose-800 font-[Rubik]">وليد جمعة راشد سيف المري</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-sky-50 via-blue-50 to-sky-50 rounded-lg ring-1 ring-sky-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800">Al Barsha 3rd</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800 font-[Rubik]">البرشاء الثالثة</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-sky-600 to-sky-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-sky-600 to-sky-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800">Mr Moosa Abbas Ghuloom Maarouf</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800 font-[Rubik]">السيد موسى عباس غلام معروف</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-emerald-50 via-green-50 to-emerald-50 rounded-lg ring-1 ring-emerald-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-emerald-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-emerald-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-emerald-600 to-emerald-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-emerald-600 to-emerald-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-emerald-800">Mr Ibrahim Fayrouz Mousa Mohammed Bousaad</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-emerald-800 font-[Rubik]">السيد إبراهيم فيروز موسى محمد بوسعود</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-fuchsia-50 via-purple-50 to-fuchsia-50 rounded-lg ring-1 ring-fuchsia-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-fuchsia-800">Al Barsha 2</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-fuchsia-800 font-[Rubik]">البرشاء 2</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-fuchsia-600 to-fuchsia-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-fuchsia-600 to-fuchsia-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-fuchsia-800">Mr Humaid Abbas Ghulam Maarouf Al Blooshi</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-fuchsia-600 to-fuchsia-800 font-[Rubik]">السيد حميد عباس غلام معروف البلوشي</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-cyan-50 via-blue-50 to-cyan-50 rounded-lg ring-1 ring-cyan-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-cyan-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-cyan-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-cyan-600 to-cyan-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-cyan-600 to-cyan-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-cyan-800">Ms Faheema Aisa Jumaa Mohammed</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-600 to-cyan-800 font-[Rubik]">السيدة فهيمة عيسى جمعة محمد</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-pink-50 via-red-50 to-pink-50 rounded-lg ring-1 ring-pink-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800">Al Barsha South</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800 font-[Rubik]">البرشاء الجنوبية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-pink-600 to-pink-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-pink-600 to-pink-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800">Ms Salma Salem Mohammed Darwish</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800 font-[Rubik]">السيدة سلمى سالم محمد درويش</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-green-50 via-teal-50 to-green-50 rounded-lg ring-1 ring-green-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800">Al Barsha 3rd</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800 font-[Rubik]">البرشاء الثالثة</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-green-600 to-green-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-green-600 to-green-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800">Faisal Abdul Rahman Abdulla Ibrahim</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-600 to-green-800 font-[Rubik]">فيصل عبد الرحمن عبد الله إبراهيم</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-purple-50 via-indigo-50 to-purple-50 rounded-lg ring-1 ring-purple-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800">Al Quoz 2nd</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800 font-[Rubik]">القوز الثانية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-purple-600 to-purple-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-purple-600 to-purple-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800">Mr Mubarak Ahmed Mubarak Dhaif Fayrouz Bin Thalith</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800 font-[Rubik]">السيد مبارك أحمد مبارك ضاحي فيروز بن ثالث</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-yellow-50 via-orange-50 to-yellow-50 rounded-lg ring-1 ring-yellow-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-yellow-800">Al Quoz 4</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-yellow-800 font-[Rubik]">القوز الرابعة</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-yellow-600 to-yellow-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-yellow-600 to-yellow-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-yellow-800">Mr Mahmood Leila Abbas Ghuloom Maarouf Ahmad</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-600 to-yellow-800 font-[Rubik]">السيد محمود ليلى عباس غلام معروف أحمد</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-red-50 via-yellow-50 to-red-50 rounded-lg ring-1 ring-red-700 transform transition duration-500 hover:scale-105">
                <p class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800">Umm Suqeim 2</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800 font-[Rubik]">أم سقيم الثانية</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-red-600 to-red-800"></div><span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-red-600 to-red-800"></div>
                </div><strong class="text-center"><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800">Mr Saeed Salem Saleem Al Marri</span><span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-red-800 font-[Rubik]">السيد سعيد سالم سليم المري</span></strong></p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-teal-50 via-green-50 to-teal-50 rounded-lg ring-1 ring-teal-700 transform transition duration-500 hover:scale-105">
                <p class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800">Al Warqa'a 4</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800 font-[Rubik]">الورقاء الرابعة</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-teal-600 to-teal-800"></div>
                    <span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-teal-600 to-teal-800"></div>
                </div>
                <strong class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800">Mr Saeed</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800 font-[Rubik]">السيد سعيد خميس سعيد علي الحمداني</span>
                </strong>
                </p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-lime-50 via-yellow-50 to-lime-50 rounded-lg ring-1 ring-lime-700 transform transition duration-500 hover:scale-105">
                <p class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-800">Warqa 4</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-800 font-[Rubik]">الورقاء الرابعة</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-lime-600 to-lime-800"></div>
                    <span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-lime-600 to-lime-800"></div>
                </div>
                <strong class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-800">Mr Mohammed</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-800 font-[Rubik]">السيدة فوزيه عباس غلوم معروف احمد</span>
                </strong>
                </p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-rose-50 via-pink-50 to-rose-50 rounded-lg ring-1 ring-rose-700 transform transition duration-500 hover:scale-105">
                <p class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-rose-800">Muhaisnah</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-rose-800 font-[Rubik]">محيصنة</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-rose-600 to-rose-800"></div>
                    <span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-rose-600 to-rose-800"></div>
                </div>
                <strong class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-rose-800">Mr Fahad Rashid</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-rose-600 to-rose-800 font-[Rubik]">السيد فهد راشد الحميدي علي خصيف يماحي</span>
                </strong>
                </p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-sky-50 via-blue-50 to-sky-50 rounded-lg ring-1 ring-sky-700 transform transition duration-500 hover:scale-105">
                <p class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800">Al Mizhar</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800 font-[Rubik]">المزهر</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-sky-600 to-sky-800"></div>
                    <span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-sky-600 to-sky-800"></div>
                </div>
                <strong class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800">Mr Mohammed</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800 font-[Rubik]">السيدة سلامة محمد حميدان زوجة يوسف عبدالله الكتبي</span>
                </strong>
                </p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-orange-50 via-orange-200 to-orange-50 rounded-lg ring-1 ring-orange-700 transform transition duration-500 hover:scale-105">
                <p class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-800">Al Mizhar</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-800 font-[Rubik]">المزهر</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-orange-600 to-orange-800"></div>
                    <span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-orange-600 to-orange-800"></div>
                </div>
                <strong class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-800">Anfal Salah</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-orange-800 font-[Rubik]">انفال صلح خميس بلال</span>
                </strong>
                </p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-teal-50 via-green-50 to-teal-50 rounded-lg ring-1 ring-teal-700 transform transition duration-500 hover:scale-105">
                <p class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800">Oud Al Muteena</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800 font-[Rubik]">عود المطينة</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-teal-600 to-teal-800"></div>
                    <span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-teal-600 to-teal-800"></div>
                </div>
                <strong class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800">Alia Salem Mohammed Darwish</span>

                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-teal-800 font-[Rubik]">السيدة علياء سالم محمد درويش</span>
                </strong>
                </p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-sky-50 via-blue-50 to-sky-50 rounded-lg ring-1 ring-sky-700 transform transition duration-500 hover:scale-105">
                <p class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800">Madinat Hind 4</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800 font-[Rubik]">مدينة هند 4</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-sky-600 to-sky-800"></div>
                    <span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-sky-600 to-sky-800"></div>
                </div>
                <strong class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800">Mr Ahmad</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-sky-800 font-[Rubik]">السيد أحمد</span>
                </strong>
                </p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-purple-50 via-purple-200 to-purple-50 rounded-lg ring-1 ring-purple-700 transform transition duration-500 hover:scale-105">
                <p class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800">Madinat Hind 4</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800 font-[Rubik]">مدينة هند 4</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-purple-600 to-purple-800"></div>
                    <span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-purple-600 to-purple-800"></div>
                </div>
                <strong class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800">Mr Ibrahim</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-purple-800 font-[Rubik]">السيد ابراهيم خميس سعيد علي الحمداني</span>
                </strong>
                </p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-pink-50 via-pink-200 to-pink-50 rounded-lg ring-1 ring-pink-700 transform transition duration-500 hover:scale-105">
                <p class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800">Al Barsha South</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800 font-[Rubik]">البرشاء الثالثة/Al Barsha 3rd</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-pink-600 to-pink-800"></div>
                    <span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-pink-600 to-pink-800"></div>
                </div>
                <strong class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800">Mr Waleed</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-pink-600 to-pink-800 font-[Rubik]">السيد وليد عباس غلوم معروف</span>
                </strong>
                </p>
            </div>
            <div class="swiper-slide p-3 bg-gradient-to-r from-indigo-50 via-purple-50 to-indigo-50 rounded-lg ring-1 ring-indigo-700 transform transition duration-500 hover:scale-105">
                <p class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-indigo-800">Al Barsha 3rd</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-indigo-800 font-[Rubik]">البرشاء الثالثة</span>
                <div class="flex items-center justify-center my-1">
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-indigo-600 to-indigo-800"></div>
                    <span class="px-2 text-md font-semibold text-blue-700"><i class="fa fa-location-dot text-yellow-500 text-2xl"></i></span>
                    <div class="w-1/4 h-0.5 bg-gradient-to-r from-indigo-600 to-indigo-800"></div>
                </div>
                <strong class="text-center">
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-indigo-800">Mr Ahmad Ali Mohammed Youssef</span>
                    <span class="block text-md text-nowrap font-bold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-indigo-800 font-[Rubik]">السيد أحمد علي محمد يوسف</span>
                </strong>
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

<div class="max-w-7xl mx-auto px-5 my-16" id="porfolio">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-left w-full flex justify-between">
            <span class="lang-english">GreenFort Has Completed Various Projects in the Following Dubai's Communities</span>
            <span class="lang-arabic text-3xl hidden">قامت شركة GreenFort بتنفيذ مشاريع مختلفة في المجتمعات التالية في دبي</span>
        </h1>
    </div>

    <div class="flex flex-wrap mt-16 max-w-7xl">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Al Barsha South</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">البرشاء الجنوبية</h4>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Al Barsha 2nd and 3rd</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">البرشاء 2 و 3</h4>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Al Quoz 2 and 4</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">القصيص 2 و 4</h4>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Al Warqa 4</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">الورقاء 4</h4>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Al Mizhar 1st</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">المزهر 1</h4>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Muhaisnah 1st</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">المحيصنة 1</h4>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Oud al Muteena 1st</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">عود المطنقة 1</h4>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Umm Suqiem 2nd</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">أم سقيم 2</h4>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Al Safa 2</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">الصفا 2</h4>
            </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Madinat Hind 4th</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">مدينة الهند 4</h4>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Al Khawaneej</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">الخوانيج</h4>
            </div>
        </div>

        <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-6">
            <div class="p-6 rounded-lg text-white text-center bg-gradient-to-r from-amber-300 to-amber-500">
                <h4 class="font-semibold text-xl lang-english">Al Aweer</h4>
                <h4 class="font-semibold text-xl lang-arabic hidden">العوير</h4>
            </div>
        </div>
    </div>
</div>

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

<section class="py-16 mt-12 max-w-5xl mx-auto" data-aos="fade-up">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Our Gallery</span>
            <span class="lang-arabic hidden">معرض الصور</span>
        </h1>
    </div>

    <div class="gallery-swiper-container overflow-hidden px-3 mt-10">
        <div class="swiper-wrapper">

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-12-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-6-sq.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-8-sq.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-15-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-11-sq.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-14-hr.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-2-sq.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-1-sq.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-3-vr.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-7-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-4-sq.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-5-sq.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-13-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-9-sq.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-10-hr.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 6 -->
            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-16-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-17-sq.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-18-sq.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 7 -->
            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-20-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-19-sq.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-21-sq.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 8 -->
            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-27-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-22-sq.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-23-sq.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 9 -->
            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-29-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-24-hr.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-25-hr.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 10 -->
            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-31-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-26-sq.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-28-sq.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-33-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-30-hr.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-32-sq.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-35-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-34-hr.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-36-sq.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="flex h-full w-full overflow-hidden gap-2">
                    <div class="flex-1 flex items-center justify-center">
                        <img src="<?= getAsset('gallery-37-vr.webp', 'images/'); ?>" alt="Vertical Image" class="h-full rounded-lg w-full object-cover">
                    </div>
                    <div class="flex-1 flex flex-col justify-between gap-2">
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-38-sq.webp', 'images/'); ?>" alt="Top Image" class="h-full rounded-lg w-full object-cover">
                        </div>
                        <div class="h-1/2 w-full flex items-center justify-center">
                            <img src="<?= getAsset('gallery-39-sq.webp', 'images/'); ?>" alt="Bottom Image" class="h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Custom Next/Prev Buttons -->
        <div class="absolute top-1/2 left-0 right-0 flex justify-between px-4 z-30" style="transform: translateY(-50%);">
            <!-- Previous Button -->
            <button class="custom-prev w-10 h-10 flex items-center justify-center">
                <img src="<?= getAsset('slider-arrow-left.png', 'images/'); ?>" alt="Previous" class="w-full h-full object-contain">
            </button>

            <!-- Next Button -->
            <button class="custom-next w-10 h-10 flex items-center justify-center">
                <img src="<?= getAsset('slider-arrow-right.png', 'images/'); ?>" alt="Next" class="w-full h-full object-contain">
            </button>
        </div>
    </div>
</section>
<!-- REVIEWS SECTION -->
<div id="reviews"></div>
<div class="bg-bgSecondary/30 mx-auto px-4 py-16">
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
                        <p class="text-md md:text-lg font-semibold text-textPrimary text-center lang-arabic hidden" data-aos="fade-up">"إن الاحترافية وجودة العمل من Green Fort UAE لا مثيل لها."<br> — <strong>شهناز عبد الحميد</strong></p>
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
                        class="flex w-full faq-btn"
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
                        class="flex w-full faq-btn"
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
                        class="flex w-full faq-btn"
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
                        class="flex w-full faq-btn"
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
                        class="flex w-full faq-btn"
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
                        class="flex w-full faq-btn"
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