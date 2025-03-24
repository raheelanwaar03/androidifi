<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\admin\DepositWallet;
use App\Models\user\Deposit;
use Illuminate\Http\Request;

class UserDepositController extends Controller
{
    public function index()
    {
        $deposit = Deposit::where('user_id', auth()->user()->id)->get();
        return view('user.deposit.index', compact('deposit'));
    }


    public function request()
    {
        $wallet = DepositWallet::where('status', 1)->first();
        return view('user.deposit.request', compact('wallet'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required',
            'total' => 'required',
            'trx' => 'required',
            'image' => 'required|image',
        ]);

        $image = $validated['image'];
        $imageName = rand(111111, 999999) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/deposit'), $imageName);

        $deposit = new Deposit();
        $deposit->user_id = auth()->user()->id;
        $deposit->amount = $validated['amount'];
        $deposit->total = $validated['total'];
        $deposit->trx = $validated['trx'];
        $deposit->image = $imageName;
        $deposit->save();
        return redirect()->route('User.All.Deposits')->with('success', 'Request submited successfully');
    }
}
