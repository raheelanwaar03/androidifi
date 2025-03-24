<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminPlans;
use App\Models\User;
use App\Models\user\Statement;
use App\Models\user\StorePlan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TeamMangment extends Controller
{
    public function direct()
    {
        $users = User::where('referral', auth()->user()->register_id)->get();
        return view('user.team.direct', compact('users'));
    }

    public function todayReward()
    {
        $userPlans = StorePlan::where('status', 'Active')->get();
        // return $userPlans;

        foreach ($userPlans as $item) {
            $plan = AdminPlans::where('id', $item->plan_id)->first();
            // checking plan expire

            $planBuyDate = Carbon::parse($item->created_at);
            // Get the current date
            $currentDate = Carbon::now();
            // Check difference between buy date and plan expire
            if ($planBuyDate->diffInDays($currentDate) >= $plan->expiry) {
                $userPlan = StorePlan::where('user_id', $item->user_id)->where('id', $item->id)->first();
                $userPlan->status = 'Deactivate';
                $userPlan->save();
            }

            // picking random percentage
            $daily_ROI = rand($plan->min_roi_per, $plan->max_roi_per);
            // user profit accourding to investment
            $profit_per = $item->amount * $daily_ROI / 100;
            $main_profit = $profit_per / 30;
            // adding in user account
            $check_if_given = Statement::where('user_id', $item->user_id)->whereDate('created_at', Carbon::today())->first();
            if ($check_if_given == '') {
                $user = User::where('register_id', $item->user_id)->first();
                $user->balance += $main_profit;
                $user->save();
                // Adding in user statement
                $statement = new Statement();
                $statement->user_id = $item->user_id;
                $statement->amount = $main_profit;
                $statement->type = 'Daily ROI';
                $statement->status = 'Recived';
                $statement->save();
            }
        }
        return redirect()->back()->with('success', 'Roi Given to All Users');
    }
}
