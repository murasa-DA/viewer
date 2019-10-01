<html lang="{{ app()->getLocale() }}">
    <head>
    	<link rel="stylesheet" href="css/main.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="jquery.fademover.js"></script>
		<script>
		$(function(){
			$('body').fadeMover();
		});
		// ajax laravel用書き方のなごり
		$(function() {
	    	$('#delete_button').on('click', function() {
		        $.ajax({
		            headers: {
		                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		            },
		            url: "{{ action('imagesController@getPcuture', ['image_id' => $image->id]) }}",
		            type: 'POST',
		            data: {'image_id': {{ $image->id }}, '_method': 'DELETE'}
		        })
		        // Ajaxリクエストが成功した場合
		        .done(function(data) {
		            $('.delete_message').text(data.responseJSON);
		        })
		        // Ajaxリクエストが失敗した場合
		        .fail(function(data) {
		            alert(data.responseJSON);
		        });
		    });
		});

		// 2重送信防止
		$('#delete_button').find('button').each(function(i, elm) {
		    $(elm).prop('disabled', true).addClass('disabled');
		});
		</script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tokyo Train Map !</title>
    </head>
    <body>

		<h1>Shinjuku Station Map</h1>
		<div class="stage">
			<ul>
				<li>
					<a href="./index.html">左</a>
				</li>
				<li>
					<a href="./page02.html">前</a>
				</li>
				<li>
					<a href="./page03.html">右</a>
				</li>
			</ul>

			<div class="hoge">
				画像を張る
			</div>
		</div>

		</br></br></br>

		<h1>Infomation</h1>

		<div class="stage2">
			<div class="hoge">
			</div>
		</div>

    </body>
</html>