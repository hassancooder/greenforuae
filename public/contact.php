<!-- HERO SECTION -->
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-secondary to-primary opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon()"></div>
    </div>
    <div class="mx-auto h-2/4 max-w-2xl mt-10 py-32 sm:py-48 lg:py-36">
        <div class="text-center">
            <h1 class="text-4xl font-bold tracking-tight text-textPrimary sm:text-6xl">
                <span class="lang-english">Contact Us</span>
                <span class="lang-arabic hidden">تواصل معنا</span>
            </h1>

            <p class="mt-6 text-lg leading-8 text-textSecondary">
                <span class="flex justify-center items-center">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    <?php
                    $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
                    echo '<span class="lang-english">Home / ' . ucwords(str_replace('-', ' ', implode(' / ', $url))) . '</span>';
                    echo '<span class="lang-arabic hidden">الرئيسية / تواصل معنا</span>';
                    ?>
                </span>
            </p>
        </div>
    </div>
</div>

<div class="h-screen container px-4 mx-auto">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3607.37503499097!2d55.392244!3d25.2916008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c18a8d55ef7%3A0xc3676e6f907f357e!2sAl%20Saud%20Building%20Quasis-4!5e0!3m2!1sen!2s!4v1728452916997!5m2!1sen!2s"
        width="600"
        height="450"
        style="border:0; width: 100%; height: 100%; border-radius:8px;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- CONTACT SECTION -->
<div class="my-20" id="contact"></div>
<div class="container mx-auto px-4">
    <div class="md:flex mt-6 mb-10 md:space-x-10 items-start z-1">
        <div class="md:w-6/12 md:mt-0">
            <ul class="my-6 md:mb-0">
                <li class="flex my-4">
                    <div class="flex min-w-10 min-h-10 max-w-10 max-h-10 items-center justify-center rounded bg-primary text-bgPrimary"> <i class="fas fa-headset"></i> </div>
                    <div class="mx-4 mb-4">
                        <h3 class="mb-2 text-lg font-medium leading-6 text-textPrimary">Reach Us</h3>
                        <p class="text-textSecondary my-2">We’re here to capture your special moments. Contact us <br>to discuss your wedding photography needs and get a personalized quote.</p>
                        <p class="text-textSecondary my-2">Website: <a href="https://greenfortuae.com" class="text-primary font-medium hover:underline" target="_blank">GreenFortUAE.com</a></p>
                        <p class="text-textSecondary my-2">WhatsApp: <a href="https://wa.me/+97145543260" class="text-primary font-medium hover:underline" target="_blank">+971-45543260</a></p>
                        <p class="text-textSecondary my-2">Phone Call: <a href="tel:+97145543260" class="text-primary font-medium hover:underline" target="_blank">+971-45543260</a>, <a href="tel:+97145543260" class="text-primary font-medium hover:underline" target="_blank">+971 4 554 3260</a></p>
                        <p class="text-textSecondary my-2">E-Mail: <a href="mailto:info@greenfortuae.com" class="text-primary font-medium hover:underline" target="_blank">info@greenfortuae.com</a>, <a href="mailto:waleed@greenfortuae.com" class="text-primary font-medium hover:underline" target="_blank">waleed@greenfortuae.com</a></p>
                    </div>
                </li>
                <li class="flex my-4">
                    <div class="flex min-w-10 min-h-10 max-w-10 max-h-10 items-center justify-center rounded bg-primary text-bgPrimary"> <i class="fa fa-location-dot"></i> </div>
                    <div class="ml-4 mb-4">
                        <h3 class="mb-2 text-lg font-medium leading-6 text-textPrimary">Our Address </h3>
                        <p class="text-textSecondary">Office 206, AL Saud Building, AL Qusais ind 4th,</p>
                        <p class="text-textSecondary"> Dubai, UAE <a href="https://maps.app.goo.gl/KdeVtAJAyEwmwxDR6" target="_blank" title="Open Google Maps"><i class="fas fa-up-right-from-square text-primary"></i></a></p>
                    </div>
                </li>
            </ul>
        </div>
        <form onsubmit="handleFormSubmit(event,'contactform','.contact-form-btn-spinner','.contact-form-btn-text','.contact-form-response-text')" class="md:w-6/12">
            <div class="grid grid-cols-1 gap-x-8 sm:grid-cols-2">
                <div class="sm:col-span-2"> <label for="name" class="block text-sm font-semibold leading-6 text-textPrimary">Name *</label>
                    <div class="mb-2.5"> <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md border border-textSecondary px-3.5 py-2 text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 sm:text-sm sm:leading-6" required> </div>
                </div>
                <div class="sm:col-span-2"> <label for="email" class="block text-sm font-semibold leading-6 text-textPrimary">Email (Optional)</label>
                    <div class="mb-2.5"> <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border border-textSecondary px-3.5 py-2 text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 sm:text-sm sm:leading-6"> </div>
                </div>
                <div class="sm:col-span-2"> <label for="phone" class="block text-sm font-semibold leading-6 text-textPrimary">Phone *</label>
                    <div class="mb-2.5"> <input type="tel" name="phone" id="phone" autocomplete="phone" class="block w-full rounded-md border border-textSecondary px-3.5 py-2 text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 sm:text-sm sm:leading-6" required> </div>
                </div>
                <div class="sm:col-span-2"> <label for="message" class="block text-sm font-semibold leading-6 text-textPrimary">Message *</label>
                    <div class=""> <textarea name="message" id="message" rows="4" class="block w-full rounded-md border border-textSecondary px-3.5 py-2 text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 sm:text-sm sm:leading-6" required></textarea> </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center justify-start"> <button type="submit" class="inline-flex items-center block rounded-full bg-primary center text-sm font-semibold text-bgPrimary shadow-sm hover:bg-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary px-3.5 py-2.5"> <svg class="w-5 h-5 mx-auto text-bgPrimary animate-spin contact-form-btn-spinner hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"> </circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"> </path>
                        </svg> <span class="contact-form-btn-text font-semibold text-bgPrimary">Let's talk <i class="fa fa-send ml-2 text-bgPrimary" aria-hidden="true"></i></span> </button>
                    <div class="ml-2">
                        <p class="contact-form-response-text font-semibold text-sm text-textPrimary"></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>