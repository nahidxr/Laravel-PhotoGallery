<?php

namespace App\Http\Controllers\frontend;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ImageCategory;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

         $data['allData'] = ImageCategory::all();
        return view('frontend.layouts.index',$data);
    }

    public function MoreImage($id)
    {
    
        $data['allData'] = DB::table('images')
                ->where('image_category',$id)
                ->get();
         return view('frontend.pages.single',$data);
  
    }
    public function ServiceDetails()
    {

        // $data['allData'] = Image::all();
        return view('frontend.pages.service');
    }
    public function ContactDetails()
    {

        // $data['allData'] = Image::all();
        return view('frontend.pages.contact');
    }
}
