@extends('template')
@section('title')
News
@endsection

@section('banniere')
<div class="uk-section uk-section-muted"></div>
@endsection

@section('content')
<!-- DETAILS -->

<div class="uk-section uk-section-muted uk-padding-remove">
    <div class="uk-container">
    	<!-- breadcrumb -->
    	<ul class="uk-breadcrumb">
		    <li><a href="{{url('/')}}"><span uk-icon="home"></span></a></li>
		    <li><a href="{{url('/news/')}}">News</a></li>
		    <li class="uk-visible@m"><span>{{str_limit($details->titre,50,('...'))}}</span></li>
		</ul>
		<div class="uk-margin-remove" style=""></div>
    </div>
</div>
<!-- // -->

<!--  -->
<div class="uk-section uk-section-muted">
	<div class="uk-container">
		<div uk-grid>
			<!-- details news -->
			<div class="uk-width-3-4@m">
				<article class="uk-article">

				    <h1 class="uk-article-title"><a class="uk-link-reset" href="">{{$details->titre}}</a></h1>

				    <p class="uk-article-meta"><a href="#">Admin</a> {{$details->created_at}} <a href="#"></a> 
				    	<!--  -->
				    		<div class="fb-like" data-href="{{url()->current()}}" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
				    	<!-- // -->
				    </p>

				    <img src="{{asset('uploads/'.$details->image)}}" class="" uk-img>

				    <p class="uk-text-lead uk-text-justify">{!!$details->contenu!!}</p>

				    
				</article>
				<div class="uk-inline uk-width-expand">
					<div class="uk-align-left"><a href="" class="uk-button"><span uk-icon="icon:arrow-left"></span>prev</a></div>
					<div class="uk-align-right"><a href="" class="uk-button">next<span uk-icon="icon:arrow-right"></span></a></div>
				</div>
			</div>
			<!-- // -->
			<!-- social networks -->
			<div class="uk-width-1-4@m">
				<h3 class="uk-heading"><span>Reseaux Sociaux</span></h3>
				<!-- SOCIAL NETWORKS -->
				<div>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDjigui-Prod-362798861143645%2F&tabs=journal%2Cevenements&width=340&height=180&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2005235842908607" width="340" height="200" style="border:none;overflow:hidden" scrolling="yes" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
				</div>
				<div>
					<h3 class="uk-h4">Abonnez Vous a notre chaine youtube</h3>
                        <script src="https://apis.google.com/js/platform.js"></script>
                        <div class="g-ytsubscribe" data-channelid="UCXP_3vs8__9bgmA3zuu_m0g" data-layout="full" data-count="default"></div>
				</div>
				<div>
					<h3 class="uk-heading"><span>Dernieres News</span></h3>
					<!-- recents news -->
					@foreach($recents as $values)
					<div class="uk-margin-small uk-inline uk-box-shadow-small">
						<a class="" href="{{url('news',['id'=>$values->id])}}">
							<img src="{{asset('uploads/'.$values->image)}}" class="uk-width-medium uk-height-small" alt="" uk-img>
							<div class="uk-overlay uk-overlay-primary uk-position-bottom">
				                <p class="uk-text-bold">{{str_limit($values->titre,100,('...'))}}</p>
				            </div>
				        </a>
					</div>
					@endforeach
				</div>
				<!-- NEWSLETTERS -->
				<div>
					<h3 class="uk-heading"><span>Restez Informer</span></h3>
					{!!Form::open(['url'=>url()->current(),'id'=>'newsletters-form'])!!}
					<div class="uk-margin">
				        <div class="uk-inline">
				            <a class="uk-form-icon uk-form-icon-flip" id="newsletters-send" uk-icon="icon: check"></a>
				            {!!Form::text('newsletters','',['class'=>'uk-input uk-form-width-large','placeholder'=>'xyz@gmail.com'])!!}
				        </div>
				    </div>
					{!!Form::close()!!}
				</div>
				<!-- VIDEOS RECENTES -->
				<div>
					<h3 class="uk-heading"><span>Videos Recentes</span></h3>
					@foreach($medias as $values)
					<div class="uk-margin-small uk-inline uk-box-shadow-small">
						<a class="" href="">
							<img src="{{asset('uploads/'.$values->image)}}" class="uk-width-medium" alt="" uk-img>
							<div class="uk-overlay uk-overlay-primary uk-position-cover">
								<div class="uk-position-center">
				                    <span uk-icon="icon:play-circle;ratio:2"></span>
				                </div>
				                <div class="uk-position-bottom-right uk-padding-small">
				                	<p class="uk-text-bold">{{$values->titre}}</p>
				                </div>
				            </div>
				        </a>
					</div>
					@endforeach
				</div>
			</div>
			<!-- // -->
		</div>
	</div>
</div>
<!-- // -->

@endsection

@section('script')
<script type="text/javascript">
    $(function () {
        // alert('videos');
        $(".menu > .active").removeClass('active');
        $(".menu > .item:contains('NEWS')").addClass('active');
        $('.menu > .active').attr('style','background:none !important');
        // send form newsletters
        $("#newsletters-send").on('click',function () {
        	$("#newsletters-form").submit();
        })
    });
</script>
@endsection