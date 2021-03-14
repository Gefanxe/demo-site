<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
      return view('pages/index');
    }

    public function about()
    {
      return view('pages/about');
    }

    public function portfolio()
    {
      return view('pages/portfolio');
    }

    public function portfoliosingle()
    {
      return view('pages/portfoliosingle');
    }

    public function services()
    {
      return view('pages/services');
    }

    public function contact()
    {
      return view('pages/contact');
    }

}
