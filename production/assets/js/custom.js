$(document).ready(() => {
    window.onload = () => {
        $("body").removeClass("overflow-hidden");
        $("#preloader").fadeOut(1100);
    };

    // Initialize AOS for animations
    AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
    });

    let countersStarted = false;
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 0) {
            $('#logoImg').attr('src', 'assets/images/logo.webp');
            $('.navbar').addClass('backdrop-blur-md border-b bg-bgPrimary/30');
            if (isHome) {
                $('.navbar .hero-text').addClass('text-textPrimary').removeClass('text-white');
            }
        } else {
            $('#logoImg').attr('src', 'assets/images/logo.webp');
            $('.navbar').removeClass('backdrop-blur-md border-b bg-bgPrimary/30');
            if (isHome) {
                $('.navbar .hero-text').addClass('text-white').removeClass('text-textPrimary');
                $('#logoImg').attr('src', 'assets/images/weblogo-white.webp');
            }
        }

        // Stats counter on scroll - Check if the #stats section exists
        if ($('#stats').length) {
            const oTop = $('#stats').offset().top - window.innerHeight;
            if (!countersStarted && $(window).scrollTop() > oTop) {
                startCounters();
                countersStarted = true;
            }
        }
    });


    // Handle the service dropdown change
    $('#service').on('change', function () {
        if ($(this).val() === 'Other') {
            $('#custom_service').addClass('bg-bgPrimary').removeClass("bg-bgSecondary").prop('disabled', false).prop('required', true);
        } else {
            $('#custom_service').removeClass('bg-bgPrimary').addClass("bg-bgSecondary").prop('disabled', true).prop('required', false);
        }
    });

    // Handle the plan dropdown change
    $('#plan').on('change', function () {
        if ($(this).val() === 'Custom') {
            $('#budget').closest('div.grid').removeClass('hidden').find('#budget').prop('required', true);
        } else {
            $('#budget').closest('div.grid').addClass('hidden').find('#budget').prop('required', false);
        }
    });

    // Initialize preloader progress
    preLoader();

    // Gallery item click event
    $('.gallery-item, .photoshoot-item').click(function () {
        const imgPath = $(this).attr('src');
        const title = $(this).data('title');
        const category = $(this).data('category');
        const section = $(this).hasClass('gallery-item') ? 'gallery' : 'photoshoot';
        openGallery(imgPath, title, category, section);
    });

    // Close gallery modal on button click or ESC key
    $('.closeBtn').click(closeGallery);
    $(document).on('keydown', function (e) {
        if (e.key === "Escape") closeGallery();
    });
    // Gallery filter functionality
    $('.tab').click(function () {
        const category = $(this).data('category');
        $('.tab').removeClass('bg-primary text-bgPrimary').addClass('bg-bgPrimary text-primary');
        $(this).removeClass('bg-bgPrimary text-primary').addClass('bg-primary text-bgPrimary');

        // Filter images
        if (category === 'all') {
            $('.gallery-item').show();
        } else {
            $('.gallery-item').each(function () {
                if ($(this).data('category') === category) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        }
    });
});

// Function to handle the preloader progress
const preLoader = () => {
    let progress = 0;
    const updateProgress = () => $(".preloader-progress").css("width", progress + "%");
    let progressInterval = setInterval(() => {
        progress++;
        updateProgress();
        if (progress >= 95) clearInterval(progressInterval);
    }, 50);
};

// Function to redirect to another link
const redirect = (link) => {
    window.location.href = rootURL + link;
};

// Function to open gallery modal
function openGallery(imgPath, title, category, section) {
    $("body").addClass("overflow-hidden");
    $('.main-image').attr('src', imgPath);
    $('.gallery-title').text(title);
    $('.gallery-category').text(category);
    populateThumbnails(section, imgPath);
    $('.opened-gallery').removeClass('hidden').fadeIn();
}

// Function to populate thumbnails
function populateThumbnails(section, selectedImg) {
    let thumbnailsHtml = '';
    const selector = section === 'gallery' ? '.gallery-item' : '.photoshoot-item';

    $(selector).each(function () {
        const imgSrc = $(this).attr('src');
        const title = $(this).data('title');
        const category = $(this).data('category');
        thumbnailsHtml += `<img class="h-[100px] w-auto rounded-lg cursor-pointer hover:ring-primary ring-2 ring-transparent ring-offset-2 thumbnail" src="${imgSrc}" data-title="${title}" data-category="${category}">`;
    });

    $('.thumbnails').html(thumbnailsHtml);

    $('.thumbnail').click(function () {
        const imgPath = $(this).attr('src');
        const title = $(this).data('title');
        const category = $(this).data('category');
        openGallery(imgPath, title, category, section);
    });
}

// Function to close gallery modal
function closeGallery() {
    $('.opened-gallery').fadeOut(function () {
        $("body").removeClass("overflow-hidden");
        $(this).addClass('hidden');
    });
}
new Swiper('.reviews-swiper-container', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: {
        nextEl: '.custom-next',
        prevEl: '.custom-prev',
    },
    breakpoints: {
        768: { slidesPerView: 1, spaceBetween: 30 },
    },
});

// Function to start stats counters with animation
function startCounters() {
    $('.count').each(function () {
        const $this = $(this);
        const countTo = $this.attr('data-count');
        $({
            countNum: 0
        }).animate({
            countNum: countTo
        }, {
            duration: 2000,
            easing: 'swing',
            step: function () {
                $this.text(formatNumber(this.countNum));
            },
            complete: function () {
                $this.text(formatNumber(this.countNum));
            }
        });
    });
}

// Function to format numbers with K or M suffix
function formatNumber(num) {
    if (num >= 1000000) return (num / 1000000).toFixed(1) + 'M';
    if (num >= 1000) return (num / 1000).toFixed(1) + 'K';
    return Math.floor(num);
}

// Function to handle form submission
function handleFormSubmit(
    event,
    formtype,
    formBtnSpinnerSelector,
    formBtnTextSelector,
    formResponseTextSelector
) {
    event.preventDefault();

    const $formBtnSpinner = $(formBtnSpinnerSelector);
    const $formBtnText = $(formBtnTextSelector);
    const $formResponseText = $(formResponseTextSelector);

    $formBtnText.addClass("hidden");
    $formBtnSpinner.removeClass("hidden");

    const formData = new FormData(event.target);
    formData.append("formtype", formtype);

    $.ajax({
        url: rootURL + "/" + apiSlug + "/" + formtype + ".php",
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (data) {
            $formBtnText.removeClass("hidden");
            $formBtnSpinner.addClass("hidden");
            let redirectText = data.redirect ? " - Redirecting..." : '';
            // Clear image preview if the element exists
            const $imagePreview = $("#imagePreview");
            if ($imagePreview.length) {
                $imagePreview.html('<span class="text-textSecondary">Click to add image</span>');
            }

            if (data.status === "success") {
                $(event.target)[0].reset();
                $formResponseText
                    .addClass("text-green-500")
                    .html('<i class="fa fa-check"></i> ' + data.msg + redirectText);
            } else {
                $formResponseText
                    .addClass("text-red-500")
                    .html('<i class="fa fa-times"></i> ' + data.msg + redirectText);
            }

            if (data.redirect) {
                redirect(data.redirect);
            }

            setTimeout(() => {
                $formResponseText.removeClass("text-green-500 text-red-500").html("");
            }, 3000);
        },
        error: function () {
            $formResponseText
                .addClass("text-red-500")
                .html('<i class="fa fa-warning"></i> Error: Check Your Internet!.');
            $formBtnText.removeClass("hidden");
            $formBtnSpinner.addClass("hidden");
            setTimeout(() => {
                $formResponseText.removeClass("text-red-500").html("");
            }, 3000);
        },
    });
}

function togglePassword(id) {
    var $passwordField = $('#' + id);
    var $icon = $passwordField.siblings('i');

    if ($passwordField.attr('type') === 'password') {
        $passwordField.attr('type', 'text');
        $icon.removeClass('fa-eye-slash').addClass('fa-eye');
    } else {
        $passwordField.attr('type', 'password');
        $icon.removeClass('fa-eye').addClass('fa-eye-slash');
    }
}
let currentImageIndex = 0;

function preloadImages(imageUrls) {
    imageUrls.forEach(url => {
        const img = new Image();
        img.src = url;
    });
}
