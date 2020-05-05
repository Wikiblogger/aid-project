<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Res extends Model
{
	protected $fillable = ['pickupDate', 'pickupTime', 'returnDate','returnTime','phone'];
}


