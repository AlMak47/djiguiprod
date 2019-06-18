@extends('home')

@section('contents')
	<div class="uk-container">
		<h2 class="uk-heading-line"><span>Ajouter une news</span></h2>
	<!-- form add -->
	{!! Form::open(['url'=>'admin/news/postform','enctype'=>'multipart/form-data']) !!}
		@if($errors->has('titre')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('titre')}} </span>@endif
	    {!!Form::text('titre','',['class'=>'uk-input uk-margin-small uk-margin-top','placeholder'=>'Entrez le titre'])!!}
	    @if($errors->has('titre')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('titre')}} </span>@endif
	    {!!Form::textarea('contenu','',['class'=>'uk-textarea uk-margin-small','placeholder'=>'Entrez le texte'])!!}
	    @if($errors->has('titre')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('titre')}} </span>@endif
	    {!!Form::file('image')!!}
	    @if($errors->has('titre')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('titre')}} </span>@endif
	    {!!Form::select('type',['prioritaire'=>'prioritaire','par_default'=>'par_default'],null,['class'=>'uk-select uk-margin-small','placeholder'=>'Priorite'])!!}

	    {!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default uk-margin-small'])!!}
	{!! Form::close() !!}
	</div>
	

@endsection