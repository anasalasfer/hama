<section class="w-full space-y-8" dir="rtl">
    <header class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
        <div class="flex items-start gap-4">
            <div class="flex size-12 shrink-0 items-center justify-center rounded-2xl bg-emerald-50 text-emerald-700 dark:bg-emerald-400/10 dark:text-emerald-300">
                <flux:icon name="heart" class="size-6" />
            </div>

            <div class="space-y-1">
                <flux:heading level="1" size="xl">إدارة التبرعات</flux:heading>
                <flux:subheading size="lg">حدّث بيانات الحساب وأهداف التبرع الظاهرة للزوار.</flux:subheading>
            </div>
        </div>

        <flux:button :href="route('donations')" variant="outline" icon="eye" class="shrink-0">
            عرض صفحة التبرع
        </flux:button>
    </header>

    <div class="overflow-hidden rounded-2xl border border-zinc-200 bg-white shadow-sm dark:border-zinc-800 dark:bg-zinc-900">
        <form wire:submit="update" class="space-y-8 p-5 sm:p-8">
            <div class="space-y-1">
                <flux:heading level="2" size="lg">بيانات التبرع</flux:heading>
                <flux:subheading>تظهر هذه المعلومات في صفحة التبرع العامة.</flux:subheading>
            </div>

            <div class="grid gap-6 sm:grid-cols-2">
                <flux:input
                    wire:model="account_name"
                    label="اسم الحساب"
                    type="text"
                    required
                    autocomplete="off"
                />

                <flux:input
                    wire:model="account_number"
                    label="رقم الحساب"
                    type="text"
                    required
                    autocomplete="off"
                />

                <flux:input
                    wire:model="target_amount"
                    label="المبلغ المراد جمعه"
                    type="number"
                    min="0"
                    required
                />

                <flux:input
                    wire:model="collected_amount"
                    label="المبلغ المحصَّل (المعروض على صفحة التبرع)"
                    type="number"
                    min="0"
                    required
                />

                <div class="sm:col-span-2">
                    <flux:input
                        wire:model="currency"
                        label="العملة"
                        type="text"
                        required
                        autocomplete="off"
                    />
                </div>
            </div>

            <div class="flex flex-col-reverse gap-3 border-t border-zinc-200 pt-6 dark:border-zinc-800 sm:flex-row sm:items-center sm:justify-between">
                <p class="text-sm text-zinc-500 dark:text-zinc-400">
                    راجع البيانات قبل حفظ التعديلات.
                </p>

                <flux:button variant="primary" type="submit">
                    حفظ التعديلات
                </flux:button>
            </div>
        </form>
    </div>
</section>
