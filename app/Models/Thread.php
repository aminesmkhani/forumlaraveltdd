<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function path()
    {
        return '/threads/'. $this->id;
    }



    public function replies()
    {
        return $this->hasMany(Reply::class);
    }



    public function creator()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function addReply($reply)
    {
        $this->replies()->create($reply);
    }
}
