@extends('home')

@section('contents')

	<div class="uk-container">
		<h2 class="uk-heading-line"><span>Voulez vous vraiment supprimez cette news?</span></h2>
		<div>
			<a id="yes" class="uk-button uk-button-primary uk-icon-link" uk-icon="check">OUI </a>
			<a href="{{route('listnews')}}" class="uk-button uk-button-danger uk-icon-link" uk-icon="close">NON</a>
		</div>
	</div>
@endsection

@section('script')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script type="text/javascript">
	$(function () {
		$("#yes").on('click',function () {
			var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
			$.ajax({
				type : 'POST',
				url : "{{URL::route('deletenews',['id'=>$id])}}",
				data: {_token: CSRF_TOKEN, message:$(".getinfo").val()},
				dataType : 'JSON',
				// error : function () {alert('erreur de transmission de donnees');return 0 ;},
				success : function (data) {
					if(data) {
						if(data.status == "success") {
							$(location).attr("href","{{route('listnews')}}");
						}
					}
				}
			})
		});
	})
</script>
@endsection