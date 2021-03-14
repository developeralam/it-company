<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    //About Us
    public function aboutUs()
    {
        return view('frontend.pages.about');
    }

    //Contact Us
    public function contact()
    {
        return view('frontend.pages.contact')
    }

    //Service
    public function service()
    {
        return view('frontend.pages.service');
    }

    //Single Service
    public function singleService($id)
    {
        $service = Service::find($id);
        return view('frontend.pages.singleservice', compact('service'));
    }

    //Product
    public function product()
    {
        return view('frontend.pages.product');
    }

    //Single Product
    public function singleProduct($id)
    {
        $product = Product::find($id);
        return view('frontend.pages.singleproduct', compact('product'));
    }
}
