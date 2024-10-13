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
<?php
$EnglishLinks = [
    "About" => "/about",
    "Services" => "/services",
    "Portfolio" => "/portfolio",
    "Contact" => "/contact",
];

$ArabicLinks = [
    "من نحن" => "/about",          // About
    "الخدمات" => "/services",      // Services
    "المعرض" => "/portfolio",      // Portfolio
    "اتصل بنا" => "/contact",      // Contact
];

$MobileENGARLinks = [];

foreach ($EnglishLinks as $englishText => $link) {
    foreach ($ArabicLinks as $arabicText => $arabicLink) {
        if ($link == $arabicLink) {
            $MobileENGARLinks[] = [
                'link' => $link,
                'text' => $englishText . ' ' . $arabicText
            ];
        }
    }
}
?>



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
                    <img src="<?= $pageKey === '' ? getAsset("weblogo-white.webp", 'images/') : getAsset("logo.webp", 'images/'); ?>" id="logoImg" alt="Website LOGO (Green Fort UAE)" class="w-[200px]">
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
            <div class="desktop-nav hidden lg:flex lg:gap-x-12 lang-english">
                <?php foreach ($EnglishLinks as $name => $link) {
                    echo '<a href="' . $link . '" class="text-sm font-semibold leading-6 ' . $textColor . ' hero-text">' . $name . '</a>';
                }
                ?>
            </div>

            <div class="desktop-nav hidden lg:flex lg:gap-x-12 lang-arabic">
                <?php foreach ($ArabicLinks as $name => $link) {
                    echo '<a href="' . $link . '" class="text-sm font-semibold leading-6 ' . $textColor . ' hero-text">' . $name . '</a>';
                }
                ?>
            </div>
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
                            <div class="mobile-nav">
                                <?php foreach ($MobileENGARLinks as $item) {
                                    $link = $item['link'];
                                    $englishText = explode(' ', $item['text'])[0]; // Get the English text
                                    $arabicText = explode(' ', $item['text'])[1];  // Get the Arabic text
                                    echo <<<HTML
        <a
            @click="open = false; $('body').removeClass('overflow-hidden')"
            href='{$link}'
            class='-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-textPrimary hover:bg-bgSecondary'>
            <span class='lang-english'>{$englishText}</span>
            <span class='lang-arabic hidden'>{$arabicText}</span>
        </a>
        HTML;
                                }
                                ?>
                            </div>


                            <!-- <div class="mobile-nav lang-arabic">
                                <?php foreach ($ArabicLinks as $name => $link) {
                                    echo <<<HTML
                            <a
                                @click="open = false; $('body').removeClass('overflow-hidden')"
                                href='{$link}'
                                class='-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-textPrimary hover:bg-bgSecondary'>
                                {$name}
                            </a>
                            HTML;
                                }
                                ?>
                            </div> -->
                            <!-- <div class="py-6">
                                <a
                                    href="/get-a-quote"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-textPrimary hover:bg-bgSecondary">Get a quote <i class="fa fa-arrow-right"></i></a>
                            </div> -->

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

    <!-- ====== Footer Section Start -->
    <footer class="relative bg-zinc-800 pt-16 mt-10">
        <div class="container mx-auto xss:px-0 md:px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 xss:px-3 md:px-4 -mt-[1.82rem]">
                    <a href="/" class="flex gap-2 md:mt-8" aria-label="Footer Logo">
                        <img src="<?= getAsset('weblogo-white.webp', 'images/'); ?>" alt="Logo" class="w-52 brightness-110 rounded-full object-contain ml-4">
                    </a>
                    <p class="text-md m-4 text-bgSecondary text-justify">
                        <span class="lang-english">We specialize in building luxurious, sustainable homes that blend modern design with comfort. Our attention to detail and commitment to quality ensures every residence is a masterpiece, crafted to meet the highest standards of living.</span>
                        <span class="lang-arabic hidden">نحن متخصصون في بناء منازل فاخرة ومستدامة تجمع بين التصميم الحديث والراحة. يضمن انتباهنا إلى التفاصيل والتزامنا بالجودة أن تكون كل إقامة تحفة فنية تلبي أعلى معايير المعيشة.</span>
                    </p>
                    <div class="h-auto ml-4 flex items-center justify-start gap-3 flex-wrap">
                        <!-- WhatsApp Icon -->
                        <a href="https://wa.me/+971504235865" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                            <div class="w-8 h-8 bg-green-500 rounded-md flex items-center justify-center">
                                <i class="fab fa-whatsapp text-white text-md"></i>
                            </div>
                        </a>

                        <!-- Instagram Icon -->
                        <a href="https://www.instagram.com/greenfortdubai/" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                            <div class="w-8 h-8 bg-gradient-to-r from-yellow-400 via-pink-500 to-purple-600 rounded-md flex items-center justify-center">
                                <i class="fab fa-instagram text-white text-md"></i>
                            </div>
                        </a>

                        <!-- Facebook Icon -->
                        <a href="https://www.facebook.com/ConstructionWorksinDubai" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                            <div class="w-8 h-8 bg-blue-600 rounded-md flex items-center justify-center">
                                <i class="fab fa-facebook-f text-white text-md"></i>
                            </div>
                        </a>

                        <!-- TikTok Icon -->
                        <a href="https://www.tiktok.com/@green.fort3" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                            <div class="w-8 h-8 bg-black rounded-md flex items-center justify-center">
                                <i class="fab fa-tiktok text-white text-md"></i>
                            </div>
                        </a>

                        <!-- YouTube Icon -->
                        <a href="https://www.youtube.com/@GreenFortBuildingContracting" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                            <div class="w-8 h-8 bg-red-600 rounded-md flex items-center justify-center">
                                <i class="fab fa-youtube text-white text-md"></i>
                            </div>
                        </a>

                        <!-- Mail Icon -->
                        <a href="mailto:info@greenfortuae.com" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                            <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-md flex items-center justify-center">
                                <i class="fas fa-envelope text-white text-md"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 xss:px-0 md:px-4 md:mt-0 mt-3">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-bgPrimary text-sm font-semibold mb-2">
                                <span class="lang-english">Site Navigation</span>
                                <span class="lang-arabic hidden">تصفح الموقع</span>
                            </span>
                            <ul class="list-unstyled">
                                <li><a class="text-bgPrimary hover:text-bgSecondary block pb-2 text-sm" href="/services"><span class="lang-english">Services</span><span class="lang-arabic hidden">خدمات</span></a></li>
                                <li><a class="text-bgPrimary hover:text-bgSecondary block pb-2 text-sm" href="/Portfolio"><span class="lang-english">Portfolio</span><span class="lang-arabic hidden">معرض الأعمال</span></a></li>
                                <li><a class="text-bgPrimary hover:text-bgSecondary block pb-2 text-sm" href="/contact"><span class="lang-english">Contact Us</span><span class="lang-arabic hidden">اتصل بنا</span></a></li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4 xss:mt-3 md:mt-0">
                            <span class="block uppercase text-bgPrimary text-sm font-semibold mb-2">
                                <span class="lang-english">Info Links</span>
                                <span class="lang-arabic hidden">روابط المعلومات</span>
                            </span>
                            <ul class="list-unstyled">
                                <li><a class="text-bgPrimary hover:text-bgSecondary block pb-2 text-sm" href="/about"><span class="lang-english">About Us</span><span class="lang-arabic hidden">معلومات عنا</span></a></li>
                                <li><a class="text-bgPrimary hover:text-bgSecondary block pb-2 text-sm" href="/#vision"><span class="lang-english">Our Vision</span><span class="lang-arabic hidden">رؤيتنا</span></a></li>
                                <li><a class="text-bgPrimary hover:text-bgSecondary block pb-2 text-sm" href="/#reviews"><span class="lang-english">Reviews</span><span class="lang-arabic hidden">مراجعات</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-3 border-textSecondary">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4 py-2 mx-auto text-center">
                <div class="text-sm text-bgSecondary/80 font-semibold py-1">
                    ©2024 <span class="lang-english">All Right Reserved. Powered By</span> <span class="lang-arabic hidden">جميع الحقوق محفوظة. بتطوير</span>
                    <a href="https://upsoltech.com/" target="_blank" rel="dofollow" class="text-bgPrimary underline hover:text-bgSecondary capitalize" aria-label="Website Created by Upsol Techologies">Upsol Technologies</a>.
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== Footer Section End ====== -->


    <?php include INCLUDES . "footer.php"; ?>
    <script>
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
                $('.fa').css('margin-left', '10px').css('margin-right', '0'); // Adjust icon margin for RTL
            } else {
                $('body').css('direction', 'ltr');
                $('body').removeClass('arabic');
                $('.fa').css('margin-right', '10px').css('margin-left', '0'); // Adjust icon margin for LTR
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
</body>

</html>