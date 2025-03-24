<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminPlans;
use App\Models\User;
use App\Models\user\Statement;
use App\Models\user\StorePlan;
use Illuminate\Http\Request;

class PlansMangementController extends Controller
{
    public function index()
    {
        $plans = StorePlan::where('status', 'Active')->where('user_id', auth()->user()->register_id)->get();
        return view('user.plan.activePlans', compact('plans'));
    }

    public function buyPlan(Request $request, $id)
    {
        $plan = AdminPlans::find($id);
        // gettting commission on investment
        $first_commission =  $request->investment * 1 / 100;
        $second_commission =  $request->investment * 0.30 / 100;
        $third_commission =  $request->investment * 0.20 / 100;
        $fourth_commission =  $request->investment * 0.15 / 100;
        $fifth_commission =  $request->investment * 0.10 / 100;

        if ($request->investment < $plan->min_invest) {
            return redirect()->back()->with('error', 'Enter amount is less than limit');
        }
        if ($request->investment > $plan->max_invest) {
            return redirect()->back()->with('error', 'Enter amount is greater than limit');
        }

        if (auth()->user()->balance = 0) {
            return redirect()->back()->with('error', 'Your account is empty');
        }
        // deduction balance from user account
        $user = User::where('id', auth()->user()->id)->first();
        if ($user->balance < $plan->invest) {
            return redirect()->back()->with('error', 'You have not enough balance');
        }
        $user->balance -= $request->investment;
        $user->save();

        // finding upliners
        $upliner = User::where('register_id', $user->referral)->first();
        if ($upliner != '') {
            $upliner->balance += $first_commission;
            $upliner->save();
            // save in statment
            $statement = new Statement();
            $statement->user_id = $upliner->register_id;
            $statement->amount = $first_commission;
            $statement->level = 'level 1';
            $statement->type = 'Referral';
            $statement->status = 'Direct';
            $statement->save();
            // second upliner
            $second_upliner = User::where('register_id', $upliner->referral)->first();
            if ($second_upliner != '') {
                $second_upliner->balance += $second_commission;
                $second_upliner->save();
                // save in statment
                $statement = new Statement();
                $statement->user_id = $second_upliner->register_id;
                $statement->amount = $second_commission;
                $statement->level = 'level 2';
                $statement->type = 'Referral';
                $statement->status = 'InDirect';
                $statement->save();
                // Third Upliner
                $third_upliner = User::where('register_id', $second_upliner->referral)->first();
                if ($third_upliner != '') {
                    $third_upliner->balance += $third_commission;
                    $third_upliner->save();
                    // save in statment
                    $statement = new Statement();
                    $statement->user_id = $third_upliner->register_id;
                    $statement->amount = $third_commission;
                    $statement->level = 'level 3';
                    $statement->type = 'Referral';
                    $statement->status = 'InDirect';
                    $statement->save();
                    // fourth
                    $fourth_upliner = User::where('register_id', $third_upliner->referral)->first();
                    if ($fourth_upliner != '') {
                        $fourth_upliner->balance += $fourth_commission;
                        $fourth_upliner->save();
                        // save in statment
                        $statement = new Statement();
                        $statement->user_id = $fourth_upliner->register_id;
                        $statement->amount = $fourth_commission;
                        $statement->level = 'level 4';
                        $statement->type = 'Referral';
                        $statement->status = 'InDirect';
                        $statement->save();
                        // fifth
                        $fifth_upliner = User::where('register_id', $third_upliner->referral)->first();
                        if ($fifth_upliner != '') {
                            $fifth_upliner->balance += $fifth_commission;
                            $fifth_upliner->save();
                            // save in statment
                            $statement = new Statement();
                            $statement->user_id = $fifth_upliner->register_id;
                            $statement->amount = $fifth_commission;
                            $statement->level = 'level 5';
                            $statement->type = 'Referral';
                            $statement->status = 'InDirect';
                            $statement->save();
                        }
                    }
                }
            }
            // third
        }

        $buy_plan = new StorePlan();
        $buy_plan->user_id = auth()->user()->register_id;
        $buy_plan->plan_id = $plan->id;
        $buy_plan->plan_name = $plan->name;
        $buy_plan->amount = $request->investment;
        $buy_plan->expiry = $plan->expiry;
        $buy_plan->status = 'Active';
        $buy_plan->save();
        return redirect()->route('User.Active.Plans')->with('success', 'Plan Purchased Successfully');
    }

    public function allPlans()
    {
        $plans = AdminPlans::get();
        return view('user.plan.allPlans', compact('plans'));
    }
}
