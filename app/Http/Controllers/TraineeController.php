<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTraineeRequest;
use App\Models\Player;

class TraineeController extends Controller
{
    public function __invoke(StoreTraineeRequest $request)
    {
        try {
            $player = Player::create($request->validated() + ['status' => 'pending', 'payment_status' => 'pending']);
        } catch (\Exception $e) {
            return back()->with('error', 'Player registration failed');
        }

        return redirect()->route('register-player.index')->with('success', 'Player registered successfully');
    }
}
