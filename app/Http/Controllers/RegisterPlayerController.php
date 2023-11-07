<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTraineeRequest;
use App\Models\Trainee;

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
        session()->flash('success', $player->name.' is registered successfully');
        return to_route('register-player.index');
    }
}
