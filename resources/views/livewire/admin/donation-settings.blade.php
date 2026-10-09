<section class="w-full" dir="rtl">
    <div class="flex flex-wrap items-center justify-between gap-4">
        <div>
            <flux:heading level="2">إدارة التبرعات</flux:heading>
            <flux:subheading>تعديل حساب التبرعات والمبالغ المعروضة على صفحة التبرع العامة</flux:subheading>
        </div>

        <flux:button :href="route('donations')" variant="outline" icon="eye">
            عرض صفحة التبرع
        </flux:button>
    </div>

    <form wire:submit="update" class="mt-6 w-full max-w-lg space-y-6">
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

        <flux:input
            wire:model="currency"
            label="العملة"
            type="text"
            required
            autocomplete="off"
        />

        <div class="flex items-center gap-4">
            <flux:button variant="primary" type="submit">حفظ التعديلات</flux:button>
        </div>
    </form>
</section>
