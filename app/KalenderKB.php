<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KalenderKB extends Authenticatable
{
    protected $table = 'kalenderkb';
}
