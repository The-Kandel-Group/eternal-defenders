<?php

namespace App\Services;

use App\Models\CoreValues;
class CoreValuesService extends Service
{
    public function __construct(CoreValues $model)
    {
        parent::__construct($model);
    }

}
