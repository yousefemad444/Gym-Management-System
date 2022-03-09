<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable =['name','email','mobile','gender','height','weight','date_of_birth','image','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
