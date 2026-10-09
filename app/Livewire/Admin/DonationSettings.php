<?php

namespace App\Livewire\Admin;

use App\Models\DonationSetting;
use Flux\Flux;
use Illuminate\Support\Facades\Gate;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('إدارة التبرعات')]
class DonationSettings extends Component
{
    public string $account_name = '';

    public string $account_number = '';

    public string $target_amount = '';

    public string $collected_amount = '';

    public string $currency = '';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        Gate::authorize('admin');

        $setting = DonationSetting::current();

        $this->account_name = $setting->account_name;
        $this->account_number = $setting->account_number;
        $this->target_amount = (string) $setting->target_amount;
        $this->collected_amount = (string) $setting->collected_amount;
        $this->currency = $setting->currency;
    }

    /**
     * Update the donation settings shown on the public donation page.
     */
    public function update(): void
    {
        Gate::authorize('admin');

        $validated = $this->validate(
            $this->validationRules(),
            $this->validationMessages(),
            $this->validationAttributes(),
        );

        DonationSetting::current()->update([
            'account_name' => $validated['account_name'],
            'account_number' => $validated['account_number'],
            'target_amount' => (int) $validated['target_amount'],
            'collected_amount' => (int) $validated['collected_amount'],
            'currency' => $validated['currency'],
        ]);

        Flux::toast(variant: 'success', text: 'تم حفظ إعدادات التبرعات بنجاح');
    }

    /**
     * The validation rules for the donation settings form.
     *
     * @return array<string, array<int, string>>
     */
    private function validationRules(): array
    {
        return [
            'account_name' => ['required', 'string', 'max:100'],
            'account_number' => ['required', 'string', 'max:50'],
            'target_amount' => ['required', 'integer', 'min:0'],
            'collected_amount' => ['required', 'integer', 'min:0'],
            'currency' => ['required', 'string', 'max:20'],
        ];
    }

    /**
     * The Arabic validation messages for the donation settings form.
     *
     * @return array<string, string>
     */
    private function validationMessages(): array
    {
        return [
            'account_name.required' => 'حقل اسم الحساب مطلوب.',
            'account_name.string' => 'اسم الحساب غير صالح.',
            'account_name.max' => 'اسم الحساب لا يمكن أن يتجاوز 100 حرف.',
            'account_number.required' => 'حقل رقم الحساب مطلوب.',
            'account_number.string' => 'رقم الحساب غير صالح.',
            'account_number.max' => 'رقم الحساب لا يمكن أن يتجاوز 50 حرفاً.',
            'target_amount.required' => 'حقل المبلغ المراد جمعه مطلوب.',
            'target_amount.integer' => 'المبلغ المراد جمعه يجب أن يكون عدداً صحيحاً.',
            'target_amount.min' => 'المبلغ المراد جمعه لا يمكن أن يكون سالباً.',
            'collected_amount.required' => 'حقل المبلغ المحصل مطلوب.',
            'collected_amount.integer' => 'المبلغ المحصل يجب أن يكون عدداً صحيحاً.',
            'collected_amount.min' => 'المبلغ المحصل لا يمكن أن يكون سالباً.',
            'currency.required' => 'حقل العملة مطلوب.',
            'currency.string' => 'العملة غير صالحة.',
            'currency.max' => 'العملة لا يمكن أن تتجاوز 20 حرفاً.',
        ];
    }

    /**
     * The Arabic field labels for the donation settings form.
     *
     * @return array<string, string>
     */
    private function validationAttributes(): array
    {
        return [
            'account_name' => 'اسم الحساب',
            'account_number' => 'رقم الحساب',
            'target_amount' => 'المبلغ المراد جمعه',
            'collected_amount' => 'المبلغ المحصل',
            'currency' => 'العملة',
        ];
    }
}
