<?php

$conn = mysqli_connect("192.168.254.4:8080", "root", "", "mymanit"); 

if(mysqli_connect_error()){
    echo"<script>alert('Can not connect to dalabase');</script>";
}
?>