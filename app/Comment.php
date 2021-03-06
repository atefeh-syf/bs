<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'email', 
    ];
    protected $hidden = [
        'confirm',
    ];
    public function addvertise()
    {
        return $this->belongsTo(Addvertise::class)->orderBy('created_at', 'DESC');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
