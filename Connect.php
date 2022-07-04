<?php
$connect=new mysqli("localhost","root","");
if ($connect->connect_error){
    die("failed to connect".$connect->connect_error);

}else{
    echo "connected Succesfully";
}