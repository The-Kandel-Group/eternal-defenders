<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\ServiceCategory;


class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {
            $data = [];
            $data['serviceCategories'] = ServiceCategory::where('status', 1)
                ->with(['services' => function($query) {
                    $query->where('status', 1);
                }])
                ->get();
            return view('frontend.index', $data);
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    public function pageDirectUrl()
    {
        try {
            $data = [];
            $slug = request()->segment(count(request()->segments()));
            $data['page'] = Page::where('slug', $slug)->where('status', 1)->first();
            if (!$data['page']) {
                return view('frontend.pages.404-not-found');
            }
            return view('frontend.page', $data);
        } catch (\Throwable $th) {
            return view('frontend.pages.404-not-found');
        }
    }
}
