@extends('template')
@section('title')
Evenements
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
            <li><a href="{{url('/events/')}}">Evenements</a></li>
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
        $(".menu > li > .item:contains('Evenements')").addClass('active');
        $('.menu > .active').attr('style','background:none !important');
    });
</script>
@endsection