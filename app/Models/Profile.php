<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	$table = 'infos';
	
    protected $fillable = [
    	'firstname',
    	'lastname',
    ];

    public function user()
    {
    	return $this->belongsTo(App\User::class);
    }
}
