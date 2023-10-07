<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    public function __invoke()
    {
        return view('gallery', [
            'title' => 'Gallery',
            'description' => 'Gallery of crusaders basketball club',
            'image' => 'https://res.cloudinary.com/dv4fxot9s/image/upload/v1624494789/crusaders_basketball_club_-_logo_2.png',
            'url' => 'https://www.crusaders.africa/gallery',
            'twitter' => 'https://twitter.com/crusadersbbclub',
            'facebook' => 'https://www.facebook.com/crusadersbbclub',
            'instagram' => 'https://www.instagram.com/crusadersbbclub',
            'youtube' => 'https://www.youtube.com/channel/UCXVQ1o3fR6Hs0WgOg8qQ8jw',
            'linkedin' => 'https://www.linkedin.com/company/crusaders-basketball-club',
            'tiktok' => 'https://www.tiktok.com/@crusadersbbclub',
            'author' => 'Crusaders Basketball Club',
            'email' => 'info@crusaders.africa',
            'robots' => 'index, follow',
            'keywords' => 'crusaders basketball club, gallery, basketball, basketball gallery, basketball gallery in kenya, basketball gallery in nairobi, basketball gallery in nairobi kenya, basketball gallery in kenya nairobi, basketball gallery in kenya nairobi kenya, basketball gallery in kenya nairobi kenya africa, basketball gallery in crusaders basketball club, basketball gallery in crusaders basketball club kenya, basketball gallery in crusaders basketball club nairobi, basketball gallery in crusaders basketball club nairobi kenya, basketball gallery in crusaders basketball club nairobi kenya africa, basketball gallery in crusaders basketball club kenya nairobi, basketball gallery in crusaders basketball club kenya nairobi kenya, basketball gallery in crusaders basketball club kenya nairobi kenya africa',
        ]);
    }
}
