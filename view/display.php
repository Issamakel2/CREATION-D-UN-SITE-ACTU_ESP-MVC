<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "mglsi_news"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Ajouter un utilisateur</title>
</head>
<body>
      <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Ajouter un utilisateur</a>
        </button>
      </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nom</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <?php
     $sql= "SELECT * FROM 'crud' ";
     $result=mysqli_query($conn, $sql);
     if($result){
      while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $nom=$row['nom'];
        $email=$row['email'];
        $password=$row['password'];
        echo '<tr>
         <th> scope="row">'.$id.'</th>
         <td> scope="row">'.$$nom.'</td>
         <td> scope="row">'.$email.'</td>
         <td> scope="row">'.$password.'</td>
         <td>
          <button class="btn btn-primary" ><a href="update.php">Update</a></button>
          <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'">Supprimer</a></button>
         </td>
         </tr>';
      }
     }
  ?>
  
</table>
</body>
</html>