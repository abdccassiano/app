@extends('layout')

@section('title', 'Contact')

@section('content')

	<h1>{{ __('Contact') }}</h1>

	<form method="post" action="{{ route('contact') }}">

		@csrf

		<input type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}" /><br />
		<small>{{ $errors->first('name') }}</small><br />

		<input type="text" name="email" placeholder="Email..." value="{{ old('email') }}"/><br />
		<small>{{ $errors->first('email') }}</small><br />

		<input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}" /><br />
		<small>{{ $errors->first('subject') }}</small><br />

		<textarea name="content" placeholder="Mensaje">{{ old('content') }}</textarea><br />
		<small>{{ $errors->first('content') }}</small><br />

		<button>@lang('Send')</button>
	</form>

@endsection