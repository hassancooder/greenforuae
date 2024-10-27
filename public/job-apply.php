<!-- CAREERS PAGE SECTION -->
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0a3a2f] to-primary opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon()"></div>
    </div>
    <div class="mx-auto h-2/4 max-w-2xl mt-10 py-32 sm:py-48 lg:py-36">
        <div class="text-center">
            <!-- Title -->
            <h1 class="text-4xl font-bold tracking-tight text-textPrimary sm:text-6xl">
                <span class="lang-english hidden">Job Application</span>
                <span class="lang-arabic">طلب وظيفة</span>
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
                    echo '<span class="lang-arabic">الرئيسية / الوظائف</span>';
                    ?>
                </span>
            </p>
        </div>
    </div>
</div>
<!-- JOB APPLICATION FORM SECTION -->
<div class="my-20" id="job-apply"></div>
<div class="container mx-auto px-4">
    <div class="md:flex mt-6 mb-10 md:space-x-10 items-start z-1">
        <form onsubmit="handleFormSubmit(event, 'job-apply', '.job-apply-btn-spinner', '.job-apply-btn-text', '.job-apply-response-text')" class="md:w-6/12 mx-auto">
            <div class="grid grid-cols-1 gap-x-8 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <label for="full-name" class="block text-sm font-semibold leading-6 text-textPrimary">
                        <span class="lang-english hidden">Full Name *</span>
                        <span class="lang-arabic">الاسم الكامل *</span>
                    </label>
                    <div class="mb-2.5">
                        <input type="text" name="full-name" id="full-name" required class="block w-full rounded-md border border-textSecondary px-3.5 py-2 text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="job-title" class="block text-sm font-semibold leading-6 text-textPrimary">
                        <span class="lang-english hidden">Job Title *</span>
                        <span class="lang-arabic">المسمى الوظيفي *</span>
                    </label>
                    <div class="mb-2.5">
                        <select name="job-title" id="job-title" required class="block w-full rounded-md border border-textSecondary px-3.5 py-2 text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 sm:text-sm sm:leading-6">
                            <option value="" disabled selected>Select Job Title</option>
                            <option value="civil-foreman">Civil Foremen</option>
                        </select>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-textPrimary">
                        <span class="lang-english hidden">Email *</span>
                        <span class="lang-arabic">البريد الإلكتروني *</span>
                    </label>
                    <div class="mb-2.5">
                        <input type="email" name="email" id="email" required class="block w-full rounded-md border border-textSecondary px-3.5 py-2 text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone" class="block text-sm font-semibold leading-6 text-textPrimary">
                        <span class="lang-english hidden">Phone *</span>
                        <span class="lang-arabic">الهاتف *</span>
                    </label>
                    <div class="mb-2.5">
                        <input type="tel" name="phone" id="phone" required class="block w-full rounded-md border border-textSecondary px-3.5 py-2 text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="education" class="block text-sm font-semibold leading-6 text-textPrimary">
                        <span class="lang-english hidden">Education *</span>
                        <span class="lang-arabic">التعليم *</span>
                    </label>
                    <div class="mb-2.5">
                        <input type="text" name="education" id="education" required class="block w-full rounded-md border border-textSecondary px-3.5 py-2 text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="work-experience" class="block text-sm font-semibold leading-6 text-textPrimary">
                        <span class="lang-english hidden">Work Experience *</span>
                        <span class="lang-arabic">الخبرة العملية *</span>
                    </label>
                    <div class="mb-2.5">
                        <textarea name="work-experience" id="work-experience" rows="4" required class="block w-full rounded-md border border-textSecondary px-3.5 py-2 text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="cv" class="block text-sm font-semibold leading-6 text-textPrimary">
                        <span class="lang-english hidden">Upload CV *</span>
                        <span class="lang-arabic">تحميل السيرة الذاتية *</span>
                    </label>
                    <div class="mb-2.5">
                        <input type="file" name="cv" id="cv" accept=".pdf,.doc,.docx" required class="block w-full text-textPrimary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary focus-visible:ring-offset-2">
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="flex items-center justify-start">
                    <button type="submit" class="inline-flex items-center block rounded-full bg-primary center text-sm font-semibold text-bgPrimary shadow-sm hover:bg-primary/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary px-3.5 py-2.5">
                        <svg class="w-5 h-5 mx-auto text-bgPrimary animate-spin job-apply-btn-spinner hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span class="job-apply-btn-text font-semibold text-bgPrimary lang-english hidden">Apply Now <i class="fa fa-send ml-2 text-bgPrimary" aria-hidden="true"></i></span>
                        <span class="job-apply-btn-text-ar font-semibold text-bgPrimary lang-arabic">قدّم الآن <i class="fa fa-send ml-2 text-bgPrimary" aria-hidden="true"></i></span>
                    </button>
                    <div class="ml-2">
                        <p class="job-apply-response-text font-semibold text-sm text-textPrimary"></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
