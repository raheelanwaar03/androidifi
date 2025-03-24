<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user\KYC;
use Illuminate\Http\Request;

class KYCController extends Controller
{
    public function kyc(Request $request)
    {
        $validated = $request->validate([
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'phone' => 'required',
        ]);

        // adding to db

        $kyc = new KYC();
        $kyc->user_id = auth()->user()->id;
        $kyc->address = $validated['address'];
        $kyc->country = $validated['country'];
        $kyc->state = $validated['state'];
        $kyc->city = $validated['city'];
        $kyc->zip = $validated['zip'];
        $kyc->phone = $validated['phone'];
        $kyc->save();
        return redirect()->back()->with('success', 'Request successfully');
    }
}
