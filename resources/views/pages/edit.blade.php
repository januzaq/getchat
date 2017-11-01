@extends('layouts.header')

@section('title', 'Редактирование страницы')
@section('content')
	<div class="container">
		<div class="row">
	        <div class="col-md-6 col-md-offset-3">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                	Редактирование страницы
	                </div>

	                <div class="panel-body">
	                    <form class="form-horizontal" method="POST" action="{{ route('edit') }}">
	                        {{ csrf_field() }}

	                        <div class="col-md-12 input-group">
                        		<span class="input-group-addon">https://getchat.com/</span>
                                <input id="url" type="text" class="form-control" placeholder="url адрес" name="url" autocomplete="off" required autofocus>

                            </div>
                            <div class="col-md-12 input-group">
                                <textarea class="form-control" rows="3" name="welcome_text">Общайтесь с нами в ...</textarea>

                            </div>
                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" ><img id="social-icon" src="{{asset('img/SVG/WhatsApp.svg')}}"> + </span>
                                <input id="whatsapp" type="text" class="form-control" placeholder="7-777-777-77-77" name="whatsapp">

                            </div>

                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" ><img id="social-icon" src="{{asset('img/SVG/Telegram.svg')}}">t.me/ </span>
                                <input id="telegram" type="text" class="form-control" placeholder="username" name="telegram">
                            </div>

                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" ><img id="social-icon" src="{{asset('img/SVG/Messenger.svg')}}">m.me/ </span>
                                <input id="fbmessenger" type="text" class="form-control" placeholder="username" name="fbmessenger">
                            </div>

                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" ><img id="social-icon" src="{{asset('img/SVG/viber.svg')}}">+</span>
                                <input id="viber" type="text" class="form-control" placeholder="7-777-777-77-77" name="viber">
                            </div>

                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" ><img id="social-icon" src="{{asset('img/SVG/Vk.svg')}}">vk.com/</span>
                                <input id="vk" type="text" class="form-control" placeholder="username" name="vk">
                            </div>

                            <div class="col-md-12 input-group">
                                <span class="input-group-addon" ><img id="social-icon" src="{{asset('img/SVG/OK.svg')}}">ok.ru/</span>
                                <input id="ok" type="text" class="form-control" placeholder="username" name="ok">

                            </div>

                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" ><img id="social-icon" src="{{asset('img/SVG/Skype.svg')}}"></span>
                                <input id="skype" type="text" class="form-control" placeholder="username" name="skype">
                            </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success col-md-4 pull-right">
                                    Сохранить
                                </button>
                            </div>
                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
@endsection