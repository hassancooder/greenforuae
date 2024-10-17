<!-- HERO SECTION -->
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0a3a2f] to-primary opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon()"></div>
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
<div class="py-12 mt-8" data-aos="fade-up" data-aos-duration="800">
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