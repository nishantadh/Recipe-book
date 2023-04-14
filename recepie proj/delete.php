<?php
$host='localhost';
$username="root";
$password="";
$database="recipe";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Failed";
}else{
    echo"Success";
    $query="delete from recipes where id=".$_GET['id'];
    if ($conn->query($query)==true) {
        header('Location: display.php');
    }else{
        echo "failed";
    }
}
