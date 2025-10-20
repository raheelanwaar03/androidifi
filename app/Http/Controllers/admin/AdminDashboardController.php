<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminPlans;
use App\Models\User;
use Carbon\Carbon;
use App\Models\user\Statement;
use App\Models\user\StorePlan;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function all()
    {
        $users = User::get();
        return view('admin.user.all', compact('users'));
    }

    public function today()
    {
        $users = User::whereDate('created_at', Carbon::today())->get();
        return view('admin.user.today', compact('users'));
    }

    public function pending()
    {
        $users = User::where('status', 'pending')->get();
        return view('admin.user.pending', compact('users'));
    }

    public function approved()
    {
        $users = User::where('status', 'approved')->get();
        return view('admin.user.approved', compact('users'));
    }

    public function reject()
    {
        $users = User::where('status', 'rejected')->get();
        return view('admin.user.rejected', compact('users'));
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->balance = $request->balance;
        $user->save();
        return redirect()->back()->with('success', 'User Updated');
    }

    // change users status

    public function makePending($id)
    {
        $user = User::find($id);
        $user->status = 'pending';
        $user->save();
        return redirect()->back()->with('success', 'User is in Pending list now');
    }

    public function makeReject($id)
    {
        $user = User::find($id);
        $user->status = 'rejected';
        $user->save();
        return redirect()->back()->with('success', 'User is in Rejected list now');
    }


    public function makeApproved($id)
    {
        $user = User::find($id);
        $user->status = 'approved';
        $user->save();
        return redirect()->back()->with('success', 'User Approved');
    }

    public function dailyRoi()
    {
        $userPlans = StorePlan::where('status', 'Active')->get();

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
            $check_if_given = Statement::where('user_id', $item->user_id)->where('type', 'Daily ROI')->whereDate('created_at', Carbon::today())->first();
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
        return redirect()->back()->with('success', 'Roi added to all users');
    }
}
