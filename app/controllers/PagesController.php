<?php 

namespace App\Controllers;

class PagesController
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $company = 'Unintuitive';

        return view('about', compact('company'));
    }

    public function contact()
    {
        return view('contact');
    }
}
