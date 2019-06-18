@extends('template')
@section('title')
A Propos
@endsection

@section('banniere')
<div class="uk-cover-container uk-height-medium">
    <img src="{{asset('img/background.jpg')}}" alt="" uk-cover>
    <div class="uk-overlay uk-light uk-position-bottom" uk-scrollspy="cls:uk-animation-slide-left">
        <h2 class=""><span>A Propos de DjiguiPRod</span></h2>
        <hr class="uk-divider-small"/>
    </div>
</div>
@endsection

@section('content')
<!-- breadcrumbs -->
<div class="uk-section uk-section-muted uk-padding-small">
    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="{{url('/')}}"><span uk-icon="home"></span></a></li>
            <li><a href="{{url('/about-us/')}}">A Propos</a></li>
            <li><a href="{{url('')}}">{{$onglet->onglet}}</a></li>
            <li><a>{{$sousonglet->nom}}</a></li>
        </ul>
    </div>
</div>
<!-- // -->
<div class="uk-section uk-section-muted uk-padding-remove-top">
    <div class="uk-container">
        <div class="" uk-grid>
                <div class="uk-width-3-4@m">
                    <h2 class="uk-heading-bullet"><span>{{$sousonglet->nom}}</span></h2>

                    <div class="uk-text-justify uk-text-lead">{!!$sousonglet->description!!}</div>
                </div>
                <div class="uk-width-1-4@m">
                    <div class="uk-grid-match uk-child-width-1-1@m" uk-grid>
                        <div><img src="{{asset('img/lws1.gif')}}" class="" uk-img></div>
                        <div><a href="https://www.smartechguinee.com" target="_blank"><img src="{{asset('img/smart2.gif')}}" class="" uk-img></a></div>
                    </div>       
                </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    $(function () {
        // alert('videos');
        $(".menu > .active").removeClass('active');
        $(".menu > .item:contains('A Propos')").addClass('active');
        $('.menu > .active').attr('style','background:none !important');
    });
</script>
@endsection