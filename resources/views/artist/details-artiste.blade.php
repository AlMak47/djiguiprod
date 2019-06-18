@extends('template')
@section('title')
Artistes
@endsection

@section('banniere')
<div class="uk-cover-container uk-height-medium">
    <img src="{{asset('uploads/'.$details->photo)}}" alt="" uk-cover>
</div>
@endsection

@section('content')
<!-- breadcrumbs -->
<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="{{url('/')}}"><span uk-icon="home"></span></a></li>
            <li><a href="{{url('/artistes/')}}">Artistes</a></li>
            <li><span>{{$details->pseudo}}</span></li>
        </ul>
    </div>
</div>
<!-- // -->
<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <div class="" uk-grid>
            <div class="uk-width-3-4@m">
                <h2 class="uk-heading-bullet"><span>{{$details->pseudo}}</span>
                    <span class="uk-text-right uk-margin-xlarge-left">
                        <a href="{{$details->facebook}}" target="_blank" class="uk-icon-button" uk-icon="icon:facebook;ratio:1"></a>
                        <a href="" class="uk-icon-button" uk-icon="icon:twitter;ratio:1"></a>
                        <a href="" class="uk-icon-button" uk-icon="icon:youtube;ratio:1"></a>
                        <a href="" class="uk-icon-button" uk-icon="icon:instagram;ratio:1"></a>
                    </span>
                <hr class="uk-dividing"></h2>
                <div class="uk-text-lead uk-text-justify">{!!$details->biographie!!}</div>
            </div>
            <div class="uk-width-1-4@m">
                {!!Form::open()!!}
                <select name="artiste" class="uk-select">
                    <option value="">Filtrez par Artist</option>
                </select>
                {!!Form::close()!!}
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
        $(".menu > .item:contains('Artistes')").addClass('active');
        $('.menu > .active').attr('style','background:none !important');
    });
</script>
@endsection