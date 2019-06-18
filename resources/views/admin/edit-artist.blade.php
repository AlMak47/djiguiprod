@extends('home')

@section('contents')
	<div class="uk-container">
		<h2 class="uk-heading-line"><span>Editer un artiste</span></h2>
		<div class="uk-alert uk-alert-success">	
		@if(session('success'))
		{{session('success')}}
		@endif
		</div>
	<!-- form edit -->
	@if($artist)

	{!! Form::open(['url'=>'admin/artist/edit-artist','enctype'=>'multipart/form-data']) !!}
		@if($errors->has('pseudo')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('pseudo')}} </span>@endif
	    {!!Form::text('pseudo',$artist->pseudo,['class'=>'uk-input uk-margin-small uk-margin-top','placeholder'=>'Entrez le pseudo'])!!}
	    @if($errors->has('biographie')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('biographie')}} </span>@endif
	    {!!Form::textarea('biographie',$artist->biographie,['class'=>'uk-textarea uk-margin-small','placeholder'=>'Entrez le biographie'])!!}
	    @if($errors->has('photo')):<span class="uk-alert-danger uk-margin-bottom"> {{$errors->first('photo')}} </span>@endif
	    {!!Form::file('photo')!!}
	    <img src="{{asset('uploads/'.$artist->photo)}}" class="uk-width-small" uk-img>
	    {!!Form::text('facebook',$artist->facebook,['class'=>'uk-input uk-margin-small','placeholder'=>'Lien Facebook'])!!}
	    {!!Form::hidden('id',$artist->id)!!}
	    {!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default uk-margin-small'])!!}
	{!! Form::close() !!}
	@endif
	</div>
	

@endsection