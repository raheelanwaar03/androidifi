<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\Deposit;
use Carbon\Carbon;

class adminDepositController extends Controller
{
    public function todayDeposit()
    {
        $deposit = Deposit::whereDate('created_at', Carbon::today())->get();
        return view('admin.deposit.today',compact('deposit'));
    }

    public function pendingDeposit()
    {
        $deposit = Deposit::where('status', 'pending')->get();
        return view('admin.deposit.pending', compact('deposit'));
    }

    public function makeApprove($id)
    {
        $deposit = Deposit::find($id);
        $deposit->status = 'approved';
        $deposit->save();

        $user = User::where('id', $deposit->user_id)->first();
        $user->balance += $deposit->amount;
        $user->save();
        return redirect()->back()->with('success', 'Deposit Approved!');
    }

    public function makeRejected($id)
    {
        $deposit = Deposit::find($id);
        $deposit->status = 'Rejected';
        $deposit->save();
        return redirect()->back()->with('success', 'Deposit Rejected!');
    }

    public function approvedDeposit()
    {
        $deposit = Deposit::where('status', 'approved')->get();
        return view('admin.deposit.approved', compact('deposit'));
    }
}
