<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\ResourceController;
use App\Services\ServiceCategoryService;

class ServiceCategoryController extends ResourceController
{
    public function __construct(private readonly ServiceCategoryService $thisService)
    {
        parent::__construct($thisService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\System\ServiceCategoryRequest';
    }

    public function moduleName()
    {
        return 'service-categories';
    }

    public function viewFolder()
    {
        return 'backend.system.service-categories';
    }

}
