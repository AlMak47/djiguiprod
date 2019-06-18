@extends('template')
@section('title')
Videos
@endsection

@section('banniere')
<div class="uk-section uk-section-muted"></div>
@endsection

@section('content')
<!-- news -->
<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <!-- breadcrumb -->
        <ul class="uk-breadcrumb">
            <li><a href="{{url('/')}}"><span uk-icon="home"></span></a></li>
            <li><a href="{{url('/videos/')}}">Videos</a></li>
        </ul>
    </div>
    @if($videos->onFirstPage())
    <div class="uk-inline uk-width-expand uk-margin-large-top uk-visible@m">
        <img class="uk-width-expand" src="{{asset('img/background.jpg')}}" alt="" uk-img>
        <div class="uk-overlay-primary uk-position-cover"></div>
        <div class="uk-overlay uk-position-bottom uk-light">
            <iframe class="uk-width-expand" width="" height="480" src="https://www.youtube.com/embed/LoSmHY5ZyUk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
        </div>
    </div>
    <!-- cover on mobile -->
    <div class="uk-hidden@m">
        <iframe class="uk-width-expand" width="" height="480" src="https://www.youtube.com/embed/LoSmHY5ZyUk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
    </div>
    @endif
</div>
<div class="uk-section uk-padding-remove uk-margin-small">
    <div class="uk-container"><h3 class="uk-heading"><span>VIDEOS</span></h3></div>
</div>
<div class="uk-section uk-section-muted uk-padding-small">
        <div class="uk-grid-match uk-child-width-1-4@m uk-child-width-1-1@s" uk-grid>
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
</div>
<!-- // -->

<!-- VIDEOS -->
<div class="uk-section uk-section-muted">
    
</div>
<!-- // -->
<div class="uk-section uk-section-muted uk-margin-remove uk-padding-small">
    <div class="uk-container">
        @if($videos->nextPageUrl()) 
        <a href="{{url($videos->nextPageUrl())}}" class="uk-icon-link uk-align-center uk-width-medium uk-button uk-button-default uk-border-rounded" uk-icon="icon:arrow-right">PLUS DE VIDEOS</a>
        @elseif($videos->previousPageUrl())
        <a href="{{url($videos->previousPageUrl())}}" class="uk-icon-link uk-align-center uk-width-medium uk-button uk-button-default uk-border-rounded" uk-icon="icon:arrow-left"></a>
        @endif
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(function () {
        // alert('videos');
        $(".menu > li > .active").removeClass('active');
        $(".menu > li > .item:contains('Videos')").addClass('active');
        $('.menu > li > .active').attr('style','background:none !important');
    });
</script>
@endsection