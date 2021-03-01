<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home()
  {
    return view('guest.home');
  }
  public function blog()
  {
    return view('guest.blog');
  }
  public function about()
  {
    return view('guest.about');
  }
}