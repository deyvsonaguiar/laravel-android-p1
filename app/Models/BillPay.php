<?php

namespace App\Models;

use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class BillPay.
 *
 * @package namespace App\Models;
 */
class BillPay extends Model implements Transformable
{
    use TransformableTrait;
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

}
