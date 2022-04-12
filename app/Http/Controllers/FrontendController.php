<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Consultant;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use App\Models\ContactProperty;
use App\Models\NewArrival;
use App\Models\Property;
use App\Models\Service;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $data['categories'] = Category::all();
        return view('index', $data);
    }

    public function booking(){
        return view('booking');
    }

    public function aboutus()
    {
        return view('aboutus');
    }

    public function address()
    {
        return view('address');
    }
    
    public function car_service()
    {
        return view('car_service');
    }

    public function carrent()
    {
        return view('carrent');
    }

    


    public function contactus()
    {
        return view('contactus');
    }

    public function contactmessage(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|min:2',
            'phone' => 'required',
            'message' => 'required',
        ]);

        ContactFormSubmit::create($request->all());
        Notify::success('Message Successfully Submited', 'Success');
        return back();
    }


}
