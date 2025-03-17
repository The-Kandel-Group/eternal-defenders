<?php

namespace App\Services;

use App\Models\ServiceCategory;

class ServiceCategoryService extends Service
{
    public function __construct(ServiceCategory $model)
    {
        parent::__construct($model);
    }

}
