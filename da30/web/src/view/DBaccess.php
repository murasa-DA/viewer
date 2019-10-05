<?php
class DBaccess {
    function connectDB() {
        // TODO:直接パスとか書いていいんだっけ。セキュリティ的にまずい気がする。
        $link = mysqli_connect("localhost", "admin", "train", "trainmap");
        if (!$link) {
            die('DB接続エラー'.mysql_error());
        }
        $link->set_charset('utf8');
        return $link;
    }

    function getAisle($id) {
        $mysqli = $this->connectDB();

        // TODO:SQLインジェクション対策無し。対応たのむ。
        if($id){
            $sql = 'SELECT * FROM aisle where ' . $id ;
        } else {
            $sql = 'SELECT * FROM aisle';
        }

        $res = $mysqli->query($sql);
        $mysqli->close();

        return $res;
    }
}
?>