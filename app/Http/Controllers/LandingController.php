<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function __invoke()
    {
        return view('welcome', [
            'title' => 'Home',
            'description' => 'Crusaders basket ball academy is a basketball academy that is based in Kigali Rwanda. We offer basketball training to kids from the age of 5 years to 18 years. We also offer basketball training to adults.',
            'keywords' => 'basket ball,kigali,rwanda,',
            'active' => 'home',
            
        ]);
    }
}
