<?php

namespace App\Http\Controllers\frontend;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        // $data['allData'] = Image::all();
        return view('frontend.layouts.index');
    }

    public function MoreImage()
    {

        // $data['allData'] = Image::all();
        return view('frontend.pages.single');
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
