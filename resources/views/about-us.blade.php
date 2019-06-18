@extends('template')
@section('title')
A Propos
@endsection

@section('banniere')
<div class="uk-cover-container uk-height-medium">
    <img src="{{asset('img/background.jpg')}}" alt="" uk-cover>
    <div class="uk-overlay uk-light uk-position-bottom">
        <h2 class=""><span>A Propos de DjiguiPRod</span></h2>
        <hr class="uk-divider-small"></hr>
    </div>
</div>
@endsection

@section('content')
<!-- breadcrumbs -->
<div class="uk-section uk-section-muted uk-margin-remove uk-padding-small">
    <div class="uk-container">
        <ul class="uk-breadcrumb">
            <li><a href="{{url('/')}}"><span uk-icon="home"></span></a></li>
            <li><a href="{{url('/events/')}}">A Propos</a></li>
        </ul>
    </div>
</div>
<!-- // -->
<div class="uk-section uk-section-muted uk-padding-small uk-margin-remove">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-3-4@m">
                <div class="uk-child-width-1-2@m" uk-grid>
                @foreach($aboutdetails as $values)
                <div>
                    <h4 class="uk-h3" uk-scrollspy="cls:uk-animation-slide-top;delay:100;">{{$values->onglet}}</h4>
                    <ul uk-scrollspy="closest:li;cls:uk-animation-slide-top;delay:100;" class="uk-list">
                        @for($i=0;$i < $ongletdetails[$values->id]->count() ; $i++)
                        <li ><a class="uk-h5 uk-button uk-text-justify uk-text-left" href="{{url('/about-us',['onglet'=>$values->id,'sousOnglet'=>$ongletdetails[$values->id][$i]->id])}}"><span uk-icon="icon:minus;ratio:0.6"></span> {{$ongletdetails[$values->id][$i]->nom}}</a></li>
                        @endfor
                    </ul>
                </div>
                @endforeach
            </div>
            </div>
            <div class="uk-width-1-4@m">
                <div class="uk-child-width-1-1@m">
                    <div>
                        <h3 class="uk-h4">Suivez Nous</h3>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDjigui-Prod-362798861143645%2F&tabs&width=340&height=180&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2005235842908607" width="340" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <div>
                        <h3 class="uk-h4">Abonnez Vous a notre chaine youtube</h3>
                        <script src="https://apis.google.com/js/platform.js"></script>
                        <div class="g-ytsubscribe" data-channelid="UCXP_3vs8__9bgmA3zuu_m0g" data-layout="full" data-count="default"></div>
                    </div>
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