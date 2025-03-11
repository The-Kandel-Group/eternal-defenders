<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\ResourceController;
use App\Services\VacancyService;

class VacancyController extends ResourceController
{
    public function __construct(private readonly VacancyService $thisService)
    {
        parent::__construct($thisService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\System\VacancyRequest';
    }

    public function moduleName()
    {
        return 'vacancies';
    }

    public function viewFolder()
    {
        return 'backend.system.vacancies';
    }

}
