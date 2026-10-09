@props([
    'title' => null,
])

<!DOCTYPE html>
<html lang="ar" dir="rtl" class="scroll-smooth">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-stone-50 font-sans text-stone-800 antialiased selection:bg-emerald-600 selection:text-white dark:bg-stone-950 dark:text-stone-100">
        
        <!-- Top Bar with Islamic Greeting and Information -->
        <div class="border-b border-emerald-900/10 bg-emerald-900 px-4 py-2 text-xs font-medium text-emerald-100 dark:border-emerald-800/40 dark:bg-emerald-950">
            <div class="mx-auto flex max-w-6xl items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="inline-block size-2 rounded-full bg-amber-400 animate-pulse"></span>
                    <span class="font-quran text-sm text-amber-300">بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</span>
                    <span class="hidden text-emerald-200/80 sm:inline">— منارةٌ للقرآن الكريم والعلوم الشرعية</span>
                </div>
                <div class="flex items-center gap-4 text-emerald-200">
                    <span class="hidden items-center gap-1.5 md:flex">
                        <svg class="size-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        حلقات يومية صباحية ومسائية
                    </span>
                    <span class="flex items-center gap-1 text-amber-300">
                        <svg class="size-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        الهامة
                    </span>
                </div>
            </div>
        </div>

        <!-- Main Header & Navigation -->
        <header class="sticky top-0 z-40 border-b border-stone-200/80 bg-white/95 backdrop-blur-md dark:border-stone-800 dark:bg-stone-900/95 shadow-xs">
            <div class="mx-auto flex h-20 w-full max-w-6xl items-center justify-between gap-4 px-4 sm:px-6">
                <!-- Logo & Title -->
                <a href="{{ route('home') }}" class="group flex items-center gap-3 transition">
                    <div class="flex size-12 shrink-0 items-center justify-center rounded-2xl bg-emerald-800 bg-linear-to-br from-emerald-700 to-emerald-900 text-amber-300 shadow-md shadow-emerald-900/20 ring-2 ring-amber-400/30 group-hover:scale-105 transition-transform duration-300">
                        <x-app-logo-icon class="size-7" />
                    </div>
                    <div>
                        <span class="block text-base font-extrabold tracking-tight text-emerald-950 dark:text-emerald-300 sm:text-lg">
                            مجمع الهامة الشرعي التعليمي
                        </span>
                        <span class="block text-xs font-medium text-stone-500 dark:text-stone-400">
                            صرحٌ قرآنيٌّ وتربويٌّ رائد
                        </span>
                    </div>
                </a>

                <!-- Navigation Links -->
                <nav class="hidden md:flex items-center gap-1 lg:gap-2">
                    <a href="{{ route('home') }}"
                        class="rounded-xl px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('home') ? 'bg-emerald-50 text-emerald-800 dark:bg-emerald-950/70 dark:text-emerald-300 ring-1 ring-emerald-600/20' : 'text-stone-700 hover:bg-stone-100 hover:text-emerald-700 dark:text-stone-300 dark:hover:bg-stone-800 dark:hover:text-emerald-400' }}">
                        الرئيسية
                    </a>
                    <a href="{{ route('home') }}#about"
                        class="rounded-xl px-4 py-2 text-sm font-semibold text-stone-700 hover:bg-stone-100 hover:text-emerald-700 dark:text-stone-300 dark:hover:bg-stone-800 dark:hover:text-emerald-400 transition">
                        عن المجمع
                    </a>
                    <a href="{{ route('home') }}#project"
                        class="rounded-xl px-4 py-2 text-sm font-semibold text-stone-700 hover:bg-stone-100 hover:text-emerald-700 dark:text-stone-300 dark:hover:bg-stone-800 dark:hover:text-emerald-400 transition">
                        بيانات المشروع
                    </a>
                    <a href="{{ route('home') }}#tracks"
                        class="rounded-xl px-4 py-2 text-sm font-semibold text-stone-700 hover:bg-stone-100 hover:text-emerald-700 dark:text-stone-300 dark:hover:bg-stone-800 dark:hover:text-emerald-400 transition">
                        الانشطة والبرامج
                    </a>
                    <a href="{{ route('home') }}#pillars"
                        class="rounded-xl px-4 py-2 text-sm font-semibold text-stone-700 hover:bg-stone-100 hover:text-emerald-700 dark:text-stone-300 dark:hover:bg-stone-800 dark:hover:text-emerald-400 transition">
                        منهجيتنا
                    </a>
                    <a href="{{ route('donations') }}"
                        class="relative rounded-xl px-4 py-2 text-sm font-semibold transition {{ request()->routeIs('donations') ? 'bg-amber-500 text-stone-950 font-bold shadow-xs' : 'text-emerald-800 bg-emerald-100/70 hover:bg-emerald-200/80 dark:bg-emerald-900/50 dark:text-emerald-200 dark:hover:bg-emerald-900/80' }}">
                        <span class="flex items-center gap-1.5">
                            <svg class="size-4 text-amber-600 dark:text-amber-400 {{ request()->routeIs('donations') ? 'text-stone-950' : '' }}" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                                <path fill-rule="evenodd" d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" clip-rule="evenodd" />
                            </svg>
                            دعم المجمع (تبرع)
                        </span>
                    </a>
                </nav>

                <!-- Auth / Call to action -->
                <div class="flex items-center gap-2 sm:gap-3">
                    <a href="{{ route('donations') }}" class="md:hidden inline-flex items-center gap-1 rounded-xl bg-amber-500 px-3 py-2 text-xs font-bold text-stone-950 shadow-xs hover:bg-amber-400 transition">
                        تبرع
                    </a>

                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="inline-flex items-center gap-2 rounded-xl border border-emerald-700/30 bg-emerald-800 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-700 transition dark:border-emerald-600 dark:bg-emerald-700 dark:hover:bg-emerald-600">
                            <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            لوحة التحكم
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-flex items-center gap-1.5 rounded-xl border border-stone-300 bg-white px-3.5 py-2 text-sm font-semibold text-stone-700 shadow-2xs hover:border-emerald-600 hover:text-emerald-700 dark:border-stone-700 dark:bg-stone-800 dark:text-stone-200 dark:hover:border-emerald-500 dark:hover:text-emerald-400 transition">
                            <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            دخول
                        </a>
                    @endauth
                </div>
            </div>
        </header>

        <!-- Page Main Content Slot -->
        <main class="relative">
            {{ $slot }}
        </main>

        <!-- Footer Section -->
        <footer class="border-t border-emerald-950/20 bg-stone-900 text-stone-300 dark:border-stone-800 dark:bg-stone-950">
            <!-- Quranic Quote Banner in Footer -->
            <div class="border-b border-stone-800 bg-emerald-950/60 px-4 py-8 text-center">
                <div class="mx-auto max-w-4xl">
                    <p class="font-quran text-xl font-normal leading-relaxed text-amber-300/95 sm:text-2xl">
                        ﴿ وَقُل رَّبِّ زِدْنِي عِلْمًا ﴾
                    </p>
                    <p class="mt-2 text-xs text-emerald-200/80 sm:text-sm">
                        قال رسول الله ﷺ: «خَيْرُكُمْ مَنْ تَعَلَّمَ الْقُرْآنَ وَعَلَّمَهُ» — رواه البخاري
                    </p>
                </div>
            </div>

            <div class="mx-auto w-full max-w-6xl px-4 py-12 sm:px-6 lg:py-16">
                <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Column 1: About the Academy -->
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <div class="flex size-10 items-center justify-center rounded-xl bg-emerald-800 text-amber-300 shadow-xs">
                                <x-app-logo-icon class="size-6" />
                            </div>
                            <div>
                                <span class="font-bold text-white">مجمع الهامة</span>
                                <span class="block text-xs text-amber-400">الشرعي التعليمي</span>
                            </div>
                        </div>
                        <p class="text-xs leading-relaxed text-stone-400">
                            مؤسسة تعليمية وتربوية تُعنى بحفظ القرآن الكريم وتعليم العلوم الشرعية واللغة العربية، لبناء جيل قرآني متزن ونافع لمجتمعه وأمته.
                        </p>
                        <div class="pt-2 text-xs text-amber-300/90 font-medium">
                            ✦ علمٌ مؤصّل .. وخُلقٌ فاضل
                        </div>
                    </div>

                    <!-- Column 2: Quick Links -->
                    <div>
                        <h4 class="text-sm font-bold tracking-wide text-white border-b border-emerald-700/40 pb-2 inline-block">
                            روابط سريعة
                        </h4>
                        <ul class="mt-4 space-y-2.5 text-xs text-stone-400">
                            <li>
                                <a href="{{ route('home') }}" class="hover:text-amber-300 transition">الصفحة الرئيسية</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}#about" class="hover:text-amber-300 transition">عن المجمع ورؤيته</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}#tracks" class="hover:text-amber-300 transition">الأقسام التعليمية والحلقات</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}#pillars" class="hover:text-amber-300 transition">منهجية التعليم والتأصيل</a>
                            </li>
                            <li>
                                <a href="{{ route('donations') }}" class="text-amber-400 hover:text-amber-300 transition">دعم المجمع وتبرعاته</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Column 3: Academic Programs -->
                    <div>
                        <h4 class="text-sm font-bold tracking-wide text-white border-b border-emerald-700/40 pb-2 inline-block">
                            البرامج والحلقات
                        </h4>
                        <ul class="mt-4 space-y-2.5 text-xs text-stone-400">
                            <li class="flex items-center gap-1.5">
                                <span class="size-1.5 rounded-full bg-emerald-500"></span>
                                <span>حلقات تحفيظ القرآن الكريم</span>
                            </li>
                            <li class="flex items-center gap-1.5">
                                <span class="size-1.5 rounded-full bg-emerald-500"></span>
                                <span>الإجازات القرآنية بالسند المتصل</span>
                            </li>
                            <li class="flex items-center gap-1.5">
                                <span class="size-1.5 rounded-full bg-emerald-500"></span>
                                <span>دروس الفقه والعقيدة والتفسير</span>
                            </li>
                            <li class="flex items-center gap-1.5">
                                <span class="size-1.5 rounded-full bg-emerald-500"></span>
                                <span>علوم اللغة العربية والنحو</span>
                            </li>
                            <li class="flex items-center gap-1.5">
                                <span class="size-1.5 rounded-full bg-emerald-500"></span>
                                <span>حلقات البراعم والناشئة</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Column 4: Contact & Location -->
                    <div>
                        <h4 class="text-sm font-bold tracking-wide text-white border-b border-emerald-700/40 pb-2 inline-block">
                            التواصل والاستفسار
                        </h4>
                        <div class="mt-4 space-y-3 text-xs text-stone-400">
                            <p class="flex items-start gap-2">
                                <svg class="size-4 shrink-0 text-amber-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>مقر المجمع — الهامة</span>
                            </p>
                            <p class="flex items-center gap-2">
                                <svg class="size-4 shrink-0 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>استقبال الطلاب وأولياء الأمور يومياً</span>
                            </p>
                            <div class="pt-3">
                                <a href="{{ route('donations') }}" class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-amber-500 bg-linear-to-r from-amber-500 to-amber-600 px-4 py-2.5 font-bold text-stone-950 shadow-xs hover:from-amber-400 hover:to-amber-500 transition">
                                    <span>ساهم في صدقة جارية</span>
                                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-stone-800 pt-8 text-center text-xs text-stone-500 sm:flex-row">
                    <p>جميع الحقوق محفوظة © {{ now()->year }} مجمع الهامة الشرعي التعليمي.</p>
                    <p class="text-stone-400">نسأل الله الإخلاص والقبول والتوفيق والسداد.</p>
                </div>
            </div>
        </footer>

        @fluxScripts
    </body>
</html>
