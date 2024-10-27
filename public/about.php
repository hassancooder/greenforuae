<!-- ABOUT US SECTION -->
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-cover bg-center opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
            style="background-image: url('<?= getAsset('about bg.jpg', 'images/'); ?>');"></div>
    </div>
    <div class="mx-auto h-2/4 max-w-2xl mt-10 py-32 sm:py-48 lg:py-36">
        <div class="text-center">
            <!-- Title -->
            <h1 class="text-4xl font-bold tracking-tight text-textPrimary sm:text-6xl">
                <span class="lang-english hidden">About Us</span>
                <span class="lang-arabic">معلومات عنا</span>
            </h1>

            <!-- Breadcrumb -->
            <p class="mt-6 text-lg leading-8 text-textSecondary">
                <span class="flex justify-center items-center">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <?php
                    $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
                    echo '<span class="lang-english hidden">Home / ' . ucwords(str_replace('-', ' ', implode(' / ', $url))) . '</span>';
                    echo '<span class="lang-arabic">الرئيسية / معلومات عنا</span>';
                    ?>
                </span>
            </p>
        </div>
    </div>
</div>


<!-- About Us Section -->
<section class="container mx-auto max-w-7xl py-6 px-4" data-aos="fade-up">
    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary max-md:text-center lang-english hidden">Green Fort UAE</h2>
    <h2 class="font-bold text-4xl lg:text-5xl text-textPrimary max-md:text-center my-6 hidden lang-arabic">جرين فورت الإمارات</h2>
    <p class="my-4 text-lg text-textSecondary px-4 max-md:text-center leading-7 lang-english hidden">We are based in market before 2015 under partnership relation in construction field then we have founded Green Fort Building Contracting was established in 2021 to offer innovative various residential and commercial projects across UAE.</p>
    <p class="my-4 text-lg text-textSecondary px-4 max-md:text-center leading-7 lang-english hidden">Excellence in service, cost-effective solutions, and timely completion are the qualities that have placed Green Fort Contracting as one of the emerging promising Building Contractors. We are consistent in providing quality service in every project that meets the Client’s expectations. Our commitment to providing quality work itself is a Marketing tool for future opportunities.</p>
    <p class="my-4 text-lg text-textSecondary px-4 max-md:text-center leading-7 lang-english hidden">
        Green Fort UAE is a leader in delivering high-quality construction projects in Dubai. Since our inception, we have specialized in sustainable and innovative construction, meeting the growing demands of the industry while upholding our core values of quality, safety, and integrity. Our team is committed to transforming ideas into reality, providing unmatched expertise and craftsmanship.
    </p>
    <p class="my-4 text-lg text-textSecondary px-4 max-md:text-center leading-7 lang-arabic">
        نحن موجودون في السوق منذ ما قبل عام 2015 من خلال شراكة مع صناعة البناء. في عام 2021، أسسنا شركة جرين فورت لمقاولات البناء لتقديم مشاريع سكنية وتجارية مبتكرة عبر الإمارات العربية المتحدة.
    </p>
    <p class="my-4 text-lg text-textSecondary px-4 max-md:text-center leading-7 lang-arabic">
        الجودة في الخدمة، الحلول الفعالة من حيث التكلفة، والالتزام بالمواعيد هي الصفات التي جعلت جرين فورت واحدة من المقاولين الواعدين الناشئين. نحن نحرص دائمًا على تقديم خدمة عالية الجودة في كل مشروع بما يلبي توقعات العملاء. التزامنا بالجودة هو بحد ذاته أداة تسويقية لفرص المستقبل.
    </p>
    <p class="my-4 text-lg text-textSecondary px-4 max-md:text-center leading-7 lang-arabic">
        تعتبر جرين فورت الإمارات رائدة في تقديم مشاريع البناء عالية الجودة في دبي. منذ تأسيسنا، تخصصنا في البناء المستدام والمبتكر، لتلبية الطلبات المتزايدة في الصناعة مع الحفاظ على قيمنا الأساسية المتمثلة في الجودة والسلامة والنزاهة. نحن ملتزمون بتحويل الأفكار إلى واقع، وتقديم خبرة وحرفية لا مثيل لهما.
    </p>
    <p class="my-4 text-lg text-textSecondary px-4 max-md:text-center leading-7 lang-english hidden">
        Our portfolio ranges from residential projects to large-scale commercial developments, all reflecting our dedication to excellence. We ensure that each project is completed on time, within budget, and to the highest standards of quality.
    </p>
    <p class="my-4 text-lg text-textSecondary px-4 max-md:text-center leading-7 lang-arabic">
        تتراوح محفظتنا من المشاريع السكنية إلى التطورات التجارية الكبيرة، وكلها تعكس التزامنا بالتميز. نحن نضمن أن كل مشروع يتم الانتهاء منه في الوقت المحدد، وفي حدود الميزانية، ووفقًا لأعلى معايير الجودة.
    </p>
</section>

<!-- CHAIRMAN'S MESSAGE SECTION -->
<div id="chairman-message"></div>
<div class="relative isolate px-4 lg:px-8 container mx-auto max-w-7xl lang-english hidden">
    <div class="max-w-6xl mt-10 py-10">
        <div>
            <!-- Chairman's Name -->
            <h1 class="text-2xl ml-2 font-bold tracking-tight max-lg:text-center text-[#DA8505] brightness-110 sm:text-3xl">
                Tayyaba Laraib
            </h1>
            <h2 class="text-lg ml-3 font-semibold max-lg:text-center text-[#DA8505] brightness-80">
                Chairwoman
            </h2>

            <!-- Message -->
            <p class="mt-6 text-lg leading-8 max-lg:text-center text-textSecondary px-4">
                At Green Fort, we are driven by our corporate ideals to foster an environment that enhances the experience for our customers.
            </p>
            <p class="mt-4 text-lg leading-8 max-lg:text-center text-textSecondary px-4">
                Construction is our business, and our people are our strength. Motivated by pride in our organization and its achievements, integrity serves as our foundation, while quality and fairness are our guiding principles. Our core objective is to cultivate a caring environment where every individual thrives.
            </p>
            <p class="mt-4 text-lg leading-8 max-lg:text-center text-textSecondary px-4">
                At the heart of our philosophy lies a commitment to excellence and client satisfaction. We adhere to the principles of quality, integrity, timeliness, efficiency, and safety. To uphold these values, we fulfil our corporate responsibilities, including a dedication to business ethics and a pledge to become a globally trusted and reliable company.
            </p>
        </div>
    </div>
</div>

<!-- رسالة الرئيس -->
<div class="relative isolate px-4 lg:px-8 container mx-auto max-w-7xl lang-arabic">
    <div class="max-w-6xl mt-10">
        <div>
            <!-- اسم الرئيس -->
            <h1 class="text-2xl ml-2 font-bold tracking-tight max-lg:text-center text-[#DA8505] brightness-110 sm:text-3xl">طيبة لاريب</h1>

            <h2 class="text-lg ml-3 font-semibold max-lg:text-center text-[#DA8505] brightness-80">
                رئيس مجلس الإدارة
            </h2>

            <!-- الرسالة -->
            <p class="mt-6 text-lg leading-8 max-lg:text-center text-textSecondary px-4">
                في جرين فورت، نحن مدفوعون بمبادئنا المؤسسية لتعزيز بيئة تحسن تجربة عملائنا.
            </p>
            <p class="mt-4 text-lg leading-8 max-lg:text-center text-textSecondary px-4">
                البناء هو عملنا، وموظفونا هم قوتنا. مدفوعون بالفخر في مؤسستنا وإنجازاتها، تعتبر النزاهة أساسنا، بينما الجودة والعدالة هما مبادئنا التوجيهية. هدفنا الأساسي هو زراعة بيئة محبة حيث يزدهر كل فرد.
            </p>
            <p class="mt-4 text-lg leading-8 max-lg:text-center text-textSecondary px-4">
                في صميم فلسفتنا تكمن الالتزام بالتميز ورضا العملاء. نحن نلتزم بمبادئ الجودة والنزاهة والدقة والكفاءة والسلامة. للوفاء بهذه القيم، نحقق مسؤولياتنا المؤسسية، بما في ذلك الالتزام بأخلاقيات الأعمال وتعهد بأن نصبح شركة موثوقة على مستوى العالم.
            </p>
        </div>
    </div>
</div>

<section class="text-textPrimary" id="mission-vision">
    <div class="container max-w-7xl px-4 py-12 mx-auto">
        <div class="grid gap-4 mx-4 sm:grid-cols-12">
            <!-- English Version -->
            <div class="col-span-12 sm:col-span-3 lang-english hidden" data-aos="fade-right" data-aos-delay="100">
                <div class="text-center sm:text-left mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:bg-primary transition-all duration-300 ease-in-out">
                    <h3 class="text-3xl font-semibold transition-transform duration-300 ease-in-out">GreenFortUAE</h3>
                    <span class="text-sm font-bold tracking-wider uppercase dark:text-textSecondary transition-opacity duration-300 ease-in-out">Vision & Mission</span>
                </div>
            </div>
            <div class="relative col-span-12 space-y-6 sm:col-span-9 lang-english hidden" data-aos="fade-left" data-aos-delay="200">
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
            <div class="col-span-12 sm:col-span-3 lang-arabic" data-aos="fade-right" data-aos-delay="100">
                <div class="text-center sm:text-right mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:bg-primary transition-all duration-300 ease-in-out">
                    <h3 class="text-3xl font-semibold transition-transform duration-300 ease-in-out">جرين فورت الإمارات</h3>
                    <span class="text-sm font-bold tracking-wider uppercase dark:text-textSecondary transition-opacity duration-300 ease-in-out">الرؤية و المهمة</span>
                </div>
            </div>
            <div class="relative col-span-12 space-y-6 sm:col-span-9 lang-arabic" data-aos="fade-left" data-aos-delay="200">
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
<section class="bg-bgPrimary mt-10" id="our-team">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-textPrimary lang-english hidden">Our Team</h2>
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-textPrimary lang-arabic">فريقنا</h2>
        </div>
        <div class="max-w-6xl mx-auto">
            <div class="rounded-lg border border-2 sm:flex p-2 my-3">
                <img class="h-24 object-cover rounded-full" src="<?= getAsset('general-manager.webp', 'images/'); ?>" alt="Waleed Ahmad (General Manager)">
                <div class="p-3">
                    <h3 class="text-xl font-bold tracking-tight text-textPrimary lang-english hidden">Waleed Ahmad</h3>
                    <h3 class="text-xl font-bold tracking-tight text-textPrimary lang-arabic">وليد أحمد</h3>
                    <span class="text-textSecondary lang-english hidden">General Manager</span>
                    <span class="text-textSecondary lang-arabic">المدير العام</span>
                    <p class="mt-3 mb-4 font-light text-textSecondary lang-english hidden">
                        Welcome to Green Fort Building Co, where innovation meets excellence in the world of construction. With over 10 years of experience in the industry, we have established ourselves as a leading force in Dubai's dynamic construction landscape. As the General Manager, I am proud to lead a dedicated team of professionals committed to delivering top-quality projects that exceed client expectations.
                    </p>
                    <p class="mt-3 mb-4 font-light text-textSecondary lang-english hidden">
                        At Green Fort, we believe in building more than just structures—we build lasting relationships. Our success stems from our ability to combine cutting-edge technology, sustainable practices, and a deep understanding of our clients’ visions. Whether it’s residential, commercial, or infrastructure projects, our focus remains on safety, quality, and timely delivery.
                    </p>
                    <p class="mt-3 mb-4 font-light text-textSecondary lang-english hidden">
                        I invite you to explore our portfolio and see how we can bring your construction ideas to life. Together, we are shaping the future of Dubai’s skyline.
                    </p>
                    <p class="mt-3 mb-4 font-light text-textSecondary lang-arabic">
                        مرحبًا بكم في شركة جرين فورت للبناء، حيث يلتقي الابتكار بالتميز في عالم البناء. مع أكثر من 10 سنوات من الخبرة في هذا المجال، قمنا بتأسيس أنفسنا كقوة رائدة في مشهد البناء الديناميكي في دبي. بصفتي المدير العام، أفخر بقيادة فريق محترف ملتزم بتقديم مشاريع عالية الجودة تتجاوز توقعات العملاء.
                    </p>
                    <p class="mt-3 mb-4 font-light text-textSecondary lang-arabic">
                        في جرين فورت، نؤمن بأننا لا نبني الهياكل فحسب، بل نبني علاقات دائمة. يعود نجاحنا إلى قدرتنا على الجمع بين التكنولوجيا المتقدمة والممارسات المستدامة والفهم العميق لرؤية عملائنا. سواء كانت مشاريع سكنية أو تجارية أو بنية تحتية، يظل تركيزنا على السلامة والجودة والتسليم في الوقت المناسب.
                    </p>
                    <p class="mt-3 mb-4 font-light text-textSecondary lang-arabic">
                        أدعوكم لاستكشاف محفظتنا ومعرفة كيف يمكننا تحويل أفكاركم في البناء إلى واقع. معًا، نحن نشكل مستقبل أفق دبي.
                    </p>
                </div>
            </div>

            <div class="rounded-lg border border-2 sm:flex p-2 my-3">
                <img class="h-24 object-cover rounded-full" src="<?= getAsset('team-member-2.webp', 'images/'); ?>" alt="Bhagwinder (Project Coordinator/Engineer)">
                <div class="p-3">
                    <h3 class="text-xl font-bold tracking-tight text-textPrimary lang-english hidden">Bhagwinder Singh</h3>
                    <h3 class="text-xl font-bold tracking-tight text-textPrimary lang-arabic">بهاجويندر سينغ</h3>
                    <span class="text-textSecondary lang-english hidden">Project Coordinator/Engineer</span>
                    <span class="text-textSecondary lang-arabic">منسق مشروع / مهندس</span>
                    <p class="mt-3 mb-4 font-light text-textSecondary lang-english hidden">
                        12 years of experience overseeing day-to-day site operations, ensuring all work is completed on time and within budget. Experienced in reading and interpreting construction drawings, specifications, and contracts to guide on-site work.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-english hidden">
                        Monitors site activities to ensure compliance with safety regulations and quality standards, and supervises subcontractors and workers to ensure adherence to project plans and timelines.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-english hidden">
                        Collaborates with the Project Manager and Coordinator, reports progress, issues, and resource needs, and assists in planning, scheduling, and tracking project timelines and deliverables.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-english hidden">
                        Manages project documentation including contracts, schedules, and reports, acts as the main point of contact between internal teams, subcontractors, and clients, and monitors project budgets and costs.
                    </p>
                    <p class="mt-3 mb-4 font-light text-textSecondary lang-arabic">
                        بهادويندر لديه خبرة 12 عامًا في إدارة عمليات الموقع اليومية، وضمان إكمال جميع الأعمال في الوقت المحدد وضمن الميزانية. لديه خبرة في قراءة وتفسير الرسومات الهندسية والمواصفات والعقود لتوجيه العمل في الموقع.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-arabic">
                        يراقب الأنشطة لضمان الامتثال لمعايير السلامة والجودة ويشرف على المقاولين والعمال لضمان الالتزام بخطط المشروع والجداول الزمنية.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-arabic">
                        يتعاون مع مدير المشروع ومنسق المشروع، ويبلغ عن التقدم والقضايا واحتياجات الموارد، ويساعد في التخطيط وجدولة وتتبع المواعيد النهائية والتسليمات.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-arabic">
                        يدير الوثائق، بما في ذلك العقود والجداول والتقارير، ويعمل كحلقة وصل بين الفرق الداخلية والمقاولين والعملاء، ويراقب ميزانيات المشروع والتكاليف.
                    </p>
                </div>
            </div>

            <div class="rounded-lg border border-2 sm:flex p-2 my-3">
                <img class="h-24 object-cover rounded-full" src="<?= getAsset('team-member-1.webp', 'images/'); ?>" alt="Lakhwinder (Sr. Civil Engineer)">
                <div class="p-3">
                    <h3 class="text-xl font-bold tracking-tight text-textPrimary lang-english hidden">Lakhwinder Singh</h3>
                    <h3 class="text-xl font-bold tracking-tight text-textPrimary lang-arabic">لاكويندر سينغ</h3>
                    <span class="text-textSecondary lang-english hidden">Sr. Civil Engineer</span>
                    <span class="text-textSecondary lang-arabic">مهندس مدني أول</span>
                    <p class="mt-3 mb-4 font-light text-textSecondary lang-english hidden">
                        22 years of experience overseeing site operations in the Gulf, ensuring work is completed on time and within budget. Proficient in interpreting construction drawings, specifications, and contracts.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-english hidden">
                        Monitors compliance with safety regulations and quality standards. Supervises subcontractors and workers, ensuring adherence to project plans and timelines, and collaborates with the Project Manager for reporting.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-english hidden">
                        Supports project planning, scheduling, and tracking timelines. Manages project documents such as contracts and schedules, and acts as a contact point for internal teams, subcontractors, and clients.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-english hidden">
                        Ensures accurate site measurements, manages logistics for materials and manpower, and conducts quality inspections for ongoing work. Addresses technical issues and ensures compliance with building regulations.
                    </p>
                    <p class="mt-3 mb-4 font-light text-textSecondary lang-arabic">
                        22 عامًا من الخبرة في الإشراف على عمليات الموقع في الخليج، وضمان إنجاز العمل في الوقت المحدد وضمن الميزانية. ماهر في تفسير الرسومات الهندسية والمواصفات والعقود.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-arabic">
                        يراقب الامتثال للوائح السلامة ومعايير الجودة. يشرف على المقاولين والعمال لضمان الالتزام بخطط المشروع، ويتعاون مع مدير المشروع للإبلاغ عن التقدم.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-arabic">
                        يدعم تخطيط المشاريع وتتبع الجداول الزمنية. يدير وثائق المشروع، بما في ذلك العقود والجداول، ويعمل كنقطة اتصال للفرق الداخلية والمقاولين والعملاء.
                    </p>
                    <p class="mb-4 font-light text-textSecondary lang-arabic">
                        يضمن إجراء قياسات دقيقة، ويدير اللوجستيات، ويقوم بتفتيش العمل الجاري للتأكد من الجودة، ويحل المشاكل الفنية، ويضمن الامتثال للوائح البناء.
                    </p>
                </div>
            </div>


        </div>

    </div>
</section>
<div class="text-center mt-12 px-4 max-w-3xl mx-auto">
    <!-- English Version -->
    <h1 class="text-2xl sm:text-4xl font-bold bg-clip-text text-transparent animate-gradient-text lang-english hidden">
        Customer Confidence We Have Attained and Satisfaction
    </h1>
    <!-- Arabic Version -->
    <h1 class="text-2xl sm:text-4xl font-bold bg-clip-text text-transparent mt-4 lang-arabic animate-gradient-text">
        الثقة التي اكتسبناها ورضا العملاء
    </h1>
</div>

<div class="flex flex-col md:flex-row justify-between mb-8 max-w-6xl mx-auto">
    <div class="chart-container w-full md:w-1/2 pr-0 md:pr-2 mb-4 md:mb-0 px-4">
        <canvas id="barChart" class="h-72 w-full"></canvas> <!-- Height set to 18rem (72) -->
    </div>
    <div class="chart-container w-full md:w-1/2 pl-0 md:pl-2 px-4">
        <canvas id="lineChart" class="h-72 w-full"></canvas> <!-- Height set to 18rem (72) -->
    </div>
</div>


<div class="max-w-6xl mx-auto sm:gap-10 gap-5 flex flex-col sm:flex-row justify-center my-12" id="stats" data-aos="fade-up" data-aos-duration="500">
    <!-- English Version Stats -->
    <div class="flex flex-col justify-start items-start text-left lang-english hidden mx-2">
        <h3 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="10">10+</h3>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">Years of Experience</h6>
    </div>
    <div class="flex flex-col justify-start items-start text-left lang-english hidden mx-2">
        <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="110">110+</h4>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">Projects Completed</h6>
    </div>
    <div class="flex flex-col justify-start items-start text-left lang-english hidden mx-2">
        <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="105">105+</h4>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">Happy Customers</h6>
    </div>

    <!-- Arabic Version Stats -->
    <div class="flex flex-col justify-start items-start text-right lang-arabic mx-2">
        <h3 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="10">10+</h3>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">سنوات من الخبرة</h6>
    </div>
    <div class="flex flex-col justify-start items-start text-right lang-arabic mx-2">
        <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="110">110+</h4>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">مشاريع مكتملة</h6>
    </div>
    <div class="flex flex-col justify-start items-start text-right lang-arabic mx-2">
        <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="105">105+</h4>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">عملاء سعداء</h6>
    </div>
</div>