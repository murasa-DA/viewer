<?php
class DBaccess {
    function connectDB() {
        // TODO:直接パスとか書いていいんだっけ。セキュリティ的にまずい気がする。
        $link = mysqli_connect("localhost", "murasa", "8nko", "trainmap");
        if (!$link) {
            die('DB接続エラー'.mysql_error());
        }
        $link->set_charset('utf8');
        return $link;
    }

    function getRoad($id) {
        $mysqli = $this->connectDB();

        // TODO:SQLインジェクション対策無し。対応たのむ。
        if($id){
            $sql = 'SELECT * FROM road where roadid = ' . $id ;
        } else {
            //指定なしだと全検検索？修正したほうがいいかも
            //$sql = 'SELECT * FROM road';
        }

        $res = $mysqli->query($sql);
        $mysqli->close();

        return $res;
    }
    function gitTest(){
      return null;
    }
}
?>
