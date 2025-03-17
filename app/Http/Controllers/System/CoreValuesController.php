<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\ResourceController;
use App\Services\CoreValuesService;
use App\Services\PostService;

class CoreValuesController extends ResourceController
{
    public function __construct(private readonly CoreValuesService $thisService)
    {
        parent::__construct($thisService);
    }

    public function storeValidationRequest()
    {
        return 'App\Http\Requests\System\CoreValuesRequest';
    }

    public function moduleName()
    {
        return 'core-values';
    }

    public function viewFolder()
    {
        return 'backend.system.core-values';
    }

}
