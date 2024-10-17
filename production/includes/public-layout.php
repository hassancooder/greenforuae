<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $pageDetails['meta']; ?>
    <?php include INCLUDES . "header.php"; ?>
    <?php if (empty($pageKey)) {
        $textColor = "text-white";
        echo '<script>let isHome = true;</script>';
        echo '<link rel="prefetch" href="' . getAsset('home-bg.mp4', 'videos/') . '" as="video">';
    } else {
        $textColor = "text-textPrimary";
        echo '<script>let isHome = false;</script>';
    } ?>
</head>

<body class="overflow-x-hidden">
    <!-- <body class="overflow-hidden bg-bgPrimary"> use this with preloader -->
    <!-- <div id="preloader" class="w-screen z-50 bg-bgPrimary fixed flex flex-col justify-center items-center h-screen <?php echo ($pageKey === 'services' || $pageKey === 'portfolio' || $pageKey === 'contact') ? '-mt-[39px]' : ''; ?>">
        <div class="container mt-24">
            <svg class="w-8 h-8 mx-auto text-textPrimary animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>

            <div class="w-32 mx-auto mt-10 bg-bgSecondary rounded-full h-1.5">
                <div class="bg-textPrimary/75 h-1.5 rounded-full w-10 preloader-progress" style="width:0%;"></div>
            </div>
        </div>
    </div> -->
    <header class="fixed inset-x-0 top-0 z-[45] border-bgSecondary navbar" x-data="{ open: false }" @open-menu.window="open = true; $('body').addClass('overflow-hidden')" @close-menu.window="open = false; $('body').removeClass('overflow-hidden')">
        <nav class="flex items-center justify-between p-4 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <!-- <span class="text-xl font-bold <?= $textColor; ?> hero-text lang-english">Green Fort UAE</span>
                    <span class="text-xl font-bold <?= $textColor; ?> hero-text lang-arabic hidden">جرين فور الإمارات</span> -->
                    <img src="<?= $pageKey === '' ? getAsset("weblogo-white.webp", 'images/') : getAsset("logo.webp", 'images/'); ?>" id="logoImg" alt="Website LOGO (Green Fort UAE)" class="w-[240px]">
                </a>


            </div>
            <div class="flex lg:hidden">
                <button @click="open = !open; $('body').toggleClass('overflow-hidden')" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 <?= $textColor; ?> hero-text">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <!-- Desktop Navigation (English) -->
            <div class="desktop-nav hidden lg:flex lg:gap-x-12">
                <div class="relative group">
                    <a href="/about" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-english">About</a>
                    <a href="/about" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-arabic hidden">من نحن</a>
                    <!-- Dropdown for Chairman's Message -->
                    <div class="absolute left-0 mt-0 hidden w-44 bg-bgPrimary rounded-md group-hover:block">
                        <ul class="py-2">
                            <li>
                                <a href="/chairman-message" class="block px-4 py-2 text-sm leading-6 text-textPrimary hover:bg-bgSecondary lang-english">
                                    Chairman's Message
                                </a>
                                <a href="/chairman-message" class="block px-4 py-2 text-sm leading-6 text-textPrimary hover:bg-bgSecondary lang-arabic hidden">
                                    رسالة الرئيس
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="/services" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-english">Services</a>
                <a href="/portfolio" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-english">Portfolio</a>

                <a href="/careers" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-english">Careers</a> <!-- New Careers Link -->
                <a href="/contact" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-english">Contact</a>
                <a href="/services" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-arabic hidden">الخدمات</a>
                <a href="/portfolio" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-arabic hidden">المعرض</a>

                <a href="/careers" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-arabic hidden">الوظائف</a> <!-- New Careers Link in Arabic -->
                <a href="/contact" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-arabic hidden">اتصل بنا</a>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end items-center space-x-4">
                    <div class="relative">
                        <button id="langDropdownBtnDesktop" class="text-sm font-semibold <?= $textColor; ?> hero-text focus:outline-none flex items-center">
                            <span id="selectedLangDesktop">English</span>
                            <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.585l3.71-3.355a.75.75 0 111.02 1.1l-4 3.615a.75.75 0 01-1.02 0l-4-3.615a.75.75 0 01.02-1.1z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div id="langDropdownDesktop" class="hidden absolute right-0 mt-2 w-40 rounded-md bg-bgPrimary ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-textPrimary hover:bg-bgSecondary" data-lang="en">English</a>
                                <a href="#" class="block px-4 py-2 text-textPrimary hover:bg-bgSecondary" data-lang="ar">العربية</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end items-center space-x-4">
                <a href="/portal-login" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-english">Portal Login</a> <!-- New Portal Login Link -->
                <a href="/portal-login" class="text-sm font-semibold leading-6 <?= $textColor; ?> hero-text lang-arabic hidden">تسجيل الدخول للبوابة</a> <!-- New Portal Login Link in Arabic -->
            </div>

        </nav>
        <div
            x-show="open"
            @click.away="open = false; $('body').removeClass('overflow-hidden')"
            class="fixed inset-0  bg-bgPrimary h-screen lg:hidden"
            role="dialog"
            aria-modal="true">
            <div
                class="fixed inset-0 top-0 flex flex-col bg-bgPrimary px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10"
                x-show="open"
                x-transition:enter="transform transition ease-out duration-300"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in duration-200"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full">
                <div class="flex items-center justify-between">
                    <a href="/" class="-m-1.5 p-1.5">
                        <!-- <span class="text-xl font-bold text-textPrimary">Green Fort UAE</span> -->
                        <img src="<?= getAsset("logo.webp", 'images/'); ?>" id="logoImg" alt="Website LOGO (Green Fort UAE)" class="w-[200px]">
                    </a>
                    <button
                        @click="open = false; $('body').removeClass('overflow-hidden')"
                        type="button"
                        class="-m-2.5 rounded-md p-2.5 text-textPrimary">
                        <span class="sr-only">Close menu</span>
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root bg-bgPrimary z-40">
                    <div class="-my-6 divide-y divide-gray-500/10 bg-bgPrimary z-40">
                        <div class="space-y-2 py-6 bg-bgPrimary z-40">
                            <div class="mt-6 space-y-6">
                                <!-- Merged Mobile Navigation with English and Arabic -->
                                <div class="mobile-nav">
                                    <a href="/about" class="block px-3 py-2 text-base font-semibold leading-7 text-textPrimary">
                                        About / من نحن
                                    </a>
                                    <a href="/about/chairman-message" class="block pl-6 py-2 text-sm font-semibold leading-6 text-textPrimary">
                                        Chairman's Message / رسالة الرئيس
                                    </a>
                                    <a href="/services" class="block px-3 py-2 text-base font-semibold leading-7 text-textPrimary">
                                        Services / الخدمات
                                    </a>
                                    <a href="/portfolio" class="block px-3 py-2 text-base font-semibold leading-7 text-textPrimary">
                                        Portfolio / المعرض
                                    </a>
                                    <a href="/contact" class="block px-3 py-2 text-base font-semibold leading-7 text-textPrimary">
                                        Contact / اتصل بنا
                                    </a>
                                </div>

                            </div>

                            <div class="relative">
                                <button id="langDropdownBtnMobile" class="text-base font-semibold text-textPrimary hover:bg-bgSecondary focus:outline-none flex items-center justify-between w-full px-3 py-2 rounded-lg">
                                    <span id="selectedLangMobile">English</span>
                                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.585l3.71-3.355a.75.75 0 111.02 1.1l-4 3.615a.75.75 0 01-1.02 0l-4-3.615a.75.75 0 01.02-1.1z" clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <!-- Dropdown Menu (Mobile) -->
                                <div id="langDropdownMobile" class="hidden absolute left-0 mt-2 w-full rounded-md ring-1 ring-black ring-opacity-5 focus:outline-none">
                                    <div class="py-1">
                                        <a href="#" class="block px-4 py-2 text-textPrimary hover:bg-bgSecondary" data-lang="en">English</a>
                                        <a href="#" class="block px-4 py-2 text-textPrimary hover:bg-bgSecondary" data-lang="ar">العربية</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </header>
    <?php include PUBLIC_PAGES . $pageDetails['file']; ?>

    <!-- ====== Footer Section Start ====== -->
    <footer class="bg-[#252626] text-white pt-12 pb-2 px-4 md:px-8">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between">
            <!-- Contact Section -->
            <div class="mb-8 md:mb-0">
                <h2 class="text-2xl font-bold mb-4"><span class="lang-english">Contact</span><span class="lang-arabic hidden">تواصل</span></h2>
                <p class="font-bold mb-2"><span class="lang-english">Green Fort UAE</span><span class="lang-arabic hidden">جرين فورت الإمارات</span></p>
                <p class="mb-1"><span class="lang-english">Office 206, AL Saud Building,</span><span class="lang-arabic hidden">مكتب 206، مبنى آل سعود،</span></p>
                <p class="mb-1"><span class="lang-english">AL Qusais ind 4th, Dubai, UAE.</span><span class="lang-arabic hidden">القصيص الصناعية 4، دبي، الإمارات.</span></p>
                <p class="flex items-center mb-2">
                    <i class="fas fa-phone-alt rotate-90 mr-2"></i>
                    <span class="lang-english">+971 4 5543260, +971 50 4235865</span>
                    <span class="lang-arabic hidden">+971 4 5543260، +971 50 4235865</span>
                </p>
                <p class="flex items-center">
                    <i class="fas fa-envelope mr-2"></i>
                    <span class="lang-english">info@greenfortuae.com</span>
                    <span class="lang-arabic hidden">info@greenfortuae.com</span>
                </p>
            </div>

            <!-- Key Links Section -->
            <div class="mb-8 md:mb-0">
                <h2 class="text-2xl font-bold mb-4"><span class="lang-english">Key Links</span><span class="lang-arabic hidden">روابط هامة</span></h2>
                <ul class="space-y-2">
                    <li>
                        <a href="/about" class="hover:underline">
                            <span class="lang-english">Company Overview</span>
                            <span class="lang-arabic hidden">نظرة عامة على الشركة</span>
                        </a>
                    </li>
                    <li>
                        <a href="/about#team" class="hover:underline">
                            <span class="lang-english">Leadership</span>
                            <span class="lang-arabic hidden">القيادة</span>
                        </a>
                    </li>
                    <li>
                        <a href="/chairman-message" class="hover:underline">
                            <span class="lang-english">Chairman's Message</span>
                            <span class="lang-arabic hidden">رسالة رئيس مجلس الإدارة</span>
                        </a>
                    </li>
                    <li>
                        <a href="/careers" class="hover:underline">
                            <span class="lang-english">Careers</span>
                            <span class="lang-arabic hidden">الوظائف</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Follow Us Section -->
            <div>
                <h2 class="text-2xl font-bold mb-4"><span class="lang-english">Follow Us</span><span class="lang-arabic hidden">تابعنا</span></h2>
                <div class="flex space-x-4 mb-6">
                    <!-- Facebook Icon -->
                    <a href="https://www.facebook.com/ConstructionWorksinDubai" class="hover:opacity-80">
                        <i class="fab fa-facebook-f h-6 w-6"></i>
                    </a>
                    <!-- Instagram Icon -->
                    <a href="https://www.instagram.com/greenfortdubai/" class="hover:opacity-80">
                        <i class="fab fa-instagram h-6 w-6"></i>
                    </a>
                    <!-- YouTube Icon -->
                    <a href="https://www.youtube.com/@GreenFortBuildingContracting" class="hover:opacity-80">
                        <i class="fab fa-youtube h-6 w-6"></i>
                    </a>
                    <!-- TikTok Icon -->
                    <a href="https://www.tiktok.com/@green.fort3" class="hover:opacity-80">
                        <i class="fab fa-tiktok h-6 w-6"></i>
                    </a>
                    <!-- YouTube Icon -->
                    <a href="https://wa.me/+971504235865" class="hover:opacity-80">
                        <i class="fab fa-whatsapp h-6 w-6"></i>
                    </a>
                </div>

                <!-- Download Brochure Button -->
                <a href="https://wa.me/971504235865?text=Please%20provide%20the%20company%20profile%20for%20Green%20Fort%20UAE." class="bg-primary text-white text-sm px-4 py-2 rounded-full inline-flex items-center hover:bg-opacity-90 transition duration-300">
                    <span class="lang-english">DOWNLOAD BROCHURE</span>
                    <span class="lang-arabic hidden">تحميل الكتيب</span>
                    <i class="fas fa-download ml-2"></i>
                </a>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="mt-6 pt-2 text-center text-sm border-t-2 border-textSecondary/30">
            <p>
                &copy; 2024 <span class="lang-english">Green Fort UAE. All rights reserved.</span>
                <span class="lang-arabic hidden">جرين فورت الإمارات. جميع الحقوق محفوظة.</span>
            </p>
            <p>
                <span class="lang-english">Developed by</span>
                <span class="lang-arabic hidden">تم تطويره بواسطة</span>
                <a href="https://upsoltech.com/" target="_blank" rel="dofollow" class="text-bgPrimary underline hover:text-bgSecondary">
                    <span class="lang-english">Upsol Technologies</span>
                    <span class="lang-arabic hidden">أبسل تكنولوجيز</span>
                </a>
            </p>
        </div>


    </footer>
    <!-- ====== Footer Section End ====== -->



    <?php include INCLUDES . "footer.php"; ?>
    <script>
        let clientsSwiper;
        // reverseDirection === true || false;
        clientsSwiper = new Swiper('.projects-swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.custom-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.custom-next',
                prevEl: '.custom-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 3
                },
            },
        });

        let gallerySwiper;
        // reverseDirection === true || false;
        gallerySwiper = new Swiper('.gallery-swiper-container', {
            slidesPerView: 4,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.custom-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.custom-next',
                prevEl: '.custom-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                },
            },
        });

        function toggleDropdown(dropdown) {
            $(dropdown).toggleClass('hidden');
        }

        function updateLanguage(dropdownId, selectedLangId, lang) {
            $('#' + selectedLangId).text(lang);
            toggleDropdown(dropdownId);
            // Array of element tags that might contain language-specific text
            const elementsToCheck = ['a', 'p', 'td', 'div', 'span', 'li', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'i'];

            const isMobile = window.innerWidth < 1024;
            elementsToCheck.forEach(tag => {
                if (!(isMobile && $(tag).hasClass('desktop-nav'))) {
                    const isEnglishSelected = lang !== 'العربية';
                    if (isMobile) {
                        $(tag + '.lang-english').toggle(isEnglishSelected);
                        $(tag + '.lang-arabic').toggle(lang === 'العربية');
                    } else {
                        // Show/Hide logic for desktop elements
                        $(tag + '.lang-english').toggle(isEnglishSelected);
                        $(tag + '.lang-arabic').toggle(!isEnglishSelected);
                    }
                }
            });






            if (lang === 'العربية') {
                $('body').css('direction', 'rtl');
                $('body').addClass('arabic');
                $('.fa').css('margin-left', '10px').css('margin-right', '0');
                if (clientsSwiper) clientsSwiper.changeLanguageDirection('rtl');
                if (gallerySwiper) gallerySwiper.changeLanguageDirection('rtl');
                // initializeSwiper(true) // Adjust icon margin for RTL
            } else {
                $('body').css('direction', 'ltr');
                $('body').removeClass('arabic');
                $('.fa').css('margin-right', '10px').css('margin-left', '0');
                if (clientsSwiper) clientsSwiper.changeLanguageDirection('ltr');
                if (gallerySwiper) gallerySwiper.changeLanguageDirection('ltr');
                // initializeSwiper(true) // Adjust icon margin for LTR
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

    <!-- WhatsApp Button -->
    <div class="fixed bottom-6 right-6 z-40 lang-english">
        <a href="https://wa.me/+971504235865" target="_blank"
            class="group flex items-center bg-[#25D366] text-white px-4 py-2 rounded-full shadow-lg transition-all duration-300 hover:bg-[#20b258]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mr-2" viewBox="0 0 64 64" fill="currentColor">
                <path d="M 32 10 C 19.85 10 10 19.85 10 32 C 10 36.065 11.10725 39.869719 13.03125 43.136719 L 10.214844 53.683594 L 21.277344 51.208984 C 24.450344 52.983984 28.106 54 32 54 C 44.15 54 54 44.15 54 32 C 54 19.85 44.15 10 32 10 z M 32 14 C 41.941 14 50 22.059 50 32 C 50 41.941 41.941 50 32 50 C 28.269 50 24.803687 48.864875 21.929688 46.921875 L 15.791016 48.294922 L 17.353516 42.439453 C 15.250516 39.493453 14 35.896 14 32 C 14 22.059 22.059 14 32 14 z M 24.472656 21.736328 C 24.105656 21.736328 23.515672 21.871969 23.013672 22.417969 C 22.520672 22.964969 21.113281 24.278844 21.113281 26.964844 C 21.113281 29.640844 23.057078 32.23675 23.330078 32.59375 C 23.603078 32.96075 27.100531 38.639266 32.644531 40.822266 C 37.240531 42.632266 38.179547 42.273688 39.185547 42.179688 C 40.183547 42.093688 42.408328 40.866703 42.861328 39.595703 C 43.313328 38.323703 43.312875 37.232906 43.171875 37.003906 C 43.034875 36.781906 42.676859 36.644094 42.130859 36.371094 C 41.584859 36.097094 38.906297 34.777656 38.404297 34.597656 C 37.909297 34.417656 37.542547 34.323141 37.185547 34.869141 C 36.818547 35.415141 35.778125 36.643953 35.453125 37.001953 C 35.138125 37.368953 34.823344 37.411672 34.277344 37.138672 C 33.731344 36.865672 31.975531 36.292594 29.894531 34.433594 C 28.275531 32.992594 27.182188 31.208063 26.867188 30.664062 C 26.551188 30.119062 26.832469 29.821828 27.105469 29.548828 C 27.353469 29.310828 27.652781 28.916563 27.925781 28.601562 C 28.189781 28.277563 28.282891 28.056453 28.462891 27.689453 C 28.651891 27.332453 28.555922 27.007375 28.419922 26.734375 C 28.284922 26.460375 27.226234 23.765406 26.740234 22.691406 C 26.332234 21.787406 25.905672 21.760953 25.513672 21.751953 C 25.196672 21.735953 24.829656 21.736328 24.472656 21.736328 z"></path>
            </svg>
            <span class="font-semibold">Need Help?</span>
        </a>
    </div>
    <div class="fixed bottom-6 right-6 z-40 lang-arabic hidden">
        <a href="https://wa.me/+971504235865" target="_blank"
            class="group flex items-center bg-[#25D366] text-white px-4 py-2 rounded-full shadow-lg transition-all duration-300 hover:bg-[#20b258]">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 ml-2" viewBox="0 0 64 64" fill="currentColor">
                <path d="M 32 10 C 19.85 10 10 19.85 10 32 C 10 36.065 11.10725 39.869719 13.03125 43.136719 L 10.214844 53.683594 L 21.277344 51.208984 C 24.450344 52.983984 28.106 54 32 54 C 44.15 54 54 44.15 54 32 C 54 19.85 44.15 10 32 10 z M 32 14 C 41.941 14 50 22.059 50 32 C 50 41.941 41.941 50 32 50 C 28.269 50 24.803687 48.864875 21.929688 46.921875 L 15.791016 48.294922 L 17.353516 42.439453 C 15.250516 39.493453 14 35.896 14 32 C 14 22.059 22.059 14 32 14 z M 24.472656 21.736328 C 24.105656 21.736328 23.515672 21.871969 23.013672 22.417969 C 22.520672 22.964969 21.113281 24.278844 21.113281 26.964844 C 21.113281 29.640844 23.057078 32.23675 23.330078 32.59375 C 23.603078 32.96075 27.100531 38.639266 32.644531 40.822266 C 37.240531 42.632266 38.179547 42.273688 39.185547 42.179688 C 40.183547 42.093688 42.408328 40.866703 42.861328 39.595703 C 43.313328 38.323703 43.312875 37.232906 43.171875 37.003906 C 43.034875 36.781906 42.676859 36.644094 42.130859 36.371094 C 41.584859 36.097094 38.906297 34.777656 38.404297 34.597656 C 37.909297 34.417656 37.542547 34.323141 37.185547 34.869141 C 36.818547 35.415141 35.778125 36.643953 35.453125 37.001953 C 35.138125 37.368953 34.823344 37.411672 34.277344 37.138672 C 33.731344 36.865672 31.975531 36.292594 29.894531 34.433594 C 28.275531 32.992594 27.182188 31.208063 26.867188 30.664062 C 26.551188 30.119062 26.832469 29.821828 27.105469 29.548828 C 27.353469 29.310828 27.652781 28.916563 27.925781 28.601562 C 28.189781 28.277563 28.282891 28.056453 28.462891 27.689453 C 28.651891 27.332453 28.555922 27.007375 28.419922 26.734375 C 28.284922 26.460375 27.226234 23.765406 26.740234 22.691406 C 26.332234 21.787406 25.905672 21.760953 25.513672 21.751953 C 25.196672 21.735953 24.829656 21.736328 24.472656 21.736328 z"></path>
            </svg>
            <span class="font-semibold">بحاجة إلى مساعدة؟</span>
        </a>
    </div>


</body>

</html>