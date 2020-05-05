<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
		protected $fillable = array('maker', 'model','year');

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
