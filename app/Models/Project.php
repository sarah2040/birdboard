<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{

    use HasFactory, Notifiable;

    protected $guarded = [];

    public function path() 

    {

        return "/projects/{$this->id}";

    }

    public function owner() 

    {

        return $this->belongsTo(User::class);

    }

}