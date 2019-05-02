<?php

namespace App\Models;

use App\Tenant\TenantModels;
use App\Tenant\TenantScope;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Category extends Model implements Transformable
{
    use TransformableTrait;
    use TenantModels;

    protected $fillable = ['name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
