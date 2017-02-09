<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Obat extends Authenticatable
{
    protected $table = 'obat';
}
