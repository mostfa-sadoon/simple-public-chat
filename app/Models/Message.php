<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    
    protected $fillable=['user_id','message_txt'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

