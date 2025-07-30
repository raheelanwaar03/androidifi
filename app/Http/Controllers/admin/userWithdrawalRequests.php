<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\UserWithdraw;
use Illuminate\Http\Request;

class userWithdrawalRequests extends Controller
{
    public function today_withdrawal()
    {
        $withdrawalRequests = UserWithdraw::whereDate('created_at', today())->get();
        return view('admin.withdrawal.today', compact('withdrawalRequests'));
    }

    public function pending_withdrawal()
    {
        $withdrawalRequests = UserWithdraw::where('status', 'pending')->get();
        return view('admin.withdrawal.pending', compact('withdrawalRequests'));
    }

    public function approved_withdrawal()
    {
        $withdrawalRequests = UserWithdraw::where('status', 'approved')->get();
        return view('admin.withdrawal.approved', compact('withdrawalRequests'));
    }

    public function rejected_withdrawal()
    {
        $withdrawalRequests = UserWithdraw::where('status', 'rejected')->get();
        return view('admin.withdrawal.rejected', compact('withdrawalRequests'));
    }
}
