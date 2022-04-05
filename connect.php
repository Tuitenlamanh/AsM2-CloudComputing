<?php
    $severname = "3.132.234.157";
    $username = "manhnv";
    $password = "manh@123";
    $database = "websdlc";
    //Khai báo biến để kết nỗi CSDL
    $connect = new mysqli($severname,$username,$password,$database);
    //$connect = new mysqli_connect ----> Hướng Thủ Tục
    if(!$connect)
        {
            echo "Connect Failed!";
        }
        else
        {
            
        }

?>
