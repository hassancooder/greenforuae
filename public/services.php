<!-- HERO SECTION -->
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-secondary to-primary opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon()"></div>
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

    <div class="grid md:grid-cols-3 gap-10 mt-10">

        <!-- Service 1: Project Management -->
        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 py-2 px-4 rounded-full">
                <i class="fas fa-tasks text-primary w-5 h-5"></i>
            </span>
            <div>
                <a href="/service-project-management" class="font-semibold text-textPrimary hover:text-primary transform transition duration-300 ease-in-out text-xl">
                    <span class="lang-english">Project Management</span>
                    <span class="lang-arabic hidden">إدارة المشاريع</span>
                    <i class="fa fa-external-link-alt text-primary text-sm"></i>
                </a>
                <p class="mt-1 text-textSecondary">
                    <span class="lang-english">Efficient planning and execution of projects to ensure on-time delivery and exceptional quality.</span>
                    <span class="lang-arabic hidden">التخطيط والتنفيذ الفعال للمشاريع لضمان التسليم في الوقت المحدد والجودة الاستثنائية.</span>
                </p>
            </div>
        </div>

        <!-- Service 2: Architectural Design -->
        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 py-2 px-4 rounded-full">
                <i class="fas fa-drafting-compass text-primary w-5 h-5"></i>
            </span>
            <div>
                <a href="/service-architectural-design" class="font-semibold text-textPrimary hover:text-primary transform transition duration-300 ease-in-out text-xl">
                    <span class="lang-english">Architectural Design</span>
                    <span class="lang-arabic hidden">التصميم المعماري</span>
                    <i class="fa fa-external-link-alt text-primary text-sm"></i>
                </a>
                <p class="mt-1 text-textSecondary">
                    <span class="lang-english">Innovative designs that reflect our clients' visions, balancing aesthetics and functionality.</span>
                    <span class="lang-arabic hidden">تصاميم مبتكرة تعكس رؤى عملائنا وتوازن بين الجماليات والوظائف.</span>
                </p>
            </div>
        </div>

        <!-- Service 3: General Contracting -->
        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 py-2 px-4 rounded-full">
                <i class="fas fa-hammer text-primary w-5 h-5"></i>
            </span>
            <div>
                <a href="/service-general-contracting" class="font-semibold text-textPrimary hover:text-primary transform transition duration-300 ease-in-out text-xl">
                    <span class="lang-english">General Contracting</span>
                    <span class="lang-arabic hidden">المقاولات العامة</span>
                    <i class="fa fa-external-link-alt text-primary text-sm"></i>
                </a>
                <p class="mt-1 text-textSecondary">
                    <span class="lang-english">Full-scale construction services from foundation to finish, delivering comprehensive building solutions.</span>
                    <span class="lang-arabic hidden">خدمات البناء الشاملة من الأساس إلى النهاية، تقدم حلول بناء متكاملة.</span>
                </p>
            </div>
        </div>

        <!-- Service 4: Renovations and Fit-Outs -->
        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 py-2 px-4 rounded-full">
                <i class="fas fa-paint-roller text-primary w-5 h-5"></i>
            </span>
            <div>
                <a href="/service-renovations-and-fit-outs" class="font-semibold text-textPrimary hover:text-primary transform transition duration-300 ease-in-out text-xl">
                    <span class="lang-english">Renovations and Fit-Outs</span>
                    <span class="lang-arabic hidden">التجديدات والتشطيبات</span>
                    <i class="fa fa-external-link-alt text-primary text-sm"></i>
                </a>
                <p class="mt-1 text-textSecondary">
                    <span class="lang-english">Transforming spaces to meet modern standards, tailored to your specific requirements.</span>
                    <span class="lang-arabic hidden">تحويل المساحات لتلبية المعايير الحديثة، مخصصة لاحتياجاتك المحددة.</span>
                </p>
            </div>
        </div>

        <!-- Service 5: Consulting Services -->
        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 py-2 px-4 rounded-full">
                <i class="fas fa-lightbulb text-primary w-5 h-5"></i>
            </span>
            <div>
                <a href="/service-consulting-services" class="font-semibold text-textPrimary hover:text-primary transform transition duration-300 ease-in-out text-xl">
                    <span class="lang-english">Consulting Services</span>
                    <span class="lang-arabic hidden">خدمات الاستشارات</span>
                    <i class="fa fa-external-link-alt text-primary text-sm"></i>
                </a>
                <p class="mt-1 text-textSecondary">
                    <span class="lang-english">Expert advice on construction best practices and regulations to ensure smooth project execution.</span>
                    <span class="lang-arabic hidden">نصائح الخبراء حول أفضل الممارسات واللوائح في البناء لضمان التنفيذ السلس للمشاريع.</span>
                </p>
            </div>
        </div>

    </div>
</div>