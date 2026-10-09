<x-layouts::site title="الرئيسية - صرح القرآن والعلوم الشرعية">

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-emerald-950 bg-linear-to-b from-emerald-950 via-emerald-900 to-stone-950 py-20 text-white lg:py-28 islamic-pattern">
        <!-- Decorative Glows & Islamic Shapes -->
        <div class="pointer-events-none absolute -top-24 -right-24 size-96 rounded-full bg-emerald-600/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-24 -left-24 size-96 rounded-full bg-amber-500/15 blur-3xl"></div>
        
        <div class="relative mx-auto w-full max-w-6xl px-4 sm:px-6 text-center">
            <!-- Quranic Badge -->
            <div class="inline-flex items-center gap-2 rounded-full border border-amber-400/40 bg-emerald-900/90 px-5 py-2 text-xs sm:text-sm font-semibold text-amber-300 shadow-lg backdrop-blur-md">
                <span class="font-quran text-base sm:text-lg">﴿ يَرْفَعِ اللَّهُ الَّذِينَ آمَنُوا مِنكُمْ وَالَّذِينَ أُوتُوا الْعِلْمَ دَرَجَاتٍ ﴾</span>
            </div>

            <!-- Main Heading -->
            <h1 class="mt-6 font-black text-3xl sm:text-5xl lg:text-6xl tracking-tight leading-tight sm:leading-tight text-white drop-shadow-sm">
                مجمع الهامة <span class="text-amber-400 font-extrabold">الشرعي التعليمي</span>
            </h1>

            <!-- Subtitle -->
            <p class="mx-auto mt-6 max-w-3xl text-base sm:text-xl leading-relaxed text-emerald-100 font-medium">
                صرحٌ علميٌّ شرعيٌّ وتربوي يعنى بالتعليم الشرعي، وتأصيل العلوم الإسلامية، وبناء جيلٍ متمسكٍ بهَدي القرآن وسُنّة المصطفى ﷺ مع الفهم الرشيد والخُلق القويم.
            </p>

            <!-- Action CTA Buttons -->
            <div class="mt-10 flex flex-wrap items-center justify-center gap-4 sm:gap-5">
                <a href="{{ route('donations') }}"
                    class="inline-flex items-center gap-2.5 rounded-2xl bg-amber-400 hover:bg-amber-300 px-7 py-3.5 text-base font-extrabold text-stone-950 shadow-xl shadow-amber-500/20 hover:scale-105 active:scale-95 transition duration-200">
                    <svg class="size-5 text-stone-950" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                    </svg>
                    <span>ساهم في دعم المجمع</span>
                </a>

                <a href="#tracks"
                    class="inline-flex items-center gap-2 rounded-2xl border-2 border-emerald-400/50 bg-emerald-900/80 px-6 py-3.5 text-base font-bold text-white backdrop-blur-sm hover:bg-emerald-800 hover:text-amber-200 transition">
                    <span>استكشاف البرامج والحلقات</span>
                    <svg class="size-4 rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Stats Highlight Row -->
            <div class="mt-16 grid grid-cols-2 gap-4 sm:grid-cols-4 lg:gap-6 text-center">
                <div class="rounded-2xl border-2 border-emerald-700/60 bg-emerald-900/90 p-5 backdrop-blur-md shadow-lg">
                    <p class="font-black text-3xl sm:text-4xl text-amber-300 font-sans">+25</p>
                    <p class="mt-2 text-sm font-bold text-white">حلقة قرآنية وعلمية</p>
                </div>
                <div class="rounded-2xl border-2 border-emerald-700/60 bg-emerald-900/90 p-5 backdrop-blur-md shadow-lg">
                    <p class="font-black text-3xl sm:text-4xl text-amber-300 font-sans">+350</p>
                    <p class="mt-2 text-sm font-bold text-white">طالب وطالبة علم</p>
                </div>
                <div class="rounded-2xl border-2 border-emerald-700/60 bg-emerald-900/90 p-5 backdrop-blur-md shadow-lg">
                    <p class="font-black text-3xl sm:text-4xl text-amber-300 font-sans">100%</p>
                    <p class="mt-2 text-sm font-bold text-white">مدرسون مجازون ومؤهلون</p>
                </div>
                <div class="rounded-2xl border-2 border-emerald-700/60 bg-emerald-900/90 p-5 backdrop-blur-md shadow-lg">
                    <p class="font-black text-2xl sm:text-3xl text-amber-300 font-sans">مستمر</p>
                    <p class="mt-2 text-sm font-bold text-white">عطاء متواصل بإذن الله</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section (Vision, Mission & Values) -->
    <section id="about" class="relative py-16 sm:py-24 bg-stone-50 dark:bg-stone-950">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6">
            
            <div class="text-center">
                <span class="inline-block rounded-full bg-emerald-100 px-4 py-1.5 text-xs font-bold text-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    عن المجمع
                </span>
                <h2 class="mt-3 text-2xl sm:text-4xl font-extrabold text-stone-900 dark:text-white">
                    منارةٌ للعلم الشرعي وتربية الأجيال
                </h2>
                <div class="mx-auto mt-3 h-1 w-20 rounded-full bg-emerald-600 bg-linear-to-r from-emerald-600 to-amber-500"></div>
                <p class="mx-auto mt-4 max-w-3xl text-base sm:text-lg text-stone-600 dark:text-stone-300 leading-relaxed">
                    تأسس مجمع الهامة الشرعي التعليمي ليكون محضناً تربوياً وعلمياً شامخاً، ينهل منه طلاب العلم أصول دينهم ولغتهم، مع العناية البالغة بكتاب الله تعالى حفظاً وتدبراً وتطبيقاً.
                </p>
            </div>

            <div class="mt-14 grid gap-8 md:grid-cols-3">
                <!-- Vision Card -->
                <div class="group relative rounded-3xl border border-stone-200/90 bg-white p-8 shadow-xs transition hover:border-emerald-500 hover:shadow-xl dark:border-stone-800 dark:bg-stone-900">
                    <div class="flex size-14 items-center justify-center rounded-2xl bg-emerald-100 text-emerald-700 dark:bg-emerald-950 dark:text-emerald-400 group-hover:scale-110 transition-transform">
                        <svg class="size-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-bold text-stone-900 dark:text-white">رؤيتنا</h3>
                    <p class="mt-3 text-sm leading-relaxed text-stone-600 dark:text-stone-400">
                        أن يكون المجمع مرجعاً رائداً في التعليم الشرعي والقرآني، يُخرّج علماء ودعاة وطلبة علم يجمعون بين أصالة العلم والوعي بمتطلبات العصر وخدمة المجتمع.
                    </p>
                </div>

                <!-- Mission Card -->
                <div class="group relative rounded-3xl border border-stone-200/90 bg-white p-8 shadow-xs transition hover:border-emerald-500 hover:shadow-xl dark:border-stone-800 dark:bg-stone-900">
                    <div class="flex size-14 items-center justify-center rounded-2xl bg-amber-100 text-amber-700 dark:bg-amber-950 dark:text-amber-400 group-hover:scale-110 transition-transform">
                        <svg class="size-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-bold text-stone-900 dark:text-white">رسالتنا</h3>
                    <p class="mt-3 text-sm leading-relaxed text-stone-600 dark:text-stone-400">
                        تقديم تعليم شرعي أصيل وبرامج تحفيظ متقنة بإشراف كفاءات علمية متخصصة، ضمن بيئة تربوية محفزة تُرسخ الفضيلة والاعتزاز بالهوية الإسلامية.
                    </p>
                </div>

                <!-- Values Card -->
                <div class="group relative rounded-3xl border border-stone-200/90 bg-white p-8 shadow-xs transition hover:border-emerald-500 hover:shadow-xl dark:border-stone-800 dark:bg-stone-900">
                    <div class="flex size-14 items-center justify-center rounded-2xl bg-teal-100 text-teal-700 dark:bg-teal-950 dark:text-teal-400 group-hover:scale-110 transition-transform">
                        <svg class="size-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-bold text-stone-900 dark:text-white">قيمنا الأساسية</h3>
                    <p class="mt-3 text-sm leading-relaxed text-stone-600 dark:text-stone-400">
                        الإخلاص في العمل، الإتقان في التعليم، السند والتأصيل في التلقي، والوسطية والاعتدال في الفهم والسلوك، وحسن الخلق مع الناس كافة.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Project Data & Architectural Plans Section -->
    <section id="project" class="border-y border-stone-200/80 bg-white py-16 sm:py-24 dark:border-stone-800 dark:bg-stone-900/40">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6">
            <div class="text-center">
                <span class="inline-block rounded-full bg-emerald-100 px-4 py-1.5 text-xs font-bold text-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    بيانات المشروع
                </span>
                <h2 class="mt-3 text-2xl sm:text-4xl font-extrabold text-stone-900 dark:text-white">
                    مجمع الهامة الشرعي — المعلومات الأساسية والمخططات
                </h2>
                <div class="mx-auto mt-3 h-1 w-20 rounded-full bg-emerald-600 bg-linear-to-r from-emerald-600 to-amber-500"></div>
                <p class="mx-auto mt-4 max-w-2xl text-stone-600 dark:text-stone-300">
                    نظرة شاملة على مكونات المشروع وموقعه ومساحاته، مع عرض المخططات المعمارية المصممة له.
                </p>
            </div>

            <!-- Project Info Cards -->
            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Name -->
                <div class="rounded-3xl border border-stone-200 bg-stone-50 p-6 dark:border-stone-800 dark:bg-stone-900">
                    <div class="flex size-11 items-center justify-center rounded-xl bg-emerald-700 text-white shadow-xs">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <p class="mt-4 text-xs font-bold text-emerald-700 dark:text-emerald-400">اسم المشروع</p>
                    <p class="mt-1 text-lg font-bold text-stone-900 dark:text-white">مجمع الهامة الشرعي</p>
                </div>

                <!-- Location -->
                <div class="rounded-3xl border border-stone-200 bg-stone-50 p-6 dark:border-stone-800 dark:bg-stone-900">
                    <div class="flex size-11 items-center justify-center rounded-xl bg-amber-500 text-stone-950 shadow-xs">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <p class="mt-4 text-xs font-bold text-amber-700 dark:text-amber-400">الموقع</p>
                    <p class="mt-1 text-lg font-bold text-stone-900 dark:text-white">جسر الرمال — دوار الهامة</p>
                </div>

                <!-- Road & Site -->
                <div class="rounded-3xl border border-stone-200 bg-stone-50 p-6 dark:border-stone-800 dark:bg-stone-900">
                    <div class="flex size-11 items-center justify-center rounded-xl bg-emerald-700 text-white shadow-xs">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2" />
                        </svg>
                    </div>
                    <p class="mt-4 text-xs font-bold text-emerald-700 dark:text-emerald-400">حرم الطريق والموقع</p>
                    <p class="mt-1 text-lg font-bold text-stone-900 dark:text-white">500 متر — مع مواقف للسيارات والحافلات</p>
                </div>

                <!-- Components -->
                <div class="rounded-3xl border border-stone-200 bg-stone-50 p-6 sm:col-span-2 dark:border-stone-800 dark:bg-stone-900">
                    <div class="flex size-11 items-center justify-center rounded-xl bg-amber-500 text-stone-950 shadow-xs">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <p class="mt-4 text-xs font-bold text-amber-700 dark:text-amber-400">مكونات المشروع</p>
                    <ul class="mt-3 flex flex-wrap gap-2.5">
                        <li class="rounded-full bg-emerald-100 px-4 py-1.5 text-sm font-semibold text-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">مسجد جامع</li>
                        <li class="rounded-full bg-emerald-100 px-4 py-1.5 text-sm font-semibold text-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">مدرسة شرعية للذكور</li>
                        <li class="rounded-full bg-emerald-100 px-4 py-1.5 text-sm font-semibold text-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">مدرسة شرعية للإناث</li>
                        <li class="rounded-full bg-amber-100 px-4 py-1.5 text-sm font-semibold text-amber-800 dark:bg-amber-950 dark:text-amber-300">ملاعب للإناث</li>
                        <li class="rounded-full bg-amber-100 px-4 py-1.5 text-sm font-semibold text-amber-800 dark:bg-amber-950 dark:text-amber-300">ملاعب للذكور</li>
                        <li class="rounded-full bg-stone-200 px-4 py-1.5 text-sm font-semibold text-stone-800 dark:bg-stone-800 dark:text-stone-200">موقف باص وسيارات</li>
                    </ul>
                </div>

                <!-- Areas -->
                <div class="rounded-3xl border border-stone-200 bg-stone-50 p-6 dark:border-stone-800 dark:bg-stone-900">
                    <div class="flex size-11 items-center justify-center rounded-xl bg-emerald-700 text-white shadow-xs">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                        </svg>
                    </div>
                    <p class="mt-4 text-xs font-bold text-emerald-700 dark:text-emerald-400">المساحات</p>
                    <ul class="mt-2 space-y-1.5 text-sm text-stone-700 dark:text-stone-300">
                        <li class="flex items-center justify-between gap-3 border-b border-stone-200 pb-1.5 dark:border-stone-800">
                            <span>المسجد (٣ طوابق)</span>
                            <span class="font-bold text-stone-900 dark:text-white">٨٢٥ م² / طابق</span>
                        </li>
                        <li class="flex items-center justify-between gap-3 border-b border-stone-200 pb-1.5 dark:border-stone-800">
                            <span>المدرسة الشرعية (٣ طوابق)</span>
                            <span class="font-bold text-stone-900 dark:text-white">٨٢٥ م² / طابق</span>
                        </li>
                        <li class="flex items-center justify-between gap-3">
                            <span>المساحة الإجمالية للطابق</span>
                            <span class="font-bold text-amber-600 dark:text-amber-400">٨٥٠ م²</span>
                        </li>
                    </ul>
                </div>

                <!-- Classrooms -->
                <div class="rounded-3xl border border-stone-200 bg-stone-50 p-6 dark:border-stone-800 dark:bg-stone-900">
                    <div class="flex size-11 items-center justify-center rounded-xl bg-amber-500 text-stone-950 shadow-xs">
                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <p class="mt-4 text-xs font-bold text-amber-700 dark:text-amber-400">الصفوف الدراسية</p>
                    <p class="mt-1 text-lg font-bold text-stone-900 dark:text-white">١٦ صفاً لكل مدرسة</p>
                    <p class="mt-1 text-xs text-stone-500 dark:text-stone-400">ببهو دخول ودرج في كل طابق</p>
                </div>

                <!-- Mosque -->
                <div class="rounded-3xl border border-stone-200 bg-stone-50 p-6 sm:col-span-2 lg:col-span-3 dark:border-stone-800 dark:bg-stone-900">
                    <div class="flex flex-col items-start gap-4 sm:flex-row sm:items-center">
                        <div class="flex size-11 shrink-0 items-center justify-center rounded-xl bg-emerald-700 text-white shadow-xs">
                            <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-emerald-700 dark:text-emerald-400">الجامع</p>
                            <p class="mt-1 text-sm leading-relaxed text-stone-700 dark:text-stone-300">
                                قاعة صلاة ومحراب، ومدخل رئيسي مستقل، ومظلة وممرات خارجية، صُمّم لاستيعاب المصلين وطلاب العلم في الحلقات اليومية.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Architectural Plans Gallery -->
            <div class="mt-14">
                <div class="flex flex-wrap items-center justify-between gap-3 border-b border-stone-200 pb-4 dark:border-stone-800">
                    <h3 class="text-xl sm:text-2xl font-extrabold text-stone-900 dark:text-white">
                        المخططات والتصميمات المعمارية
                    </h3>
                    <span class="rounded-full bg-stone-100 px-3 py-1 text-xs font-semibold text-stone-600 dark:bg-stone-800 dark:text-stone-300">
                        ٢٠ مخططاً — اضغط على صورة لعرضها بالحجم الكامل
                    </span>
                </div>

                <div class="mt-6 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-4">
                    @foreach (range(1, 20) as $plan)
                        <button
                            type="button"
                            class="group relative overflow-hidden rounded-2xl border border-stone-200 bg-white p-2 shadow-xs transition hover:-translate-y-1 hover:border-emerald-500 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900"
                            data-plan-src="{{ asset('images/hama-' . $plan . '.jpg') }}"
                            data-plan-alt="مخطط المشروع رقم {{ $plan }}"
                        >
                            <img
                                src="{{ asset('images/hama-' . $plan . '.jpg') }}"
                                alt="مخطط المشروع — صفحة {{ $plan }}"
                                loading="lazy"
                                class="aspect-[4/3] w-full rounded-xl object-contain bg-stone-100 dark:bg-stone-800"
                            />
                            <span class="absolute bottom-4 start-4 rounded-lg bg-stone-900/80 px-2.5 py-1 text-[11px] font-bold text-white backdrop-blur-sm">
                                مخطط {{ $plan }}
                            </span>
                            <span class="absolute inset-0 flex items-center justify-center bg-emerald-900/0 text-transparent transition group-hover:bg-emerald-900/40 group-hover:text-white">
                                <svg class="size-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                </svg>
                            </span>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Simple Lightbox -->
        <div
            id="plan-lightbox"
            class="fixed inset-0 z-50 hidden items-center justify-center bg-stone-950/90 p-4 backdrop-blur-sm"
        >
            <button type="button" id="plan-lightbox-close" class="absolute top-5 end-5 flex size-11 items-center justify-center rounded-full bg-white/10 text-white hover:bg-white/20 transition" aria-label="إغلاق">
                <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img id="plan-lightbox-img" src="" alt="" class="max-h-[85vh] max-w-[92vw] rounded-2xl object-contain shadow-2xl" />
        </div>

        <script>
            const lightbox = document.getElementById('plan-lightbox');
            const lightboxImg = document.getElementById('plan-lightbox-img');
            const lightboxClose = document.getElementById('plan-lightbox-close');

            document.querySelectorAll('[data-plan-src]').forEach((card) => {
                card.addEventListener('click', () => {
                    lightboxImg.src = card.getAttribute('data-plan-src');
                    lightboxImg.alt = card.getAttribute('data-plan-alt');
                    lightbox.classList.remove('hidden');
                    lightbox.classList.add('flex');
                });
            });

            const closeLightbox = () => {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                lightboxImg.src = '';
            };

            lightboxClose.addEventListener('click', closeLightbox);
            lightbox.addEventListener('click', (event) => {
                if (event.target === lightbox) closeLightbox();
            });
            document.addEventListener('keydown', (event) => {
                if (event.key === 'Escape') closeLightbox();
            });
        </script>
    </section>

    <!-- Educational Tracks & Programs Section -->
    <section id="tracks" class="border-y border-stone-200/80 bg-stone-100/70 py-16 sm:py-24 dark:border-stone-800 dark:bg-stone-900/50">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6">
            <div class="text-center">
                <span class="inline-block rounded-full bg-emerald-100 px-4 py-1.5 text-xs font-bold text-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                    البرامج التعليمية
                </span>
                <h2 class="mt-3 text-2xl sm:text-4xl font-extrabold text-stone-900 dark:text-white">
                    نشاطات المجمع ومساراته العلمية
                </h2>
                <div class="mx-auto mt-3 h-1 w-20 rounded-full bg-emerald-600 bg-linear-to-r from-emerald-600 to-amber-500"></div>
                <p class="mx-auto mt-4 max-w-2xl text-stone-600 dark:text-stone-300">
                    منظومة تعليمية متكاملة تتدرج بالطالب من مرحلة التلقين والحفظ إلى الإتقان والتأصيل الشرعي الرصين.
                </p>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Track 1: Quran Hifz & Ijaza -->
                <div class="flex flex-col justify-between rounded-3xl border border-stone-200 bg-white p-7 shadow-xs hover:border-emerald-600 transition hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                    <div>
                        <div class="flex size-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-700 dark:bg-emerald-950 dark:text-emerald-400">
                            <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-stone-900 dark:text-white">تحفيظ القرآن الكريم والإجازات</h3>
                        <p class="mt-3 text-sm leading-relaxed text-stone-600 dark:text-stone-400">
                            حلقات يومية صباحية ومسائية للتحفيظ وضبط أحكام التجويد ومخارج الحروف، مع منح الإجازات القرآنية بالسند المتصل إلى رسول الله ﷺ.
                        </p>
                    </div>
                    <div class="mt-6 border-t border-stone-100 pt-4 dark:border-stone-800">
                        <span class="text-xs font-semibold text-emerald-700 dark:text-emerald-400">✦ سند متصل وإتقان تجويدي</span>
                    </div>
                </div>

                <!-- Track 2: Sharia Sciences -->
                <div class="flex flex-col justify-between rounded-3xl border border-stone-200 bg-white p-7 shadow-xs hover:border-emerald-600 transition hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                    <div>
                        <div class="flex size-12 items-center justify-center rounded-2xl bg-amber-50 text-amber-700 dark:bg-amber-950 dark:text-amber-400">
                            <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-stone-900 dark:text-white">العلوم الشرعية والتأصيل الفقهي</h3>
                        <p class="mt-3 text-sm leading-relaxed text-stone-600 dark:text-stone-400">
                            دراسة منهجية للمتون العلمية في الفقه، العقيدة، أصول الفقه، مصطلح الحديث، وتفسير القرآن الكريم على يد شيوخ متخصصين.
                        </p>
                    </div>
                    <div class="mt-6 border-t border-stone-100 pt-4 dark:border-stone-800">
                        <span class="text-xs font-semibold text-amber-700 dark:text-amber-400">✦ دراسة متدرجة للمتون المعتمدة</span>
                    </div>
                </div>

                <!-- Track 3: Arabic Language -->
                <div class="flex flex-col justify-between rounded-3xl border border-stone-200 bg-white p-7 shadow-xs hover:border-emerald-600 transition hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                    <div>
                        <div class="flex size-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-700 dark:bg-emerald-950 dark:text-emerald-400">
                            <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-stone-900 dark:text-white">ديوان اللغة العربية والبيان</h3>
                        <p class="mt-3 text-sm leading-relaxed text-stone-600 dark:text-stone-400">
                            حلقات تأسيسية ومتقدمة في النحو والصرف والبلاغة والإملاء، لإتقان لغة القرآن الكريم وتذوق أساليبها البيانية الرائعة.
                        </p>
                    </div>
                    <div class="mt-6 border-t border-stone-100 pt-4 dark:border-stone-800">
                        <span class="text-xs font-semibold text-emerald-700 dark:text-emerald-400">✦ لغة الضاد مفتاح فهم الوحي</span>
                    </div>
                </div>

                <!-- Track 4: Youth & Children -->
                <div class="flex flex-col justify-between rounded-3xl border border-stone-200 bg-white p-7 shadow-xs hover:border-emerald-600 transition hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                    <div>
                        <div class="flex size-12 items-center justify-center rounded-2xl bg-amber-50 text-amber-700 dark:bg-amber-950 dark:text-amber-400">
                            <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-stone-900 dark:text-white">برامج البراعم والناشئة</h3>
                        <p class="mt-3 text-sm leading-relaxed text-stone-600 dark:text-stone-400">
                            مناهج تربوية مبسطة للفتيان والناشئة تجمع بين حفظ قصار السور، والسيرة النبوية العطرة، وغرس الآداب والأخلاق الفاضلة.
                        </p>
                    </div>
                    <div class="mt-6 border-t border-stone-100 pt-4 dark:border-stone-800">
                        <span class="text-xs font-semibold text-amber-700 dark:text-amber-400">✦ تنشئة صالحة على مائدة القرآن</span>
                    </div>
                </div>

                <!-- Track 5: Intensive Seasons & Courses -->
                <div class="flex flex-col justify-between rounded-3xl border border-stone-200 bg-white p-7 shadow-xs hover:border-emerald-600 transition hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                    <div>
                        <div class="flex size-12 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-700 dark:bg-emerald-950 dark:text-emerald-400">
                            <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-stone-900 dark:text-white">الدورات الصيفية والمواسم العلمية</h3>
                        <p class="mt-3 text-sm leading-relaxed text-stone-600 dark:text-stone-400">
                            برامج صيفية وموسمية مكثفة لاستثمار أوقات العطلات في حفظ أجزاء من القرآن الكريم، ودراسة متون الفقه والحديث بإجازات معتمدة.
                        </p>
                    </div>
                    <div class="mt-6 border-t border-stone-100 pt-4 dark:border-stone-800">
                        <span class="text-xs font-semibold text-emerald-700 dark:text-emerald-400">✦ برامج مكثفة ومسابقات تشجيعية</span>
                    </div>
                </div>

                <!-- Track 6: Library & Makra'ah -->
                <div class="flex flex-col justify-between rounded-3xl border border-stone-200 bg-white p-7 shadow-xs hover:border-emerald-600 transition hover:-translate-y-1 hover:shadow-lg dark:border-stone-800 dark:bg-stone-900">
                    <div>
                        <div class="flex size-12 items-center justify-center rounded-2xl bg-amber-50 text-amber-700 dark:bg-amber-950 dark:text-amber-400">
                            <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                        </div>
                        <h3 class="mt-5 text-lg font-bold text-stone-900 dark:text-white">المقرأة والمكتبة العلمية</h3>
                        <p class="mt-3 text-sm leading-relaxed text-stone-600 dark:text-stone-400">
                            مكتبة شرعية تشتمل على أمهات كتب التفسير والحديث والفقه، إلى جانب مقرأة إلكترونية وحضورية لعرض القراءات والمراجعة.
                        </p>
                    </div>
                    <div class="mt-6 border-t border-stone-100 pt-4 dark:border-stone-800">
                        <span class="text-xs font-semibold text-amber-700 dark:text-amber-400">✦ مراجع أصيلة وقراءات متواترة</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Methodology & Educational Pillars -->
    <section id="pillars" class="py-16 sm:py-24 bg-stone-50 dark:bg-stone-950">
        <div class="mx-auto w-full max-w-6xl px-4 sm:px-6">
            <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                <div>
                    <span class="inline-block rounded-full bg-emerald-100 px-4 py-1.5 text-xs font-bold text-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                        منهجيتنا التعليمية
                    </span>
                    <h2 class="mt-3 text-2xl sm:text-4xl font-extrabold text-stone-900 dark:text-white leading-tight">
                        ركائز التعليم في مجمع الهامة الشرعي
                    </h2>
                    <p class="mt-4 text-stone-600 dark:text-stone-300 leading-relaxed text-base sm:text-lg">
                        يقوم المنهج التعليمي في المجمع على الجمع بين الرواية والدراية، وتحقيق التوازن بين الحفظ والاستيعاب والتطبيق العملي.
                    </p>

                    <div class="mt-8 space-y-5">
                        <div class="flex items-start gap-4">
                            <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-emerald-700 text-white shadow-xs">
                                1
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-stone-900 dark:text-white">التلقي المباشر والإسناد</h4>
                                <p class="mt-1 text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                                    تلقي القرآن الكريم والعلوم مشافهةً عن الشيوخ والعلماء المتقنين بالسند المتصل.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-emerald-700 text-white shadow-xs">
                                2
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-stone-900 dark:text-white">التدرج في المتون والمراحل</h4>
                                <p class="mt-1 text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                                    مراعاة الفروق الفردية والمستويات العمرية من خلال خطط دراسية مدروسة ومحكمة.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-emerald-700 text-white shadow-xs">
                                3
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-stone-900 dark:text-white">تزكية النفوس والأخلاق القرآنية</h4>
                                <p class="mt-1 text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                                    ربط العلم بالعمل الصالح، والحرص على بناء شخصية مسلمة متخلقة بأخلاق القرآن الكريم.
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="flex size-10 shrink-0 items-center justify-center rounded-xl bg-emerald-700 text-white shadow-xs">
                                4
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-stone-900 dark:text-white">المتابعة والتقويم المستمر</h4>
                                <p class="mt-1 text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                                    اختبارات دورية وتقارير مستمرة لأولياء الأمور لضمان ثبات الحفظ والتقدم العلمي.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Islamic Architectural Decorative Card -->
                <div class="relative overflow-hidden rounded-3xl border border-emerald-800/40 bg-emerald-950 bg-linear-to-br from-emerald-900 via-emerald-950 to-stone-900 p-8 sm:p-10 text-white shadow-2xl">
                    <div class="absolute -top-12 -left-12 size-60 rounded-full bg-amber-400/10 blur-2xl"></div>
                    <div class="relative space-y-6">
                        <div class="inline-flex size-14 items-center justify-center rounded-2xl bg-amber-400/20 text-amber-300 ring-1 ring-amber-400/30">
                            <x-app-logo-icon class="size-8" />
                        </div>

                        <h3 class="text-2xl font-bold text-amber-300">
                            وصية لطالب العلم
                        </h3>

                        <blockquote class="font-quran text-lg sm:text-xl font-light leading-relaxed text-emerald-100">
                            «مَنْ سَلَكَ طَرِيقًا يَلْتَمِسُ فِيهِ عِلْمًا، سَهَّلَ اللَّهُ لَهُ بِهِ طَرِيقًا إِلَى الْجَنَّةِ، وَإِنَّ الْمَلَائِكَةَ لَتَضَعُ أَجْنِحَتَهَا رِضًا لِطَالِبِ الْعِلْمِ».
                        </blockquote>

                        <p class="text-xs text-emerald-300/80">
                            رواه الإمام مسلم والترمذي
                        </p>

                        <div class="pt-4 border-t border-emerald-800/60">
                            <p class="text-sm text-stone-300">
                                نرحب بكل راغبٍ في التعلم والتفقه في الدين للانضمام إلى المجمع.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation & Support Call to Action Section -->
    <section class="relative overflow-hidden bg-emerald-900 bg-linear-to-r from-emerald-950 via-emerald-900 to-teal-950 py-16 text-white sm:py-20 islamic-pattern">
        <div class="relative mx-auto w-full max-w-5xl px-4 sm:px-6 text-center">
            <span class="inline-block rounded-full bg-amber-400/20 px-4 py-1.5 text-xs font-bold text-amber-300 ring-1 ring-amber-400/40">
                صدقة جارية وأجر دائم
            </span>
            <h2 class="mt-4 text-2xl sm:text-4xl font-extrabold">
                ساهم في بناء جيل القرآن ونشر العلم الشرعي
            </h2>
            <p class="mx-auto mt-4 max-w-2xl text-base sm:text-lg text-emerald-100/90 leading-relaxed font-light">
                تبرعك يدعم العملية التعليمية والتربوية، وتوفير المستلزمات والاحتياجيات، وكفالة طلاب وطالبات العلم.
            </p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                <a href="{{ route('donations') }}"
                    class="inline-flex items-center gap-2 rounded-2xl bg-amber-400 px-8 py-4 text-base font-extrabold text-stone-950 shadow-xl hover:bg-amber-300 hover:scale-105 active:scale-95 transition">
                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                        <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                    </svg>
                    <span>الانتقال لصفحة التبرع ودعم المجمع</span>
                </a>
            </div>
        </div>
    </section>

</x-layouts::site>
