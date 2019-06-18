@extends('template')
@section('title')
Videos
@endsection

@section('banniere')
<div class="uk-section uk-section-muted"></div>
@endsection

@section('content')
<!-- news -->
<div class="uk-section uk-section-muted uk-visible@m">
    <div class="uk-container">
        <!-- breadcrumb -->
        <ul class="uk-breadcrumb">
            <li><a href="{{url('/')}}"><span uk-icon="home"></span></a></li>
            <li><a href="{{url('/videos/')}}">Videos</a></li>
            <li class="uk-visible@m"><span>{{$details->titre}}</span></li>
        </ul>
    </div>

    <div class="uk-inline uk-width-expand uk-margin-large-top">
        <img class="uk-width-expand" src="{{asset('img/background.jpg')}}" alt="" uk-img>
        <div class="uk-overlay-primary uk-position-cover"></div>
        <div class="uk-overlay uk-position-bottom uk-light">
            <iframe class="uk-width-expand" width="" height="480" src="{{'https://www.youtube.com/embed/'.$details->liens.'?autoplay=1'}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media;" allowfullscreen></iframe>
        </div>
    </div>
    <div class="uk-container uk-margin">
        <p>
            {{$details->description}}
        </p>
    </div>
</div>
<!-- videos details on mobile -->
<div class="uk-section uk-section-muted uk-hidden@m">
    <div class="uk-container">
        <div>
            <iframe class="uk-width-expand" width="" height="480" src="{{'https://www.youtube.com/embed/'.$details->liens.'?autoplay=0'}}" frameborder="0" allow="accelerometer; encrypted-media;" allowfullscreen></iframe>
        </div>
        <p>
            {{$details->description}}
        </p>
    </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(function () {
        // alert('videos');
        $(".menu > .active").removeClass('active');
        $(".menu > .item:contains('VIDEOS')").addClass('active');
        $('.menu > .active').attr('style','background:none !important');
    });
</script>
@endsection