@extends('home')

@section('contents')
	<div class="uk-container">
		<h2 class="uk-heading-line"><span>Tous les artistes () </span></h2>
		<ul class="uk-list uk-list-divider">
			@if($artist):
			
			@foreach($artist as $values):
			<li>
				<span></span>{{$values->pseudo}}<span class="uk-align-right"><a href="{{url('admin/artist/edit',['id'=>$values->id])}}" class="uk-button uk-button-default uk-icon-link" uk-icon="pencil">Edit</a><a href="" class="uk-button uk-button-default uk-icon-link" uk-icon="trash">Delete</a></span>
			</li>
			@endforeach
			@endif
		</ul>
	</div>
	

@endsection