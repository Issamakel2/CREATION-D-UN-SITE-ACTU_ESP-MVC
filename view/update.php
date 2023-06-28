<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "mglsi_news"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

$id=$_GET['updateid'];
if (isset($_POST['submit'])) {
    $name = $_POST["nom"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql = "update ' crud' set id=$id,nom=$nom,email='$email', password='$password'
    where id=$id";

    $result=mysqli_query($conn, $sql);
    if ($result) {
        echo "Mise a jour";
        //header('location:display.php');
    } else {
        echo "Erreur lors de l'enregistrement : " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Formulaire</title>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      padding: 25px;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .form-group input[type="submit"] {
      background-color: #3498db;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 3px;
      cursor: pointer;
    }
    
    .form-group input[type="submit"]:hover {
      background-color: #2186c4;
    }
  </style>
</head>

<body>
  <div class="container">
    <form>
      <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Envoyer">
      </div>
    </form>
  </div>
</body>
</html>
