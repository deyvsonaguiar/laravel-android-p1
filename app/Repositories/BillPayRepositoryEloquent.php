<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\BillPayRepository;
use App\Models\BillPay;
use App\Validators\BillPayValidator;

/**
 * Class BillPayRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class BillPayRepositoryEloquent extends BaseRepository implements BillPayRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return BillPay::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
