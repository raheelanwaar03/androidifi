<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\adminDepositController;
use App\Http\Controllers\admin\AllotPlanToUserController;
use App\Http\Controllers\admin\PlansController;
use App\Http\Controllers\admin\userWithdrawalRequests;
use App\Http\Controllers\user\PlansMangementController;
use Illuminate\Support\Facades\Route;


Route::name('Admin.')->prefix('Admin')->middleware('admin', 'auth')->group(function () {

    Route::get('/Dashboard', [AdminDashboardController::class, 'dashboard'])->name('Dashboard');
    Route::get('/All/Users', [AdminDashboardController::class, 'all'])->name('All.Users');
    Route::get('/Today/Users', [AdminDashboardController::class, 'today'])->name('Today.Users');
    Route::get('/Pending/Users', [AdminDashboardController::class, 'pending'])->name('Pending.Users');
    Route::get('/Approved/Users', [AdminDashboardController::class, 'approved'])->name('Approved.Users');
    Route::get('/Rejected/Users', [AdminDashboardController::class, 'rejected'])->name('Rejected.Users');
    Route::get('/Edit/User/{id}', [AdminDashboardController::class, 'editUser'])->name('Edit.User');
    Route::post('/Update/User/{id}', [AdminDashboardController::class, 'updateUser'])->name('Update.User');
    // Change user Status
    Route::get('Make/User/Pending/{id}', [AdminDashboardController::class, 'makePending'])->name('Make.User.Pending');
    Route::get('Make/User/Rejected/{id}', [AdminDashboardController::class, 'makeReject'])->name('Make.User.Rejected');
    Route::get('Make/User/Approved/{id}', [AdminDashboardController::class, 'makeApproved'])->name('Make.User.Approved');
    // Plans Route
    Route::get('/Add/Plans', [PlansController::class, 'add'])->name('Add.Plan');
    Route::post('/Store/Plan', [PlansController::class, 'store'])->name('Store.Plan');
    Route::get('/All/Plans', [PlansController::class, 'index'])->name('All.Plans');
    Route::get('/Delete/Plan/{id}', [PlansController::class, 'delete'])->name('Delete.Plan');
    Route::get('/Edit/Plan/{id}', [PlansController::class, 'edit'])->name('Edit.Plan');
    Route::post('/Update/Plan/{id}', [PlansController::class, 'update'])->name('Update.Plan');
    // Deposit routes
    Route::get('/Today/Deposit/Requests', [adminDepositController::class, 'todayDeposit'])->name('Today.Deposit.Requests');
    Route::get('/Pending/Deposit/Requests', [adminDepositController::class, 'pendingDeposit'])->name('Pending.Deposit.Requests');
    Route::get('/Approved/Deposit/Requests', [adminDepositController::class, 'approvedDeposit'])->name('Approved.Deposit.Requests');
    Route::get('/Make/Deposit/Approved/{id}', [adminDepositController::class, 'makeApprove'])->name('Make.Deposit.Approved');
    Route::get('/Make/Deposit/Rejected/{id}', [adminDepositController::class, 'makeRejected'])->name('Make.Deposit.Rejected');
    // allot plans to users
    Route::get('Allot/Plans', [AllotPlanToUserController::class, 'index'])->name('Allot.Plan');
    Route::post('Save/Allot/Plan', [AllotPlanToUserController::class, 'savePlan'])->name('Save.Allot.Plan');
    Route::get('History/Allot/Plans', [AllotPlanToUserController::class, 'history'])->name('History.Alloting.Plans');
    // withdrawal requests
    Route::get('/Today/Withdrawal/Requests', [userWithdrawalRequests::class, 'today_withdrawal'])->name('Today.Withdrawal.Requests');
    Route::get('/Pending/Withdrawal/Requests', [userWithdrawalRequests::class, 'pending_withdrawal'])->name('Pending.Withdrawal.Requests');
    Route::get('/Approved/Withdrawal/Requests', [userWithdrawalRequests::class, 'approved_withdrawal'])->name('Approved.Withdrawal.Requests');
    Route::get('/Rejected/Withdrawal/Requests', [userWithdrawalRequests::class, 'rejected_withdrawal'])->name('Rejected.Withdrawal.Requests');
    // action on withdrawal requests
    Route::get('/Make/Withdrawal/Approved/{id}', [userWithdrawalRequests::class, 'makeApproved'])->name('Make.Withdrawal.Approved');
    Route::get('/Make/Withdrawal/Rejected/{id}', [userWithdrawalRequests::class, 'makeRejected'])->name('Make.Withdrawal.Rejected');
    Route::get('/Make/Withdrawal/Pending/{id}', [userWithdrawalRequests::class, 'makePending'])->name('Make.Withdrawal.Pending');
    // give daily roi
    Route::get('Give/Daily/Roi', [AdminDashboardController::class, 'dailyRoi'])->name('Give.Daily.Roi');
    Route::get('Sold/Plans', [PlansMangementController::class, 'soldPlans'])->name('Sold.Plans');
    Route::get('Delete.User/{id}', [AdminDashboardController::class, 'deleteUser'])->name('Delete.User');
});
