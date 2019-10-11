<html lang="{{ app()->getLocale() }}">
<head>
<link rel="stylesheet" href="css/main.css">
<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
			      url: "Ajaxview.php",
			      data: data,
			      //Ajax通信が成功した場合に呼び出されるメソッド
			      success: function(data, dataType){
			        //デバッグ用 アラートとコンソール
			        //alert("succsess: " + data);
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
<?php
session_start();
if (empty($_POST["button"])) {
    $_SESSION["id"] = 1;
    $_POST["button"] = "";
}
?>
<h1>Shinjuku Station Map</h1>

<?php
include ('DBaccess.php');
$dbaccess = new DBaccess();
$res = $dbaccess->getRoad((int) $_SESSION["id"]);
// roadidは一意
if ($res) {
    $row = $res->fetch_assoc();
    if (strcmp($_POST["button"], "北") == 0) {
        $_SESSION["id"] = $row["northid"];
        $res = $dbaccess->getRoad($_SESSION["id"]);
        if($res){
            $row = $res->fetch_assoc();
        }
    } elseif(strcmp($_POST["button"], "東") == 0) {
          $_SESSION["id"] = $row["eastid"];
          $res = $dbaccess->getRoad($_SESSION["id"]);
          if($res){
              $row = $res->fetch_assoc();
         }
    }elseif(strcmp($_POST["button"], "西") == 0) {
        $_SESSION["id"] = $row["westid"];
        $res = $dbaccess->getRoad($_SESSION["id"]);
        if($res){
            $row = $res->fetch_assoc();
        }
    }elseif(strcmp($_POST["button"], "南") == 0) {
        $_SESSION["id"] = $row["southid"];
        $res = $dbaccess->getRoad($_SESSION["id"]);
        if($res){
            $row = $res->fetch_assoc();
        }
    }else{
        echo "error";
    }


?>
<div class="stage" style="background-image: url(<?php echo $row["picture"]; ?>)">
<div id="result">
<form method="post" action="./">
<?php
    if ($row["northid"] != null) {
    ?>
<input type="submit" name="button" value="北">
<?php
    }
    if ($row["eastid"] != null){
    ?>
<input type="submit" name="button" value="東">
<?php
    }
    if ($row["westid"] != null){
    ?>
<input type="submit" name="button" value="西">
<?php
    }
    if($row["southid"] != null){
    ?>
<input type="submit" name="button" value="南">
<?php
    }
?>
</div>


	</div>

	<div> Now position: <?php echo $_SESSION["id"]?></div>

<?php
}
?>


	<h1>Infomation</h1>

	<div class="stage2">
		<div class="hoge"></div>
	</div>

</body>
</html>

