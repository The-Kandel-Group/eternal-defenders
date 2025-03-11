<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\ResourceController;
use App\Services\VacancyApplicationService;

class  VacancyApplicationController extends ResourceController
{
    public function __construct(private readonly VacancyApplicationService $thisService)
    {
        parent::__construct($thisService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\System\VacancyApplicationRequest';
    }

    public function moduleName()
    {
        return 'vacancy-applications';
    }

    public function viewFolder()
    {
        return 'backend.system.vacancy-applications';
    }

}
