@extends('layouts.header')

@section('title', 'Страницы')
@section('content')
<div class="container">
	@if (session('success'))
	    <div class="alert alert-success alert-dismissible" role="alert">
	    	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        {{ session('success') }}
	    </div>
	@endif
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				@foreach($pages as $page)
					<div class="col-md-8 col-md-offset-1 input-group" id="list">
					  
					  <input type="text" class="form-control " id="basic-url-{{$page->id}}" value="{{$host}}/{{$page->url}}" aria-describedby="basic-addon3" />
					  <span class="input-group-addon"><a class="btn" href="" data-clipboard-target="#basic-url-{{$page->id}}">Копировать</a></span>
					</div>
					<br />
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection