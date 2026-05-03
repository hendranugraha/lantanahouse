<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('welcome');
    }

    public function about(): View
    {
        return view('about');
    }

    public function facilities(): View
    {
        return view('facilities');
    }

    public function roomTour(): View
    {
        return view('room-tour');
    }

    public function ourLocation(): View
    {
        return view('our-location');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function privacy(): View
    {
        return view('privacy');
    }
}
