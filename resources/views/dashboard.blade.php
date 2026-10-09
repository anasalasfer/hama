<x-layouts::app :title="__('لوحة التحكم')">
    <div class="mx-auto flex w-full max-w-6xl flex-1 flex-col gap-6 px-4 py-8 sm:px-6 lg:py-10">
        @php
            $target = $setting->target_amount;
            $collected = $setting->collected_amount;
            $remaining = $setting->remainingAmount();
            $progress = $setting->progressPercentage();

            $radius = 80;
            $circumference = 2 * pi() * $radius;
            $collectedFraction = $target > 0 ? min($collected / $target, 1) : 0;
            $dash = $collectedFraction * $circumference;
        @endphp

        <!-- Page Header -->
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-extrabold tracking-tight text-stone-900 dark:text-white sm:text-3xl">
                    مرحباً، {{ auth()->user()->name }}
                </h1>
                <p class="mt-1 text-sm leading-relaxed text-stone-500 dark:text-stone-400">
                    ملخّص تبرعات مجمع الهامة الشرعي التعليمي — {{ now()->translatedFormat('l d F Y') }}
                </p>
            </div>

            <div class="flex flex-wrap items-center gap-3">
                @can('admin')
                    <flux:button :href="route('admin.donations.edit')" icon="pencil-square" variant="ghost" wire:navigate>
                        إدارة التبرعات
                    </flux:button>
                @endcan

                <flux:button :href="route('donations')" variant="primary" wire:navigate>
                    صفحة التبرعات العامة
                </flux:button>
            </div>
        </div>

        <!-- Stat Cards -->
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-2xl border border-stone-200 bg-white p-5 shadow-xs dark:border-stone-800 dark:bg-stone-900">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-bold text-stone-500 dark:text-stone-400">المبلغ المستهدف</p>
                    <x-app-logo-icon class="size-6 text-emerald-700 dark:text-emerald-400" />
                </div>
                <p class="mt-3 text-2xl font-black tracking-tight text-stone-900 dark:text-white">
                    {{ number_format($target) }}
                    <span class="text-sm font-bold text-stone-400 dark:text-stone-500">{{ $setting->currency }}</span>
                </p>
            </div>

            <div class="rounded-2xl border border-emerald-200 bg-emerald-50/60 p-5 shadow-xs dark:border-emerald-800/60 dark:bg-emerald-950/40">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-bold text-emerald-800 dark:text-emerald-300">المبلغ المحصَّل</p>
                    <svg class="size-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="mt-3 text-2xl font-black tracking-tight text-emerald-800 dark:text-emerald-300">
                    {{ number_format($collected) }}
                    <span class="text-sm font-bold text-emerald-700/70 dark:text-emerald-400/80">{{ $setting->currency }}</span>
                </p>
            </div>

            <div class="rounded-2xl border border-amber-200 bg-amber-50/60 p-5 shadow-xs dark:border-amber-800/60 dark:bg-amber-950/40">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-bold text-amber-800 dark:text-amber-300">المتبقي (النقص)</p>
                    <svg class="size-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <p class="mt-3 text-2xl font-black tracking-tight text-amber-800 dark:text-amber-300">
                    {{ number_format($remaining) }}
                    <span class="text-sm font-bold text-amber-700/70 dark:text-amber-400/80">{{ $setting->currency }}</span>
                </p>
            </div>

            <div class="rounded-2xl border border-stone-200 bg-white p-5 shadow-xs dark:border-stone-800 dark:bg-stone-900">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-bold text-stone-500 dark:text-stone-400">نسبة الإنجاز</p>
                    <svg class="size-6 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </div>
                <p class="mt-3 text-2xl font-black tracking-tight text-stone-900 dark:text-white">
                    {{ $progress }}%
                </p>
            </div>
        </div>

        <!-- Charts Row -->
        <div class="grid gap-4 lg:grid-cols-5">
            <!-- Donut Chart: إنجاز التبرع مقابل النقص -->
            <div class="rounded-2xl border border-stone-200 bg-white p-6 shadow-xs dark:border-stone-800 dark:bg-stone-900 lg:col-span-3">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-lg font-extrabold text-stone-900 dark:text-white">التبرعات مقابل النقص</h2>
                        <p class="mt-0.5 text-sm text-stone-500 dark:text-stone-400">نسبة ما تم جمعه من الهدف مقابل المتبقي</p>
                    </div>
                </div>

                <div class="mt-6 flex flex-col items-center gap-6 sm:flex-row sm:justify-center sm:gap-10">
                    <!-- Donut -->
                    <div class="relative size-52 shrink-0" role="img" aria-label="مخطط دائري لنسبة التبرعات المحصلة">
                        <svg viewBox="0 0 200 200" class="size-full -rotate-90">
                            <circle cx="100" cy="100" r="{{ $radius }}" fill="none" stroke-width="20" class="stroke-stone-100 dark:stroke-stone-800" />
                            <circle
                                cx="100"
                                cy="100"
                                r="{{ $radius }}"
                                fill="none"
                                stroke-width="20"
                                stroke-linecap="{{ $progress > 0 ? 'round' : 'butt' }}"
                                stroke-dasharray="{{ $dash }} {{ $circumference }}"
                                class="stroke-emerald-500 transition-all duration-700"
                            />
                        </svg>
                        <div class="absolute inset-0 flex flex-col items-center justify-center">
                            <p class="text-4xl font-black text-stone-900 dark:text-white">{{ $progress }}%</p>
                            <p class="mt-1 text-xs font-bold text-stone-500 dark:text-stone-400">من الهدف</p>
                        </div>
                    </div>

                    <!-- Legend -->
                    <div class="grid w-full gap-4 sm:max-w-xs">
                        <div class="flex items-center justify-between gap-3 rounded-xl border border-stone-100 bg-stone-50 px-4 py-3 dark:border-stone-800 dark:bg-stone-800/60">
                            <span class="flex items-center gap-2 text-sm font-bold text-stone-700 dark:text-stone-300">
                                <span class="size-3 rounded-full bg-emerald-500"></span>
                                المحصَّل
                            </span>
                            <span class="text-sm font-black tracking-tight text-emerald-700 dark:text-emerald-400">
                                {{ number_format($collected) }}
                            </span>
                        </div>

                        <div class="flex items-center justify-between gap-3 rounded-xl border border-stone-100 bg-stone-50 px-4 py-3 dark:border-stone-800 dark:bg-stone-800/60">
                            <span class="flex items-center gap-2 text-sm font-bold text-stone-700 dark:text-stone-300">
                                <span class="size-3 rounded-full border-4 border-amber-300 bg-transparent"></span>
                                النقص المتبقي
                            </span>
                            <span class="text-sm font-black tracking-tight text-amber-700 dark:text-amber-400">
                                {{ number_format($remaining) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress Summary -->
            <div class="relative overflow-hidden rounded-2xl border border-emerald-900/30 bg-emerald-950 bg-linear-to-br from-emerald-900 via-emerald-950 to-stone-900 p-6 text-white shadow-xl dark:border-emerald-800/60 lg:col-span-2">
                <div class="pointer-events-none absolute -top-10 -left-10 size-40 rounded-full bg-amber-400/10 blur-2xl"></div>

                <div class="relative">
                    <h2 class="text-lg font-extrabold">سير حملة الجمع</h2>
                    <p class="mt-0.5 text-sm text-emerald-100/80">كل جنيه يقربنا خطوة لإتمام مشروع المجمع</p>

                    <!-- Big progress bar -->
                    <div class="mt-6">
                        <div class="flex items-end justify-between">
                            <p class="text-4xl font-black text-amber-300">{{ $progress }}%</p>
                            <p class="text-sm font-bold text-emerald-100">
                                <span class="text-amber-300">{{ number_format($collected) }}</span> من {{ number_format($target) }} {{ $setting->currency }}
                            </p>
                        </div>
                        <div class="mt-3 h-4 w-full overflow-hidden rounded-full bg-emerald-900/70 p-0.5">
                            <div
                                class="h-full rounded-full bg-amber-400 bg-linear-to-r from-amber-300 to-amber-500 transition-all duration-700"
                                style="width: {{ $progress }}%"
                            ></div>
                        </div>
                    </div>

                    <div class="mt-6 space-y-3 text-sm">
                        <div class="flex items-center justify-between rounded-xl bg-emerald-900/50 px-4 py-2.5">
                            <span class="font-bold text-emerald-100">المبلغ المحصَّل</span>
                            <span class="font-black text-white">{{ number_format($collected) }} {{ $setting->currency }}</span>
                        </div>
                        <div class="flex items-center justify-between rounded-xl bg-emerald-900/50 px-4 py-2.5">
                            <span class="font-bold text-emerald-100">المبلغ المتبقي</span>
                            <span class="font-black text-amber-300">{{ number_format($remaining) }} {{ $setting->currency }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="grid gap-4 sm:grid-cols-2">
            <a href="{{ route('donations') }}" wire:navigate
                class="group flex items-center gap-4 rounded-2xl border border-stone-200 bg-white p-5 shadow-xs transition hover:-translate-y-0.5 hover:border-emerald-500 hover:shadow-md dark:border-stone-800 dark:bg-stone-900 dark:hover:border-emerald-600">
                <span class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-emerald-100 text-emerald-700 transition group-hover:bg-emerald-600 group-hover:text-white dark:bg-emerald-950 dark:text-emerald-400">
                    <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>
                <span>
                    <span class="block font-extrabold text-stone-900 dark:text-white">صفحة التبرعات العامة</span>
                    <span class="mt-0.5 block text-sm text-stone-500 dark:text-stone-400">عرض بيانات الحساب وتشجيع المحسنين على الدعم</span>
                </span>
            </a>

            @can('admin')
                <a href="{{ route('admin.donations.edit') }}" wire:navigate
                    class="group flex items-center gap-4 rounded-2xl border border-stone-200 bg-white p-5 shadow-xs transition hover:-translate-y-0.5 hover:border-amber-500 hover:shadow-md dark:border-stone-800 dark:bg-stone-900 dark:hover:border-amber-600">
                    <span class="flex size-12 shrink-0 items-center justify-center rounded-xl bg-amber-100 text-amber-700 transition group-hover:bg-amber-500 group-hover:text-white dark:bg-amber-950 dark:text-amber-400">
                        <svg class="size-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </span>
                    <span>
                        <span class="block font-extrabold text-stone-900 dark:text-white">إدارة بيانات التبرعات</span>
                        <span class="mt-0.5 block text-sm text-stone-500 dark:text-stone-400">تحديث الحساب والمبالغ والإشراف على الحملة</span>
                    </span>
                </a>
            @endcan
        </div>
    </div>
</x-layouts::app>