<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageDetails['title']); ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDetails['description']); ?>">
    <?php include INCLUDES . "header.php"; ?>
</head>
<?php
$EnglishLinks = [
    "About" => "/#about",
    "Services" => "/#services",
    "Portfolio" => "/#portfolio",
    "Pricing" => "/pricing-plans",
    "Contact" => "/#contact",
];

$ArabicLinks = [
    "من نحن" => "/#about",          // About
    "الخدمات" => "/#services",      // Services
    "المعرض" => "/#portfolio",       // Portfolio
    "التسعير" => "/pricing-plans",   // Pricing
    "اتصل بنا" => "/#contact",       // Contact
];

$EnglishLinksFooter1 = [
    "Pricing" => "/pricing-plans",
    "Get a Quote" => "/get-a-quote",
    "Contact Us" => "/#contact",
    "Privacy Policy" => "/terms-and-policies",
];

$EnglishLinksFooter2 = [
    "About Us" => "/#about",
    "Services" => "/#services",
    "Portfolio" => "/#portfolio",
];
$ArabicLinksFooter1 = [     // Portfolio
    "التسعير" => "/pricing-plans",   // Pricing
    "احصل على عرض" => "/get-a-quote",
    "اتصل بنا" => "/#contact",
    "سياسة الخصوصية" => "/terms-and-policies", // Privacy Policy
];

$ArabicLinksFooter2 = [
    "من نحن" => "/#about",          // About Us
    "الخدمات" => "/#services",      // Services
    "المعرض" => "/#portfolio",       // Portfolio
];

if (empty($pageKey)) {
    $textColor = "text-white";
} else {
    $textColor = "text-textPrimary";
}
?>



<body>
    <!-- <body class="overflow-hidden bg-bgPrimary"> use this with preloader -->
    <!-- <div id="preloader" class="w-screen z-50 bg-bgPrimary fixed flex flex-col justify-center items-center h-screen <?php echo ($pageKey === 'pricing-plans' || $pageKey === 'blogs' || $pageKey === 'blog' || $pageKey === 'terms-and-policies') ? '-mt-[39px]' : ''; ?>">
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
                    <span class="text-xl font-bold <?= $textColor; ?> hero-text lang-english">GreenFortUAE</span>
                    <span class="text-xl font-bold <?= $textColor; ?> hero-text lang-arabic hidden">جرين فور الإمارات</span>
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
            <div class="hidden lg:flex lg:gap-x-12 lang-english">
                <?php foreach ($EnglishLinks as $name => $link) {
                    echo '<a href="' . $link . '" class="text-sm font-semibold leading-6 ' . $textColor . ' hero-text">' . $name . '</a>';
                }
                ?>
            </div>

            <div class="hidden lg:flex lg:gap-x-12 lang-arabic">
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
                        <span class="text-xl font-bold text-textPrimary">SUMAN STUDIO & Films</span>
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
                            <div class="lang-english">
                            <?php foreach ($EnglishLinks as $name => $link) {
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
                            </div>
                            <div class="lang-arabic">
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
                            </div>
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
<footer class="relative bg-bgSecondary/30 pt-16 mt-10">
    <div class="container mx-auto xss:px-0 md:px-4">
        <div class="flex flex-wrap text-left lg:text-left">
            <div class="w-full lg:w-6/12 xss:px-3 md:px-4 -mt-[1.82rem]">
                <a href="/" class="flex gap-2 ml-4 md:mt-8 text-textPrimary font-semibold text-2xl lang-english" aria-label="Footer Logo">
                    LOGO
                </a>
                <a href="/" class="flex gap-2 ml-4 md:mt-8 text-textPrimary font-semibold text-2xl lang-arabic hidden" aria-label="Footer Logo">
                    الشعار
                </a>

                <p class="text-md m-4 text-textSecondary text-justify lang-english">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi animi, assumenda similique accusamus optio recusandae cumque ex. Beatae quam eius commodi doloribus optio eveniet asperiores obcaecati minus aliquid maxime.
                </p>

                <p class="text-md m-4 text-textSecondary text-justify lang-arabic hidden">
                    لوريم إيبسوم دولور سيت، أميت كونسكتتور أديبيسيسينغ إيليت. كوميودي أنيمي، أسوميندا سيميليكيه أكوساموس أوبتيوم ريكوساندي كومك إكس. بيتاي كوام إييوس كوميودي دولوريوس أوبتيوم إيفينيت أسبرiores أوبكاكاتي مينيك أليغيد ماكسيما.
                </p>
                <div class="h-auto ml-4 flex items-center justify-start gap-3 flex-wrap">
                    <!-- Phone Call Icon -->
                    <a href="#" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                        <div class="w-8 h-8 bg-green-600 rounded-md flex items-center justify-center">
                            <i class="fas fa-phone text-white text-md"></i>
                        </div>
                    </a>
                    <!-- Facebook Icon -->
                    <a href="#" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                        <div class="w-8 h-8 bg-blue-600 rounded-md flex items-center justify-center">
                            <i class="fab fa-facebook-f text-white text-md"></i>
                        </div>
                    </a>
                    <!-- WhatsApp Icon -->
                    <a href="#" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                        <div class="w-8 h-8 bg-green-500 rounded-md flex items-center justify-center">
                            <i class="fab fa-whatsapp text-white text-md"></i>
                        </div>
                    </a>
                    <!-- Instagram Icon -->
                    <a href="#" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                        <div class="w-8 h-8 bg-gradient-to-r from-yellow-400 via-pink-500 to-purple-600 rounded-md flex items-center justify-center">
                            <i class="fab fa-instagram text-white text-md"></i>
                        </div>
                    </a>
                    <!-- Mail Icon -->
                    <a href="#" target="_blank" class="group transition-all duration-500 hover:-translate-y-1">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-md flex items-center justify-center">
                            <i class="fas fa-envelope text-white text-md"></i>
                        </div>
                    </a>
                </div>
            </div>

            <div class="w-full lg:w-6/12 xss:px-0 md:px-4">
                <div class="flex flex-wrap items-top mb-6">
                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                        <span class="block uppercase text-textPrimary text-sm font-semibold mb-2 lang-english">
                            Site Navigation 
                        </span>
                        <span class="block uppercase text-textPrimary text-sm font-semibold mb-2 lang-arabic hidden">
                            تنقل الموقع
                        </span>
                        <ul class="list-unstyled">
                            <li><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm lang-english" href="/#services">Services</a></li>
                            <li><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm lang-english" href="/portfolio">Portfolio</a></li>
                            <li><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm lang-english" href="/pricing-plans">Pricing</a></li>
                            <li><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm lang-english" href="/get-a-quote" target="_blank">Get a Quote</a></li>
                            <li class="hidden lang-arabic"><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm" href="/#services">الخدمات</a></li>
                            <li class="hidden lang-arabic"><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm" href="/portfolio">محفظة الأعمال</a></li>
                            <li class="hidden lang-arabic"><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm" href="/pricing-plans">التسعير</a></li>
                            <li class="hidden lang-arabic"><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm" href="/get-a-quote" target="_blank">احصل على عرض سعر</a></li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-4/12 px-4 xss:mt-3 md:mt-0">
                        <span class="block uppercase text-textPrimary text-sm font-semibold mb-2 lang-english">
                            Info Links 
                        </span>
                        <span class="block uppercase text-textPrimary text-sm font-semibold mb-2 lang-arabic hidden">
                            روابط المعلومات
                        </span>
                        <ul class="list-unstyled">
                            <li><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm lang-english" href="/#about">About Us</a></li>
                            <li><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm lang-english" href="/#contact">Contact Us</a></li>
                            <li><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm lang-english" href="/terms-and-policies">Privacy Policy</a></li>
                            <li class="hidden lang-arabic"><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm" href="/#about">من نحن</a></li>
                            <li class="hidden lang-arabic"><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm" href="/#contact">اتصل بنا</a></li>
                            <li class="hidden lang-arabic"><a class="text-textPrimary hover:text-textSecondary block pb-2 text-sm" href="/terms-and-policies">سياسة الخصوصية</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-3 border-textSecondary/40">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
        <div class="w-full md:w-4/12 px-4 pb-3 mx-auto text-center">
            <div class="text-sm text-textSecondary/80 font-semibold py-1 lang-english">
                Copyright © <span id="currentYear"></span>
                <a href="/" class="text-textPrimary underline hover:text-textSecondary capitalize" aria-label="Website Name">
                    GreenFortUAE</a>.
                <span class="text-sm lang-arabic hidden">حقوق الطبع والنشر © <span id="currentYear"></span> <a href="/" class="text-textPrimary underline hover:text-textSecondary capitalize" aria-label="اسم الموقع">GreenFortUAE</a>.</span>
            </div>
        </div>
    </div>
</footer>
<!-- ====== Footer Section End -->

    <?php include INCLUDES . "footer.php"; ?>
</body>

</html>