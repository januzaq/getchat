@extends('layouts.header')

@section('title', 'Создать страницу')
@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Создание страницы
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('store') }}">
                        {{ csrf_field() }}

                        	<div class="col-md-12 input-group">
                        		<span class="input-group-addon">https://getchat.com/</span>
                                <input id="url" type="text" class="form-control" placeholder="url адрес" name="url" autocomplete="off" required autofocus>

                            </div>
                            <div class="col-md-12 input-group">
                                <textarea class="form-control col-md-12" rows="2" name="welcome_text">Напишите нам в ..</textarea>

                            </div>
                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" id="span-whatsapp-icon"><img id="social-icon" src="{{asset('img/SVG/WhatsApp.svg')}}"></span>
                                <input id="whatsapp" type="text" class="form-control" placeholder="7-777-777-77-77" name="whatsapp">

                            </div>

                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" id="span-telegram-icon"><img id="social-icon" src="{{asset('img/SVG/Telegram.svg')}}"></span>
                                <input id="telegram" type="text" class="form-control" placeholder="username" name="telegram">
                            </div>

                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" id="span-fbmessenger-icon"><img id="social-icon" src="{{asset('img/SVG/Messenger.svg')}}"></span>
                                <input id="fbmessenger" type="text" class="form-control" placeholder="username" name="fbmessenger">
                            </div>

                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" id="span-viber-icon"><img id="social-icon" src="{{asset('img/SVG/viber.svg')}}"></span>
                                <input id="viber" type="text" class="form-control" placeholder="7-777-777-77-77" name="viber">
                            </div>

                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" id="span-vk-icon"><img id="social-icon" src="{{asset('img/SVG/Vk.svg')}}"></span>
                                <input id="vk" type="text" class="form-control" placeholder="username" name="vk">
                            </div>

                            <div class="col-md-12 input-group">
                                <span class="input-group-addon" id="span-ok-icon"><img id="social-icon" src="{{asset('img/SVG/OK.svg')}}"></span>
                                <input id="ok" type="text" class="form-control" placeholder="username" name="ok">

                            </div>

                            <div class="col-md-12 input-group">
                            	<span class="input-group-addon" id="span-skype-icon"><img id="social-icon" src="{{asset('img/SVG/skype-icon.svg')}}"></span>
                                <input id="skype" type="text" class="form-control" placeholder="username" name="skype">
                            </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success col-md-4 pull-right" id="submit">
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