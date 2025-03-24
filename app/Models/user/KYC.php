<?php

namespace App\Models\user;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KYC extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';

    function userKyc()
    {
        return $this->belongsTo(User::class, 'id');
    }

}
