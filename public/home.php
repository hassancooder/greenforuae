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
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Redefining Construction
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-secondary to-primary font-bold">Excellence in Dubai</span>
                </h1>
                <p class="mt-4 text-md leading-5 text-white/90">
                    Discover the beauty of your unforgettable moments captured by our skilled photographers. Let us help you tell your unique story through stunning imagery and artistry.
                </p>
                <div class="mt-8 flex items-center justify-center gap-x-6">
                    <a href="/#about" class="rounded-full bg-primary px-4 py-2.5 text-sm font-semibold text-bgPrimary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-secondary transition group">Learn more
                        <i class="fa fa-arrow-down ml-2 transition-transform duration-300 transform group-hover:translate-y-1"></i>
                    </a>
                </div>
                <div class="flex items-center justify-center absolute bottom-16 left-[50%] transform -translate-x-[45%]">
                    <div class="mt-20 text-center ring-1 ring-white rounded-full w-8 h-12 flex items-center justify-center">
                        <div class="w-3 h-3 rounded-full bg-white animate-ping"></div>
                    </div>
                </div>
                <p class="mt-5 text-sm font-medium text-white animate-pulse absolute bottom-6 left-[50%] transform -translate-x-[50%]">
                    Double tap to change background Image.
                </p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    let heroImages = ["assets/images/hero1.webp", "assets/images/hero2.webp"];
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
            setTimeout(() => {
                $('body').removeClass('overflow-x-hidden');
            }, 1000);
        }, 300);
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


<section id="about" class="py-24 bg-bgPrimary relative">
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
                        <h2 class="text-textPrimary text-4xl font-bold leading-2 lg:text-start text-center">
                            Building Tomorrow's Infrastructure Today
                        </h2>
                        <p class="text-textSecondary text-base font-normal leading-relaxed lg:text-start text-center">
                            At the heart of our mission lies a steadfast commitment to delivering high-quality construction solutions that inspire confidence and foster collaboration among all stakeholders. We believe that every project is an opportunity to build not only structures but also lasting relationships. By prioritizing innovation and sustainability, we aim to create environments that enhance the quality of life for our clients and the communities we serve.
                        </p>
                    </div>
                    <div class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex" id="stats">
                        <div class="flex-col justify-start items-start inline-flex">
                            <h3 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="33">0+</h3>
                            <h6 class="text-textSecondary text-base font-normal leading-relaxed">Years of Experience</h6>

                        </div>
                        <div class="flex-col justify-start items-start inline-flex">
                            <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="125">0+</h4>
                            <h6 class="text-textSecondary text-base font-normal leading-relaxed">Successful Projects</h6>
                        </div>
                        <div class="flex-col justify-start items-start inline-flex">
                            <h4 class="text-textPrimary text-4xl font-bold leading-2 count" data-count="52">0+</h4>
                            <h6 class="text-textSecondary text-base font-normal leading-relaxed">Happy Clients</h6>
                        </div>
                    </div>
                </div>
                <button class="sm:w-fit w-full px-3.5 py-2 bg-primary hover:bg-primary/80 transition-all duration-700 ease-in-out rounded-full shadow-[0px_1px_2px_0px_rgba(16,_24,_40,_0.05)] justify-center items-center flex">
                    <span class="px-1.5 text-white text-sm font-medium leading-6"><i class="fa fa-download"></i> Company Profile</span>
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

<div class="max-w-7xl mx-auto px-5 mt-16">

    <div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Services We Offer</span>
            <span class="lang-arabic hidden">التأمين<br> المعززة</span>
        </h1>
    </div>


    <div class="grid md:grid-cols-3 gap-10 mt-10">


        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 p-3 rounded-full">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <path d="M0.849976 1.74998C0.849976 1.25292 1.25292 0.849976 1.74998 0.849976H3.24998C3.74703 0.849976 4.14998 1.25292 4.14998 1.74998V2.04998H10.85V1.74998C10.85 1.25292 11.2529 0.849976 11.75 0.849976H13.25C13.747 0.849976 14.15 1.25292 14.15 1.74998V3.24998C14.15 3.74703 13.747 4.14998 13.25 4.14998H12.95V10.85H13.25C13.747 10.85 14.15 11.2529 14.15 11.75V13.25C14.15 13.747 13.747 14.15 13.25 14.15H11.75C11.2529 14.15 10.85 13.747 10.85 13.25V12.95H4.14998V13.25C4.14998 13.747 3.74703 14.15 3.24998 14.15H1.74998C1.25292 14.15 0.849976 13.747 0.849976 13.25V11.75C0.849976 11.2529 1.25292 10.85 1.74998 10.85H2.04998V4.14998H1.74998C1.25292 4.14998 0.849976 3.74703 0.849976 3.24998V1.74998ZM2.94998 4.14998V10.85H3.24998C3.74703 10.85 4.14998 11.2529 4.14998 11.75V12.05H10.85V11.75C10.85 11.2529 11.2529 10.85 11.75 10.85H12.05V4.14998H11.75C11.2529 4.14998 10.85 3.74703 10.85 3.24998V2.94998H4.14998V3.24998C4.14998 3.74703 3.74703 4.14998 3.24998 4.14998H2.94998ZM2.34998 1.74998H1.74998V2.34998V2.64998V3.24998H2.34998H2.64998H3.24998V2.64998V2.34998V1.74998H2.64998H2.34998ZM5.09998 5.99998C5.09998 5.50292 5.50292 5.09998 5.99998 5.09998H6.99998C7.49703 5.09998 7.89998 5.50292 7.89998 5.99998V6.99998C7.89998 7.03591 7.89787 7.07134 7.89378 7.10618C7.92861 7.10208 7.96405 7.09998 7.99998 7.09998H8.99998C9.49703 7.09998 9.89998 7.50292 9.89998 7.99998V8.99998C9.89998 9.49703 9.49703 9.89998 8.99998 9.89998H7.99998C7.50292 9.89998 7.09998 9.49703 7.09998 8.99998V7.99998C7.09998 7.96405 7.10208 7.92861 7.10618 7.89378C7.07134 7.89787 7.03591 7.89998 6.99998 7.89998H5.99998C5.50292 7.89998 5.09998 7.49703 5.09998 6.99998V5.99998ZM6.09998 5.99998H5.99998V6.09998V6.89998V6.99998H6.09998H6.89998H6.99998V6.89998V6.09998V5.99998H6.89998H6.09998ZM7.99998 7.99998H8.09998H8.89998H8.99998V8.09998V8.89998V8.99998H8.89998H8.09998H7.99998V8.89998V8.09998V7.99998ZM2.64998 11.75H2.34998H1.74998V12.35V12.65V13.25H2.34998H2.64998H3.24998V12.65V12.35V11.75H2.64998ZM11.75 1.74998H12.35H12.65H13.25V2.34998V2.64998V3.24998H12.65H12.35H11.75V2.64998V2.34998V1.74998ZM12.65 11.75H12.35H11.75V12.35V12.65V13.25H12.35H12.65H13.25V12.65V12.35V11.75H12.65Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg></span>
            <div>
                <h3 class="font-semibold text-xl">Service 1</h3>
                <p class="mt-1 text-textSecondary"> You don't need to be an expert to customize this plugin. Our code is very
                    readable and well documented.</p>
            </div>
        </div>


        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 p-3 rounded-full">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <path d="M3.00014 2.73895C3.00014 2.94698 2.76087 3.06401 2.59666 2.93628L1.00386 1.69744C0.875177 1.59735 0.875177 1.40286 1.00386 1.30277L2.59666 0.063928C2.76087 -0.0637944 3.00014 0.0532293 3.00014 0.261266V1.00012H9.00009V0.261296C9.00009 0.0532591 9.23936 -0.0637646 9.40358 0.0639578L10.9964 1.3028C11.1251 1.40289 11.1251 1.59738 10.9964 1.69747L9.40358 2.93631C9.23936 3.06404 9.00009 2.94701 9.00009 2.73898V2.00012H3.00014V2.73895ZM9.50002 4.99998H2.50002C2.22388 4.99998 2.00002 5.22384 2.00002 5.49998V12.5C2.00002 12.7761 2.22388 13 2.50002 13H9.50002C9.77616 13 10 12.7761 10 12.5V5.49998C10 5.22384 9.77616 4.99998 9.50002 4.99998ZM2.50002 3.99998C1.67159 3.99998 1.00002 4.67156 1.00002 5.49998V12.5C1.00002 13.3284 1.67159 14 2.50002 14H9.50002C10.3284 14 11 13.3284 11 12.5V5.49998C11 4.67156 10.3284 3.99998 9.50002 3.99998H2.50002ZM14.7389 6.00001H14V12H14.7389C14.9469 12 15.064 12.2393 14.9362 12.4035L13.6974 13.9963C13.5973 14.125 13.4028 14.125 13.3027 13.9963L12.0639 12.4035C11.9362 12.2393 12.0532 12 12.2612 12H13V6.00001H12.2612C12.0532 6.00001 11.9361 5.76074 12.0639 5.59653L13.3027 4.00373C13.4028 3.87505 13.5973 3.87505 13.6974 4.00374L14.9362 5.59653C15.0639 5.76074 14.9469 6.00001 14.7389 6.00001Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg></span>
            <div>
                <h3 class="font-semibold text-xl">Service 2</h3>
                <p class="mt-1 text-textSecondary"> With mobile, tablet &amp; desktop support it doesn't matter what device
                    you're using. This plugin is responsive in all browsers. </p>
            </div>
        </div>


        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 p-3 rounded-full">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <path d="M1 2C0.447715 2 0 2.44772 0 3V12C0 12.5523 0.447715 13 1 13H14C14.5523 13 15 12.5523 15 12V3C15 2.44772 14.5523 2 14 2H1ZM1 3L14 3V3.92494C13.9174 3.92486 13.8338 3.94751 13.7589 3.99505L7.5 7.96703L1.24112 3.99505C1.16621 3.94751 1.0826 3.92486 1 3.92494V3ZM1 4.90797V12H14V4.90797L7.74112 8.87995C7.59394 8.97335 7.40606 8.97335 7.25888 8.87995L1 4.90797Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg></span>
            <div>
                <h3 class="font-semibold text-xl">Service 3</h3>
                <p class="mt-1 text-textSecondary"> Our plugins are supported by sponsors who provide community support.
                    Sponsors will get email support on weekdays.</p>
            </div>
        </div>


        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 p-3 rounded-full">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <path d="M4.5 2C3.11929 2 2 3.11929 2 4.5C2 5.88072 3.11929 7 4.5 7C5.88072 7 7 5.88072 7 4.5C7 3.11929 5.88072 2 4.5 2ZM3 4.5C3 3.67157 3.67157 3 4.5 3C5.32843 3 6 3.67157 6 4.5C6 5.32843 5.32843 6 4.5 6C3.67157 6 3 5.32843 3 4.5ZM10.5 2C9.11929 2 8 3.11929 8 4.5C8 5.88072 9.11929 7 10.5 7C11.8807 7 13 5.88072 13 4.5C13 3.11929 11.8807 2 10.5 2ZM9 4.5C9 3.67157 9.67157 3 10.5 3C11.3284 3 12 3.67157 12 4.5C12 5.32843 11.3284 6 10.5 6C9.67157 6 9 5.32843 9 4.5ZM2 10.5C2 9.11929 3.11929 8 4.5 8C5.88072 8 7 9.11929 7 10.5C7 11.8807 5.88072 13 4.5 13C3.11929 13 2 11.8807 2 10.5ZM4.5 9C3.67157 9 3 9.67157 3 10.5C3 11.3284 3.67157 12 4.5 12C5.32843 12 6 11.3284 6 10.5C6 9.67157 5.32843 9 4.5 9ZM10.5 8C9.11929 8 8 9.11929 8 10.5C8 11.8807 9.11929 13 10.5 13C11.8807 13 13 11.8807 13 10.5C13 9.11929 11.8807 8 10.5 8ZM9 10.5C9 9.67157 9.67157 9 10.5 9C11.3284 9 12 9.67157 12 10.5C12 11.3284 11.3284 12 10.5 12C9.67157 12 9 11.3284 9 10.5Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg></span>
            <div>
                <h3 class="font-semibold text-xl">Service 4</h3>
                <p class="mt-1 text-textSecondary"> We make sure our plugins are working perfectly with all modern browsers
                    available such as Chrome, Firefox, Safari. </p>
            </div>
        </div>


        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 p-3 rounded-full">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <path d="M9.96424 2.68571C10.0668 2.42931 9.94209 2.13833 9.6857 2.03577C9.4293 1.93322 9.13832 2.05792 9.03576 2.31432L5.03576 12.3143C4.9332 12.5707 5.05791 12.8617 5.3143 12.9642C5.5707 13.0668 5.86168 12.9421 5.96424 12.6857L9.96424 2.68571ZM3.85355 5.14646C4.04882 5.34172 4.04882 5.6583 3.85355 5.85356L2.20711 7.50001L3.85355 9.14646C4.04882 9.34172 4.04882 9.6583 3.85355 9.85356C3.65829 10.0488 3.34171 10.0488 3.14645 9.85356L1.14645 7.85356C0.951184 7.6583 0.951184 7.34172 1.14645 7.14646L3.14645 5.14646C3.34171 4.9512 3.65829 4.9512 3.85355 5.14646ZM11.1464 5.14646C11.3417 4.9512 11.6583 4.9512 11.8536 5.14646L13.8536 7.14646C14.0488 7.34172 14.0488 7.6583 13.8536 7.85356L11.8536 9.85356C11.6583 10.0488 11.3417 10.0488 11.1464 9.85356C10.9512 9.6583 10.9512 9.34172 11.1464 9.14646L12.7929 7.50001L11.1464 5.85356C10.9512 5.6583 10.9512 5.34172 11.1464 5.14646Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg></span>
            <div>
                <h3 class="font-semibold text-xl">Service 5</h3>
                <p class="mt-1 text-textSecondary"> We strictly follow a set of guidelines along with unit tests to make sure
                    your implementation as easy as possible. </p>
            </div>
        </div>


        <div class="flex gap-4 items-start">
            <span class="text-primary bg-primary/10 p-3 rounded-full">
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5">
                    <path d="M7.28856 0.796908C7.42258 0.734364 7.57742 0.734364 7.71144 0.796908L13.7114 3.59691C13.8875 3.67906 14 3.85574 14 4.05V10.95C14 11.1443 13.8875 11.3209 13.7114 11.4031L7.71144 14.2031C7.57742 14.2656 7.42258 14.2656 7.28856 14.2031L1.28856 11.4031C1.11252 11.3209 1 11.1443 1 10.95V4.05C1 3.85574 1.11252 3.67906 1.28856 3.59691L7.28856 0.796908ZM2 4.80578L7 6.93078V12.9649L2 10.6316V4.80578ZM8 12.9649L13 10.6316V4.80578L8 6.93078V12.9649ZM7.5 6.05672L12.2719 4.02866L7.5 1.80176L2.72809 4.02866L7.5 6.05672Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg></span>
            <div>
                <h3 class="font-semibold text-xl">Service 6</h3>
                <p class="mt-1 text-textSecondary"> This templatte is actively maintained by the core plugin team. We are
                    working on fixing each of the issues reported.</p>
            </div>
        </div>
    </div>
    <div class="w-full flex justify-center">
        <a href="/services" class="inline-block rounded-full border-2 border-primary mt-12 px-6 pb-[4px] pt-1 text-xs font-semibold leading-normal text-primary transition duration-150 ease-in-out hover:bg-primary hover:text-white focus:border-primary focus:bg-primary focus:text-white focus:outline-none focus:ring-0 active:border-primary active:text-white motion-reduce:transition-none">Explore All <i class="fa fa-arrow-right"></i></a>
    </div>
</div>

<section class="bg-bgSecondary/30 mt-12">
    <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
        <h2 class="mb-8 lg:mb-16 text-3xl font-bold tracking-tight leading-tight text-center text-textPrimary md:text-4xl">We've Worked With</h2>
        <div class="grid grid-cols-2 gap-8 text-textSecondary sm:gap-12 md:grid-cols-4">
            <a href="#" class="flex justify-center items-center">
                <svg class="h-9 hover:text-gray-900" viewBox="0 0 125 35" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M64.828 7.11521C64.828 8.52061 63.6775 9.65275 62.2492 9.65275C60.8209 9.65275 59.6704 8.52061 59.6704 7.11521C59.6704 5.70981 60.7813 4.57766 62.2492 4.57766C63.7171 4.6167 64.828 5.74883 64.828 7.11521ZM54.1953 12.2293C54.1953 12.4636 54.1953 12.854 54.1953 12.854C54.1953 12.854 52.9655 11.2923 50.3469 11.2923C46.0225 11.2923 42.6502 14.5327 42.6502 19.0221C42.6502 23.4726 45.9829 26.7518 50.3469 26.7518C53.0051 26.7518 54.1953 25.1513 54.1953 25.1513V25.815C54.1953 26.1272 54.4334 26.3615 54.7508 26.3615H57.9644V11.6828C57.9644 11.6828 55.0285 11.6828 54.7508 11.6828C54.4334 11.6828 54.1953 11.956 54.1953 12.2293ZM54.1953 21.6378C53.6002 22.4966 52.41 23.2383 50.9818 23.2383C48.4426 23.2383 46.4985 21.6768 46.4985 19.0221C46.4985 16.3675 48.4426 14.806 50.9818 14.806C52.3703 14.806 53.6399 15.5867 54.1953 16.4065V21.6378ZM60.3448 11.6828H64.1535V26.3615H60.3448V11.6828ZM117.237 11.2923C114.619 11.2923 113.389 12.854 113.389 12.854V4.6167H109.58V26.3615C109.58 26.3615 112.516 26.3615 112.794 26.3615C113.111 26.3615 113.349 26.0882 113.349 25.815V25.1513C113.349 25.1513 114.579 26.7518 117.198 26.7518C121.522 26.7518 124.895 23.4726 124.895 19.0221C124.895 14.5717 121.522 11.2923 117.237 11.2923ZM116.603 23.1993C115.135 23.1993 113.984 22.4575 113.389 21.5986V16.3675C113.984 15.5867 115.254 14.7668 116.603 14.7668C119.142 14.7668 121.086 16.3284 121.086 18.9831C121.086 21.6378 119.142 23.1993 116.603 23.1993ZM107.597 17.6557V26.4005H103.788V18.0852C103.788 15.6648 102.994 14.6888 100.852 14.6888C99.7015 14.6888 98.5113 15.2744 97.7574 16.1332V26.3615H93.9488V11.6828H96.964C97.2814 11.6828 97.5195 11.956 97.5195 12.2293V12.854C98.6302 11.7218 100.098 11.2923 101.566 11.2923C103.233 11.2923 104.621 11.7609 105.732 12.6977C107.081 13.7908 107.597 15.1962 107.597 17.6557ZM84.7048 11.2923C82.0862 11.2923 80.8564 12.854 80.8564 12.854V4.6167H77.0476V26.3615C77.0476 26.3615 79.9834 26.3615 80.2611 26.3615C80.5787 26.3615 80.8166 26.0882 80.8166 25.815V25.1513C80.8166 25.1513 82.0465 26.7518 84.665 26.7518C88.9895 26.7518 92.3617 23.4726 92.3617 19.0221C92.4015 14.5717 89.0292 11.2923 84.7048 11.2923ZM84.0699 23.1993C82.602 23.1993 81.4515 22.4575 80.8564 21.5986V16.3675C81.4515 15.5867 82.721 14.7668 84.0699 14.7668C86.6091 14.7668 88.5531 16.3284 88.5531 18.9831C88.5531 21.6378 86.6091 23.1993 84.0699 23.1993ZM73.7547 11.2923C74.9052 11.2923 75.5003 11.4876 75.5003 11.4876V14.9621C75.5003 14.9621 72.3264 13.908 70.3427 16.1332V26.4005H66.534V11.6828C66.534 11.6828 69.4699 11.6828 69.7476 11.6828C70.065 11.6828 70.3029 11.956 70.3029 12.2293V12.854C71.0171 12.0342 72.5644 11.2923 73.7547 11.2923ZM32.4423 24.4806C32.2699 24.0722 32.0976 23.6297 31.9252 23.2554C31.6493 22.6427 31.3736 22.0641 31.1322 21.5197L31.0978 21.4855C28.719 16.3804 26.1678 11.2073 23.4787 6.10219L23.3752 5.89799C23.0995 5.38748 22.8237 4.84294 22.5479 4.29839C22.2031 3.68577 21.8584 3.03913 21.3068 2.42652C20.2036 1.06516 18.6177 0.316406 16.9284 0.316406C15.2046 0.316406 13.6533 1.06516 12.5156 2.35845C11.9985 2.97107 11.6192 3.61771 11.2745 4.23032C10.9987 4.77486 10.7229 5.31941 10.4471 5.82992L10.3436 6.03413C7.68904 11.1392 5.10339 16.3124 2.7246 21.4175L2.69012 21.4855C2.44879 22.0301 2.17299 22.6087 1.89719 23.2214C1.72481 23.5957 1.55244 24.0041 1.38006 24.4466C0.93188 25.7058 0.793978 26.897 0.966355 28.1222C1.34558 30.6748 3.06935 32.8189 5.44815 33.7719C6.3445 34.1463 7.27534 34.3164 8.24065 34.3164C8.51645 34.3164 8.8612 34.2824 9.137 34.2483C10.2747 34.1122 11.4468 33.7378 12.5845 33.0912C13.9981 32.3083 15.3425 31.1852 16.8595 29.5517C18.3764 31.1852 19.7554 32.3083 21.1344 33.0912C22.2721 33.7378 23.4443 34.1122 24.5819 34.2483C24.8577 34.2824 25.2025 34.3164 25.4782 34.3164C26.4436 34.3164 27.4089 34.1463 28.2708 33.7719C30.6841 32.8189 32.3733 30.6408 32.7526 28.1222C33.0283 26.931 32.8904 25.7398 32.4423 24.4806ZM16.9259 25.893C15.1377 23.6468 13.9786 21.5327 13.5812 19.7488C13.4156 18.9891 13.3825 18.3284 13.4818 17.7338C13.5481 17.2053 13.7467 16.7429 14.0118 16.3465C14.6409 15.4546 15.7007 14.893 16.9259 14.893C18.1512 14.893 19.2441 15.4216 19.8402 16.3465C20.1051 16.7429 20.3037 17.2053 20.37 17.7338C20.4694 18.3284 20.4363 19.0221 20.2707 19.7488C19.8733 21.4995 18.7142 23.6136 16.9259 25.893ZM30.3665 27.6033C30.1305 29.3326 28.9509 30.8293 27.2993 31.4945C26.4903 31.8269 25.6139 31.9267 24.7376 31.8269C23.895 31.7273 23.0523 31.4611 22.176 30.9623C20.9624 30.2971 19.749 29.2662 18.3334 27.7363C20.558 25.0424 21.9062 22.5813 22.4118 20.3864C22.6477 19.3554 22.6815 18.4242 22.5804 17.5595C22.4456 16.7281 22.1422 15.9632 21.6703 15.298C20.6255 13.8014 18.8727 12.9367 16.9178 12.9367C14.9628 12.9367 13.21 13.8347 12.1652 15.298C11.6933 15.9632 11.39 16.7281 11.2551 17.5595C11.1203 18.4242 11.154 19.3887 11.4237 20.3864C11.9293 22.5813 13.3112 25.0757 15.5021 27.7695C14.1202 29.2994 12.873 30.3304 11.6596 30.9955C10.7832 31.4945 9.94059 31.7605 9.09795 31.8603C8.18787 31.9599 7.31152 31.8269 6.53628 31.5277C4.88468 30.8625 3.70497 29.366 3.46902 27.6365C3.36791 26.8051 3.43531 25.9737 3.77238 25.0424C3.8735 24.7098 4.04202 24.3774 4.21055 23.9782C4.4465 23.4461 4.71615 22.8807 4.9858 22.3153L5.0195 22.2489C7.34523 17.2935 9.83948 12.2383 12.4349 7.31623L12.536 7.11668C12.8056 6.61782 13.0753 6.0857 13.3449 5.58684C13.6146 5.05472 13.9179 4.55585 14.2886 4.12351C14.9965 3.32532 15.9403 2.89298 16.9852 2.89298C18.03 2.89298 18.9738 3.32532 19.6817 4.12351C20.0524 4.55585 20.3557 5.05472 20.6255 5.58684C20.8951 6.0857 21.1647 6.61782 21.4343 7.11668L21.5355 7.31623C24.0971 12.2716 26.5914 17.3267 28.9171 22.2821V22.3153C29.1867 22.8475 29.4227 23.4461 29.6924 23.9782C29.8609 24.3774 30.0294 24.7098 30.1305 25.0424C30.4003 25.9071 30.5013 26.7385 30.3665 27.6033Z" fill="currentColor"/>
                </svg>                        
            </a>
            <a href="#" class="flex justify-center items-center">
                <svg class="h-9 hover:text-gray-900" viewBox="0 0 86 29" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6008 10.2627V13.2312L18.6907 13.2281C18.4733 14.8653 17.9215 16.0641 17.0826 16.9031C16.0487 17.9378 14.4351 19.0766 11.6008 19.0766C7.23238 19.0766 3.81427 15.5531 3.81427 11.1808C3.81427 6.80853 7.23238 3.28487 11.6008 3.28487C13.9585 3.28487 15.6794 4.21232 16.9503 5.40473L19.0432 3.31011C17.2721 1.6161 14.9144 0.316406 11.6036 0.316406C5.62156 0.316406 0.589844 5.19338 0.589844 11.1808C0.589844 17.1682 5.62156 22.0451 11.6036 22.0451C14.8322 22.0451 17.2694 20.9852 19.1756 18.9979C21.1362 17.0356 21.7451 14.2818 21.7451 12.0546C21.7451 11.3921 21.6949 10.7802 21.5974 10.2627H11.6008ZM71.4046 21.6192V1.11445H68.4101V21.6192H71.4046ZM29.9511 22.0482C33.8151 22.0482 36.9643 19.0797 36.9643 15.0513C36.9643 10.9945 33.8151 8.05451 29.9511 8.05451C26.0857 8.05451 22.9365 10.9945 22.9365 15.0513C22.9365 19.0797 26.0857 22.0482 29.9511 22.0482ZM29.9511 10.8116C32.0691 10.8116 33.8945 12.534 33.8945 15.0513C33.8945 17.5404 32.0691 19.2911 29.9511 19.2911C27.833 19.2911 26.0076 17.5435 26.0076 15.0513C26.0076 12.534 27.833 10.8116 29.9511 10.8116ZM45.0825 22.0482C48.9465 22.0482 52.0957 19.0797 52.0957 15.0513C52.0957 10.9945 48.9465 8.05451 45.0825 8.05451C41.2171 8.05451 38.0679 10.9977 38.0679 15.0513C38.0679 19.0797 41.2171 22.0482 45.0825 22.0482ZM45.0825 10.8116C47.2005 10.8116 49.0259 12.534 49.0259 15.0513C49.0259 17.5404 47.2005 19.2911 45.0825 19.2911C42.9644 19.2911 41.139 17.5435 41.139 15.0513C41.139 12.534 42.9644 10.8116 45.0825 10.8116ZM66.5972 8.48038V21.0387C66.5972 26.2059 63.5512 28.3164 59.9519 28.3164C56.563 28.3164 54.523 26.0482 53.7539 24.1934L56.4265 23.0798C56.903 24.2186 58.0694 25.5624 59.9477 25.5624C62.2525 25.5624 63.6807 24.1397 63.6807 21.4615V20.4552H63.5734C62.8865 21.3037 61.5627 22.0451 59.892 22.0451C56.3958 22.0451 53.1923 18.9977 53.1923 15.0766C53.1923 11.1271 56.3958 8.05451 59.892 8.05451C61.5585 8.05451 62.8837 8.79579 63.5734 9.6192H63.6807V8.48038H66.5972ZM63.8981 15.0766C63.8981 12.6129 62.2553 10.8116 60.1651 10.8116C58.0471 10.8116 56.2732 12.6129 56.2732 15.0766C56.2732 17.5152 58.0471 19.2911 60.1651 19.2911C62.2553 19.2911 63.8981 17.5152 63.8981 15.0766ZM83.0747 17.3542L85.4575 18.9442C84.6883 20.083 82.835 22.0451 79.6315 22.0451C75.6602 22.0451 72.6935 18.9726 72.6935 15.0483C72.6935 10.8874 75.6853 8.05143 79.2887 8.05143C82.9172 8.05143 84.6911 10.941 85.2721 12.5026L85.5898 13.2976L76.2426 17.1713C76.9589 18.5751 78.0708 19.2912 79.6315 19.2912C81.1949 19.2912 82.2804 18.5215 83.0747 17.3542ZM75.7382 14.8369L81.9864 12.2407C81.6436 11.3668 80.6097 10.758 79.3918 10.758C77.8326 10.758 75.6602 12.1366 75.7382 14.8369Z" fill="currentColor"/>
                </svg>                                               
            </a>
            <a href="#" class="flex justify-center items-center">
                <svg class="h-8 hover:text-gray-900" viewBox="0 0 151 34" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_3753_27919)"><path d="M150.059 16.1144V13.4753H146.783V9.37378L146.673 9.40894L143.596 10.3464H143.538V13.4519H138.682V11.7175C138.682 10.9207 138.869 10.2996 139.221 9.8894C139.572 9.47925 140.088 9.27417 140.721 9.27417C141.189 9.27417 141.682 9.39136 142.15 9.60229L142.268 9.64917V6.88237L142.221 6.85894C141.775 6.70073 141.166 6.6187 140.416 6.6187C139.467 6.6187 138.6 6.82964 137.838 7.24448C137.076 7.64292 136.479 8.24058 136.068 8.99058C135.646 9.74058 135.436 10.6078 135.436 11.557V13.4554H133.162V16.0921H135.447V27.2015H138.717V16.0921H143.577V23.1468C143.577 26.0531 144.943 27.5296 147.655 27.5296C148.1 27.5296 148.569 27.4734 149.038 27.3773C149.524 27.2718 149.858 27.1664 150.045 27.0609L150.092 27.0374V24.3773L149.96 24.4664C149.784 24.5835 149.561 24.6855 149.304 24.7558C149.046 24.8261 148.823 24.873 148.657 24.873C148.024 24.873 147.555 24.7089 147.267 24.3726C146.969 24.0386 146.821 23.4468 146.821 22.6148V16.1226H150.079L150.072 16.1062L150.059 16.1144ZM125.813 24.88C124.626 24.88 123.689 24.4851 123.024 23.7082C122.364 22.9289 122.028 21.8167 122.028 20.4035C122.028 18.9457 122.364 17.8019 123.028 17.0097C123.689 16.2222 124.617 15.8214 125.789 15.8214C126.925 15.8214 127.816 16.2035 128.472 16.9582C129.129 17.7175 129.457 18.8496 129.457 20.3238C129.457 21.8167 129.152 22.964 128.543 23.7304C127.933 24.4921 127.019 24.8789 125.824 24.8789L125.813 24.88ZM125.964 13.1449C123.703 13.1449 121.9 13.8082 120.616 15.1183C119.339 16.4308 118.685 18.2425 118.685 20.5089C118.685 22.6652 119.318 24.3937 120.575 25.6535C121.829 26.9191 123.536 27.5753 125.646 27.5753C127.839 27.5753 129.607 26.8957 130.886 25.5773C132.175 24.2507 132.815 22.4531 132.815 20.2417C132.815 18.055 132.206 16.3089 130.999 15.0621C129.792 13.8035 128.1 13.1683 125.96 13.1683L125.964 13.1449ZM113.397 13.1683C111.85 13.1683 110.58 13.5621 109.6 14.3402C108.625 15.123 108.124 16.1449 108.124 17.3871C108.124 18.0363 108.234 18.6058 108.447 19.098C108.658 19.5832 108.986 20.0121 109.425 20.373C109.858 20.7246 110.526 21.0996 111.417 21.4839C112.167 21.7886 112.718 22.0464 113.074 22.2574C113.425 22.4531 113.674 22.6558 113.8 22.8515C113.941 23.039 114.011 23.3085 114.011 23.625C114.011 24.5554 113.322 25.0031 111.902 25.0031C111.372 25.0031 110.77 24.8929 110.111 24.675C109.447 24.4593 108.83 24.1476 108.275 23.7468L108.134 23.6531V26.7937L108.181 26.8171C108.65 27.0281 109.228 27.2156 109.916 27.3562C110.601 27.5085 111.228 27.5789 111.767 27.5789C113.443 27.5789 114.791 27.1804 115.775 26.4023C116.759 25.6148 117.263 24.5625 117.263 23.2804C117.263 22.3546 116.994 21.5578 116.461 20.9191C115.933 20.2792 115.019 19.6957 113.738 19.18C112.727 18.7699 112.074 18.43 111.793 18.1722C111.535 17.9191 111.414 17.5628 111.414 17.1128C111.414 16.7144 111.579 16.3933 111.912 16.1355C112.248 15.8718 112.716 15.7406 113.302 15.7406C113.847 15.7406 114.404 15.8226 114.966 15.9925C115.517 16.166 116.004 16.391 116.408 16.6675L116.545 16.7613V13.7613L116.498 13.7378C116.117 13.5738 115.623 13.4367 115.021 13.3277C114.424 13.214 113.881 13.1636 113.41 13.1636L113.397 13.1683ZM99.582 24.8941C98.3984 24.8941 97.4609 24.5027 96.8047 23.7222C96.1367 22.9488 95.8027 21.8355 95.8027 20.4175C95.8027 18.9644 96.1379 17.816 96.8035 17.0273C97.4598 16.2398 98.3902 15.839 99.5574 15.839C100.694 15.839 101.596 16.221 102.247 16.9757C102.894 17.7375 103.231 18.8695 103.231 20.3437C103.231 21.8343 102.915 22.9804 102.305 23.748C101.708 24.5097 100.794 24.8964 99.5867 24.8964L99.582 24.8941ZM99.7508 13.166C97.4773 13.166 95.6727 13.8269 94.3953 15.1371C93.1098 16.4496 92.4617 18.2601 92.4617 20.5277C92.4617 22.6839 93.0945 24.4113 94.3402 25.6722C95.5965 26.9378 97.3004 27.5941 99.4086 27.5941C101.612 27.5941 103.37 26.9144 104.659 25.5902C105.941 24.2613 106.592 22.4636 106.592 20.2523C106.592 18.0644 105.983 16.3183 104.787 15.0726C103.58 13.8128 101.886 13.1777 99.7484 13.1777L99.7508 13.166ZM87.5164 15.8824V13.4917H84.282V27.2378H87.5164V20.2066C87.5164 19.0113 87.7859 18.0269 88.3215 17.2828C88.8488 16.5421 89.552 16.1812 90.4074 16.1812C90.7004 16.1812 91.0285 16.2281 91.3895 16.3218C91.741 16.4156 91.9941 16.5093 92.1395 16.6265L92.2801 16.7203V13.4625L92.2285 13.439C91.9238 13.3031 91.502 13.2375 90.9629 13.2375C90.1543 13.2375 89.4277 13.5 88.8043 14.0109C88.2535 14.4656 87.8586 15.0843 87.5562 15.8578H87.4977L87.527 15.8812L87.5164 15.8824ZM78.4695 13.1636C76.9812 13.1636 75.657 13.4742 74.532 14.1011C73.3977 14.7339 72.5281 15.6246 71.9305 16.773C71.3445 17.9097 71.0398 19.2398 71.0398 20.7222C71.0398 22.023 71.3352 23.2113 71.907 24.2636C72.4859 25.3183 73.3016 26.1386 74.3328 26.7128C75.357 27.2789 76.5477 27.5683 77.8648 27.5683C79.4023 27.5683 80.7125 27.2636 81.7672 26.6542L81.8141 26.6308V23.6636L81.6734 23.7609C81.1965 24.1124 80.6656 24.3878 80.0914 24.5871C79.5195 24.7863 78.9992 24.8871 78.5445 24.8871C77.2719 24.8871 76.2547 24.4886 75.5141 23.7093C74.7641 22.9124 74.3891 21.8109 74.3891 20.4281C74.3891 19.0218 74.7875 17.8968 75.5562 17.0765C76.3297 16.2328 77.3469 15.8109 78.5914 15.8109C79.6461 15.8109 80.6855 16.1742 81.6652 16.8773L81.8059 16.971V13.8539L81.7672 13.8304C81.398 13.6195 80.8965 13.4554 80.2672 13.3218C79.6508 13.1929 79.0437 13.1296 78.4648 13.1296L78.4695 13.1636ZM68.8203 13.4578H65.5906V27.2156H68.825V13.4578H68.8203ZM67.2266 7.61011C66.6945 7.61011 66.2305 7.79058 65.8484 8.14917C65.4664 8.51011 65.2719 8.96245 65.2719 9.49683C65.2719 10.0242 65.4676 10.4695 65.8461 10.821C66.2211 11.1726 66.6898 11.346 67.2289 11.346C67.768 11.346 68.2367 11.1703 68.6176 10.8187C69.002 10.4671 69.1965 10.0218 69.1965 9.49448C69.1965 8.97886 69.009 8.53355 68.634 8.15855C68.259 7.80698 67.7902 7.61948 67.2277 7.61948L67.2266 7.61011ZM59.1535 12.4593V27.2249H62.4582V8.05425H57.8879L52.0953 22.3019L46.4586 8.0519H41.7078V27.2378H44.8133V12.4781H44.9188L50.8719 27.2414H53.2098L59.0691 12.4792H59.1805L59.1629 12.4722L59.1535 12.4593ZM16.884 18.4242H32.0949V33.648H16.8605L16.8816 18.4347L16.884 18.4242ZM0.0828125 18.4335H15.2914V33.648H0.078125L0.0828125 18.4347V18.4335ZM16.8852 1.63237H32.0961V16.8433H16.8758L16.8852 1.62769V1.63237ZM0.0828125 1.63003H15.2914V16.8433H0.078125L0.0828125 1.62769V1.63003Z" fill="currentColor"/></g><defs><clipPath id="clip0_3753_27919"><rect width="150" height="32.8125" fill="white" transform="translate(0.0820312 0.835449)"/></clipPath></defs>
                </svg>                                                                 
            </a>

            <a href="#" class="flex justify-center items-center">
                <svg class="h-9 hover:text-gray-900" viewBox="0 0 124 38" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M50.8299 17.3952C54.7246 18.342 56.3124 19.8121 56.3124 22.4701C56.3124 25.615 53.9096 27.6473 50.1907 27.6473C47.5621 27.6473 45.1252 26.7135 43.1446 24.9452C43.104 24.9089 43.0791 24.8582 43.0754 24.8038C43.0716 24.7494 43.0893 24.6957 43.1246 24.6542L44.8747 22.5724C44.8926 22.5512 44.9145 22.5336 44.9392 22.5209C44.9639 22.5082 44.9909 22.5005 45.0185 22.4983C45.0462 22.4961 45.0741 22.4995 45.1005 22.5082C45.1269 22.5169 45.1513 22.5307 45.1723 22.5489C46.8747 24.0226 48.3966 24.6506 50.2619 24.6506C51.9419 24.6506 52.9857 23.9232 52.9857 22.7541C52.9857 21.6986 52.4694 21.1088 49.4104 20.4043C45.8174 19.5351 43.7374 18.4108 43.7374 15.2323C43.7374 12.2686 46.1484 10.1986 49.5991 10.1986C51.9455 10.1986 53.9548 10.8937 55.7384 12.3244C55.8243 12.3938 55.8419 12.5185 55.7778 12.609L54.2165 14.8084C54.2002 14.831 54.1796 14.8501 54.1558 14.8647C54.1321 14.8793 54.1057 14.8891 54.0781 14.8935C54.0506 14.8978 54.0224 14.8967 53.9953 14.8902C53.9682 14.8837 53.9427 14.8718 53.9202 14.8554C52.4218 13.7381 50.9928 13.1959 49.5509 13.1959C48.0643 13.1959 47.0646 13.9104 47.0646 14.9718C47.0646 16.095 47.635 16.6302 50.8305 17.3934L50.8299 17.3952ZM64.7256 14.2432C63.1144 14.2432 61.7924 14.8783 60.7016 16.1779V14.7137C60.7016 14.6582 60.6795 14.6049 60.6403 14.5657C60.601 14.5264 60.5478 14.5043 60.4922 14.5043H57.6308C57.5752 14.5043 57.522 14.5264 57.4827 14.5657C57.4435 14.6049 57.4214 14.6582 57.4214 14.7137V30.9851C57.4214 31.0998 57.5155 31.1939 57.6308 31.1939H60.4928C60.6087 31.1939 60.7028 31.0998 60.7028 30.9846V25.8479C61.793 27.0711 63.1156 27.6697 64.7274 27.6697C67.7235 27.6697 70.755 25.3645 70.755 20.9565C70.755 16.5484 67.7218 14.2432 64.7256 14.2432ZM67.4248 20.9571C67.4248 23.2011 66.0429 24.7676 64.0635 24.7676C62.1053 24.7676 60.6293 23.1299 60.6293 20.9571C60.6293 18.7842 62.1053 17.1465 64.0635 17.1465C66.0111 17.1465 67.4254 18.7489 67.4254 20.9571H67.4248ZM78.5255 14.2432C74.6679 14.2432 71.6465 17.2129 71.6465 21.0059C71.6465 24.7565 74.6467 27.695 78.4773 27.695C82.3485 27.695 85.3793 24.7347 85.3793 20.9571C85.3793 17.1923 82.3684 14.2427 78.5249 14.2427L78.5255 14.2432ZM78.5249 24.7906C76.4726 24.7906 74.926 23.1423 74.926 20.9565C74.926 18.7618 76.4197 17.1694 78.4779 17.1694C80.542 17.1694 82.1003 18.8177 82.1003 21.0047C82.1003 23.1981 80.5961 24.79 78.5249 24.79V24.7906ZM93.6168 14.5043C93.7326 14.5043 93.8261 14.5984 93.8261 14.7137V17.1735C93.8262 17.201 93.8208 17.2282 93.8104 17.2536C93.7999 17.279 93.7846 17.3021 93.7652 17.3215C93.7458 17.341 93.7227 17.3564 93.6974 17.3669C93.672 17.3774 93.6448 17.3829 93.6173 17.3829H90.4683V23.2993C90.4683 24.2343 90.8788 24.6506 91.7973 24.6506C92.3818 24.6538 92.9582 24.5145 93.4768 24.2449C93.5089 24.229 93.5444 24.2215 93.5802 24.2232C93.6159 24.2249 93.6507 24.2356 93.6811 24.2545C93.7115 24.2733 93.7366 24.2996 93.7541 24.3308C93.7715 24.3621 93.7807 24.3973 93.7808 24.433V26.7747C93.7808 26.8494 93.7397 26.9199 93.675 26.957C92.8723 27.4115 92.0208 27.6232 90.9934 27.6232C88.4689 27.6232 87.1887 26.3195 87.1887 23.7468V17.3834H85.8127C85.7853 17.3834 85.7581 17.3779 85.7328 17.3673C85.7075 17.3568 85.6846 17.3413 85.6652 17.3219C85.6459 17.3024 85.6306 17.2794 85.6202 17.254C85.6098 17.2287 85.6044 17.2015 85.6045 17.1741V14.7137C85.6045 14.5984 85.6974 14.5043 85.8127 14.5043H87.1887V11.2841C87.1887 11.1689 87.2828 11.0748 87.3993 11.0748H90.2607C90.3766 11.0748 90.4701 11.1689 90.4701 11.2841V14.5043H93.6191H93.6168ZM109.48 14.5167C109.566 14.5167 109.644 14.5696 109.675 14.6519L113.018 23.3751L116.07 14.6566C116.085 14.6155 116.112 14.5798 116.147 14.5545C116.183 14.5293 116.225 14.5156 116.269 14.5155H119.248C119.282 14.5155 119.316 14.5238 119.346 14.5398C119.376 14.5558 119.402 14.5789 119.421 14.6072C119.441 14.6354 119.452 14.668 119.456 14.7019C119.46 14.7359 119.455 14.7702 119.442 14.8019L114.477 27.6332C113.448 30.2812 112.279 31.2656 110.166 31.2656C109.036 31.2656 108.122 31.0316 107.108 30.4835C107.062 30.4584 107.027 30.4163 107.01 30.366C106.993 30.3157 106.997 30.261 107.019 30.213L107.989 28.0843C108.001 28.058 108.018 28.0345 108.04 28.0151C108.061 27.9957 108.086 27.9808 108.113 27.9714C108.14 27.9626 108.169 27.9595 108.198 27.9622C108.227 27.9649 108.255 27.9734 108.28 27.9872C108.823 28.2842 109.354 28.4342 109.859 28.4342C110.482 28.4342 110.939 28.2295 111.404 27.1981L107.311 17.3834H104.638V27.201C104.638 27.3169 104.544 27.4109 104.429 27.4109H101.567C101.539 27.4109 101.512 27.4055 101.486 27.395C101.461 27.3844 101.438 27.3689 101.418 27.3494C101.399 27.3299 101.384 27.3068 101.373 27.2813C101.363 27.2558 101.357 27.2286 101.357 27.201V17.3834H99.9824C99.9269 17.383 99.8738 17.3607 99.8345 17.3215C99.7952 17.2822 99.773 17.229 99.7725 17.1735V14.7019C99.7725 14.5861 99.8666 14.492 99.9818 14.492H101.357V13.8863C101.357 11.0719 102.754 9.58291 105.398 9.58291C106.484 9.58291 107.209 9.75638 107.777 9.92398C107.866 9.95162 107.925 10.0334 107.925 10.1251V12.5361C107.926 12.5695 107.918 12.6024 107.903 12.6322C107.888 12.662 107.866 12.6878 107.839 12.7074C107.813 12.727 107.781 12.7398 107.748 12.7448C107.715 12.7498 107.682 12.7468 107.65 12.7361C107.113 12.5573 106.634 12.4385 106.038 12.4385C105.038 12.4385 104.591 12.9578 104.591 14.1215V14.5167H109.479H109.48ZM98.2289 14.5043C98.3441 14.5043 98.4382 14.5984 98.4382 14.7137V27.2004C98.4382 27.3157 98.3441 27.4098 98.2283 27.4098H95.3662C95.3106 27.4098 95.2573 27.3877 95.218 27.3485C95.1786 27.3092 95.1564 27.256 95.1563 27.2004V14.7137C95.1563 14.5984 95.2504 14.5043 95.3656 14.5043H98.2277H98.2289ZM96.8122 8.81903C97.3565 8.81903 97.8786 9.03525 98.2634 9.42013C98.6483 9.80502 98.8645 10.327 98.8645 10.8713C98.8645 11.4156 98.6483 11.9377 98.2634 12.3225C97.8786 12.7074 97.3565 12.9236 96.8122 12.9236C96.2679 12.9236 95.7459 12.7074 95.361 12.3225C94.9762 11.9377 94.7599 11.4156 94.7599 10.8713C94.7599 10.327 94.9762 9.80502 95.361 9.42013C95.7459 9.03525 96.2679 8.81903 96.8122 8.81903ZM121.886 18.5184C121.621 18.5194 121.359 18.468 121.114 18.3671C120.869 18.2663 120.646 18.118 120.459 17.9307C120.272 17.7435 120.124 17.5211 120.023 17.2763C119.922 17.0314 119.871 16.7691 119.872 16.5043C119.872 16.2385 119.924 15.9752 120.026 15.7296C120.127 15.484 120.277 15.2608 120.465 15.0729C120.653 14.8849 120.876 14.7358 121.122 14.6341C121.367 14.5324 121.63 14.4801 121.896 14.4802C122.161 14.4791 122.423 14.5303 122.668 14.631C122.913 14.7318 123.135 14.88 123.323 15.0671C123.51 15.2543 123.658 15.4766 123.759 15.7214C123.86 15.9661 123.911 16.2284 123.91 16.4931C123.91 16.7591 123.858 17.0225 123.756 17.2682C123.655 17.514 123.506 17.7373 123.318 17.9254C123.13 18.1135 122.906 18.2627 122.661 18.3646C122.415 18.4664 122.152 18.5189 121.886 18.519V18.5184ZM121.896 14.6808C120.865 14.6808 120.084 15.5011 120.084 16.5049C120.084 17.5087 120.859 18.3179 121.886 18.3179C122.917 18.3179 123.699 17.4981 123.699 16.4937C123.699 15.4899 122.922 14.6808 121.896 14.6808ZM122.343 16.7007L122.912 17.4981H122.432L121.92 16.7666H121.479V17.4981H121.077V15.3841H122.02C122.51 15.3841 122.834 15.6358 122.834 16.0586C122.834 16.4055 122.634 16.6172 122.343 16.6995L122.343 16.7007ZM122.002 15.7469H121.478V16.4149H122.002C122.264 16.4149 122.419 16.2867 122.419 16.0797C122.419 15.8622 122.264 15.7463 122.002 15.7463V15.7469ZM18.9768 0.305176C8.75288 0.305176 0.464844 8.70847 0.464844 18.933C0.464256 28.54 7.78083 36.2953 17.1462 37.4714H20.8074C30.1728 36.2953 37.4893 28.54 37.4893 18.9324C37.4893 8.70847 29.2007 0.305176 18.9774 0.305176H18.9768ZM27.4665 27.0064C27.3877 27.1359 27.284 27.2486 27.1616 27.3379C27.0391 27.4273 26.9002 27.4917 26.7528 27.5273C26.6054 27.5629 26.4525 27.5691 26.3027 27.5455C26.1529 27.5219 26.0093 27.469 25.88 27.3898C21.5325 24.733 16.0612 24.1331 9.61732 25.605C9.46966 25.639 9.31676 25.6435 9.16736 25.6183C9.01796 25.5931 8.87499 25.5387 8.74664 25.4582C8.61829 25.3777 8.50707 25.2726 8.41934 25.1491C8.33162 25.0256 8.26911 24.886 8.23539 24.7382C8.20146 24.5905 8.19701 24.4375 8.22229 24.2881C8.24756 24.1386 8.30207 23.9956 8.3827 23.8672C8.46332 23.7389 8.56848 23.6277 8.69214 23.54C8.8158 23.4523 8.95554 23.3899 9.10336 23.3563C16.1553 21.745 22.204 22.439 27.0837 25.4204C27.3446 25.5803 27.5314 25.8371 27.603 26.1346C27.6747 26.4321 27.6254 26.7458 27.4659 27.007L27.4665 27.0064ZM29.7317 21.9656C29.5314 22.2916 29.2099 22.5248 28.8377 22.6139C28.4656 22.703 28.0733 22.6407 27.747 22.4407C22.7721 19.3828 15.1862 18.4966 9.29977 20.2837C8.93342 20.3943 8.53819 20.3552 8.2006 20.175C7.86301 19.9948 7.61058 19.6882 7.49856 19.3223C7.26922 18.5578 7.6985 17.7539 8.46121 17.5228C15.1856 15.4823 23.5436 16.4702 29.2577 19.9809C29.5837 20.1813 29.8168 20.5029 29.9058 20.875C29.9948 21.2472 29.9324 21.6394 29.7323 21.9656H29.7317ZM29.9269 16.7166C23.9594 13.173 14.1165 12.8472 8.42004 14.5761C7.98054 14.7093 7.50613 14.6624 7.10118 14.4458C6.69622 14.2292 6.3939 13.8606 6.26071 13.4211C6.12752 12.9816 6.17437 12.5072 6.39096 12.1023C6.60756 11.6973 6.97615 11.395 7.41565 11.2618C13.9548 9.27712 24.8256 9.66053 31.6952 13.7375C31.8908 13.8535 32.0617 14.0069 32.198 14.1889C32.3343 14.371 32.4334 14.5781 32.4897 14.7984C32.5459 15.0188 32.5582 15.248 32.5258 15.4731C32.4934 15.6982 32.417 15.9148 32.3009 16.1103C32.185 16.3061 32.0316 16.477 31.8495 16.6134C31.6674 16.7498 31.4603 16.849 31.2398 16.9053C31.0194 16.9615 30.79 16.9738 30.5648 16.9413C30.3397 16.9088 30.1231 16.8323 29.9275 16.716L29.9269 16.7166Z" fill="currentColor"/>
                </svg>                                                                                    
            </a>
        </div>
    </div>
</section>

<div class="py-12 mt-10">
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

<!-- REVIEWS SECTION -->
<div id="reviews"></div>
<div class="bg-bgSecondary/30 mx-auto mt-12 px-4 py-10">
<div class="mx-auto max-w-5xl lg:text-center flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Customer Reviews</span>
            <span class="lang-arabic hidden">التأمين<br> المعززة</span>
        </h1>
    </div> <!-- Swiper Slider for Reviews -->
    <div class="reviews-swiper-container overflow-hidden mt-10">
        <div class="swiper-wrapper"> <!-- Review Slide 1 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto"> <svg class="h-12 mx-auto mb-3 text-textPrimary/20" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-lg font-semibold text-textPrimary text-center">"Amazing service! Would 100% best wedding photography Suman studio & films recommend! The team were amazing and listened to our vision and brought it to life. The photographer was phenomenal from the end result of the pictures to the actual shoot. He gave direction and made us feel really comfortable! Would definitely come back again!"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3"> <img class="w-10 h-10 rounded-full" src="https://dreamnxthomes.in/assets/images/reviewer-1.webp" alt="Reviewer Image" loading="lazy">
                        <div class="flex items-center divide-x-2 divide-textSecondary">
                            <div class="pr-3 font-medium text-textPrimary">Kumar chandan</div> <div class="pl-3 text-sm font-light text-textSecondary">Entrepreneur, Mumbai</div>
                        </div>
                    </figcaption>
                </figure>
            </div> <!-- Add more slides similarly here --> <!-- Review Slide 2 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto"> <svg class="h-12 mx-auto mb-3 text-textSecondary" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-lg font-semibold text-textPrimary text-center">"Thank you for going above and beyond on our wedding day. Suman studio & films. You were so relaxed and friendly, making us feel very comfortable posing for photos! It was such a pleasure to work with you. guys, great job"</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3"> <img class="w-10 h-10 rounded-full" src="https://dreamnxthomes.in/assets/images/reviewer-2.webp" alt="Reviewer Image" loading="lazy">
                        <div class="flex items-center divide-x-2 divide-textSecondary">
                            <div class="pr-3 font-medium text-textPrimary">Bharati sinha</div>  <div class="pl-3 text-sm font-light text-textSecondary">Entrepreneur, Mumbai</div>
                        </div>
                    </figcaption>
                </figure>
            </div> <!-- Review Slide 3 -->
            <div class="swiper-slide">
                <figure class="max-w-screen-md mx-auto"> <svg class="h-12 mx-auto mb-3 text-textSecondary" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor" />
                    </svg>
                    <blockquote>
                        <p class="text-lg font-semibold text-textPrimary text-center">"It has been an amazing experience to have the Pre-wedding shoot done through Candid Wedding Stories. Sumit was professional throughout and made us feel at ease. We were free to pose, suggest and he captured all the moments beautifully. Thank you for giving us amazing pictures. Suman studio & films We loved your Team work."</p>
                    </blockquote>
                    <figcaption class="flex items-center justify-center mt-6 space-x-3"> <img class="w-10 h-10 rounded-full" src="https://dreamnxthomes.in/assets/images/reviewer-3.webp" alt="Reviewer Image" loading="lazy">
                        <div class="flex items-center divide-x-2 divide-textSecondary">
                            <div class="pr-3 font-medium text-textPrimary">Mr. Rajesh</div> <div class="pl-3 text-sm font-light text-textSecondary">Entrepreneur, Mumbai</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div> <!-- Custom Next/Prev Buttons -->
        <div class="flex justify-center mt-5 md:mt-10 space-x-6"> <button class="custom-prev w-8 h-8 flex items-center border-2 border-primary justify-center rounded-full hover:bg-primary text-primary transition z-30 duration-300 ease-in-out hover:text-bgPrimary"> <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6z" />
                </svg> </button> <button class="custom-next w-8 h-8 flex items-center border-2 border-primary justify-center rounded-full hover:bg-primary text-primary transition z-30 duration-300 ease-in-out hover:text-bgPrimary"> <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.59 16.59L13.17 12l-4.58-4.59L10 6l6 6-6 6z" />
                </svg> </button> </div>
    </div>
</div>

<section class="bg-white">
  <div class="py-8 px-4 mx-auto mt-8 max-w-screen-xl lg:py-12 lg:px-6 ">
  <div class="mx-auto max-w-5xl mb-12 lg:text-center flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Our Team</span>
            <span class="lang-arabic hidden">التأمين<br> المعززة</span>
        </h1>
    </div>
      <div class="grid gap-8 mb-6 md:grid-cols-2">
          <div class="items-center bg-bgPrimary rounded-lg border border-2 sm:flex">
              <a href="#">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900">
                      <a href="#">Bonnie Green</a>
                  </h3>
                  <span class="text-textSecondary">CEO & Web Developer</span>
                  <p class="mt-3 mb-4 font-light text-textSecondary">Bonnie drives the technical strategy of the flowbite platform and brand.</p>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fa fa-facebook-f"></i>
                          </a>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fa fa-instagram"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fab fa-x-twitter"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> 
          <div class="items-center bg-bgPrimary rounded-lg border border-2 sm:flex">
              <a href="#">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Avatar">
              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900">
                      <a href="#">Jese Leos</a>
                  </h3>
                  <span class="text-textSecondary">CTO</span>
                  <p class="mt-3 mb-4 font-light text-textSecondary">Jese drives the technical strategy of the flowbite platform and brand.</p>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fa fa-facebook-f"></i>
                          </a>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fa fa-instagram"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fab fa-x-twitter"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> 
          <div class="items-center bg-bgPrimary rounded-lg border border-2 sm:flex">
              <a href="#">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="Michael Avatar">
              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900">
                      <a href="#">Michael Gough</a>
                  </h3>
                  <span class="text-textSecondary">Senior Front-end Developer</span>
                  <p class="mt-3 mb-4 font-light text-textSecondary">Michael drives the technical strategy of the flowbite platform and brand.</p>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fa fa-facebook-f"></i>
                          </a>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fa fa-instagram"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fab fa-x-twitter"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div> 
          <div class="items-center bg-bgPrimary rounded-lg border border-2 sm:flex">
              <a href="#">
                  <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/sofia-mcguire.png" alt="Sofia Avatar">
              </a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900">
                      <a href="#">Lana Byrd</a>
                  </h3>
                  <span class="text-textSecondary">Marketing & Sale</span>
                  <p class="mt-3 mb-4 font-light text-textSecondary">Lana drives the technical strategy of the flowbite platform and brand.</p>
                  <ul class="flex space-x-4 sm:mt-0">
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fa fa-facebook-f"></i>
                          </a>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fa fa-instagram"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#" class="text-textSecondary hover:text-primary"><i class="fab fa-x-twitter"></i>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>  
      </div>  
  </div>
</section>

<!-- ====== FAQ Section Start -->
<section
   x-data="
   {
   openFaq1: true, 
   openFaq2: false, 
   openFaq3: false, 
   openFaq4: false, 
   openFaq5: false, 
   openFaq6: false
   }
   "
   class="relative z-20 overflow-hidden bg-bgSecondary/30 pt-20 pb-12"
   >
   <div class="container mx-auto">
   <div class="mx-auto max-w-5xl mb-12 lg:text-center flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">FAQs</span>
            <span class="lang-arabic hidden">التأمين<br> المعززة</span>
        </h1>
    </div>
      <div class="flex flex-wrap -mx-4">
         <div class="w-full px-4 lg:w-1/2">
            <div
               class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  @click="openFaq1 = !openFaq1"
                  >
                  <div
                     class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg
                        :class="openFaq1 && 'rotate-180'"
                        width="22"
                        height="22"
                        viewBox="0 0 22 22"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                           d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                           fill="currentColor"
                           />
                     </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-textPrimary"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div x-show="openFaq1" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-textSecondary"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
            <div
               class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  @click="openFaq2 = !openFaq2"
                  >
                  <div
                     class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg
                        :class="openFaq2 && 'rotate-180'"
                        width="22"
                        height="22"
                        viewBox="0 0 22 22"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                           d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                           fill="currentColor"
                           />
                     </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-textPrimary"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div x-show="openFaq2" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-textSecondary"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
            <div
               class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  @click="openFaq3 = !openFaq3"
                  >
                  <div
                     class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg
                        :class="openFaq3 && 'rotate-180'"
                        width="22"
                        height="22"
                        viewBox="0 0 22 22"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                           d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                           fill="currentColor"
                           />
                     </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-textPrimary"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div x-show="openFaq3" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-textSecondary"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
         </div>
         <div class="w-full px-4 lg:w-1/2">
         <div
               class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  @click="openFaq4 = !openFaq4"
                  >
                  <div
                     class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg
                        :class="openFaq4 && 'rotate-180'"
                        width="22"
                        height="22"
                        viewBox="0 0 22 22"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                           d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                           fill="currentColor"
                           />
                     </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-textPrimary"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div x-show="openFaq4" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-textSecondary"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
            <div
               class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  @click="openFaq5 = !openFaq5"
                  >
                  <div
                     class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg
                        :class="openFaq5 && 'rotate-180'"
                        width="22"
                        height="22"
                        viewBox="0 0 22 22"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                           d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                           fill="currentColor"
                           />
                     </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-textPrimary"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div x-show="openFaq5" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-textSecondary"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
            <div
               class="w-full p-2 mb-8 bg-white border border-2 rounded-lg sm:p-4 lg:px-4 xl:px-4"
               >
               <button
                  class="flex w-full text-left faq-btn"
                  @click="openFaq6 = !openFaq6"
                  >
                  <div
                     class="text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                     >
                     <svg
                        :class="openFaq6 && 'rotate-180'"
                        width="22"
                        height="22"
                        viewBox="0 0 22 22"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                           d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                           fill="currentColor"
                           />
                     </svg>
                  </div>
                  <div class="w-full">
                     <h4
                        class="mt-1 text-lg font-semibold text-textPrimary"
                        >
                        How long we deliver your first blog post?
                     </h4>
                  </div>
               </button>
               <div x-show="openFaq6" class="faq-content pl-[62px]">
                  <p
                     class="py-3 text-base leading-relaxed text-textSecondary"
                     >
                     It takes 2-3 weeks to get your first blog post ready. That
                     includes the in-depth research & creation of your monthly
                     content marketing strategy that we do before writing your
                     first blog post, Ipsum available .
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- ====== FAQ Section End -->

<section>
    <div class="container px-6 py-12 mx-auto">
    <div class="mx-auto max-w-5xl mb-12 lg:text-center flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-textPrimary text-center">
            <span class="lang-english">Contact Us</span>
            <span class="lang-arabic hidden">التأمين<br> المعززة</span>
        </h1>
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

            <div class="p-4 py-6 rounded-lg bg-bgSecondary/40 md:p-8">
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