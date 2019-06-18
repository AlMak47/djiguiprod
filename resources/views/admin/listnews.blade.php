@extends('home')

@section('contents')
	<div class="uk-container">
		<h2 class="uk-heading-line"><span>Toutes les News ({{count($news)}}) </span></h2>
		<ul class="uk-list uk-list-divider">
			@if($news):
			@foreach($news as $values):
			<li>
				<span>{{$values->titre}}</span><span class="uk-align-right"><a href="" class="uk-button uk-button-default uk-icon-link" uk-icon="pencil">Edit</a><a href="{{route('confirmDelete',['id'=>$values->id])}}" class="uk-button uk-button-default uk-icon-link" uk-icon="trash">Delete</a></span>
			</li>
			@endforeach
			@endif
		</ul>
	</div>
	

@endsection