<!-- CAREERS PAGE SECTION -->
<div class="relative isolate px-6 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#0a3a2f] to-primary opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon()"></div>
    </div>
    <div class="mx-auto h-2/4 max-w-2xl mt-10 py-32 sm:py-48 lg:py-36">
        <div class="text-center">
            <!-- Title -->
            <h1 class="text-4xl font-bold tracking-tight text-textPrimary sm:text-6xl">
                <span class="lang-english hidden">Careers</span>
                <span class="lang-arabic">الوظائف</span>
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

<!-- JOB POSTING SECTION (CIVIL FOREMAN) -->
<div class="relative isolate px-6 lg:px-8 lang-english hidden">
    <div class="max-w-6xl mt-10 py-32 sm:py-48 lg:py-36">
        <div>
            <h2 class="text-3xl font-bold tracking-tight text-textPrimary">(1) Job Title: Civil Foreman</h2>
            <p class="mt-4 text-lg leading-8 text-textSecondary">We are looking for an experienced Civil Foreman to oversee our construction projects. The ideal candidate should have a strong background in civil construction and the ability to lead a team effectively.</p>

            <h3 class="text-xl font-semibold mt-6">Key Responsibilities:</h3>
            <ul class="list-disc list-inside mt-2 text-lg leading-8 text-textSecondary">
                <li>Supervise and manage construction activities on-site.</li>
                <li>Ensure compliance with safety standards and regulations.</li>
                <li>Coordinate with project managers and other staff.</li>
                <li>Train and mentor junior staff members.</li>
                <li>Report on project progress and issues to management.</li>
            </ul>

            <h3 class="text-xl font-semibold mt-6">Qualifications:</h3>
            <ul class="list-disc list-inside mt-2 text-lg leading-8 text-textSecondary">
                <li>Proven experience as a Civil Foreman or similar role.</li>
                <li>Strong understanding of construction processes, materials, and legal regulations.</li>
                <li>Excellent leadership and organizational skills.</li>
                <li>Ability to communicate effectively in English.</li>
                <li>Bachelor’s degree in Civil Engineering or a related field is preferred.</li>
            </ul>

            <div class="mt-6">
                <a href="/job-apply" class="inline-block px-6 py-3 text-white bg-primary rounded-md hover:bg-primary/90">
                    Apply for this job
                </a>
            </div>
        </div>
    </div>
</div>

<!-- JOB POSTING SECTION (CIVIL FOREMAN) - ARABIC -->
<div class="relative isolate px-6 lg:px-8 lang-arabic">
    <div class="max-w-6xl mt-10 py-32 sm:py-48 lg:py-36">
        <div>
        <h2 class="text-3xl font-bold tracking-tight text-textPrimary">(1) المسمى الوظيفي: مشرف مدني</h2>

            <p class="mt-4 text-lg leading-8 text-textSecondary">نبحث عن مشرف مدني ذو خبرة للإشراف على مشاريعنا الإنشائية. يجب أن يكون لدى المرشح المثالي خلفية قوية في البناء المدني والقدرة على قيادة الفريق بفعالية.</p>

            <h3 class="text-xl font-semibold mt-6">المسؤوليات الرئيسية:</h3>
            <ul class="list-disc list-inside mt-2 text-lg leading-8 text-textSecondary">
                <li>الإشراف وإدارة أنشطة البناء في الموقع.</li>
                <li>ضمان الامتثال لمعايير السلامة واللوائح.</li>
                <li>التنسيق مع مديري المشاريع والموظفين الآخرين.</li>
                <li>تدريب وإرشاد الموظفين الصغار.</li>
                <li>الإبلاغ عن تقدم المشروع والمشاكل للإدارة.</li>
            </ul>

            <h3 class="text-xl font-semibold mt-6">المؤهلات:</h3>
            <ul class="list-disc list-inside mt-2 text-lg leading-8 text-textSecondary">
                <li>خبرة مثبتة كمشرف مدني أو دور مشابه.</li>
                <li>فهم قوي لعمليات البناء والمواد واللوائح القانونية.</li>
                <li>مهارات قيادية وتنظيمية ممتازة.</li>
                <li>القدرة على التواصل بفعالية باللغة العربية.</li>
                <li>يفضل أن يكون لديك درجة البكالوريوس في الهندسة المدنية أو مجال ذي صلة.</li>
            </ul>

            <div class="mt-6">
                <a href="/job-apply" class="inline-block px-6 py-3 text-white bg-primary rounded-md hover:bg-primary/90">
                    قدم طلبك للوظيفة
                </a>
            </div>
        </div>
    </div>
</div>
