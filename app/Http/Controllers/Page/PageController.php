<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Page;

class PageController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index(Request $request)
    {
    	$pages = $request->user()->pages()->get();
        $host = $request->getHttpHost();
    	return view('pages.list', compact('pages','host'));
    }

    public function show($id)
    {
    	$page = Page::find($id);
    	return view('pages.show', ['page' => $page]);
    }

    public function create()
    {
    	return view('pages.create');
    }

    public function store(Request $request)
    {
    	
    	$page = new Page;
    	$page->user_id = $request->user()->id;
    	$page->url = $request->url;
        $page->welcome_text = $request->welcome_text;
     	$page->whatsapp = $request->whatsapp;
    	$page->telegram = $request->telegram;
    	$page->fbmessenger = $request->fbmessenger;
    	$page->viber = $request->viber;
    	$page->vk = $request->vk;
        $page->ok = $request->ok;
    	$page->skype = $request->skype;

    	if($page->save())
    	{
    		return redirect()->route('list')->with('success', 'Успех!');
    	}
    	return redirect()->back()->with('error', 'Ошибка!');
    }
    public function edit($id)
    {
    	return view('pages.edit', ['id' => $id]);

    }
    public function update(Request $request, $id)
    {
    	$page = Page::findOrFail($id);
    	$page->user_id = $request->user()->id;
        $page->url = $request->url;
        $page->welcome_text = $request->welcome_text;
        $page->whatsapp = $request->whatsapp;
        $page->telegram = $request->telegram;
        $page->fbmessenger = $request->fbmessenger;
        $page->viber = $request->viber;
        $page->vk = $request->vk;
        $page->ok = $request->ok;
        $page->skype = $request->skype;

    	if($page->save())
    	{
    		return redirect()->route('list')->with('success', 'Успех!');
    	}
    	return redirect()->back()->with('error', 'Ошибка!');
    }

    public function delete($id)
    {
    	$page = Page::findOrFail($id);

    	if($page->delete())
    	{
    		return redirect()->route('pages/list')->with('success', 'Успех!');
    	}
    	return redirect()->back()->with('error', 'Ошибка!');
    }
}
