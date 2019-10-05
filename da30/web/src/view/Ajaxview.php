<?php
    //このページでechoしたものがhtmlに返されて出力される
    header("Content-type: text/plain; charset=UTF-8");

    include('DBaccess.php');

    //Ajaxによるリクエストかどうかの識別を行う
    //strtolower()を付けるのは、XMLHttpRequestやxmlHttpRequestで返ってくる場合があるため
    $dbaccess = new DBaccess();
    $res = $dbaccess->getAisle(null);
    while ($row = $res->fetch_assoc()) {
        //var_dump($row["aisleid"]);
        //var_dump($row["aislename"]);
		echo '<ul>';
        if($row["northid"]){
            echo '<li class="uppush send">';
            echo "<a href='./index.html'>上</a>";
            echo '</li>';
        }
        if($row["southid"]){
            echo '<li class="downpush send">';
            echo " <a href='./index.html'>下</a>";
            echo '</li>';
        }
        if($row["eastid"]){
            echo '<li class="leftpush send">';
            echo " <a href='./index.html'>左</a>";
            echo '</li>';
        }
        if($row["westid"]){
            echo '<li class="rightpush send" >';
            echo " <a href='./index.html'>右</a>";
            echo '</li>';
        }
    }
    echo '</ul>';
?>