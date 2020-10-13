<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'foreign_key');
    }
    public function create()
    {
        return $this->hasOne('App\Models\User', 'foreign_key');
    }
    public function takingPart()
    {
        return $this->hasMany('App\Models\User');
    }
    public function attachments()
    {
        return $this->hasMany('App\Models\Attachment');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    public function categories()
    {
        return $this->hasOne('App\Models\Category', 'foreign_key');
    }
}
