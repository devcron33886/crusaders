<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlayerRequest;
use App\Models\Player;

class RegisterPlayerController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(StorePlayerRequest $request)
    {
        try {
            $player = Player::create($request->validated().['status' => 'pending']);
        } catch (\Exception $e) {
            return back()->with('error', 'Player registration failed');
        }

        return to_route('register-player.index')->with('success', 'Player registered successfully');
    }
}
