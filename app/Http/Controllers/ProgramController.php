<?php

namespace App\Http\Controllers;

use App\Models\Category;

class ProgramController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();

        return view('programs', [
            'title' => 'Programs',
            'description' => 'List of all programs that are available at crusaders basketball club',
            'meta' => 'crusaders basketball club, programs, basketball, basketball programs, basketball programs in kenya, basketball programs in nairobi, basketball programs in nairobi kenya, basketball programs in kenya nairobi, basketball programs in kenya nairobi kenya, basketball programs in kenya nairobi kenya africa, basketball programs in crusaders basketball club, basketball programs in crusaders basketball club kenya, basketball programs in crusaders basketball club nairobi, basketball programs in crusaders basketball club nairobi kenya, basketball programs in crusaders basketball club nairobi kenya africa, basketball programs in crusaders basketball club kenya nairobi, basketball programs in crusaders basketball club kenya nairobi kenya, basketball programs in crusaders basketball club kenya nairobi kenya africa',
            'image' => 'https://res.cloudinary.com/dv4fxot9s/image/upload/v1624494789/crusaders_basketball_club_-_logo_2.png',
            'url' => 'https://www.crusaders.africa/programs',
            'twitter' => 'https://twitter.com/crusadersbbclub',
            'facebook' => 'https://www.facebook.com/crusadersbbclub',
            'instagram' => 'https://www.instagram.com/crusadersbbclub',
            'youtube' => 'https://www.youtube.com/channel/UCXVQ1o3fR6Hs0WgOg8qQ8jw',
            'linkedin' => 'https://www.linkedin.com/company/crusaders-basketball-club',
            'tiktok' => 'https://www.tiktok.com/@crusadersbbclub',
            'author' => 'Crusaders Basketball Club',
            'categories' => $categories,
        ]);
    }
}
