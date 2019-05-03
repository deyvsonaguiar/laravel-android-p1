<?php

namespace App\Models;

use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BillPay.
 *
 * @package namespace App\Models;
 */
class BillPay extends Model
{
    use TenantModels;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'date_due',
        'value',
        'done',
        'category_id'
    ];

    protected $dates = ['date_due'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function scopePaid($query)
    {
        return $query->where('done', true);
    }

}
