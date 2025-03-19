<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\ResourceController;
use App\Services\ServiceCategoryService;
use App\Services\ServicesService;

class ServicesController extends ResourceController
{
    public function __construct(private readonly ServicesService $thisService)
    {
        parent::__construct($thisService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\System\ServicesRequest';
    }

    public function moduleName()
    {
        return 'services';
    }

    public function viewFolder()
    {
        return 'backend.system.services';
    }

}
