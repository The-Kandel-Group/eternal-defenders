<?php

namespace App\Services;

use App\Models\ServiceCategory;
use App\Models\Services;
use Illuminate\Support\Facades\Schema;

class ServicesService extends Service
{
    public function __construct(Services $model)
    {
        parent::__construct($model);
    }

    public function indexPageData($request)
    {
        return [
            'categories' => ServiceCategory::orderby('title', 'asc')->get(),
            'thisDatas' => $this->getAllData($request),
        ];
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        $keyword = $data->get('keyword');
        $show = $data->get('show');
        $categoryId = $data->get('service_category_id');
        $query = $this->query();
        if (count($selectedColumns) > 0) {
            $query->select($selectedColumns);
        }
        $table = $this->model->getTable();
        if ($keyword) {
            if (Schema::hasColumn($table, 'title')) {
                $query->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($keyword) . '%']);
            }
        }
        if ($categoryId) {
            $query->where('service_category_id', $categoryId);
        }
        if ($pagination) {
            return $query->orderBy('created_at', 'DESC')->paginate($show ?? 10);
        } else {
            return $query->orderBy('created_at', 'DESC')->get();
        }
    }

    public function createPageData($request)
    {
        return [
            'categories' => ServiceCategory::orderby('title', 'asc')->get(),
        ];
    }

    public function editPageData($request, $id)
    {
        return [
            'categories' => ServiceCategory::orderby('title', 'asc')->get(),
            'thisData' => $this->itemByIdentifier($id),
        ];
    }

}
