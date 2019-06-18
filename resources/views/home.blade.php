@extends('layouts.app')


@section('content')

<div class="uk-section uk-section-default">
	<div class="uk-container">
		<a href="{{route('listnews')}}" class="uk-button">LIST NEWS</a>
		<a href="{{route('getnews')}}" class="uk-button">ADD NEWS</a>
		<a href="{{url('/admin/videos/getform')}}" class="uk-button">ADD VIDEOS</a>
		<a href="{{url('/admin/videos/list-videos')}}" class="uk-button">LIST VIDEOS</a>
		<a href="{{url('/admin/videos/list-videos')}}" class="uk-button">LIST EVENTS</a>
		<a href="{{url('/admin/videos/list-videos')}}" class="uk-button">ADD EVENTS</a>
		<a href="{{url('/admin/artist/list')}}" class="uk-button">LIST ARTIST</a>
		<a href="{{url('admin/artist/add-artist')}}" class="uk-button">ADD ARTIST</a>
		<a href="{{url('/admin/about-us-settings/')}}" class="uk-button">ABOUT US PAGE</a>
		<a href="{{route('logout')}}" class="uk-button">LOGOUT</a>
	</div>
</div>
@yield('contents')
@endsection
