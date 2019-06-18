@extends('home')

@section('contents')
	<div class="uk-container">
		<h2 class="uk-heading-line"><span>Ajouter un artiste</span></h2>
	<!-- form add -->
	{!! Form::open(['url'=>'admin/artist/add-artist','enctype'=>'multipart/form-data']) !!}
		@if($errors->has('pseudo')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('pseudo')}} </span>@endif
	    {!!Form::text('pseudo','',['class'=>'uk-input uk-margin-small uk-margin-top','placeholder'=>'Entrez le pseudo'])!!}
	    @if($errors->has('biographie')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('biographie')}} </span>@endif
	    {!!Form::textarea('biographie','',['class'=>'uk-textarea uk-margin-small','placeholder'=>'Entrez le biographie'])!!}
	    @if($errors->has('photo')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('photo')}} </span>@endif
	    {!!Form::file('photo')!!}
	    {!!Form::text('facebook','',['class'=>'uk-input uk-margin-small','placeholder'=>'Lien Facebook'])!!}

	    {!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default uk-margin-small'])!!}
	{!! Form::close() !!}
	</div>
	

@endsection