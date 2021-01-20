<?php

namespace App\Http\Controllers;

class UtamaController extends Controller
{
    
    public function home()
    {
        return view("home");
    }

    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }

    public function portofolio()
    {
        return view("portofolio");
    }

    public function service()
    {
        return view("service");
    }

    public function team()
    {
        return view("team");
    }

}