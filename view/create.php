<?php
   $db = mysqli_connect('localhost', 'root', '', 'mglsi_news') or 
   die ('Unable to connect. Check your connection parameters.');
    mysqli_select_db($db, 'mglsi_news') or die(mysqli_error($db));
?>
<style>
    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #67ace5;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 200px;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 400px;
  margin: 0 auto;
}
h3 {
  display: flex;
  float: none;

}
</style>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Formulaire des articles</title>
    </head>

    <body>

    <header>
        <ul>
            <li>
                <a href="#" class="active">Accueil</a>
            </li>
            <li>            
                <a href="#" class="disabled-link">Voir en details article</a>
            </li>
        </ul>
    </header>
  <h3 class="article">Ajouter d’un Article</h3>
  <div >
  
  <form action="/action_page.php">
        
    <label for="fname">Titre article</label>
    <input type="text" id="fname" name="titre" placeholder="Ajouter un titre">

    <label for="lname">Contenu article</label>
    <input type="text" id="lname" name="contenu" placeholder="Saisir le contenu de l'article">

    <label for="country">Categorie</label>
    <?php  $query = 'SELECT * FROM categorie'; 
    $res = mysqli_query($db,$query) or die(mysqli_error(($db)));
    ?>
    <?php while($row = mysqli_fetch_assoc(($res))){ ?>
    <select id="country" name="categorie">
      <option value="australia"><?php echo $row['libelle'] ?></option>
      
    </select>
    <?php } ?>
  
    <input type="submit" value="Submit">
  </form>
  </div>
    
    </body>
</html>