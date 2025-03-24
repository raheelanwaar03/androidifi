<?php

namespace App\Console\Commands;

use App\Models\admin\DepositWallet;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $user = new User();
        $user->name = 'Admin';
        $user->referral = 'default';
        $user->balance = '0';
        $user->unc = '100';
        $user->phone = '03000000000';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('asdfasdf');
        $user->status = 'approved';
        $user->role = 'admin';
        $user->register_id = 'UNC123458';
        $user->save();


        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->referral = 'default';
        $user->balance = '10000';
        $user->unc = '100';
        $user->phone = '03000000000';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->status = 'approved';
        $user->register_id = 'UNC123456';
        $user->email_verified_at = '2024-04-18 00:43:27';
        $user->save();

        // adding wallet

        $wallet = new DepositWallet();
        $wallet->number = 'asdfasvsvqerrfavafq390e5ruavjasd89f67u';
        $wallet->onwer = 'skindar';
        $wallet->type = 'trc';
        $wallet->note = 'user can enter some information here like pay me through binance';
        $wallet->status = '1';
        $wallet->limit = '120';
        $wallet->save();

    }
}
