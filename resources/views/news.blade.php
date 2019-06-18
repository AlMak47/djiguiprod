@extends('template')
@section('title')
News
@endsection

@section('banniere')
<div class="uk-section uk-section-muted"></div>
@endsection

@section('content')
<!-- news -->
<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="{{url('/')}}"><span uk-icon="home"></span></a></li>
            <li><a href="{{url('/news/')}}">News</a></li>
        </ul>
    </div>
</div>
<!-- // -->

<!-- NEWS -->
<div class="uk-section uk-section-muted uk-margin-remove-bottom uk-padding-remove-bottom">
	<!-- <div class="uk-container uk-margin-bottom"><h1 class="uk-heading-bullet uk-text-lead uk-text-uppercase uk-text-center"> <span>News</span> </h1></div> -->
	<div class="uk-child-width-1-5@s uk-grid-collapse uk-text-center " uk-scrollspy="target: > a ; cls: uk-animation-fade; repeat: false;delay:100" uk-grid>
		@foreach($news as $values) 

        <a class="uk-tile uk-margin-remove uk-padding-remove uk-height-medium uk-animation-toggle " href="{{url('/news',['id'=>$values->id])}}">
        	<img src="{{asset('uploads/'.$values->image)}}" class="uk-height-medium uk-animation-shake" alt="">
        	<div class="uk-overlay-primary uk-position-cover uk-animation-shake"></div>
            <div class="uk-overlay uk-position-left uk-light" uk-grid>
                <div class="uk-width-1-1@m uk-margin-small-left uk-text-left uk-margin-remove-top uk-padding-small">
                    <span>NEWS </span><span class="uk-margin-left">{{$values->created_at}}</span>
                </div>
                <div class="uk-width-1-1@m  uk-text-left uk-text-medium uk-margin-small-left uk-padding-small">{{str_limit($values->titre,100,('...'))}}</div>

            </div>
        </a>

    @endforeach
</div>
</div>
<!-- // -->
<div class="uk-section uk-section-muted uk-margin-remove uk-padding-small">
    <div class="uk-container">
        <a href="" class="uk-icon-link uk-align-center uk-width-medium uk-button uk-button-default uk-border-rounded" uk-icon="icon:arrow-right">PLUS DE NEWS</a>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(function () {
        // alert('videos');
        $(".menu > li > .active").removeClass('active');
        $(".menu > li > .item:contains('News')").addClass('active');
        $('.menu > li > .active').attr('style','background:none !important');
    });
</script>
@endsection