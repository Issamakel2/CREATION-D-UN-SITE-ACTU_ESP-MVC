<html>
    <head>
        <link rel="stylesheet" href="styl.css">
        <title>actu_esp</title>
    </head>
    <body>
    <h1 class="title" style="text-align:center">ACTUALITÉS POLYTECHNICIENNES</h1>
    <header>
        <ul>
            <li>
                <a href="#" class="active">Accueil</a>
            </li>            
    <?php 
        foreach($categories as $categorie ){ ?>
            <li><a href="index.php?action=seeByCat&amp;id=<?=$categorie['id']?>"><?= $categorie['libelle'] ?></a></li>
        <?php } ?>
            <!-- <li>            
                <a href="#" class="disabled-link">Voir en details article</a>
            </li>
            <li>            
                <a href="create.php">Ajouter un article</a>
            </li> -->
        </ul>
    </header>
    <h2>Les Derniers Actualités</h2>
    <?php                

             foreach ($articles as $article) { 
            ?>           
            <div class="container">
               <div class="inline-container">
               <h1><?=$article['titre']?></h1><span><?=$article['libelle']?></span></div>';
               <p><?=$article['contenu']?></p>
               <a href="index.php?action=seeById&amp;id=<?=$article['id']?>">Voir en details</a>
            </div>
        <?php }
    
    ?>
    
    </body>
</html>