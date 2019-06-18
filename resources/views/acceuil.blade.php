@extends('template')
@section('title')
Home
@endsection

@section('banniere')

<!-- banniere -->
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="autoplay:true;autoplay-interval:5000;pause-on-hover:false;animation:slide-right;max-height: 630">

    <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom:0">
        @if($news):
            @foreach($news as $values):
        <li>
            <img src="{{asset('uploads/'.$values->image)}}" alt="" uk-cover>
            <div class="uk-text-left uk-overlay uk-overlay-primary uk-position-bottom uk-padding-remove-top uk-padding-remove-bottom  uk-transition-slide-bottom" style="background:rgba(25,25,25,0.5) !important;">
                <div class="uk-text-lead">News</div>
                <h1 class="uk-heading uk-margin-remove uk-text-uppercase"><span>{{str_limit($values->titre,70,('...'))}}</span><hr class="uk-divider-small"></h1>
                <p class="uk-text-large uk-margin-remove">{{str_limit($values->contenu,110,(' ...'))}}</p>
                <div class="uk-align-left uk-margin-small">
                    <a href="{{url('/news',['id'=>$values->id])}}" class="uk-border-rounded uk-button uk-button-default">Lire la suite <span uk-icon="icon:arrow-right"></span></a>
                </div>
                <div class="uk-align-right uk-margin-remove">
                    <span>Partagez : </span>
                    <a href="" class="uk-icon-link social" uk-icon="facebook"></a>
                    <a href="" class="uk-icon-link social" uk-icon="twitter"></a>
                    <a href="" class="uk-icon-link social" uk-icon="instagram"></a>
                </div>
            </div>
        </li>
            @endforeach
        @endif
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>

<!-- // -->

@endsection

@section('content')


<!-- who we are -->

<div class="uk-section uk-section-default" uk-scrollspy="cls: uk-animation-slide-left; repeat: true;">
	<div class="uk-container"> 
		<h1 class="uk-heading-bullet uk-text-lead uk-text-large uk-text-uppercase uk-text-center"><span>Djigui-Prod</span></h1>
		<p class="w-text uk-padding-large uk-padding-remove-top uk-padding-remove-bottom">
			Depuis Mars 2018, Djigui Production accompagne des acteurs culturels dans les domaines Culturel, Artistique et l'événementiel. 
            Si votre objectif est de vous produire sur scène ou d’organiser des évènements, sachez que nous apportons des solutions pour développer votre modèle économique, votre talent artistique et rendre efficient votre personne afin de vous réaliser pleinement...
		</p>
		
			<a href="{{url('about-us')}}" class="uk-border-rounded uk-margin-large-left uk-button uk-button-default uk-icon-link uk-box-shadow-small" uk-icon="arrow-right">En savoir Plus </a>
		
	</div>
</div>

<!-- // -->


<!-- NEWS -->
<div class="uk-section uk-section-secondary uk-padding-small">
	<div class="uk-container uk-margin-bottom">
        <h1 class="uk-heading uk-text-lead uk-text-uppercase uk-text-center"> <span>News</span> </h1>
        <hr class="uk-text-center uk-divider-small">
    </div>
	<div class="uk-child-width-1-5@m uk-grid-collapse uk-text-center" uk-scrollspy="target: > a ; cls: uk-animation-fade; repeat: false;delay:100" uk-grid>
		
        @foreach($news as $values)
        <a href="{{url('/news',['id'=>$values->id])}}" class="uk-tile uk-margin-remove uk-padding-remove">
        	<img src="{{asset('uploads/'.$values->image)}}" alt="" class="uk-height-small uk-width-medium" uk-img>
        	<div class="uk-overlay-primary uk-position-cover"></div>
            <div class="uk-position-center uk-light uk-visible@m">
                <p>{{str_limit($values->titre,100,('...'))}}</p>
            </div>
            <div class="uk-overlay uk-position-center uk-light uk-hidden@m">
                <p class="uk-text-lead">{{str_limit($values->titre,100,('...'))}}</p>
            </div>
        </a>
    @endforeach
</div>
</div>
<!-- // -->

<!-- Videos du jour -->

<div class="uk-section-default" uk-scrollspy="cls: uk-animation-slide-left; repeat: false;delay:100">
    <div class="uk-section uk-light uk-background-cover uk-background-top-left uk-background-fixed" style="background-image: url({{asset('img/junior.jpg')}})">
        <div class="uk-container">

            <div uk-grid>
                <div class="uk-width-1-3@m">
                    <h1 class="uk-heading uk-margin-large-top"><span>Konto Wonodha</span></h1>
                </div>
                <div class="uk-width-2-3@m uk-visible@m">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/LoSmHY5ZyUk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
                    <div></div>
                </div>
                <div class="uk-width-2-3@m uk-hidden@m">
                    <iframe class="uk-width-expand uk-height-medium" width="auto" height="auto" src="https://www.youtube.com/embed/LoSmHY5ZyUk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
                    <div></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ARTIST -->
<div class="uk-section uk-section-muted uk-padding-small">
    <div class="uk-container">
        <h2 class="uk-heading uk-text-center"><span>ARTISTE</span><hr class="uk-divider-small"></h2>
    </div>
</div>
<div class="uk-section-default" id="artiste">
    <div class="uk-section uk-section-large uk-light uk-background-cover" style="background-position: left;background-image: url({{asset('img/1.png')}})">
        <div class="uk-container">
            <h2 class="uk-heading"><span>{{$artist->pseudo}}</span></h2>
            <div>
                <a href="{{$artist->facebook}}" target="_blank" class="uk-button uk-button-default uk-padding-small uk-padding-remove-top uk-padding-remove-bottom  uk-border-pill uk-icon-link" uk-icon="facebook"></a>
                <a href="" class="uk-button uk-button-default uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-border-pill uk-icon-link" uk-icon="youtube"></a>
                <a href="" class="uk-button uk-button-default uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-border-pill uk-icon-link" uk-icon="instagram"></a>
                <a href="" class="uk-button uk-button-default uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-border-pill uk-icon-link" uk-icon="twitter"></a>
            </div>

            <div class="uk-text-lead uk-margin-small">{!!str_limit($artist->biographie,200)!!}</div>
            <a href="{{url('artistes',['id'=>$artist->id])}}" class="uk-button uk-button-default uk-border-rounded uk-icon-link" uk-icon="arrow-right">En savoir Plus </a>
        </div>
    </div>
</div>
<!-- VIDEOS -->
<div class="uk-section uk-section-muted uk-padding-remove">
    <div class="uk-container">
        <h2 class="uk-heading uk-text-center"><span>VIDEOS</span><hr class="uk-divider-small"></h2>
    </div>
</div>
<div class="uk-section uk-section-default">
    <div class="uk-container">
        <div class="uk-grid-match uk-child-width-1-4@m" uk-scrollspy="target: > div; cls:uk-animation-slide-bottom; delay: 500" uk-grid>
            @foreach($videos as $videosValues)
            <div>
                <a href="{{url('/videos',['id'=>$videosValues->id])}}" class="uk-inline uk-light">
                    <img src="{{asset('uploads/'.$videosValues->image)}}" class="uk-width-expand uk-height-small" alt="" uk-img>
                    <div class="uk-overlay uk-overlay-primary uk-position-cover">
                    <div class="uk-position-center">
                        <span uk-icon="icon:play-circle;ratio:2"></span>
                    </div>
                    <div class="uk-position-bottom-right uk-padding-small">
                        <p class="">{{$videosValues->titre}}</p>
                    </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <a href="/videos" class=" uk-width-medium uk-button uk-button-default uk-border-rounded uk-text-uppercase uk-align-center uk-margin-small">plus de videos <span uk-icon="icon:arrow-right"></span></a>


    </div>
</div>
@endsection