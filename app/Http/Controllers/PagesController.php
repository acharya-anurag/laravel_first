<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PagesController extends Controller
{
    public function about()
    {
        $first = 'Anurag';
        $last = 'Acharya';

        return view('pages.about',compact('first','last'));
    }
    
}