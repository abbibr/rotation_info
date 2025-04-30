<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaitListModel extends Model
{
    protected $fillable = [
        'fullName', 
        'email', 
        'phoneNumber'
    ];
}
