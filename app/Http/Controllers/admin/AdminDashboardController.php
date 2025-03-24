<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use App\Models\user\Statement;
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
        $user->airdrop = $request->airdrop;
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
        return redirect()->back()->with('success','User Approved');

    }
}
