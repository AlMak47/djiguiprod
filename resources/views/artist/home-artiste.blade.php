@extends('template')
@section('title')
Artistes
@endsection

@section('banniere')
<div class="uk-section uk-section-muted"></div>
@endsection

@section('content')
<!-- breadcrumbs -->
<div class="uk-section uk-section-muted">
    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="{{url('/')}}"><span uk-icon="home"></span></a></li>
            <li><a href="{{url('/artistes/')}}">Artistes</a></li>
        </ul>
    </div>
</div>
<!-- // -->


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