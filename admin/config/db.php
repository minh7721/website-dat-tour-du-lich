<?php
    $connect = mysqli_connect('localhost','root','','travel');
    if(!$connect){
        die('Không thể kết nối cơ sở dữ liệu');
    }
?>