<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminPlans;
use App\Models\User;
use App\Models\user\StorePlan;
use Illuminate\Http\Request;

class AllotPlanToUserController extends Controller
{
    public function index()
    {
        $plans = AdminPlans::get();
        return view('admin.user.allot', compact('plans'));
    }

    public function savePlan(Request $request)
    {
        $user = User::where('register_id', $request->user_id)->first();
        $plan = AdminPlans::where('name', $request->plan)->first();

        // alloting plan to user

        $store_plan = new StorePlan();
        $store_plan->user_id = $user->register_id;
        $store_plan->plan_id = $plan->id;
        $store_plan->user_name = $user->name;
        $store_plan->plan_name = $plan->name;
        $store_plan->amount = $plan->invest;
        $store_plan->profit = $plan->profit;
        $store_plan->percentage = $plan->percentage;
        $store_plan->expiry = $plan->expiry;
        $store_plan->status = 'active';
        $store_plan->save();
        return redirect()->back()->with('success', 'Plan Activated');
    }

    public function history()
    {
        $plans = StorePlan::get();
        return view('admin.user.history',compact('plans'));
    }



}
