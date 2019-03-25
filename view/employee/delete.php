<?php
include 'connection.php';
$query = ("DELETE FROM employee WHERE id =".$_GET['id']);
$result = mysqli_query($conn, $query);
if($result){
    header('location:index.php');
} else {
    echo 'data is not delete';
}

?>