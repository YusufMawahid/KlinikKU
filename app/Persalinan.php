<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Persalinan extends Authenticatable
{
    protected $table = 'persalinan';
}
