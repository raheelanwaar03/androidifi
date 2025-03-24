<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\Statement;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function profile_pic(Request $request)
    {
        $image = $request->pic;
        $imageName = rand(11111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/profile'), $imageName);

        $user = User::where('id', auth()->user()->id)->first();

        if (file_exists(public_path('images/profile', auth()->user()->pic))) {
            file_exists(public_path('images/profile', auth()->user()->pic));
        }

        $user->pic = $imageName;
        $user->save();

        return redirect()->back()->with('success', 'Profile Picture Updated');
    }

    public function airDropCommission()
    {
        $statement = Statement::where('user_id', auth()->user()->register_id)->where('type', 'Air Drop')->get();
        return view('user.team.airdrop', compact('statement'));
    }

    public function directCommission()
    {
        $statement = Statement::where('user_id', auth()->user()->register_id)->where('type', 'Referral')->get();
        return view('user.team.commission', compact('statement'));
    }

    public function dailyRoi()
    {
        $statement = Statement::where('user_id', auth()->user()->register_id)->where('type', 'Daily ROI')->get();
        return view('user.team.dailyRoi', compact('statement'));
    }

    // public function dailyLevelRoi()
    // {
    //     $statement = Statement::where('user_id', auth()->user()->register_id)->where('type', 'Direct')->get();
    //     return view('user.team.levelRoi', compact('statement'));
    // }

}
