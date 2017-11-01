<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
    	'user_id',
    	'url',
        'welcome_text',
    	'whatsapp',
    	'telegram',
    	'fbmessenger',
    	'viber',
    	'vk',
        'ok',
    	'skype'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    } 
}
