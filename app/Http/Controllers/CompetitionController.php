<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeParticipantRequest;
use App\Models\Participant;
use DB;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = DB::table('competitions')->where('status', 'active')->get();

        return view('competition.index', [
            'competitions' => $competitions,
            'title' => 'Competitions',
            'description' => 'List of all competitions',
            'keywords' => 'competitions, list, active, ongoing, upcoming, past, completed, finished, results, winners, prizes, awards, trophies, medals, certificates, recognition, awards, recognition, prizes, trophies, medals, certificates, winners, results, finished, completed, past, upcoming, ongoing, active, list, competitions',
            'author' => 'Jacques MBABAZI',
            'image' => '/images/logo.png',
            'url' => '/competitions',
        ]);
    }

    public function register()
    {
        return view('competition.register', [
            'title' => 'Register',
            'description' => 'Register for a competition',
            'keywords' => 'register, competition, competitions, list, active, ongoing, upcoming, past, completed, finished, results, winners, prizes, awards, trophies, medals, certificates, recognition, awards, recognition, prizes, trophies, medals, certificates, winners, results, finished, completed, past, upcoming, ongoing, active, list, competitions',
            'author' => 'Jacques MBABAZI',
            'image' => '/images/logo.png',
            'url' => '/competitions/register',
        ]);
    }

    public function store(storeParticipantRequest $request)
    {
        try {
            DB::beginTransaction();
            $participant = Participant::create($request->validated().['user_id' => auth()->user()->id]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;

            return redirect()->back()->with('error', 'Something went wrong, please try again later');
        }
        DB::commit();

        return redirect()->route('competitions.show', $participant->competition_id)->with('success', 'You have successfully registered for the competition');
    }

    public function show(Participant $participant)
    {
        $participant->load('competition', 'sport', 'country', 'user', 'results');

        return view('competition.show', [
            'participant' => $participant,
            'title' => 'Competition',
            'description' => 'Competition details',
            'keywords' => 'competition, competitions, list, active, ongoing, upcoming, past, completed, finished, results, winners, prizes, awards, trophies, medals, certificates, recognition, awards, recognition, prizes, trophies, medals, certificates, winners, results, finished, completed, past, upcoming, ongoing, active, list, competitions',
            'author' => 'Jacques MBABAZI',
            'image' => '/images/logo.png',
            'url' => '/competitions/'.$participant->registration_number,
        ]);
    }

    public function cancel(Participant $participant)
    {
        try {
            DB::beginTransaction();
            $participant->update(['status' => 'cancelled']);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;

            return redirect()->back()->with('error', 'Something went wrong, please try again later');
        }
        DB::commit();

        return redirect()->route('competitions.show', $participant->competition_id)->with('success', 'You have successfully cancelled your registration for the competition');
    }
}
