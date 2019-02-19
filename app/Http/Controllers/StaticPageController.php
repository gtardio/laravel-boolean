<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
  public function aboutUs()
  {
    return view('about_us');
  }

  public function howItWorks()
  {
    return view('how_it_works');
  }
}
