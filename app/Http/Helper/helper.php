<?php

use App\Models\User;
use App\Models\user\Deposit;
use App\Models\user\UserWithdraw;

function allUser()
{
    $user = User::where('role', 'user')->get()->count();
    return $user;
}

function pendingUser()
{
    $user = User::where('role', 'user')->where('status', 'pending')->get()->count();
    return $user;
}

function allDeposit()
{
    $deposit = Deposit::get();
    $totalDeposit = 0;

    foreach ($deposit as $item) {
        $totalDeposit += $item->amount;
    }

    return $totalDeposit;
}


function userApprovedDeposit()
{
    $deposit = Deposit::where('user_id', auth()->user()->id)->where('status', 'approved')->get();
    $totalDeposit = 0;

    foreach ($deposit as $item) {
        $totalDeposit += $item->amount;
    }

    return $totalDeposit;
}


function Withdraw()
{
    $withdraw = UserWithdraw::get();

    $totalWithdraw = 0;

    foreach ($withdraw as $item) {
        $totalWithdraw += $item->amount;
    }

    return $totalWithdraw;
}

function totalDeposit()
{
    $deposit = Deposit::where('user_id', auth()->user()->id)->get();
    $totalDeposit = 0;

    foreach ($deposit as $item) {
        $totalDeposit += $item->amount;
    }

    return $totalDeposit;
}

function userPendingDeposit()
{
    $deposit = Deposit::where('user_id', auth()->user()->id)->where('status', 'pending')->get();
    $totalDeposit = 0;

    foreach ($deposit as $item) {
        $totalDeposit += $item->amount;
    }

    return $totalDeposit;
}


function userPendingWithdraw()
{
    $withdraw = UserWithdraw::where('user_id', auth()->user()->id)->where('status', 'pending')->get();

    $totalWithdraw = 0;

    foreach ($withdraw as $item) {
        $totalWithdraw += $item->amount;
    }

    return $totalWithdraw;
}

function userTotalWithdraw()
{
    $withdraw = UserWithdraw::where('user_id', auth()->user()->id)->get();

    $totalWithdraw = 0;

    foreach ($withdraw as $item) {
        $totalWithdraw += $item->amount;
    }

    return $totalWithdraw;
}

function userApprovedWithdraw()
{
    $withdraw = UserWithdraw::where('user_id', auth()->user()->id)->where('status', 'approved')->get();

    $totalWithdraw = 0;

    foreach ($withdraw as $item) {
        $totalWithdraw += $item->amount;
    }

    return $totalWithdraw;
}

// geting all team members bussniess

function team_business()
{
    $users = User::where('referral', auth()->user()->register_id)->get();
    $bussniess = 0;
    foreach ($users as $item) {
        $bussniess += $item->balance;
    }
    return $bussniess;
}

function referralAirdrop()
{
    $user = User::where('id',auth()->user()->id)->first();
    $total_airdrop = 0;
    $total_airdrop = $user->airdrop - 50;
    return $total_airdrop;
}
