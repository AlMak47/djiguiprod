@extends('home')

@section('contents')
	<div class="uk-container">
		<h2 class="uk-heading-line"><span>ABOUT US SETTINGS / ADD SOUS ONGLET</span></h2>
		<hr class="uk-divider-small">

		{!!Form::open(['url'=>'admin/about-us-settings/add-sous-onglet'])!!}

			<select class="uk-select" name="onglet">
				<option value="">CHOISIR ONGLET</option>
				@foreach($onglet as $values)
				<option value="{{$values->id}}">{{$values->onglet}}</option>
				@endforeach
			</select>
			
			{!!Form::text('nom','',['class'=>'uk-input uk-margin-small','placeholder'=>'NOM SOUS ONGLET'])!!}
			{!!Form::textarea('description','',['class'=>'uk-textarea uk-margin-small','placeholder'=>'DESCRIPTION'])!!}
			{!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default'])!!}
		{!!Form::close()!!}
	</div>
	

@endsection