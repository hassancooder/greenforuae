<!-- HERO SECTION -->
<style>
    #hero-section.zoom-in {
        animation: zoomIn 1s forwards;
    }

    #hero-section.zoom-out {
        animation: zoomOut 1s forwards;
    }

    @keyframes zoomIn {
        from {
            transform: scale(1.05);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes zoomOut {
        from {
            transform: scale(1);
            opacity: 1;
        }

        to {
            transform: scale(1.05);
            opacity: 0;
        }
    }

    @media only screen and (min-width: 992px) {
        .hero-image {
            background-position-y: -150px;
        }
    }
</style>
<div id="hero-section" class="relative hero-image h-screen isolate bg-cover bg-no-repeat cursor-pointer overflow-hidden" style="background-image: url('assets/images/hero1.webp');" ondblclick="changeBackgroundImage()">
    <div class="w-full h-full bg-slate-950/30 px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-16 sm:py-20 lg:py-12">
            <div class="text-center">
                <!-- Logo -->
                <img src="<?= getAsset('weblogo-white.webp', 'images/'); ?>" alt="Logo" class="w-64 mb-5 mt-16 brightness-125 mx-auto rounded-full object-contain" data-aos="fade-up" data-aos-delay="100">

                <!-- English Version -->
                <h1 id="heading-english" class="text-4xl font-bold tracking-tight text-white sm:text-6xl lang-english" data-aos="fade-up" data-aos-delay="200"></h1>
                <p class="mt-4 text-md leading-5 text-white/90 lang-english" data-aos="fade-up" data-aos-delay="300">
                    Inspired by the 20th century construction, we’re committed to delivering a high distinctive quality of construction to the owner and the end user.
                </p>

                <!-- Arabic Version -->
                <h1 id="heading-arabic" class="text-4xl font-bold tracking-tight text-white sm:text-6xl lang-arabic hidden" data-aos="fade-up" data-aos-delay="200"></h1>
                <p class="mt-4 text-md leading-5 text-white/90 lang-arabic hidden" data-aos="fade-up" data-aos-delay="300">
                    مستوحى من بناء القرن العشرين، نحن ملتزمون بتقديم جودة بناء مميزة لصاحب المشروع والمستخدم النهائي.
                </p>
            </div>

            <!-- Buttons -->
            <div class="mt-8 flex items-center justify-center gap-x-6" data-aos="fade-up" data-aos-delay="400">
                <a href="/#about" class="rounded-full bg-primary px-4 py-2.5 text-sm font-semibold text-bgPrimary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary transition group lang-english">Learn more
                    <i class="fa fa-arrow-down ml-2 transition-transform duration-300 transform group-hover:translate-y-1"></i>
                </a>
                <a href="/#about" class="rounded-full bg-primary px-4 py-2.5 text-sm font-semibold text-bgPrimary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary transition group lang-arabic hidden">اعرف المزيد
                    <i class="fa fa-arrow-down ml-2 transition-transform duration-300 transform group-hover:translate-y-1"></i>
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="flex items-center justify-center absolute bottom-16 left-[50%] transform -translate-x-[45%]">
                <div class="mt-20 text-center ring-1 ring-white rounded-full w-8 h-12 flex items-center justify-center">
                    <div class="w-3 h-3 rounded-full bg-white animate-ping"></div>
                </div>
            </div>
            <!-- Double Tap Instruction -->
            <p class="mt-5 text-sm font-medium text-white animate-pulse absolute bottom-6 left-[50%] transform -translate-x-[50%] lang-english text-center">
                Double tap to change background Image.
            </p>
            <p class="mt-5 text-sm font-medium text-white animate-pulse absolute bottom-6 left-[50%] transform -translate-x-[50%] lang-arabic hidden text-center">
                انقر مرتين لتغيير صورة الخلفية.
            </p>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    isHome = true;
    let heroImages = ["assets/images/hero1.webp", "assets/images/hero2.webp", "assets/images/hero3.webp", "assets/images/hero4.webp"];

    function preloadImages(imageUrls) {
        imageUrls.forEach(url => {
            const img = new Image();
            img.src = url;
        });
    }

    function changeBackgroundImage() {
        currentImageIndex = (currentImageIndex + 1) % heroImages.length;
        const heroSection = $('#hero-section');
        $('body').addClass('overflow-x-hidden');
        heroSection.addClass('zoom-out');
        setTimeout(() => {
            heroSection.css('background-image', `url('${heroImages[currentImageIndex]}')`);
            heroSection.removeClass('zoom-out').addClass('zoom-in');
            // setTimeout(() => {
            //     $('body').removeClass('overflow-x-hidden');
            // }, 1000);
        }, 300);
    }
    preloadImages(heroImages);

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
                    type();
                }, 2000);
            }
        }
        type();
    }

    $(document).ready(function() {
        const englishText = "Redefining Construction Excellence in Dubai";
        const englishHeading = '#heading-english';
        typeWriter(englishHeading, englishText, 100);

        const arabicText = "إعادة تعريف البناء بالتميز في دبي";
        const arabicHeading = '#heading-arabic';
        typeWriter(arabicHeading, arabicText, 100);
    });
</script>


<section id="about" class="py-24 bg-bgPrimary relative">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
            <div class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                    <img class="rounded-xl object-cover cursor-pointer hover:ring-primary ring-2 ring-transparent ring-offset-2" src="<?= getAsset('about-img1.webp', 'images/'); ?>" alt="About Us Image 1" data-aos="fade-right" data-aos-duration="1000" />
                </div>
                <img class="sm:ml-0 ml-auto rounded-xl object-cover cursor-pointer hover:ring-primary ring-2 ring-transparent ring-offset-2" src="<?= getAsset('about-img2.webp', 'images/'); ?>" alt="About Us Image 2" data-aos="fade-up" data-aos-duration="1000" />
            </div>
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-center items-start gap-8 flex">
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <!-- English Version -->
                        <h2 class="text-textPrimary text-4xl font-bold leading-2 lg:text-start text-center lang-english" data-aos="fade-up" data-aos-duration="1000">
                            Building Tomorrow's Infrastructure Today
                        </h2>
                        <p class="text-textSecondary text-base font-normal leading-relaxed lg:text-start text-center lang-english" data-aos="fade-up" data-aos-duration="1200">
                            Green Fort provides one of the best services in the fields of Villas and Service Blocks Constructions, General Maintenance, Modification and Extension Works, Renovation, Tiling, Ceiling, Painting Works, Gypsum Partitions and Ceiling, Interior Design and Fit-out Works, Parquet, Laminate and Vinyl Floorings, Warehouse Construction, Epoxy Flooring, Parking Marking and Signage Works, Aluminium and Glazing works, Pergolas, Canopies, Parking Sheds, Carpentry and Joinery Works, Electrical, Plumbing and Air-conditioning Works, External Pavings and Interlocks, annual maintenance for residential and corporate premises.
                        </p>

                        <!-- Arabic Version -->
                        <h2 class="text-textPrimary text-4xl font-bold leading-2 lg:text-start text-center lang-arabic hidden" data-aos="fade-up" data-aos-duration="1000">
                            بناء بنية تحتية الغد اليوم
                        </h2>
                        <p class="text-textSecondary text-base font-normal leading-relaxed lg:text-start text-center lang-arabic hidden" data-aos="fade-up" data-aos-duration="1200">
                            تقدم جرين فورت أفضل الخدمات في مجالات بناء الفيلات والكتل الخدمية، الصيانة العامة، أعمال التعديل والتوسيع، التجديد، أعمال التبليط والأسقف، الدهانات، الجبس والقواطع، التصميم الداخلي والأعمال التكميلية، الأرضيات الخشبية، اللامينيت والفينيل، بناء المستودعات، الأرضيات الإيبوكسية، علامات مواقف السيارات وأعمال الألمنيوم والزجاج، المظلات، السقائف، مواقف السيارات، النجارة وأعمال الجوينري، الأعمال الكهربائية، السباكة وأعمال التكييف، الرصف الخارجي والإنترلوك، والصيانة السنوية للعقارات السكنية والشركات.
                        </p>
                    </div>

                    <div class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex" id="stats" data-aos="fade-up" data-aos-duration="1000">

                        <!-- English Version Stats -->
                        <div class="flex-col justify-start items-start inline-flex lang-english">
                            <h3 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="33">0+</h3>
                            <h6 class="text-textSecondary text-base font-normal leading-relaxed">Years of Experience</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex lang-english">
                            <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="125">0+</h4>
                            <h6 class="text-textSecondary text-base font-normal leading-relaxed">Successful Projects</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex lang-english">
                            <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="52">0+</h4>
                            <h6 class="text-textSecondary text-base font-normal leading-relaxed">Happy Clients</h6>
                        </div>

                        <!-- Arabic Version Stats -->
                        <div class="flex-col justify-start items-start inline-flex lang-arabic hidden">
                            <h3 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="33">0+</h3>
                            <h6 class="text-textSecondary text-base font-normal leading-relaxed">سنوات من الخبرة</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex lang-arabic hidden">
                            <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="125">0+</h4>
                            <h6 class="text-textSecondary text-base font-normal leading-relaxed">مشاريع ناجحة</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex lang-arabic hidden">
                            <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="52">0+</h4>
                            <h6 class="text-textSecondary text-base font-normal leading-relaxed">عملاء سعداء</h6>
                        </div>
                    </div>
                </div>

                <!-- Buttons -->
                <div class="flex gap-4 justify-center items-center w-full md:w-auto">
                    <!-- English Button Version -->
                    <a href="company-profile.pdf" download="Green Fort UAE (Company Profile).pdf" class="sm:w-fit w-full px-3.5 py-1.5 border-2 border-primary bg-primary hover:bg-primary/80 transition-all duration-700 ease-in-out rounded-full shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex lang-english" data-aos="fade-up" data-aos-duration="1500">
                        <span class="px-1.5 text-white text-sm font-medium leading-6">
                            <i class="fa fa-download"></i> Company Profile
                        </span>
                    </a>
                    <a href="/about" class="sm:w-fit w-full px-3.5 py-1.5 border-2 border-primary text-primary hover:bg-primary/80 hover:text-white transition-all duration-700 ease-in-out rounded-full justify-center items-center flex group lang-english" data-aos="fade-up" data-aos-duration="1500">
                        <span class="px-1.5 text-sm font-semibold leading-6 flex items-center">
                            Learn more
                            <i class="fa fa-arrow-right ml-2 transition-transform duration-300 ease-in-out group-hover:translate-x-1"></i>
                        </span>
                    </a>

                    <!-- Arabic Button Version -->
                    <a href="company-profile.pdf" download="Green Fort UAE (Company Profile).pdf" class="sm:w-fit w-full px-3.5 py-1.5 border-2 border-primary bg-primary hover:bg-primary/80 transition-all duration-700 ease-in-out rounded-full shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex lang-arabic hidden" data-aos="fade-up" data-aos-duration="1500">
                        <span class="px-1.5 text-white text-sm font-medium leading-6">
                            <i class="fa fa-download"></i> الملف التعريفي للشركة
                        </span>
                    </a>
                    <a href="/about" class="sm:w-fit w-full px-3.5 py-1.5 border-2 border-primary text-primary hover:bg-primary/80 hover:text-white transition-all duration-700 ease-in-out rounded-full justify-center items-center flex group lang-arabic hidden" data-aos="fade-up" data-aos-duration="1500">
                        <span class="px-1.5 text-sm font-semibold leading-6 flex items-center">
                            اعرف المزيد
                            <i class="fa fa-arrow-left mr-2 transition-transform duration-300 ease-in-out group-hover:-translate-x-1"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

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
                            We strive to lead the industry by adopting cutting-edge technologies, sustainable practices, and creative solutions that meet the evolving needs of our clients.
                        </p>
                    </div>
                    <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:bg-primary transition-all duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold tracking-wide transition-transform duration-300 ease-in-out">Our Goal</h3>
                        <p class="mt-3 text-textSecondary transition-opacity duration-300 ease-in-out">
                            Our goal is to create lasting value through excellence in construction, fostering long-term relationships with our clients, partners, and communities, while contributing to a greener and more sustainable future for generations to come.
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
                            نسعى إلى قيادة الصناعة من خلال تبني أحدث التقنيات، والممارسات المستدامة، والحلول الإبداعية التي تلبي الاحتياجات المتطورة لعملائنا.
                        </p>
                    </div>
                    <div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:right-[-35px] sm:before:z-[1] before:bg-primary transition-all duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold tracking-wide transition-transform duration-300 ease-in-out">هدفنا</h3>
                        <p class="mt-3 text-textSecondary transition-opacity duration-300 ease-in-out">
                            هدفنا هو خلق قيمة مستدامة من خلال التميز في البناء، وتطوير علاقات طويلة الأمد مع عملائنا وشركائنا ومجتمعاتنا، والمساهمة في مستقبل أكثر خضرة واستدامة للأجيال القادمة.
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

    <div class="grid md:grid-cols-3 gap-10 mt-10">
        <!-- Service Item -->
        <div class="flex gap-4 items-start" data-aos="fade-up">
            <span class="text-primary bg-primary/10 py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-110">
                <i class="fas fa-tasks text-primary w-5 h-5"></i>
            </span>
            <div>
                <h3 class="font-semibold text-xl">
                    <span class="lang-english">Project Management</span>
                    <span class="lang-arabic hidden">إدارة المشاريع</span>
                </h3>
                <p class="mt-1 text-textSecondary">
                    <span class="lang-english">Efficient planning and execution of projects to ensure on-time delivery and exceptional quality.</span>
                    <span class="lang-arabic hidden">تخطيط وتنفيذ المشاريع بكفاءة لضمان التسليم في الوقت المحدد وجودة استثنائية.</span>
                </p>
            </div>
        </div>

        <!-- Repeat for other service items -->
        <div class="flex gap-4 items-start" data-aos="fade-up" data-aos-delay="100">
            <span class="text-primary bg-primary/10 py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-110">
                <i class="fas fa-drafting-compass text-primary w-5 h-5"></i>
            </span>
            <div>
                <h3 class="font-semibold text-xl">
                    <span class="lang-english">Architectural Design</span>
                    <span class="lang-arabic hidden">التصميم المعماري</span>
                </h3>
                <p class="mt-1 text-textSecondary">
                    <span class="lang-english">Innovative designs that reflect our clients' visions, balancing aesthetics and functionality.</span>
                    <span class="lang-arabic hidden">تصاميم مبتكرة تعكس رؤى عملائنا وتوازن بين الجمالية والوظيفة.</span>
                </p>
            </div>
        </div>

        <div class="flex gap-4 items-start" data-aos="fade-up" data-aos-delay="200">
            <span class="text-primary bg-primary/10 py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-110">
                <i class="fas fa-hammer text-primary w-5 h-5"></i>
            </span>
            <div>
                <h3 class="font-semibold text-xl">
                    <span class="lang-english">General Contracting</span>
                    <span class="lang-arabic hidden">المقاولات العامة</span>
                </h3>
                <p class="mt-1 text-textSecondary">
                    <span class="lang-english">Full-scale construction services from foundation to finish, delivering comprehensive building solutions.</span>
                    <span class="lang-arabic hidden">خدمات بناء شاملة من الأساس إلى التشطيب، تقدم حلول بناء متكاملة.</span>
                </p>
            </div>
        </div>

        <div class="flex gap-4 items-start" data-aos="fade-up" data-aos-delay="300">
            <span class="text-primary bg-primary/10 py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-110">
                <i class="fas fa-paint-roller text-primary w-5 h-5"></i>
            </span>
            <div>
                <h3 class="font-semibold text-xl">
                    <span class="lang-english">Renovations and Fit-Outs</span>
                    <span class="lang-arabic hidden">التجديدات والتشطيبات</span>
                </h3>
                <p class="mt-1 text-textSecondary">
                    <span class="lang-english">Transforming spaces to meet modern standards, tailored to your specific requirements.</span>
                    <span class="lang-arabic hidden">تحويل المساحات لتلبية المعايير الحديثة وتخصيصها وفقًا لمتطلباتك الخاصة.</span>
                </p>
            </div>
        </div>

        <div class="flex gap-4 items-start" data-aos="fade-up" data-aos-delay="400">
            <span class="text-primary bg-primary/10 py-2 px-4 rounded-full transition-transform duration-300 transform hover:scale-110">
                <i class="fas fa-lightbulb text-primary w-5 h-5"></i>
            </span>
            <div>
                <h3 class="font-semibold text-xl">
                    <span class="lang-english">Consulting Services</span>
                    <span class="lang-arabic hidden">خدمات استشارية</span>
                </h3>
                <p class="mt-1 text-textSecondary">
                    <span class="lang-english">Expert advice on construction best practices and regulations to ensure smooth project execution.</span>
                    <span class="lang-arabic hidden">نصائح خبراء حول أفضل الممارسات واللوائح في مجال البناء لضمان تنفيذ سلس للمشاريع.</span>
                </p>
            </div>
        </div>
    </div>

    <div class="text-center mt-12">
        <a href="/services" class="group text-primary font-semibold py-1 px-6 rounded-full transition-all duration-300 border border-2 border-primary inline-flex items-center lang-english">
            <span>Explore All</span>
            <i class="ml-2 fa fa-arrow-right transform transition-transform duration-300 group-hover:translate-x-2"></i>
        </a>

        <a href="/services" class="group text-primary font-semibold py-1 px-6 rounded-full transition-all duration-300 border border-2 border-primary inline-flex items-center lang-arabic hidden">
            <span>استكشاف الكل</span>
            <i class="mr-2 fa fa-arrow-left transform transition-transform duration-300 group-hover:-translate-x-2"></i>
        </a>
    </div>
</div>



<section class="bg-bgSecondary/30 py-16 mt-12" data-aos="fade-up">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Our Portfolio</span>
            <span class="lang-arabic hidden">محفظة مشاريعنا</span>
        </h1>
    </div>

    <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
            <!-- Project 1: Al Barsha South -->
            <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50 h-auto md:h-full flex flex-col">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                    <img src="<?= getAsset('portfolio-1.webp', 'images/'); ?>" alt="Al Barsha South Project" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                    <h3 class="z-10 text-2xl font-semibold text-white absolute top-0 left-0 p-4 xs:text-xl md:text-2xl">
                        <span class="lang-english">Al Barsha South Project</span>
                        <span class="lang-arabic hidden">مشروع البرشاء جنوب</span>
                    </h3>
                </a>
            </div>

            <!-- Project 2: Al Barsha 2nd and 3rd -->
            <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                    <img src="<?= getAsset('portfolio-2.webp', 'images/'); ?>" alt="Al Barsha 2nd and 3rd Project" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                    <h3 class="z-10 text-2xl font-semibold text-white absolute top-0 left-0 p-4 xs:text-xl md:text-2xl">
                        <span class="lang-english">Al Barsha 2nd and 3rd Project</span>
                        <span class="lang-arabic hidden">مشروع البرشاء الثانية والثالثة</span>
                    </h3>
                </a>
            </div>

            <!-- Project 3: Al Warqa 4 -->
            <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                    <img src="<?= getAsset('portfolio-3.webp', 'images/'); ?>" alt="Al Warqa 4 Project" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                    <h3 class="z-10 text-2xl font-semibold text-white absolute top-0 left-0 p-4 xs:text-xl md:text-2xl">
                        <span class="lang-english">Al Warqa 4 Project</span>
                        <span class="lang-arabic hidden">مشروع الورقاء 4</span>
                    </h3>
                </a>
            </div>

            <!-- Project 4: Al Quoz 2 and 4 -->
            <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                    <img src="<?= getAsset('portfolio-4.webp', 'images/'); ?>" alt="Al Quoz 2 and 4 Project" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                    <h3 class="z-10 text-2xl font-semibold text-white absolute top-0 left-0 p-4 xs:text-xl md:text-2xl">
                        <span class="lang-english">Al Quoz 2 and 4 Project</span>
                        <span class="lang-arabic hidden">مشروع القوز الثانية والرابعة</span>
                    </h3>
                </a>
            </div>

            <!-- Project 5: Al Mizhar 1st -->
            <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                    <img src="<?= getAsset('portfolio-5.webp', 'images/'); ?>" alt="Al Warqa 4 Project" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                    <h3 class="z-10 text-2xl font-semibold text-white absolute top-0 left-0 p-4 xs:text-xl md:text-2xl">
                        <span class="lang-english">Al Mizhar 1st Project</span>
                        <span class="lang-arabic hidden">مشروع المزهر 1</span>
                    </h3>
                </a>
            </div>

            <!-- Project 6: Muhaisnah 1st -->

            <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                <a class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                    <img src="<?= getAsset('portfolio-6.webp', 'images/'); ?>" alt="Al Mizhar 1st Project" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                    <h3 class="z-10 text-2xl font-semibold text-white absolute top-0 left-0 p-4 xs:text-xl md:text-2xl">
                        <span class="lang-english">Muhaisnah 1st Project</span>
                        <span class="lang-arabic hidden">مشروع محيصنة 1</span>
                    </h3>
                </a>
            </div>
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