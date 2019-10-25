<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Subscriber;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $result = Subscriber::whereEmail($request->email)->first();

        if ($result) {
            return redirect()->back()->withError('Oopss! You already Subscribed!');

        } else {
            Subscriber::create([
                'email' => $request->email,
                'is_subscribed' => true
            ]);
            if (env('APP_ENV') === 'production') {
                Mail::to('support@review-riot.com')->send(new Subs($request->email));
            }
        }
        return redirect()->back()->withSuccess('Thank You for Subscribing!');;

    
    }
}
