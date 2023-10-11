<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function __invoke()
    {
        return view('about',[
            'title' => 'About',
            'active' => 'about',
            'description' => 'Crusaders Basketball academy is a basketball academy based in Rwanda, Kigali. We are an academy that is dedicated to the development of basketball in Rwanda.',
            'keywords' => 'basketball, academy, kigali, rwanda, crusaders, basketball academy, basketball academy in rwanda, basketball academy in kigali, basketball academy in africa, basketball academy in east africa, basketball academy in central africa, basketball academy in west africa, basketball academy in north africa, basketball academy in south africa, basketball academy in the world, basketball academy in the universe, basketball academy in the milky way, basketball academy in the solar system, basketball academy in the galaxy, basketball academy in the universe',
            'og_type' => 'website',
            'twitter_title' => 'Crusaders Basketball Academy',
            'twitter_description' => 'Crusaders Basketball academy is a basketball academy based in Rwanda, Kigali. We are an academy that is dedicated to the development of basketball in Rwanda.',
            'twitter_image' => 'https://crusaders.africa/assets/logo.png',
            'twitter_url' => 'https://crusaders.africa/about',
            'twitter_card' => 'summary_large_image',
        ]);
    }
}
