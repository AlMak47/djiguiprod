@extends('home')

@section('contents')
	<div class="uk-container">
		<h2 class="uk-heading-line"><span>Ajouter une videos</span></h2>
	<!-- form add -->
	{!! Form::open(['url'=>'admin/videos/postform','method'=>'post','enctype'=>'multipart/form-data']) !!}

		@if($errors->has('titre')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('titre')}} </span>@endif
	    {!!Form::text('titre','',['class'=>'uk-input uk-margin-small uk-margin-top','placeholder'=>'Entrez le titre'])!!}

	    @if($errors->has('liens')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('liens')}} </span>@endif
	    {!!Form::text('liens','',['class'=>'uk-input uk-margin-small uk-margin-top','placeholder'=>'Entrez le liens'])!!}

	    @if($errors->has('description')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('description')}} </span>@endif
	    {!!Form::textarea('description','',['class'=>'uk-textarea uk-margin-small','placeholder'=>'Entrez la description'])!!}

	    @if($errors->has('image')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('image')}} </span>@endif
	    {!!Form::file('image')!!}

	    

	    {!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default uk-margin-small'])!!}
	{!! Form::close() !!}
	</div>
	

@endsection