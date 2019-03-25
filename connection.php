<?php
$conn = mysqli_connect("localhost","root","","pnc_pracitice_database");
//mysqli_connect_error retutrn 0 if it conncect successfully

if(mysqli_connect_errno()!=0){
    die('error'.mysqli_connect_error());
}
