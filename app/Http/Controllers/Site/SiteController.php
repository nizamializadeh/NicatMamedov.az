<?php

namespace App\Http\Controllers\Site;

use App\Aboutone;
use App\Abouttwo;
use App\Blog;
use App\Category;
use App\Chees;
use App\Chesshistory;
use App\faq;
use App\gallery;
use App\Portfolio;
use App\Service;
use App\Slider;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $sliders =Slider::all();
        $services =Service::all();

//        $histories =Chesshistory::all();
        $blogs =Blog::orderBy('id', 'DESC')->take(4)->get();
        return view('frontend.index',compact('sliders','blogs','services'));
    }
    public function portfolio()
    {
        $portfolios =Portfolio::all();
        return view('frontend.portfolio',compact('portfolios'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }


    public function gallery()
    {
        $categories =Category::all();

        $galleryies = DB::table('galleries')
            ->join('categories', ['categories.id' => 'galleries.cate_id'])
            ->select('galleries.id','galleries.image','categories.name')
            ->get();
        return view('frontend.gallery',compact('categories','galleryies'));
    }
    public function faq()
    {

//        $faqs = DB::table('faqs')
//            ->join('types', ['types.id' => 'faqs.cate_id'])
//            ->select('faqs.id','faqs.header','faqs.description','types.name')
//            ->get();
        $types =Type::all();
        return view('frontend.faq',compact('faqs','types'));
    }
    public function blog()
    {
        $blogs =Blog::all();
        return view('frontend.blog',compact('blogs'));
    }
    public function blogsingle($id)
    {
        $blog =Blog::findorfail($id);
        $populars= Blog::orderBy('count', 'DESC')->take(5)->get();
        $lasteds= Blog::orderBy('created_at', 'DESC')->take(5)->get();

        $blog->count = $blog->count + 1;
        $blog->save();
        return view('frontend.blogsingle',compact('blog','populars','lasteds'));
    }

    public function chesshistory($id)
    {
        $blog =Chees::findorfail($id);

        return view('frontend.history',compact('blog'));
    }
    public function portsingle($id)
    {
        $blog =Portfolio::findorfail($id);

        return view('frontend.history',compact('blog'));
    }
    public function service($id)
    {
        $service =Service::findorfail($id);

        return view('frontend.service',compact('service'));
    }
    public function about()
    {
        $abouts =Aboutone::all();
        $teams =Abouttwo::all();


        return view('frontend.about',compact('abouts','teams'));
    }


}
