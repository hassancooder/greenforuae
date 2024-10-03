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
            <div class="text-center mt-28">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                    <span class="lang-english">Redefining Construction </span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-secondary to-primary font-bold lang-english">Excellence in Dubai</span>
                    <span class="lang-english"> </span>

                    <span class="lang-arabic hidden">إعادة تعريف البناء </span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-secondary to-primary font-bold lang-arabic">التميز في دبي</span>
                    <span class="lang-arabic hidden"></span>
                </h1>
                <p class="mt-4 text-lg leading-5 text-white/90 lang-english">
                    Discover the beauty of your unforgettable moments captured by our skilled photographers. Let us help you tell your unique story through stunning imagery and artistry.
                </p>
                <p class="mt-4 text-lg leading-5 text-white/90 lang-arabic hidden">
                    اكتشف جمال لحظاتك التي لا تُنسى التي يلتقطها مصورونا المهرة. دعنا نساعدك في سرد قصتك الفريدة من خلال الصور الرائعة والفن.
                </p>


                <div class="mt-5 flex items-center justify-center gap-x-6 lang-english">
                    <a href="/#about" class="rounded-full bg-primary px-4 py-2.5 text-sm font-semibold text-bgPrimary shadow-sm hover:bg-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary transition group">
                        <span class="lang-english">Learn more</span>
                        <i class="fa fa-arrow-down ml-2 transition-transform duration-300 transform group-hover:translate-y-1"></i>
                    </a>
                </div>

                <div class="mt-24 flex items-center justify-center gap-x-6 lang-arabic">
                    <a href="/#about" class="rounded-full bg-primary px-4 py-2.5 text-sm font-semibold text-bgPrimary shadow-sm hover:bg-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary transition group">
                        تعلم المزيد
                        <i class="fa fa-arrow-down ml-2 transition-transform duration-300 transform group-hover:translate-y-1"></i>
                    </a>
                </div>
                <div class="flex items-center justify-center">
                    <div class="mt-20 text-center ring-1 ring-white rounded-full w-8 h-12 flex items-center justify-center">
                        <div class="w-3 h-3 rounded-full bg-white animate-ping"></div>
                    </div>
                </div>
                <p class="mt-5 text-sm font-medium text-white animate-pulse lang-english">
                    Double tap to change background Image.
                </p>
                <p class="mt-5 text-sm font-medium text-white animate-pulse lang-arabic hidden">
                    اضغط نقر مزدوج لتغيير صورة الخلفية.
                </p>

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Array of hero image URLs
    let heroImages = ["assets/images/hero1.webp", "assets/images/hero2.webp"];
    // let currentImageIndex = 0;

    // Preload all images
    function preloadImages(imageUrls) {
        imageUrls.forEach(url => {
            const img = new Image();
            img.src = url;
        });
    }

    function changeBackgroundImage() {
        currentImageIndex = (currentImageIndex + 1) % heroImages.length;
        const heroSection = $('#hero-section');

        // Add overflow-hidden to body
        $('body').addClass('overflow-x-hidden');

        heroSection.addClass('zoom-out');
        setTimeout(() => {
            heroSection.css('background-image', `url('${heroImages[currentImageIndex]}')`);
            heroSection.removeClass('zoom-out').addClass('zoom-in');

            // Remove overflow-hidden from body after the animation
            setTimeout(() => {
                $('body').removeClass('overflow-x-hidden');
            }, 1000); // Adjust the timing to match the animation duration

        }, 300); // Adjust the timeout to match the animation duration
    }
    preloadImages(heroImages);

    const isHome = true;

    function toggleDropdown(dropdown) {
        $(dropdown).toggleClass('hidden');
    }

    function updateLanguage(dropdownId, selectedLangId, lang) {
        $('#' + selectedLangId).text(lang);
        toggleDropdown(dropdownId);

        // Array of element tags that might contain language-specific text
        const elementsToCheck = ['a', 'p', 'td', 'div', 'span', 'li', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'];

        // Show/hide elements based on the selected language
        elementsToCheck.forEach(tag => {
            $(tag + '.lang-english').toggle(lang !== 'العربية'); // Show English if not Arabic
            $(tag + '.lang-arabic').toggle(lang === 'العربية'); // Show Arabic if Arabic is selected
        });

        // Change layout to RTL if Arabic is selected, otherwise LTR
        if (lang === 'العربية') {
            $('body').css('direction', 'rtl');
        } else {
            $('body').css('direction', 'ltr');
        }
    }

    // Language dropdown functionality for desktop
    $('#langDropdownBtnDesktop').click(function(e) {
        e.stopPropagation();
        toggleDropdown('#langDropdownDesktop');
    });

    // Language selection for desktop
    $('#langDropdownDesktop a').click(function(e) {
        e.preventDefault();
        const selectedLang = $(this).text();
        updateLanguage('#langDropdownDesktop', 'selectedLangDesktop', selectedLang);
    });

    // Language dropdown functionality for mobile
    $('#langDropdownBtnMobile').click(function(e) {
        e.stopPropagation();
        toggleDropdown('#langDropdownMobile');
    });

    // Language selection for mobile
    $('#langDropdownMobile a').click(function(e) {
        e.preventDefault();
        const selectedLang = $(this).text();
        updateLanguage('#langDropdownMobile', 'selectedLangMobile', selectedLang);
    });

    // Close dropdown when clicking outside
    $(document).click(function() {
        $('#langDropdownDesktop').addClass('hidden');
        $('#langDropdownMobile').addClass('hidden');
    });

    // Prevent closing dropdown when clicking inside
    $('#langDropdownDesktop, #langDropdownMobile').click(function(e) {
        e.stopPropagation();
    });

    // Default language display on page load
    $(document).ready(function() {
        const defaultLang = 'English'; // Set your default language here
        updateLanguage('', 'selectedLangDesktop', defaultLang); // Update default for desktop
        updateLanguage('', 'selectedLangMobile', defaultLang); // Update default for mobile
    });
</script>


<section id="stats" class="py-24 relative">
    <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
        <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
            <div class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                    <img class="rounded-xl object-cover" src="https://pagedone.io/asset/uploads/1717741205.png" alt="About Us Image" />
                </div>
                <img class="sm:ml-0 ml-auto rounded-xl object-cover" src="https://pagedone.io/asset/uploads/1717741215.png" alt="About Us Image" />
            </div>
            <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                <div class="w-full flex-col justify-center items-start gap-8 flex">
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                        <h2 class="text-textPrimary text-4xl font-bold font-manrope leading-normal lg:text-start text-center lang-english">
                            Building Tomorrow's Infrastructure Today
                        </h2>
                        <h2 class="text-textPrimary text-4xl font-bold font-manrope leading-normal lg:text-start text-center lang-arabic hidden">
                            بناء بنية تحتية للغد اليوم
                        </h2>
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center lang-english">
                            At the heart of our mission lies a steadfast commitment to delivering high-quality construction solutions that inspire confidence and foster collaboration among all stakeholders. We believe that every project is an opportunity to build not only structures but also lasting relationships. By prioritizing innovation and sustainability, we aim to create environments that enhance the quality of life for our clients and the communities we serve.
                        </p>
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center lang-arabic hidden">
                            في صميم مهمتنا يكمن الالتزام الثابت بتقديم حلول بناء عالية الجودة تلهم الثقة وتعزز التعاون بين جميع أصحاب المصلحة. نحن نؤمن بأن كل مشروع هو فرصة لبناء ليس فقط هياكل ولكن أيضًا علاقات دائمة. من خلال إعطاء الأولوية للابتكار والاستدامة، نهدف إلى إنشاء بيئات تعزز جودة الحياة لعملائنا والمجتمعات التي نخدمها. إن تفانينا في التميز يدفعنا إلى تحسين ممارساتنا باستمرار وتقديم نتائج استثنائية تتجاوز التوقعات.
                        </p>

                    </div>
                    <div class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex">
                        <div class="flex-col justify-start items-start inline-flex">
                            <h3 class="text-textPrimary text-4xl font-bold font-manrope leading-normal count" data-count="33">0+</h3>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed lang-english">Years of Experience</h6>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed hidden lang-arabic">سنوات الخبرة</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex">
                            <h4 class="text-textPrimary text-4xl font-bold font-manrope leading-normal count" data-count="125">0+</h4>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed lang-english">Successful Projects</h6>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed hidden lang-arabic">مشاريع ناجحة</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex">
                            <h4 class="text-textPrimary text-4xl font-bold font-manrope leading-normal count" data-count="52">0+</h4>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed lang-english">Happy Clients</h6>
                            <h6 class="text-gray-500 text-base font-normal leading-relaxed hidden lang-arabic">عملاء سعداء</h6>
                        </div>
                    </div>
                </div>
                <button class="sm:w-fit w-full px-3.5 py-2 bg-primary hover:bg-primary/80 transition-all duration-700 ease-in-out rounded-lg shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                    <span class="px-1.5 text-white text-sm font-medium leading-6 lang-english">Download Company Profile</span>
                    <span class="px-1.5 text-white text-sm font-medium leading-6 lang-arabic hidden">تحميل ملف الشركة</span>

                </button>

            </div>
        </div>
    </div>
</section>

<section class="bg-bgSecondary/30 text-textPrimary">
	<div class="container max-w-5xl px-4 py-12 mx-auto">
		<div class="grid gap-4 mx-4 sm:grid-cols-12">
			<div class="col-span-12 sm:col-span-3">
				<div class="text-center sm:text-left mb-14 before:block before:w-24 before:h-3 before:mb-5 before:rounded-md before:mx-auto sm:before:mx-0 before:bg-primary">
					<h3 class="text-3xl font-semibold">GreenFortUAE</h3>
					<span class="text-sm font-bold tracking-wider uppercase dark:text-textSecondary">Our Achievements</span>
				</div>
			</div>
			<div class="relative col-span-12 px-4 space-y-6 sm:col-span-9">
				<div class="col-span-12 space-y-12 relative px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3 before:dark:bg-textSecondary">
					<div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-primary">
						<h3 class="text-xl font-semibold tracking-wide text-textPrimary">Donec porta enim vel </h3>
						<time class="text-xs tracking-wide uppercase text-textSecondary/80">Dec 2020</time>
						<p class="mt-3 text-textSecondary">Pellentesque feugiat ante at nisl efficitur, in mollis orci scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					</div>
					<div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-primary">
						<h3 class="text-xl font-semibold tracking-wide text-textPrimary">Aliquam sit amet nunc ut</h3>
						<time class="text-xs tracking-wide uppercase text-textSecondary/80">Jul 2019</time>
						<p class="mt-3 text-textSecondary">Morbi vulputate aliquam libero non dictum. Aliquam sit amet nunc ut diam aliquet tincidunt nec nec dui. Donec mollis turpis eget egestas sodales.</p>
					</div>
					<div class="flex flex-col sm:relative sm:before:absolute sm:before:top-2 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:left-[-35px] sm:before:z-[1] before:dark:bg-primary">
						<h3 class="text-xl font-semibold tracking-wide text-textPrimary">Pellentesque habitant morbi</h3>
						<time class="text-xs tracking-wide uppercase text-textSecondary/80">Jan 2016</time>
						<p class="mt-3 text-textSecondary">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="py-12">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
            <h2 class="text-base font-semibold leading-7 text-sm text-bgPrimary bg-primary px-3 rounded-lg uppercase mb-4 lang-english">
                Key Features</h2>
            <h2 class="text-base font-semibold leading-7 text-sm text-bgPrimary bg-primary px-3 rounded-lg uppercase mb-4 lang-arabic hidden">
                الميزات الرئيسية</h2>
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
                <span class="lang-english">Vision & Misson</span>
                <span class="lang-arabic hidden">التأمين<br> المعززة</span>
            </h1>
        </div>
        <div class="mx-auto mt-12 max-w-2xl sm:mt-20 lg:mt-16 lg:max-w-4xl">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-textPrimary">
                        <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                            </svg></div>
                        <span class="lang-english">Customized Coverage Plans</span>
                        <span class="lang-arabic hidden">خطط تغطية مخصصة</span>
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-textSecondary lang-english">Tailor your insurance coverage to match your unique needs.
                        Our customizable plans ensure you only pay for the coverage that matters most to you.</dd>
                    <dd class="mt-2 text-base leading-7 text-textSecondary lang-arabic hidden">قم بتخصيص تغطية التأمين الخاصة بك لتتناسب مع احتياجاتك الفريدة.
                        تضمن خططنا القابلة للتخصيص أنك تدفع فقط مقابل التغطية التي تهمك أكثر.</dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-textPrimary">
                        <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5"></path>
                            </svg></div>
                        <span class="lang-english">Risk Assessment Expertise</span>
                        <span class="lang-arabic hidden">خبرة تقييم المخاطر</span>
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-textSecondary lang-english">Benefit from our cutting-edge risk assessment model,
                        providing accurate insights into potential risks and ensuring your coverage aligns with your risk profile.
                    </dd>
                    <dd class="mt-2 text-base leading-7 text-textSecondary lang-arabic hidden">استفد من نموذج تقييم المخاطر المتطور لدينا،
                        مما يوفر رؤى دقيقة حول المخاطر المحتملة ويضمن توافق تغطيتك مع ملفك الشخصي للمخاطر.
                    </dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-textPrimary">
                        <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg></div>
                        <span class="lang-english">Cost-Efficient Premiums</span>
                        <span class="lang-arabic hidden">أقساط فعالة من حيث التكلفة</span>
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-textSecondary lang-english">Experience cost-effective insurance solutions. We keep our
                        premiums competitive, ensuring you receive optimal coverage without breaking the bank.</dd>
                    <dd class="mt-2 text-base leading-7 text-textSecondary lang-arabic hidden">اختبر حلول التأمين الفعالة من حيث التكلفة. نحن نحافظ على
                        تنافسية أقساطنا، مما يضمن لك الحصول على التغطية المثلى دون إفلاس.</dd>
                </div>
                <div class="relative pl-16">
                    <dt class="text-base font-semibold leading-7 text-textPrimary">
                        <div class="absolute left-0 top-0 flex h-12 w-12 items-center justify-center rounded-lg bg-primary"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" class="h-6 w-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z">
                                </path>
                            </svg></div>
                        <span class="lang-english">24/7 Customer Support</span>
                        <span class="lang-arabic hidden">دعم العملاء على مدار الساعة</span>
                    </dt>
                    <dd class="mt-2 text-base leading-7 text-textSecondary lang-english">Our dedicated support team is available around the clock to
                        assist you. Whether it's day or night, we're here to address your insurance-related queries promptly.</dd>
                    <dd class="mt-2 text-base leading-7 text-textSecondary lang-arabic hidden">فريق الدعم المخصص لدينا متاح على مدار الساعة لمساعدتك.
                        سواء كان النهار أو الليل، نحن هنا لمعالجة استفساراتك المتعلقة بالتأمين على الفور.</dd>
                </div>
            </dl>
        </div>
    </div>
</div>

<div class="max-w-4xl mx-auto px-5 mt-16">

<div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
                <span class="lang-english">Services We Offer</span>
                <span class="lang-arabic hidden">التأمين<br> المعززة</span>
            </h1>
        </div>


    <div class="grid md:grid-cols-2 gap-10 mt-10">


        <div class="flex gap-4 items-start">
            <span class="text-violet-600 bg-violet-500/10 p-3 rounded-full">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"><path d="M0.849976 1.74998C0.849976 1.25292 1.25292 0.849976 1.74998 0.849976H3.24998C3.74703 0.849976 4.14998 1.25292 4.14998 1.74998V2.04998H10.85V1.74998C10.85 1.25292 11.2529 0.849976 11.75 0.849976H13.25C13.747 0.849976 14.15 1.25292 14.15 1.74998V3.24998C14.15 3.74703 13.747 4.14998 13.25 4.14998H12.95V10.85H13.25C13.747 10.85 14.15 11.2529 14.15 11.75V13.25C14.15 13.747 13.747 14.15 13.25 14.15H11.75C11.2529 14.15 10.85 13.747 10.85 13.25V12.95H4.14998V13.25C4.14998 13.747 3.74703 14.15 3.24998 14.15H1.74998C1.25292 14.15 0.849976 13.747 0.849976 13.25V11.75C0.849976 11.2529 1.25292 10.85 1.74998 10.85H2.04998V4.14998H1.74998C1.25292 4.14998 0.849976 3.74703 0.849976 3.24998V1.74998ZM2.94998 4.14998V10.85H3.24998C3.74703 10.85 4.14998 11.2529 4.14998 11.75V12.05H10.85V11.75C10.85 11.2529 11.2529 10.85 11.75 10.85H12.05V4.14998H11.75C11.2529 4.14998 10.85 3.74703 10.85 3.24998V2.94998H4.14998V3.24998C4.14998 3.74703 3.74703 4.14998 3.24998 4.14998H2.94998ZM2.34998 1.74998H1.74998V2.34998V2.64998V3.24998H2.34998H2.64998H3.24998V2.64998V2.34998V1.74998H2.64998H2.34998ZM5.09998 5.99998C5.09998 5.50292 5.50292 5.09998 5.99998 5.09998H6.99998C7.49703 5.09998 7.89998 5.50292 7.89998 5.99998V6.99998C7.89998 7.03591 7.89787 7.07134 7.89378 7.10618C7.92861 7.10208 7.96405 7.09998 7.99998 7.09998H8.99998C9.49703 7.09998 9.89998 7.50292 9.89998 7.99998V8.99998C9.89998 9.49703 9.49703 9.89998 8.99998 9.89998H7.99998C7.50292 9.89998 7.09998 9.49703 7.09998 8.99998V7.99998C7.09998 7.96405 7.10208 7.92861 7.10618 7.89378C7.07134 7.89787 7.03591 7.89998 6.99998 7.89998H5.99998C5.50292 7.89998 5.09998 7.49703 5.09998 6.99998V5.99998ZM6.09998 5.99998H5.99998V6.09998V6.89998V6.99998H6.09998H6.89998H6.99998V6.89998V6.09998V5.99998H6.89998H6.09998ZM7.99998 7.99998H8.09998H8.89998H8.99998V8.09998V8.89998V8.99998H8.89998H8.09998H7.99998V8.89998V8.09998V7.99998ZM2.64998 11.75H2.34998H1.74998V12.35V12.65V13.25H2.34998H2.64998H3.24998V12.65V12.35V11.75H2.64998ZM11.75 1.74998H12.35H12.65H13.25V2.34998V2.64998V3.24998H12.65H12.35H11.75V2.64998V2.34998V1.74998ZM12.65 11.75H12.35H11.75V12.35V12.65V13.25H12.35H12.65H13.25V12.65V12.35V11.75H12.65Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></span>
            <div>
                <h3 class="font-semibold text-xl">Customizable</h3>
                <p class="mt-1 text-gray-500"> You don't need to be an expert to customize this plugin. Our code is very
                    readable and well documented.</p>
            </div>
        </div>


        <div class="flex gap-4 items-start">
            <span class="text-violet-600 bg-violet-500/10 p-3 rounded-full">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"><path d="M3.00014 2.73895C3.00014 2.94698 2.76087 3.06401 2.59666 2.93628L1.00386 1.69744C0.875177 1.59735 0.875177 1.40286 1.00386 1.30277L2.59666 0.063928C2.76087 -0.0637944 3.00014 0.0532293 3.00014 0.261266V1.00012H9.00009V0.261296C9.00009 0.0532591 9.23936 -0.0637646 9.40358 0.0639578L10.9964 1.3028C11.1251 1.40289 11.1251 1.59738 10.9964 1.69747L9.40358 2.93631C9.23936 3.06404 9.00009 2.94701 9.00009 2.73898V2.00012H3.00014V2.73895ZM9.50002 4.99998H2.50002C2.22388 4.99998 2.00002 5.22384 2.00002 5.49998V12.5C2.00002 12.7761 2.22388 13 2.50002 13H9.50002C9.77616 13 10 12.7761 10 12.5V5.49998C10 5.22384 9.77616 4.99998 9.50002 4.99998ZM2.50002 3.99998C1.67159 3.99998 1.00002 4.67156 1.00002 5.49998V12.5C1.00002 13.3284 1.67159 14 2.50002 14H9.50002C10.3284 14 11 13.3284 11 12.5V5.49998C11 4.67156 10.3284 3.99998 9.50002 3.99998H2.50002ZM14.7389 6.00001H14V12H14.7389C14.9469 12 15.064 12.2393 14.9362 12.4035L13.6974 13.9963C13.5973 14.125 13.4028 14.125 13.3027 13.9963L12.0639 12.4035C11.9362 12.2393 12.0532 12 12.2612 12H13V6.00001H12.2612C12.0532 6.00001 11.9361 5.76074 12.0639 5.59653L13.3027 4.00373C13.4028 3.87505 13.5973 3.87505 13.6974 4.00374L14.9362 5.59653C15.0639 5.76074 14.9469 6.00001 14.7389 6.00001Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></span>
            <div>
                <h3 class="font-semibold text-xl">Fully Responsive</h3>
                <p class="mt-1 text-gray-500"> With mobile, tablet &amp; desktop support it doesn't matter what device
                    you're using. This plugin is responsive in all browsers. </p>
            </div>
        </div>


        <div class="flex gap-4 items-start">
            <span class="text-violet-600 bg-violet-500/10 p-3 rounded-full">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"><path d="M1 2C0.447715 2 0 2.44772 0 3V12C0 12.5523 0.447715 13 1 13H14C14.5523 13 15 12.5523 15 12V3C15 2.44772 14.5523 2 14 2H1ZM1 3L14 3V3.92494C13.9174 3.92486 13.8338 3.94751 13.7589 3.99505L7.5 7.96703L1.24112 3.99505C1.16621 3.94751 1.0826 3.92486 1 3.92494V3ZM1 4.90797V12H14V4.90797L7.74112 8.87995C7.59394 8.97335 7.40606 8.97335 7.25888 8.87995L1 4.90797Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></span>
            <div>
                <h3 class="font-semibold text-xl">Developer Support</h3>
                <p class="mt-1 text-gray-500"> Our plugins are supported by sponsors who provide community support.
                    Sponsors will get email support on weekdays.</p>
            </div>
        </div>


        <div class="flex gap-4 items-start">
            <span class="text-violet-600 bg-violet-500/10 p-3 rounded-full">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"><path d="M4.5 2C3.11929 2 2 3.11929 2 4.5C2 5.88072 3.11929 7 4.5 7C5.88072 7 7 5.88072 7 4.5C7 3.11929 5.88072 2 4.5 2ZM3 4.5C3 3.67157 3.67157 3 4.5 3C5.32843 3 6 3.67157 6 4.5C6 5.32843 5.32843 6 4.5 6C3.67157 6 3 5.32843 3 4.5ZM10.5 2C9.11929 2 8 3.11929 8 4.5C8 5.88072 9.11929 7 10.5 7C11.8807 7 13 5.88072 13 4.5C13 3.11929 11.8807 2 10.5 2ZM9 4.5C9 3.67157 9.67157 3 10.5 3C11.3284 3 12 3.67157 12 4.5C12 5.32843 11.3284 6 10.5 6C9.67157 6 9 5.32843 9 4.5ZM2 10.5C2 9.11929 3.11929 8 4.5 8C5.88072 8 7 9.11929 7 10.5C7 11.8807 5.88072 13 4.5 13C3.11929 13 2 11.8807 2 10.5ZM4.5 9C3.67157 9 3 9.67157 3 10.5C3 11.3284 3.67157 12 4.5 12C5.32843 12 6 11.3284 6 10.5C6 9.67157 5.32843 9 4.5 9ZM10.5 8C9.11929 8 8 9.11929 8 10.5C8 11.8807 9.11929 13 10.5 13C11.8807 13 13 11.8807 13 10.5C13 9.11929 11.8807 8 10.5 8ZM9 10.5C9 9.67157 9.67157 9 10.5 9C11.3284 9 12 9.67157 12 10.5C12 11.3284 11.3284 12 10.5 12C9.67157 12 9 11.3284 9 10.5Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></span>
            <div>
                <h3 class="font-semibold text-xl">Cross Browser</h3>
                <p class="mt-1 text-gray-500"> We make sure our plugins are working perfectly with all modern browsers
                    available such as Chrome, Firefox, Safari. </p>
            </div>
        </div>


        <div class="flex gap-4 items-start">
            <span class="text-violet-600 bg-violet-500/10 p-3 rounded-full">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"><path d="M9.96424 2.68571C10.0668 2.42931 9.94209 2.13833 9.6857 2.03577C9.4293 1.93322 9.13832 2.05792 9.03576 2.31432L5.03576 12.3143C4.9332 12.5707 5.05791 12.8617 5.3143 12.9642C5.5707 13.0668 5.86168 12.9421 5.96424 12.6857L9.96424 2.68571ZM3.85355 5.14646C4.04882 5.34172 4.04882 5.6583 3.85355 5.85356L2.20711 7.50001L3.85355 9.14646C4.04882 9.34172 4.04882 9.6583 3.85355 9.85356C3.65829 10.0488 3.34171 10.0488 3.14645 9.85356L1.14645 7.85356C0.951184 7.6583 0.951184 7.34172 1.14645 7.14646L3.14645 5.14646C3.34171 4.9512 3.65829 4.9512 3.85355 5.14646ZM11.1464 5.14646C11.3417 4.9512 11.6583 4.9512 11.8536 5.14646L13.8536 7.14646C14.0488 7.34172 14.0488 7.6583 13.8536 7.85356L11.8536 9.85356C11.6583 10.0488 11.3417 10.0488 11.1464 9.85356C10.9512 9.6583 10.9512 9.34172 11.1464 9.14646L12.7929 7.50001L11.1464 5.85356C10.9512 5.6583 10.9512 5.34172 11.1464 5.14646Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></span>
            <div>
                <h3 class="font-semibold text-xl">Clean Code</h3>
                <p class="mt-1 text-gray-500"> We strictly follow a set of guidelines along with unit tests to make sure
                    your implementation as easy as possible. </p>
            </div>
        </div>


        <div class="flex gap-4 items-start">
            <span class="text-violet-600 bg-violet-500/10 p-3 rounded-full">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"><path d="M7.28856 0.796908C7.42258 0.734364 7.57742 0.734364 7.71144 0.796908L13.7114 3.59691C13.8875 3.67906 14 3.85574 14 4.05V10.95C14 11.1443 13.8875 11.3209 13.7114 11.4031L7.71144 14.2031C7.57742 14.2656 7.42258 14.2656 7.28856 14.2031L1.28856 11.4031C1.11252 11.3209 1 11.1443 1 10.95V4.05C1 3.85574 1.11252 3.67906 1.28856 3.59691L7.28856 0.796908ZM2 4.80578L7 6.93078V12.9649L2 10.6316V4.80578ZM8 12.9649L13 10.6316V4.80578L8 6.93078V12.9649ZM7.5 6.05672L12.2719 4.02866L7.5 1.80176L2.72809 4.02866L7.5 6.05672Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path></svg></span>
            <div>
                <h3 class="font-semibold text-xl">Well Maintained</h3>
                <p class="mt-1 text-gray-500"> This templatte is actively maintained by the core plugin team. We are
                    working on fixing each of the issues reported.</p>
            </div>
        </div>

    </div>
</div>

<div class="container max-w-[1200px] mx-auto">
    <h1 class="text-4xl font-bold">Portfolio</h1>
    <h1 class="text-4xl font-bold">Services</h1>
    <h1 class="text-4xl font-bold">Reviews</h1>
    <h1 class="text-4xl font-bold">Pricing Plans</h1>
    <h1 class="text-4xl font-bold">FAQs</h1>
    <h1 class="text-4xl font-bold">Core Values/Philosphy</h1>
    <h1 class="text-4xl font-bold">Our Team</h1>
    <h1 class="text-4xl font-bold">Technology and Equipment</h1>
    <h1 class="text-4xl font-bold">Safety Standards</h1>
    <h1 class="text-4xl font-bold">Partnerships and Affiliations</h1>
    <h1 class="text-4xl font-bold">Estimate Calculator</h1>
</div>

<section>
    <div class="container px-6 py-12 mx-auto">
        <div>
            <p class="font-medium text-textSecondary/80">Contact us</p>

            <h1 class="mt-2 text-2xl font-semibold text-gray-800 md:text-3xl text-textPrimary">Chat to our friendly team</h1>

            <p class="mt-3 text-textSecondary">We’d love to hear from you. Please fill out this form or shoot us an email.</p>
        </div>

        <div class="grid grid-cols-1 gap-12 mt-10 lg:grid-cols-2">
            <div class="grid grid-cols-1 gap-12 md:grid-cols-2">
                <div>
                    <span class="inline-block p-3 text-primary rounded-full bg-primary/10">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </span>

                    <h2 class="mt-4 text-base font-medium text-textPrimary">Email</h2>
                    <p class="mt-2 text-sm text-textSecondary">Our friendly team is here to help.</p>
                    <p class="mt-2 text-sm text-primary hover:underline">hello@merakiui.com</p>
                </div>

                <div>
                    <span class="inline-block p-3 text-primary rounded-full bg-primary/10">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </span>
                    
                    <h2 class="mt-4 text-base font-medium text-textPrimary">Live chat</h2>
                    <p class="mt-2 text-sm text-textSecondary">Our friendly team is here to help.</p>
                    <p class="mt-2 text-sm text-primary hover:underline">Start new chat</p>
                </div>

                <div>
                    <span class="inline-block p-3 text-primary rounded-full bg-primary/10">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </span>
                    
                    <h2 class="mt-4 text-base font-medium text-textPrimary">Office</h2>
                    <p class="mt-2 text-sm text-textSecondary">Come say hello at our office HQ.</p>
                    <p class="mt-2 text-sm text-primary hover:underline">100 Smith Street Collingwood VIC 3066 AU</p>
                </div>

                <div>
                    <span class="inline-block p-3 text-primary rounded-full bg-primary/10">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </span>
                    
                    <h2 class="mt-4 text-base font-medium text-textPrimary">Phone</h2>
                    <p class="mt-2 text-sm text-textSecondary">Mon-Fri from 8am to 5pm.</p>
                    <p class="mt-2 text-sm text-primary hover:underline">+1 (555) 000-0000</p>
                </div>
            </div>

            <div class="p-4 py-6 rounded-lg bg-bgSecondary/30 md:p-8">
                <form>
                    <div class="-mx-2 md:items-center md:flex">
                        <div class="flex-1 px-2">
                            <label class="block mb-2 text-sm text-textSecondary">First Name</label>
                            <input type="text" placeholder="John " class="block w-full px-5 py-2.5 mt-2 text-textSecondary placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-primary/60 focus:ring-primary/20 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>

                        <div class="flex-1 px-2 mt-4 md:mt-0">
                            <label class="block mb-2 text-sm text-textSecondary">Last Name</label>
                            <input type="text" placeholder="Doe" class="block w-full px-5 py-2.5 mt-2 text-textSecondary placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-primary/60 focus:ring-primary/20 focus:outline-none focus:ring focus:ring-opacity-40" />
                        </div>
                    </div>

                    <div class="mt-4">
                        <label class="block mb-2 text-sm text-textSecondary">Email address</label>
                        <input type="email" placeholder="johndoe@example.com" class="block w-full px-5 py-2.5 mt-2 text-textSecondary placeholder-gray-400 bg-white border border-gray-200 rounded-lg focus:border-primary/60 focus:ring-primary/20 focus:outline-none focus:ring focus:ring-opacity-40" />
                    </div>

                    <div class="w-full mt-4">
                        <label class="block mb-2 text-sm text-textSecondary">Message</label>
                        <textarea class="block w-full h-32 px-5 py-2.5 mt-2 text-textSecondary placeholder-gray-400 bg-white border border-gray-200 rounded-lg md:h-56 focus:border-primary/60 focus:ring-primary/20 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Message"></textarea>
                    </div>

                    <button class="w-full px-6 py-3 mt-4 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-primary rounded-lg hover:bg-primary/80 focus:outline-none focus:ring focus:ring-primary/20 focus:ring-opacity-50">
                        Send message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>