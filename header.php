<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portfolio de Mael Cadiou">
        <meta name="author" content="Mael Cadiou">

        <title><?= isset($title) ? $title : 'Portfolio de Mael Cadiou'; ?></title>

        <link rel="icon" type="image/x-icon" href="<?= WEBROOT; ?>icon.png" />

        <link href="<?= WEBROOT ?>css/style.css" rel="stylesheet"> 

    </head>

    <body>
        <div class="nav">
                   
                <ul>
                    <li><a href="index.php" class="btn--icon"><img src="<?= WEBROOT; ?>icon.png" width="50"></a></li>
                    <li><a href="<?= WEBROOT; ?>index.php">Accueil</a></li>
                    <li><a href="#" class="btn">Compétences</a></li>
                    <li><a href="#" class="btn">Veille informatique</a></li>
                    <li><a href="<?= WEBROOT; ?>login.php">Se connecter</a></li>
                    
                </ul>
            </div>
        
       
       
            <?= flash(); ?>