<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {

        return view('contact', [
            'title' => 'Contact',
            'description' => 'Contact Crusaders Basketball Club',
            'meta' => 'crusaders basketball club, contact, basketball, basketball contact, basketball contact in kenya, basketball contact in nairobi, basketball contact in nairobi kenya, basketball contact in kenya nairobi, basketball contact in kenya nairobi kenya, basketball contact in kenya nairobi kenya africa, basketball contact in crusaders basketball club, basketball contact in crusaders basketball club kenya, basketball contact in crusaders basketball club nairobi, basketball contact in crusaders basketball club nairobi kenya, basketball contact in crusaders basketball club nairobi kenya africa, basketball contact in crusaders basketball club kenya nairobi, basketball contact in crusaders basketball club kenya nairobi kenya, basketball contact in crusaders basketball club kenya nairobi kenya africa',
            'image' => 'https://res.cloudinary.com/dv4fxot9s/image/upload/v1624494789/crusaders_basketball_club_-_logo_2.png',
            'url' => 'https://www.crusaders.africa/contact',
            'twitter' => 'https://twitter.com/crusadersbbclub',
            'facebook' => 'https://www.facebook.com/crusadersbbclub',
            'instagram' => 'https://www.instagram.com/crusadersbbclub',
            'youtube' => 'https://www.youtube.com/channel/UCXVQ1o3fR6Hs0WgOg8qQ8jw',
            'linkedin' => 'https://www.linkedin.com/company/crusaders-basketball-club',
            'tiktok' => 'https://www.tiktok.com/@crusadersbbclub',
            'author' => 'Crusaders Basketball Club',
            'robots' => 'index, follow',
        ]);
    }

    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        return redirect('contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}
