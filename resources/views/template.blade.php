<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130660555-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-130660555-2');
    </script> -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/logo-transp.png')}}" type="image/png" />
	<title>DjiguiProd-@yield('title')</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />
</head>
<body>
    <!-- formulaire de contact -->
    <!-- MODAL FORM -->
    <div id="form-contact" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title"><span uk-icon="icon:mail;ratio:2"></span> Contactez Nous </h2>
            </div>
            {!!Form::open(['url'=>'contact-us','id'=>'contact-form'])!!}
            <div class="uk-modal-body">
                {!!Form::text('nom','',['class'=>'uk-input uk-margin-small','placeholder'=>'Nom Complet'])!!}
                {!!Form::email('email','',['class'=>'uk-input uk-margin-small','placeholder'=>'Adresse Email'])!!}
                {!!Form::text('phone','',['class'=>'uk-input uk-margin-small','placeholder'=>'Numero de telephone'])!!}
                {!!Form::textarea('message','',['class'=>'uk-textarea','placeholder'=>'Ecrivez ici'])!!}
            </div>
            <div class="uk-modal-footer">
                {!!Form::submit('Envoyez',['class'=>'uk-button uk-button-primary uk-border-rounded '])!!}
            </div>
            {!!Form::close()!!}
        </div>
    </div>
<!-- // -->

        <!-- <div class="uk-border-rounded uk-box-shadow-medium uk-width-large uk-position-fixed uk-position-z-index uk-section uk-section-default uk-position-bottom-right uk-margin-small uk-margin-right uk-padding-remove" id="contact-form" style="display: none;">
            <div class="uk-container">
            <h3>Contactez Nous</h3>
            {!!Form::open(['url'=>'contact-us/postform'])!!}
                {!!Form::text('nom','',['class'=>'uk-input uk-margin-small','placeholder'=>'Nom Complet'])!!}
                {!!Form::email('email','',['class'=>'uk-input uk-margin-small','placeholder'=>'Adresse Email'])!!}
                {!!Form::text('phone','',['class'=>'uk-input uk-margin-small','placeholder'=>'Numero de telephone'])!!}
                {!!Form::textarea('message','',['class'=>'uk-textarea uk-margin-small','placeholder'=>'Ecrivez ici'])!!}
                {!!Form::submit('Envoyer',['class'=>'uk-button uk-button-default uk-border-pill uk-margin-small'])!!}
                <a class="uk-button uk-button-danger uk-border-pill" id="close-form">Annuler</a>
            {!!Form::close()!!}
            </div>
        </div> -->
    <!-- // -->
<!-- button contact us -->
<div class="uk-position-fixed uk-position-z-index uk-position-bottom-right uk-margin-medium" id="btn-contact" style="display: none;">
    <a href="#form-contact" uk-toggle class="uk-box-shadow-large uk-border-rounded uk-button uk-button-primary uk-icon-link uk-margin-small-right" uk-icon="mail"> Contactez Nous </a>
</div>
<!-- navbar -->
<div class="uk-position-relative">
    <!-- banniere -->
    @yield('banniere')
    <!-- //  -->
    <!-- MOBILE MENU -->
    <div class="uk-position-top uk-hidden@m">
        <nav class="uk-navbar uk-navbar-container uk-margin" uk-sticky>
            <div class="uk-navbar-left">
                <a class="uk-navbar-toggle" href="#" uk-toggle="target: #offcanvas-nav-primary">
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left"></span>
                </a>
                <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
                    <div class="uk-offcanvas-bar uk-flex uk-flex-column">

                        <ul class="uk-nav uk-nav-default uk-nav-left uk-list-divider">

                            <li></li>
                            <li class=""><a class="" href="{{url('/')}}"><span uk-icon='home'></span> HOME</a></li>
                            <li class=""><a class="" href="{{url('/news')}}"><span uk-icon='world'></span> NEWS</a></li>
                            <li class=""><a class="" href="{{url('/videos/')}}"><span uk-icon='play'></span> VIDEOS</a></li>
                            <li class=""><a class="" href="{{url('/artistes')}}"><span uk-icon='grid'></span> ARTISTES</a></li>
                            <li class=""><a class="" href="{{url('/events')}}"><span uk-icon='calendar'></span> EVENEMENTS</a></li>
                            <li class=""><a class="" href="{{url('/about-us')}}"><span uk-icon='info'></span> A PROPOS</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="uk-navbar-center uk-hidden@m">
                {!!Form::open(['url'=>'','method'=>'post','class'=>'uk-hidden'])!!}    
                    <div class="uk-margin uk-margin-large-right">
                        <div class="uk-width-expand uk-inline">
                            {!!Form::text('search','',['class'=>'uk-input','placeholder'=>'Tapez une recherche'])!!}
                            <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: search"></a>
                        </div>
                    </div>
                {!!Form::close()!!}
                <a href="{{url('')}}" class="uk-icon-link uk-button uk-margin-large-right" uk-icon="icon:search"></a>
            </div>
            <div class="uk-navbar-right">
                <a href=""><img src="{{asset('img/logo-transp.png')}}" class="uk-width-small uk-position-top-right uk-margin-small-left" uk-img></a>
            </div>
            
        </nav>
    </div>
    <!-- // -->
    <div class="uk-position-top uk-visible@m">
        <nav class="uk-navbar-container uk-navbar-transparent uk-padding-remove uk-margin-remove" id="nav" style="background:rgba(25,25,25,0.7) !important;" uk-navbar="dropbar:true;dropbar-mode:push">
        	<div class="uk-navbar-left">
        		<a href="" class="uk-logo">
        			<img data-src="{{asset('img/logo-transp.png')}}" class="uk-position-top uk-position-absolute uk-width-small uk-height-small uk-margin-small-left" uk-img>
        		</a>
        	</div>
            <div class="uk-navbar-center uk-text-emphasis">

            	<ul class="ui tabular menu borderless uk-navbar-nav">
				  <li><a href="{{url('/')}}" class="active item">Home</a></li>
				  <li><a href="{{url('/news')}}" class="item">News</a></li>
				  <li><a href="{{url('/videos')}}" class="item">Videos</a></li>
				  <li><a href="#artiste" class="item">Artistes</a></li>
				  <li><a href="{{url('/events')}}" class="item">Evenements</a></li>
				  <li>
                    <a href="{{url('/about-us')}}" class="item">A Propos <span uk-icon="icon:triangle-down"></span></a>
                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-4 uk-position-z-index">
                        <h3>En savoir Plus sur DjiguiPRod</h3>
                        <hr class="uk-divider-small">
                        <div class="uk-navbar-dropdown-grid uk-child-width-1-4" uk-grid>
                            @foreach($aboutdetails as $values)
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-nav-header">{{$values->onglet}}</li>
                                    @for($i=0;$i<$ongletdetails[$values->id]->count();$i++)
                                    <li><a href="{{url('about-us',['onglet'=>$values->id,'sousOnglet'=>$ongletdetails[$values->id][$i]->id])}}"><span uk-icon="icon:check;ratio:0.5"></span> {{$ongletdetails[$values->id][$i]->nom}}</a></li>
                                    @endfor
                                </ul>
                            </div>
                            @endforeach

                            <!-- <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-nav-header">Nos Prestations</li>
                                    <li><a href="#">Conseils & Coaching</a></li>
                                    <li><a href="#">Management Artistique</a></li>
                                    <li><a href="#">Evenementiel</a></li>
                                    <li><a href="#">Gestion de Projet</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-nav-header">Outils de Developpement</li>
                                    <li><a href="#">Le Reseau et les Acteurs Culturels</a></li>
                                    <li><a href="#">Media Audio Visuel</a></li>
                                    <li><a href="#">Rencontres des Cultures Urbaines</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-nav-header">Partenariat</li>
                                    <li><a href="#">Votre presence sur nos supports de communication</a></li>
                                    <li><a href="#">Vos Avantages Fiscaux</a></li>
                                </ul>
                            </div> -->
                            
                        </div>
                    </div>
                </li>

				</ul>
            </div>

            <div class="uk-navbar-right">
            	<ul class="uk-navbar-nav">
            		<li><a href="{{url('/admin')}}" target="blank" class="uk-icon-link it" uk-icon="sign-in"> Login</a></li>
            		<li><a href="#modal-full" class="uk-icon-link it" uk-icon="search" uk-toggle></a></li>
            	</ul>
            </div>
        </nav>
        <div class="uk-navbar-dropbar"></div>
    </div>


</div>
<!-- // -->
<!-- Modal search -->
<div id="modal-full" class="uk-modal-full uk-modal uk-animation-slide-top" uk-modal>
    <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-top" uk-height-viewport="offset-bottom:100">
        <button class="uk-modal-close-full" type="button" uk-close></button>
        <!-- <form class="uk-search uk-search-large"> -->
            
            <!-- <input class="uk-search-input uk-text-center" type="search" placeholder="Tapez une recherche" autofocus> -->
            <div class="uk-search uk-search-large">
                {!!Form::text('q','',['class'=>'uk-search-input uk-text-center','id'=>'input-search','placeholder'=>'Tapez une recherche','autofocus'])!!}
            </div>
            
        <!-- </form> -->
    </div>
    <!-- RESULTAT DE LA RECHERCHE -->
    <div class="uk-section uk-section-default" uk-height-viewport>
        <div class="uk-container">
            <h3>Resultats de la recherche pour <span id="wordSearch"></span></h3>
            <div class="uk-child-width-1-2@m" uk-grid>
                <div>
                    <!-- <h3 class="uk-text-center">News</h3> -->
                    <div id="news-result"></div>
                    <!-- <hr> -->
                </div>
                <div>
                    <!-- <h3 class="uk-align-right">Videos</h3> -->
                    <div id="videos-result" class="uk-text-center"></div>
                </div>
            </div>      
        </div>
    </div>
</div>
<!-- // -->
@yield('content')


<!-- Footer -->
<div class="uk-section uk-section-secondary">
    <div class="uk-container">
        
        <div class="uk-grid-match uk-child-width-1-3@m" uk-grid>
            <div>

                <h4>Suivez Nous</h4>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDjigui-Prod-362798861143645%2F&tabs&width=340&height=180&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=2005235842908607" width="340" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div>
                <h4>Acces rapides</h4>
                <ul class="uk-list">
                    <li><a href="{{url('news/')}}">News</a></li>
                    <li><a href="{{url('videos/')}}">Videos</a></li>
                    <li><a href="{{url('events/')}}">Evenements</a></li>
                    <li><a href="{{url('artistes/')}}">Artistes</a></li>
                    <li><a href="{{url('about-us/')}}">Le Label</a></li>
                </ul>
            </div>
            <div>
                <h4>Infos</h4>
                <ul class="uk-list uk-list-divider">
                    <li><span uk-icon="icon:map"></span> Adresse : Conakry , Rep de Guinee</li>
                    <li><span uk-icon="icon:mail"></span> Email : Infos@djiguiprod.com</li>
                    <li><span uk-icon="icon:phone"></span> Telephone : (+224) 666 000 000</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="uk-background-secondary uk-text-muted uk-box-shadow-medium">
    <a class="uk-margin-left" href="#" uk-totop uk-scroll></a>
    <div class="uk-margin-right uk-text-right uk-text-capitalize">Copyright &copy; DjiguiProd 2018 Tous droits reserves </div></div>

<!-- // -->
<script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<script type="text/javascript">
	$(function () {
        $('.menu > li > .item').addClass('uk-text-muted uk-text-lead');
		$('.menu > li > .item,.it,.social').attr('style','color:white !important');
		$('.menu > li > .active').attr('style','background:none !important');
		$('.w-text').css('font-size','17px');
        // contact us effect
        $(window).scroll(function () {
            if(($(this).scrollTop() != 0) && !($("#contact-form").is(":visible"))) {
                $('#btn-contact').fadeIn() ;
            } else {
                $('#btn-contact').fadeOut();
            }


            if($(this).scrollTop() !=0 ) {
                
                $("#nav").attr('style','background:rgba(255,255,255,1) !important;');
                $('.menu li > .item,.it').attr('style','color:black !important');
                $("#nav").parent().addClass('uk-position-fixed uk-position-z-index');
                $("#nav").parent().addClass('uk-box-shadow-medium');
            } else {
                $("#nav").attr('style','background:rgba(25,25,25,0.7) !important;');
                $('.menu > li > .item,.it').attr('style','color:white !important');
                $("#nav").parent().removeClass('uk-position-fixed uk-position-z-index');
                $('.menu > li > .active').attr('style','background:none !important');
                
            }
        })

        $("#btn-contact").on('click',function () {
            // affichage du formulaire de contact
            $("#contact-form").fadeIn();
            $("#btn-contact").hide();
        });

        $("#close-form").on('click',function () {
            $("#contact-form").fadeOut();
            $("#btn-contact").fadeIn();
        })

        $("#contact-form").on('submit',function(e) {
            UIkit.modal.dialog("<div class='uk-section uk-section-default'><div class='uk-container'><div uk-spinner>Envoi en cours ...</div></div></div>");
            e.preventDefault();
            $.ajax({
                url : $(this).attr('action'),
                type : $(this).attr('method'),
                dataType: 'json',
                data : $(this).serialize()
            })
            .done(function (data) {
                   UIkit.modal.dialog("<div class='uk-section uk-section-default'><div class='uk-container'><span uk-icon='icon:check;ratio:2'></span>"+data+"</div><div>").then(function () {
                        $(location).attr('href');
                    }); 
            })
            .fail(function (data) {
                console.log(data);
            })
        });

        // $(document).ajaxStart(function () {
        //  UIkit.modal.dialog("<div class='uk-section uk-section-default'><div class='uk-container'><div uk-spinner>Envoi en cours ...</div></div></div>");
        // });
        // $(document).ajaxError(function () {
        //     UIkit.modal.dialog("<div class='uk-alert uk-alert-danger'><div class='uk-container'><span uk-icon='icon:check;ratio:2'></span>Erreur ! Veuillez ressayez</div><div>");
        // });

        // RECHERCHE RAPIDE 
        $("#input-search").on('keyup',function () {
            $("#wordSearch").text("'"+$(this).val()+"'");

            $.ajax({
                url : '/search',
                type : 'get',
                data : {q : $(this).val()},
                dataType : 'json'
            })
            .done(function (data) {
                var newsResults = [];
                 
                // console.log(data.news);
                $("#news-result").html('');
                $("#videos-result").html('');
                // CONSTRUCTION DES RESULTATS 'NEWS'
                for(var i=0;i<data.news.length;i++) {
                    var newsLinks = $("<a></a>"),header=$("<h4></h4>"),describe = $("<p><p>");
                    header.text(data.news[i].titre);
                    describe.text(data.news[i].contenu);
                    newsLinks.attr('href',"/news/"+data.news[i].id);
                    newsLinks.append(header);
                    // newsLinks.append(describe);
                    newsResults[i]=newsLinks;
                    sep = $("<hr>"); sep.addClass('uk-divider-small');
                    $("#news-result").append(newsLinks);
                    $("#news-result").append(sep);
                }
                // CONSTRUCTION DES RESULTATS 'VIDEOS'
                for(var i =0 ;i<data.videos.length;i++) {
                    var videosLinks = $("<a></a>"),header = $("<h4></h4>");
                    header.text(data.videos[i].titre);
                    videosLinks.attr('href','/videos/'+data.videos[i].id);
                    videosLinks.append(header);
                    sep = $("<hr>"); sep.addClass('uk-divider-small');
                    $("#videos-result").append(videosLinks);
                    $("#videos-result").append(sep);
                }
            })
            .fail(function (data) {
                console.log(data);
            });
        });

	});

    // <a href="">
    //                     <h3 class="uk-h4">Description</h3>
    //                     <p>
    //                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    //                         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven
    //                     </p>
    //                 </a>
</script>
@yield('script')
<!-- FACEBOOK API SHARE -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&autoLogAppEvents=1&version=v3.2&appId=2005235842908607';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>