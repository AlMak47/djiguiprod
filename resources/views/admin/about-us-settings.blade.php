@extends('home')

@section('contents')
	<div class="uk-container">
		<h2 class="uk-heading-line"><span>ABOUT US SETTINGS</span></h2>
		<hr class="uk-divider-small">
		<h4>Onglets ({{$onglet->count()}}) <a href="{{url('/admin/about-us-settings/add-onglet')}}" class="uk-button-default">Ajouter</a></h4>
		<ul class="uk-list">
		@foreach($onglet as $values) 
			<li>{{$values->onglet}} <a href="" class="uk-button uk-align-right">delete</a></li>
		@endforeach
		</ul>
		<hr class="uk-divider-small"></hr>
		<h4>Sous-Onglets({{$songlet->count()}}) <a href="{{url('admin/about-us-settings/add-sous-onglet')}}" class="uk-button-default">Ajouter</a></h4>
		<ul class="uk-list">
		@foreach($songlet as $values) 
			<li>{{$values->nom}} <a href="" class="uk-button uk-align-right">delete</a><a href="" class="uk-button uk-align-right">edit</a></li>
		@endforeach
		</ul>
	</div>
	

@endsection