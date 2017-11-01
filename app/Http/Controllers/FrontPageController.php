<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class FrontPageController extends Controller
{

    public function all($url)
    {
    	$pages = Page::where('url', $url)->get();
    	return view('user', compact('pages'));
    }

    public function getwhatsapp($whatsapp)
    {
    	$api = 'https://api.whatsapp.com/send?phone=' . $whatsapp;
    	return redirect($api);
    }

    public function gettelegram($telegram)
    {
        $api = 'https://t.me/' . $telegram;
        return redirect($api);
    }
    public function getmessenger($messenger)
    {
        $api = 'https://m.me/' . $messenger;
        return redirect($api);
    }

    public function getviber($viber)
    {
        $api = 'viber://add?number=' . $viber;
        return redirect($api);
    }

    public function getvk($vk)
    {
        $api = 'https://vk.com/' . $vk;
        return redirect($api);
    }
    public function ok($ok)
    {
        $api = 'https://ok.ru/' . $ok;
        return redirect($api);
    }
    public function getskype($skype)
    {
        $api = 'skype:' . $skype . '?chat';
        return redirect($api);
    }
}
