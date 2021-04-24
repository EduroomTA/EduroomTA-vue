<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Adminsekolah extends Authenticatable
{
    use Notifiable;

    protected $table="adminsekolah";
    protected $guarded = [''];
}
