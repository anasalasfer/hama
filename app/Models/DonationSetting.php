<?php

namespace App\Models;

use Database\Factories\DonationSettingFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $account_name
 * @property string $account_number
 * @property int $target_amount
 * @property int $collected_amount
 * @property string $currency
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable(['account_name', 'account_number', 'target_amount', 'collected_amount', 'currency'])]
class DonationSetting extends Model
{
    /** @use HasFactory<DonationSettingFactory> */
    use HasFactory;

    /**
     * Get the single donation settings row, creating it with its database defaults on first use.
     *
     * The freshly created row is refreshed so the database defaults hydrate the model attributes.
     */
    public static function current(): self
    {
        return static::query()->first() ?? static::query()->create()->refresh();
    }

    /**
     * The amount still needed to reach the target.
     */
    public function remainingAmount(): int
    {
        return max($this->target_amount - $this->collected_amount, 0);
    }

    /**
     * The collected share of the target as a percentage capped at 100.
     */
    public function progressPercentage(): int
    {
        if ($this->target_amount <= 0) {
            return 0;
        }

        return min((int) round($this->collected_amount / $this->target_amount * 100), 100);
    }
}
