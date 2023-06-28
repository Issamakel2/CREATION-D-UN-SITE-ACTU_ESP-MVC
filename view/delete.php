<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "mglsi_news"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from 'crud' where id=$id";
    $result=mysqli_query($conn, $sql);
    if($result){
        //echo "Suppression reussie";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>