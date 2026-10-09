<x-layouts::site title="دعم المجمع - تبرع">
    <section class="mx-auto w-full max-w-4xl px-4 py-12 sm:px-6 sm:py-16">
        <!-- Header -->
        <div class="text-center">
            <span class="inline-block rounded-full bg-emerald-100 px-4 py-1.5 text-xs font-bold text-emerald-800 dark:bg-emerald-950 dark:text-emerald-300">
                صدقة جارية
            </span>
            <h1 class="mt-3 text-3xl font-extrabold text-stone-900 dark:text-white sm:text-4xl">
                ساهم في دعم مجمع الهامة الشرعي التعليمي
            </h1>
            <div class="mx-auto mt-3 h-1 w-20 rounded-full bg-emerald-600 bg-linear-to-r from-emerald-600 to-amber-500"></div>
            <p class="mx-auto mt-4 max-w-2xl text-base leading-relaxed text-stone-600 dark:text-stone-300">
                تبرّعك يُواصل مشوار حلقات القرآن والعلوم الشرعية في المجمع. حوِّل إلى الحساب أدناه،
                ثمّ أبلغ إدارة المجمع بعد التحويل ليُحدَّث المبلغ المحصَّل على الصفحة.
            </p>
        </div>

        <!-- Bank Account Card -->
        <div class="mt-10 overflow-hidden rounded-3xl border-2 border-emerald-700/30 bg-emerald-950 bg-linear-to-br from-emerald-900 via-emerald-950 to-stone-950 p-6 text-white shadow-xl sm:p-8">
            <div class="flex flex-col items-start justify-between gap-5 sm:flex-row sm:items-center">
                <div>
                    <span class="inline-flex items-center gap-1.5 rounded-lg bg-emerald-800/80 px-3 py-1 text-xs font-semibold text-amber-300">
                        <svg class="size-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        حساب {{ $setting->account_name }}
                    </span>
                    <p class="mt-3 font-mono text-2xl font-black tracking-wider text-amber-300 sm:text-3xl" dir="ltr">
                        {{ $setting->account_number }}
                    </p>
                </div>

                <button
                    type="button"
                    class="inline-flex items-center gap-2 rounded-2xl bg-amber-400 px-5 py-3 text-sm font-extrabold text-stone-950 shadow-md hover:bg-amber-300 hover:scale-105 active:scale-95 transition"
                    data-copy-account="{{ $setting->account_number }}"
                >
                    <svg class="size-4 text-stone-950" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                    </svg>
                    <span data-copy-label>نسخ رقم الحساب</span>
                </button>
            </div>
        </div>

        <!-- Donation Metrics -->
        <div class="mt-8 grid gap-4 sm:grid-cols-3">
            <div class="rounded-3xl border border-stone-200 bg-white p-6 text-center shadow-xs dark:border-stone-800 dark:bg-stone-900">
                <p class="text-xs font-bold text-stone-500 dark:text-stone-400">المبلغ المراد جمعه</p>
                <p class="mt-2 text-2xl font-black text-stone-900 dark:text-white">
                    {{ number_format($setting->target_amount) }}
                    <span class="text-sm font-bold text-stone-500 dark:text-stone-400">{{ $setting->currency }}</span>
                </p>
            </div>

            <div class="rounded-3xl border-2 border-emerald-600/30 bg-emerald-50/50 p-6 text-center shadow-xs dark:border-emerald-700/50 dark:bg-emerald-950/40">
                <p class="text-xs font-bold text-emerald-800 dark:text-emerald-300">المبلغ المحصَّل</p>
                <p class="mt-2 text-2xl font-black text-emerald-700 dark:text-emerald-400">
                    {{ number_format($setting->collected_amount) }}
                    <span class="text-sm font-bold text-emerald-800 dark:text-emerald-300">{{ $setting->currency }}</span>
                </p>
            </div>

            <div class="rounded-3xl border border-stone-200 bg-white p-6 text-center shadow-xs dark:border-stone-800 dark:bg-stone-900">
                <p class="text-xs font-bold text-amber-700 dark:text-amber-400">المبلغ المتبقي</p>
                <p class="mt-2 text-2xl font-black text-amber-600 dark:text-amber-400">
                    {{ number_format($setting->remainingAmount()) }}
                    <span class="text-sm font-bold text-stone-500 dark:text-stone-400">{{ $setting->currency }}</span>
                </p>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="mt-8 rounded-3xl border border-stone-200 bg-white p-6 shadow-xs dark:border-stone-800 dark:bg-stone-900">
            <div class="mb-3 flex items-center justify-between text-sm">
                <span class="font-bold text-stone-700 dark:text-stone-300">نسبة الإنجاز المحققة</span>
                <span class="font-black text-emerald-700 dark:text-emerald-400">{{ $setting->progressPercentage() }}%</span>
            </div>
            <div class="h-4 w-full overflow-hidden rounded-full bg-stone-100 p-0.5 dark:bg-stone-800">
                <div
                    class="h-full rounded-full bg-emerald-600 bg-linear-to-r from-emerald-600 to-amber-500 transition-all duration-500"
                    style="width: {{ $setting->progressPercentage() }}%"
                ></div>
            </div>
        </div>

        <!-- Note -->
        <div class="mt-8 rounded-2xl border border-amber-300/40 bg-amber-50/80 p-5 text-center text-sm leading-6 text-amber-900 dark:border-amber-700/30 dark:bg-amber-950/40 dark:text-amber-200">
            <span class="font-bold">ملاحظة مهمة:</span> بعد إتمام التحويل، ستقوم إدارة المجمع بتحديث المبلغ المحصَّل على الصفحة وتثبيت مساهمتك الكريمة.
        </div>
    </section>

    <script>
        document.querySelectorAll('[data-copy-account]').forEach((button) => {
            button.addEventListener('click', async () => {
                const accountNumber = button.getAttribute('data-copy-account');

                try {
                    await navigator.clipboard.writeText(accountNumber);
                } catch (error) {
                    const input = document.createElement('textarea');
                    input.value = accountNumber;
                    document.body.appendChild(input);
                    input.select();
                    document.execCommand('copy');
                    input.remove();
                }

                const label = button.querySelector('[data-copy-label]');
                const originalLabel = label.textContent;
                label.textContent = 'تم النسخ بنجاح ✓';

                setTimeout(() => {
                    label.textContent = originalLabel;
                }, 2000);
            });
        });
    </script>
</x-layouts::site>
