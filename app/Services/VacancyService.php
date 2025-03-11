<?php

namespace App\Services;

use App\Models\Vacancy;

class VacancyService extends Service
{
    public function __construct(Vacancy $model)
    {
        parent::__construct($model);
    }
}
