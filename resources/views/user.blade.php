@extends('frontpage')
@section('title', 'Чат')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-push-4" id="col">
	            <div class="panel panel-default" id="panel">
	            	@foreach($pages as $page)
	            	<div class="panel-heading"> 
	                	<h3 class="panel-title">{{$page->welcome_text}}</h3>
	                </div>
	            	<div class="panel-body">
		            	
		            		@unless(empty($page->whatsapp))
							<a href="/w/{{$page->whatsapp}}"><img class="social-icon" src="{{asset('img/SVG/Whatsapp.svg')}}"></a>
							@endunless
							@unless(empty($page->telegram))
							<a href="/t/{{$page->telegram}}"><img class="social-icon" src="{{asset('img/SVG/Telegram.svg')}}"></a>
							@endunless
							@unless(empty($page->fbmessenger))
							<a href="/m/{{$page->fbmessenger}}"><img class="social-icon" src="{{asset('img/SVG/Messenger.svg')}}"></a>
							@endunless
							@unless(empty($page->viber))
							<a href="/v/{{$page->viber}}"><img class="social-icon" src="{{asset('img/SVG/Viber.svg')}}"></a>
							@endunless
							@unless(empty($page->facebook))
							<a href="/fb/{{$page->facebook}}"><img class="social-icon" src="{{asset('img/SVG/Facebook.svg')}}"></a>
							@endunless
							@unless(empty($page->vk))
							<a href="/vk/{{$page->vk}}"><img class="social-icon" src="{{asset('img/SVG/Vk.svg')}}"></a>
							@endunless
							@unless(empty($page->ok))
							<a href="/ok/{{$page->ok}}"><img class="social-icon" src="{{asset('img/SVG/OK.svg')}}"></a>
							@endunless
							@unless(empty($page->skype))
							<a href="/s/{{$page->skype}}"><img class="social-icon" src="{{asset('img/SVG/Skype.svg')}}"></a>
							@endunless
					@endforeach
	            	</div>
	            	<div class="panel-footer">
	            		<p>&copy; GetChat.com</p>
	            	</div>
				</div>
			</div>		
		</div>
		
	</div>
@endsection