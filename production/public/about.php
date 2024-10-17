<!-- ABOUT US SECTION -->
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0a3a2f] to-primary opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon()"></div>
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
<section class="container mx-auto max-w-7xl py-6" data-aos="fade-up">
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
<!-- Vision & Mission Section -->
<section class="container px-4 mx-auto" data-aos="fade-up">
    <h2 class="font-bold text-textPrimary md:text-left text-center text-4xl my-6 lang-english">Vision & Mission</h2>
    <h2 class="font-bold text-textPrimary md:text-right text-center text-4xl my-6 hidden lang-arabic">الرؤية و المهمة</h2>

    <p class="my-4 text-lg text-textSecondary md:text-left text-center leading-7 lang-english">
        Our vision is to be the leading construction company in the UAE, known for delivering exceptional projects that shape the future of the built environment. We aim to enhance the lives of people by creating spaces that are sustainable, innovative, and inspiring.
    </p>
    <p class="my-4 text-lg text-textSecondary md:text-right text-center leading-7 lang-arabic hidden">
        رؤيتنا هي أن نكون الشركة الرائدة في مجال البناء في الإمارات، معروفة بتنفيذ مشاريع استثنائية تشكل مستقبل البيئة المبنية. نسعى لتحسين حياة الناس من خلال إنشاء مساحات مستدامة ومبتكرة وملهمة.
    </p>
    <p class="my-4 text-lg text-textSecondary md:text-left text-center leading-7 lang-english">
        Our mission is to provide top-notch construction services by adopting modern technologies, maintaining strict quality standards, and prioritizing client satisfaction. We are committed to upholding our values of transparency, safety, and excellence in every project we undertake.
    </p>
    <p class="my-4 text-lg text-textSecondary md:text-right text-center leading-7 lang-arabic hidden">
        مهمتنا هي تقديم خدمات بناء عالية الجودة من خلال اعتماد تقنيات حديثة، والحفاظ على معايير الجودة الصارمة، وإعطاء الأولوية لرضا العملاء. نحن ملتزمون بالتمسك بقيمنا من الشفافية والسلامة والتميز في كل مشروع نقوم به.
    </p>
</section>
<section class="py-20 bg-white" data-aos="fade-up">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl text-center text-textPrimary font-bold mb-14 lang-english">Our Results in Numbers</h2>
        <h2 class="text-4xl text-center text-textPrimary font-bold mb-14 hidden lang-arabic">نتائجنا بالأرقام</h2>
        <div class="flex flex-col gap-5 xl:gap-8 lg:flex-row lg:justify-between">
            <div class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl border border-2 shadow-gray-100">
                <div class="flex gap-5">
                    <div class="text-2xl font-bold text-primary">10+</div>
                    <div class="flex-1">
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 lang-english">Years Experience</h4>
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 hidden lang-arabic">سنوات الخبرة</h4>
                        <p class="text-xs text-textSecondary leading-5 lang-english">
                            Company's remarkable growth journey as we continually innovate and drive towards new heights of success.
                        </p>
                        <p class="text-xs text-textSecondary leading-5 hidden lang-arabic">
                            الرحلة الرائعة لنمو الشركة حيث نستمر في الابتكار ونسعى لتحقيق آفاق جديدة من النجاح.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl border border-2 shadow-gray-100">
                <div class="flex gap-5">
                    <div class="text-2xl font-bold text-primary">105+</div>
                    <div class="flex-1">
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 lang-english">Happy Customers</h4>
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 hidden lang-arabic">عملاء سعداء</h4>
                        <p class="text-xs text-textSecondary leading-5 lang-english">
                            We have successfully served over 105+ happy customers, ensuring their satisfaction through our dedicated services.
                        </p>
                        <p class="text-xs text-textSecondary leading-5 hidden lang-arabic">
                            لقد قدمنا خدماتنا لأكثر من 105+ عميل سعيد، مما يضمن رضاهم من خلال خدماتنا المخصصة.
                        </p>
                    </div>
                </div>

            </div>
            <div class="w-full max-lg:max-w-2xl mx-auto lg:mx-0 lg:w-1/3 bg-white p-6 rounded-2xl border border-2 shadow-gray-100">
                <div class="flex gap-5">
                    <div class="text-2xl font-bold text-primary">110+</div>
                    <div class="flex-1">
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 lang-english">Projects Completed</h4>
                        <h4 class="text-xl text-textPrimary font-semibold mb-2 hidden lang-arabic">المشاريع المنجزة</h4>
                        <p class="text-xs text-textSecondary leading-5 lang-english">
                            We have accomplished more than 625 projects worldwide and we are still counting many more.
                        </p>
                        <p class="text-xs text-textSecondary leading-5 hidden lang-arabic">
                            لقد أكملنا أكثر من 625 مشروعًا في جميع أنحاء العالم وما زلنا نعد المزيد.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- History Section -->
<section class="py-14 lg:py-0 relative" data-aos="fade-up">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-[auto,1fr] gap-9">
            <!-- History Content -->
            <div class="flex flex-col justify-center" data-aos="fade-up">
                <div class="data w-full">
                    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary mb-6 max-lg:text-center lang-english">Our Journey</h2>
                    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary mb-6 hidden lang-arabic">رحلتنا</h2>
                    <p class="font-normal text-xl leading-8 text-textPrimary max-lg:text-center max-w-4xl mx-auto lang-english">
                        We are based in market before 2015 under partnership relation in construction field then we have founded Green Fort Building Contracting was established in 2021 to offer innovative various residential and commercial projects across UAE.</p>
                    <p class="font-normal text-xl mt-3 leading-8 text-textPrimary max-lg:text-center max-w-4xl mx-auto lang-english">
                        Excellence in service, cost-effective solutions, and timely completion are the qualities that have placed Green Fort Contracting as one of the emerging promising Building Contractors. We are consistent in providing quality service in every project that meets the Client’s expectations. Our commitment to providing quality work itself is a Marketing tool for future opportunities.
                    </p>
                    <p class="font-normal text-xl leading-8 text-textPrimary max-lg:text-center max-w-4xl mx-auto hidden lang-arabic">
                        نحن موجودون في السوق منذ ما قبل عام 2015 من خلال شراكة مع صناعة البناء. في عام 2021، أسسنا شركة جرين فورت لمقاولات البناء لتقديم مشاريع سكنية وتجارية مبتكرة عبر الإمارات العربية المتحدة.
                    </p>
                    <p class="font-normal text-xl leading-8 text-textPrimary max-lg:text-center max-w-4xl mt-3 mx-auto hidden lang-arabic">
                        الجودة في الخدمة، الحلول الفعالة من حيث التكلفة، والالتزام بالمواعيد هي الصفات التي جعلت جرين فورت واحدة من المقاولين الواعدين الناشئين. نحن نحرص دائمًا على تقديم خدمة عالية الجودة في كل مشروع بما يلبي توقعات العملاء. التزامنا بالجودة هو بحد ذاته أداة تسويقية لفرص المستقبل.
                    </p>

                    <div class="flex justify-center lg:justify-start mt-6">
                        <a href="/portfolio" class="bg-primary text-white font-semibold rounded-full px-6 py-2 transition-all duration-300 lang-english">View Our Portfolio</a>
                        <a href="/portfolio" class="bg-primary text-white font-semibold rounded-full px-6 py-2 transition-all duration-300 hidden lang-arabic">عرض محفظتنا</a>
                    </div>

                </div>
            </div>
            <!-- Image for History Section -->
            <div class="img-box text-center md:text-left" data-aos="fade-right">
                <img loading="lazy" src="<?= getAsset('workers-1.webp', 'images/'); ?>" alt="Waleed Ahmad - General Manager"
                    class="rounded-lg md:w-[300px] md:h-[400px] object-cover mx-auto md:mx-0"> <!-- Set image to passport size -->
            </div>
        </div>
    </div>
</section>
<section class="py-16 mt-12 container mx-auto" data-aos="fade-up">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
        <span class="lang-english">Our Gallery</span>
            <span class="lang-arabic hidden">معرض الصور</span>
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
            <!-- Image 1 - Portfolio -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('gallery-1.webp', 'images/'); ?>" alt="Portfolio Image 1" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 2 - Portfolio -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('gallery-4.webp', 'images/'); ?>" alt="Portfolio Image 4" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 3 - Workers -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('workers-3.webp', 'images/'); ?>" alt="Workers Image 3" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 4 - Portfolio -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('gallery-5.webp', 'images/'); ?>" alt="Portfolio Image 5" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 5 - Portfolio -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('gallery-6.webp', 'images/'); ?>" alt="Portfolio Image 6" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 6 - Workers -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('workers-5.webp', 'images/'); ?>" alt="Workers Image 5" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 7 - Portfolio -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('gallery-7.webp', 'images/'); ?>" alt="Portfolio Image 7" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 8 - Portfolio -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('gallery-8.webp', 'images/'); ?>" alt="Portfolio Image 8" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 9 - Workers -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('workers-6.webp', 'images/'); ?>" alt="Workers Image 6" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 10 - Portfolio -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('gallery-9.webp', 'images/'); ?>" alt="Portfolio Image 9" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 11 - Portfolio -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('gallery-10.webp', 'images/'); ?>" alt="Portfolio Image 10" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 12 - Workers -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('workers-2.webp', 'images/'); ?>" alt="Workers Image 2" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 13 - Portfolio -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('gallery-11.webp', 'images/'); ?>" alt="Portfolio Image 11" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 14 - Portfolio -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('gallery-12.webp', 'images/'); ?>" alt="Portfolio Image 12" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
            </div>

            <!-- Image 15 - Workers -->
            <div class="swiper-slide overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
                <img loading="lazy" src="<?= getAsset('workers-4.webp', 'images/'); ?>" alt="Workers Image 4" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
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
<section class="bg-bgPrimary mt-10" id="team">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-textPrimary lang-english">Our Team</h2>
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-textPrimary lang-arabic hidden">فريقنا</h2>
        </div>
        <div class="grid gap-8 mb-6 lg:mb-16 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Team Member 1 -->
            <div class="block text-center">
                <div class="relative mb-6">
                    <img loading="lazy" src="<?= getAsset('general-manager.webp', 'images/'); ?>" alt="Waleed Ahmad (General Manager)"
                        class="w-32 h-32 rounded-full mx-auto transition-all duration-500 object-cover border border-solid border-text-textSecondary" />
                </div>
                <h4 class="text-xl font-semibold text-textPrimary mb-2 capitalize transition-all duration-500 lang-english">
                    Waleed Ahmad
                </h4>
                <h4 class="text-xl font-semibold text-textPrimary mb-2 capitalize transition-all duration-500 lang-arabic hidden">
                    وليد أحمد
                </h4>
                <span class="text-textSecondary block mb-4 lang-english">General Manager</span>
                <span class="text-textSecondary block mb-4 lang-arabic hidden">المدير العام</span>
                <p class="text-textSecondary px-4 lang-english">Waleed drives the strategy for growth and innovation, steering the company toward success in a competitive market.</p>
                <p class="text-textSecondary px-4 lang-arabic hidden">يدفع وليد استراتيجية النمو والابتكار، موجهًا الشركة نحو النجاح في سوق تنافسي.</p>
            </div>
            <!-- Team Member 2 -->
            <div class="block text-center">
                <div class="relative mb-6">
                    <img loading="lazy" src="<?= getAsset('team-member-2.webp', 'images/'); ?>" alt="Bhagwinder Singh"
                        class="w-32 h-32 rounded-full mx-auto transition-all duration-500 object-cover border border-solid border-text-textSecondary" />
                </div>
                <h4 class="text-xl font-semibold text-textPrimary mb-2 capitalize transition-all duration-500 lang-english">
                    Bhagwinder Singh
                </h4>
                <h4 class="text-xl font-semibold text-textPrimary mb-2 capitalize transition-all duration-500 lang-arabic hidden">
                    بغويندر سنگھ
                </h4>
                <span class="text-textSecondary block mb-4 lang-english">Team Member</span>
                <span class="text-textSecondary block mb-4 lang-arabic hidden">عضو الفريق</span>
                <p class="text-textSecondary px-4 lang-english">With 12 years in the Gulf, Bhagwinder specializes in project execution and client satisfaction.</p>
                <p class="text-textSecondary px-4 lang-arabic hidden">مع 12 عامًا في الخليج، يتخصص بغويندر في تنفيذ المشاريع ورضا العملاء.</p>
            </div>
            <!-- Team Member 3 -->
            <div class="block text-center">
                <div class="relative mb-6">
                    <img loading="lazy" src="<?= getAsset('team-member-1.webp', 'images/'); ?>" alt="Lakhvinder Singh"
                        class="w-32 h-32 rounded-full mx-auto transition-all duration-500 object-cover border border-solid border-text-textSecondary" />
                </div>
                <h4 class="text-xl font-semibold text-textPrimary mb-2 capitalize transition-all duration-500 lang-english">
                    Lakhvinder Singh
                </h4>
                <h4 class="text-xl font-semibold text-textPrimary mb-2 capitalize transition-all duration-500 lang-arabic hidden">
                    لاكفيندر سنگھ
                </h4>
                <span class="text-textSecondary block mb-4 lang-english">Team Member</span>
                <span class="text-textSecondary block mb-4 lang-arabic hidden">عضو الفريق</span>
                <p class="text-textSecondary px-4 lang-english">Lakhvinder brings 22 years of experience in construction, ensuring the highest standards of quality and safety.</p>
                <p class="text-textSecondary px-4 lang-arabic hidden">يتمتع لاكفيندر بخبرة 22 عامًا في البناء، مما يضمن أعلى معايير الجودة والسلامة.</p>
            </div>

        </div>
    </div>
</section>




<!-- <div class="container mx-auto py-10 px-4">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Our Gallery</span>
            <span class="lang-arabic hidden">معرض الصور</span>


        </h1>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 mt-8"> -->
        <!-- Image 2 - Portfolio -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('gallery-1.webp', 'images/'); ?>" alt="Portfolio Image 1" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->

        <!-- Image 4 - Portfolio -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('gallery-4.webp', 'images/'); ?>" alt="Portfolio Image 4" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->
        <!-- Image 5 - Workers -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('workers-3.webp', 'images/'); ?>" alt="Workers Image 3" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->
        <!-- Image 6 - Portfolio -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('gallery-5.webp', 'images/'); ?>" alt="Portfolio Image 5" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->
        <!-- Image 8 - Portfolio -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('gallery-6.webp', 'images/'); ?>" alt="Portfolio Image 6" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->
        <!-- Image 9 - Workers -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('workers-5.webp', 'images/'); ?>" alt="Workers Image 5" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->
        <!-- Image 10 - Portfolio -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('gallery-7.webp', 'images/'); ?>" alt="Portfolio Image 7" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->

        <!-- Image 12 - Portfolio -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('gallery-8.webp', 'images/'); ?>" alt="Portfolio Image 8" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->
        <!-- Image 11 - Workers -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('workers-6.webp', 'images/'); ?>" alt="Workers Image 6" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->
        <!-- Image 13 - Portfolio -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('gallery-9.webp', 'images/'); ?>" alt="Portfolio Image 9" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->

        <!-- Image 14 - Portfolio -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('gallery-10.webp', 'images/'); ?>" alt="Portfolio Image 10" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->
        <!-- Image 3 - Workers -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('workers-2.webp', 'images/'); ?>" alt="Workers Image 2" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->
        <!-- Image 15 - Portfolio -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('gallery-11.webp', 'images/'); ?>" alt="Portfolio Image 11" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->

        <!-- Image 16 - Portfolio -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('gallery-12.webp', 'images/'); ?>" alt="Portfolio Image 12" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div> -->

        <!-- Image 7 - Workers -->
        <!-- <div class="overflow-hidden ring ring-2 ring-transparent ring-offset-2 hover:ring-primary rounded-lg">
            <img loading="lazy" src="<?= getAsset('workers-4.webp', 'images/'); ?>" alt="Workers Image 4" class="w-full h-full object-cover rounded-lg transition-transform duration-300 hover:scale-105">
        </div>
    </div>
</div> -->

<!-- <div class="bg-primary text-white py-16" data-aos="fade-up">
    <div class="container mx-auto px-4 text-center">
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
</div> -->


<div class="container mx-auto py-20">
    <h2 class="text-4xl text-center text-textPrimary font-bold mb-10" data-aos="fade-up">
        <span class="lang-english">Sustainability Practices</span>
        <span class="lang-arabic hidden">ممارسات الاستدامة</span>
    </h2>
    <div class="grid grid-cols-1 gap-8 px-4 sm:grid-cols-2">
        <!-- Practice 1: Energy-Efficient Design -->
        <div class="bg-white p-6 rounded-2xl border border-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 text-center text-green-600">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary lang-english">Energy-Efficient Design</h3>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary hidden lang-arabic">تصميم موفر للطاقة</h3>
            </div>
            <h4 class="text-center text-gray-600 mt-2 lang-english">
                We prioritize energy-efficient designs to reduce energy consumption and environmental impact.
            </h4>
            <h4 class="text-center text-gray-600 mt-2 hidden lang-arabic">
                نحن نولي الأولوية للتصاميم الموفرة للطاقة لتقليل استهلاك الطاقة وتأثيرها البيئي.
            </h4>
        </div>
        <!-- Practice 2: Sustainable Materials -->
        <div class="bg-white p-6 rounded-2xl border border-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 text-center text-blue-500">
                    <i class="fas fa-cubes"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary lang-english">Sustainable Materials</h3>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary hidden lang-arabic">مواد مستدامة</h3>
            </div>
            <h4 class="text-center text-gray-600 mt-2 lang-english">
                We use sustainable materials to ensure our projects are environmentally responsible.
            </h4>
            <h4 class="text-center text-gray-600 mt-2 hidden lang-arabic">
                نستخدم مواد مستدامة لضمان أن مشاريعنا مسؤولة بيئيًا.
            </h4>
        </div>
        <!-- Practice 3: Waste Reduction -->
        <div class="bg-white p-6 rounded-2xl border border-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 text-center text-yellow-600">
                    <i class="fas fa-recycle"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary lang-english">Waste Reduction</h3>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary hidden lang-arabic">تقليل النفايات</h3>
            </div>
            <h4 class="text-center text-gray-600 mt-2 lang-english">
                Implementing waste reduction strategies at every stage to minimize environmental impact.
            </h4>
            <h4 class="text-center text-gray-600 mt-2 hidden lang-arabic">
                تنفيذ استراتيجيات تقليل النفايات في كل مرحلة للحد من التأثير البيئي.
            </h4>
        </div>
        <!-- Practice 4: Green Building Technologies -->
        <div class="bg-white p-6 rounded-2xl border border-2" data-aos="fade-up">
            <div class="flex flex-col items-center">
                <div class="w-10 h-10 text-center text-green-500">
                    <i class="fas fa-solar-panel"></i>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary lang-english">Green Building Technologies</h3>
                <h3 class="mt-4 text-xl font-semibold text-textPrimary hidden lang-arabic">تقنيات البناء الخضراء</h3>
            </div>
            <h4 class="text-center text-gray-600 mt-2 lang-english">
                We adopt green building technologies and follow international sustainability standards.
            </h4>
            <h4 class="text-center text-gray-600 mt-2 hidden lang-arabic">
                نعتمد تقنيات البناء الخضراء ونتبع المعايير الدولية للاستدامة.
            </h4>
        </div>
    </div>
</div>