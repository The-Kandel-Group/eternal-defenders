<?php

namespace App\Services;

use App\Models\Vacancy;
use App\Models\VacancyApplication;

class VacancyApplicationService extends Service
{
    public function __construct(VacancyApplication $model)
    {
        parent::__construct($model);
    }

    public function indexPageData($request)
    {
        return [
            'vacancies' => Vacancy::orderby('title', 'asc')->get(),
            'thisDatas' => $this->getAllData($request),
        ];
    }

    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        $keyword = $data->get('keyword');
        $show = $data->get('show');
        $vacancyId = $data->get('vacancy');
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
        if ($vacancyId) {
            $query->where('vacancy_id', $vacancyId);
        }
        if ($pagination) {
            return $query->orderBy('created_at', 'DESC')->paginate($show ?? 10);
        } else {
            return $query->orderBy('created_at', 'DESC')->get();
        }
    }
}
