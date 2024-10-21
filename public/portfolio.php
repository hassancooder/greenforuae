<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0a3a2f] to-primary opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon()"></div>
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

<div class="text-center mt-12 px-4 max-w-3xl mx-auto">
    <!-- English Version -->
    <h1 class="text-2xl sm:text-4xl font-bold bg-clip-text text-transparent animate-gradient-text lang-english">
        Customer Confidence We Have Attained and Satisfaction
    </h1>
    <!-- Arabic Version -->
    <h1 class="text-2xl sm:text-4xl font-bold bg-clip-text text-transparent mt-4 lang-arabic hidden animate-gradient-text">
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
    <div class="flex flex-col justify-start items-start text-left lang-english mx-2">
        <h3 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="10">10+</h3>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">Years of Experience</h6>
    </div>
    <div class="flex flex-col justify-start items-start text-left lang-english mx-2">
        <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="110">110+</h4>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">Projects Completed</h6>
    </div>
    <div class="flex flex-col justify-start items-start text-left lang-english mx-2">
        <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="105">105+</h4>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">Happy Customers</h6>
    </div>

    <!-- Arabic Version Stats -->
    <div class="flex flex-col justify-start items-start text-right lang-arabic hidden mx-2">
        <h3 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="10">10+</h3>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">سنوات من الخبرة</h6>
    </div>
    <div class="flex flex-col justify-start items-start text-right lang-arabic hidden mx-2">
        <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="110">110+</h4>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">مشاريع مكتملة</h6>
    </div>
    <div class="flex flex-col justify-start items-start text-right lang-arabic hidden mx-2">
        <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="105">105+</h4>
        <h6 class="text-textSecondary text-base font-normal leading-relaxed">عملاء سعداء</h6>
    </div>
</div>

<section class="py-16 mt-12 max-w-5xl mx-auto" data-aos="fade-up">
    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center mb-8">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Our Gallery</span>
            <span class="lang-arabic hidden">معرض الصور</span>
        </h1>
    </div>

    <div class="gallery-swiper-container max-h-screen overflow-hidden px-3 mt-10">
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

        <!-- <div class="flex justify-center mt-5 md:mt-10 space-x-6" style="direction:ltr;"> -->
        <!-- Previous Button -->
        <!-- <button class="custom-prev w-8 h-8 flex items-center border-2 border-primary justify-center rounded-full hover:bg-primary text-primary transition z-30 duration-300 ease-in-out hover:text-bgPrimary lang-english">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg>
            </button> -->

        <!-- Next Button -->
        <!-- <button class="custom-next w-8 h-8 flex items-center border-2 border-primary justify-center rounded-full hover:bg-primary text-primary transition z-30 duration-300 ease-in-out hover:text-bgPrimary lang-english">
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.59 16.59L13.17 12l-4.58-4.59L10 6l6 6-6 6z" />
                </svg>
            </button>
        </div> -->
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