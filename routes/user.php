<?php

use App\Http\Controllers\user\KYCController;
use App\Http\Controllers\user\PlansMangementController;
use App\Http\Controllers\user\TeamMangment;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\user\UserDepositController;
use App\Http\Controllers\user\UserWithdrawController;
use Illuminate\Support\Facades\Route;


Route::name('User.')->prefix('User')->middleware('user', 'auth', 'verified')->group(function () {

    Route::get('/Dashboard', [UserDashboardController::class, 'dashboard'])->name('Dashboard');
    Route::post('/Upload/Profile/Picture', [UserDashboardController::class, 'profile_pic'])->name('Profile.Pic');
    Route::post('/KYC', [KYCController::class, 'kyc'])->name('KYC');
    // deposit request
    Route::get('/Deposit/Request', [UserDepositController::class, 'request'])->name('Deposit.Request');
    Route::get('/All/Deposit', [UserDepositController::class, 'index'])->name('All.Deposits');
    Route::post('/Store/Deposit', [UserDepositController::class, 'store'])->name('Store.Deposit');
    // withdraw request
    Route::get('/Withdraw/Request', [UserWithdrawController::class, 'request'])->name('Withdraw.Request');
    Route::post('/Store/Withdraw/Request', [UserWithdrawController::class, 'store'])->name('Store.Withdraw.Request');
    Route::get('/All/Withdraw/Request', [UserWithdrawController::class, 'index'])->name('All.Withdraw.Request');
    // Active plans
    Route::get('/Active/Plans', [PlansMangementController::class, 'index'])->name('Active.Plans');
    Route::get('/All/Plans', [PlansMangementController::class, 'allPlans'])->name('Total.Plans');
    Route::post('/Buy/Plan/{id}', [PlansMangementController::class, 'buyPlan'])->name('Buy.Plan');
    // Direct members
    Route::get('/Direct/Members',[TeamMangment::class,'direct'])->name('Team.Mangement');
    Route::get('/Today/Reward',[TeamMangment::class,'todayReward'])->name('Today.Reward');
    // commission
    Route::get('/Direct/Commissions',[UserDashboardController::class,'directCommission'])->name('Direct.Commission');
    Route::get('/Daily/Roi',[UserDashboardController::class,'dailyRoi'])->name('Daily.ROI');
    // Get Today Reward

});
