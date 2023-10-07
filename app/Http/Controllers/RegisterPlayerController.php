<?php

namespace App\Http\Controllers;

use App\Models\Trainee;
use App\Http\Requests\StoreTraineeRequest;

class RegisterPlayerController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function register(StoreTraineeRequest $request)
    {
        try {
            $player = array_merge($request->validated(), ['status' => 'pending', 'payment_status' => 'pending']);
            Trainee::create($player);
        } catch (\Exception $e) {
            return back()->with('error', 'Player registration failed');
        }

        return to_route('register-player.index')->with('success', 'Player registered successfully');
    }
}
