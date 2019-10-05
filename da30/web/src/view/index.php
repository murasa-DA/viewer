<html lang="{{ app()->getLocale() }}">
    <head>
    	<link rel="stylesheet" href="css/main.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="jquery.fademover.js"></script>
		<script>
		$(document).ready(function() {
			  //送信ボタンをクリック
			  $('.send').click(function(){

			    //POSTメソッドで送るデータを定義する
			    //var data = {パラメータ : 値};
			    var data = {request : $('#request').val()};

			    //Ajax通信メソッド
			    //type : HTTP通信の種類(POSTとかGETとか)
			    //url  : リクエスト送信先のURL
			    //data : サーバに送信する値
			    $.ajax({
			      type: "POST",
			      url: "send.php",
			      data: data,
			      //Ajax通信が成功した場合に呼び出されるメソッド
			      success: function(data, dataType){
			        //デバッグ用 アラートとコンソール
			        alert(data);
			        console.log(data);

			        //出力する部分
			        $('#result').html(data);
			      },
			      //Ajax通信が失敗した場合に呼び出されるメソッド
			      error: function(XMLHttpRequest, textStatus, errorThrown){
			        alert('Error : ' + errorThrown);
			        $("#XMLHttpRequest").html("XMLHttpRequest : " + XMLHttpRequest.status);
			        $("#textStatus").html("textStatus : " + textStatus);
			        $("#errorThrown").html("errorThrown : " + errorThrown);
			      }
			    });
			    return false;
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
				<?php makeInnerViwe(); ?>
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

<?php


function makeInnerViwe() {

    include('DBaccess.php');

    $dbaccess = new DBaccess();
    $res = $dbaccess->getAisle(null);
    if ($res) {
        while ($row = $res->fetch_assoc()) {
            //var_dump($row["aisleid"]);
            //var_dump($row["aislename"]);
?>
        	<ul>
<?php
            if($row["northid"]){
?>
                <li class="uppush send">
                 <a href='./index.html'>上</a>
                </li>

<?php
            }
            if($row["southid"]){
?>
                <li class="downpush send">
                 <a href='./index.html'>下</a>
                </li>
<?php

            }
            if($row["eastid"]){
?>
                <li class="leftpush send">
                 <a href='./index.html'>左</a>
                </li>
<?php

            }
            if($row["westid"]){
?>
                <li class="rightpush send" >
                 <a href='./index.html'>右</a>
                </li>
<?php
            }
        }
    }
?>
</ul>
<input type="hidden" value="">
<?php
}
?>