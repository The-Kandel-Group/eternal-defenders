<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Http\Requests\System\ContactUsRequest;
use App\Http\Requests\System\NewsletterSubscriptionRequest;
use App\Models\ContactUs;
use App\Models\CoreValues;
use App\Models\NewsletterSubscription;
use App\Models\Page;
use App\Models\Post;
use App\Models\ServiceCategory;
use App\Models\Slider;
use App\Models\Vacancy;
use Illuminate\Http\Request;


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
                ->with(['services' => function ($query) {
                    $query->where('status', 1);
                }])
                ->get();
            $data['coreValues'] = CoreValues::where('status', 1)->get();
            $data['vacancies'] = Vacancy::where('status', 1)->orderby('position', 'asc')->get();
            $data['aboutUsPage'] = Page::where('slug', 'about-us')->where('status', 1)->first();
            $data['missionPage'] = Page::where('slug', 'our-mission')->where('status', 1)->first();
            $data['ourVisionPage'] = Page::where('slug', 'our-vision')->where('status', 1)->first();
            $data['blogs'] = Post::where('status', 1)->orderby('created_at', 'desc')->take(3)->get();
            $data['sliders'] = Slider::where('status', 1)->get();
            return view('frontend.index', $data);
        } catch (\Throwable $th) {
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

    public function saveContact(ContactUsRequest $request)
    {
        try {
            $data = $request->all();
            ContactUs::create($data);
            session()->flash('success', 'Your message has been sent successfully!');
            return redirect()->back();
        } catch (\Throwable $th) {
            session()->flash('error', 'Something went wrong.');
            return redirect()->back()->withInput(); // keep the form inputs
        }
    }

    public function blogs(Request $request)
    {
        try {
            $keyword = trim($request->get('keyword'));
            $query = Post::where('status', 1);
            if ($keyword) {
                $query->whereRaw('LOWER(title) LIKE ?', ['%' . strtolower($keyword) . '%']);
            }
            $data['blogs'] = $query->orderby('created_at', 'desc')->paginate(3);
            return view('frontend.blogs', $data);
        } catch (\Throwable $th) {
            return view('frontend.pages.404-not-found');
        }
    }

    public function blogDetail($slug)
    {
        try {
            $data['post'] = Post::where('slug', $slug)->where('status', 1)->first();
            if (!$data['post']) {
                return view('frontend.pages.404-not-found');
            }
            return view('frontend.blog-detail', $data);
        } catch (\Throwable $th) {
            return view('frontend.pages.404-not-found');
        }
    }

    public function saveNewsletter(NewsletterSubscriptionRequest $request)
    {
        try {
            $data = $request->all();
            NewsletterSubscription::create($data);
            session()->flash('success', 'Your have been subscribed!');
            return redirect()->back();
        } catch (\Throwable $th) {
            dd($th);
            session()->flash('error', 'Something went wrong.');
            return redirect()->back()->withInput();
        }
    }
}
