@extends('home')

@section('contents')
	<div class="uk-container">
		<h2 class="uk-heading-line"><span>ABOUT US SETTINGS / ADD ONGLET</span></h2>
		<hr class="uk-divider-small">
		{!!Form::open(['url'=>'/admin/about-us-settings/add-onglet'])!!}
			{!!Form::text('onglet','',['class'=>'uk-input uk-margin-small','placeholder'=>'NOM ONGLET'])!!}
			{!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default'])!!}
		{!!Form::close()!!}
	</div>
	

@endsection