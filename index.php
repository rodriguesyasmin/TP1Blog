<?php 

require_once './classes/Header.php';

$headerInstance = new Header();
$headerInstance->renderHeader(
    './classes/user/user-create.php',
    './classes/article/article-create.php',
    './classes/categorie/categorie-create.php'
);

// O restante do seu código para a página continua aqui...

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="container">
        <div class="image-container">
            
            <img class="imgWelcome"  src="./img/logo.png" alt="Imagem de Destino Europeu">
        </div>
        <div class="welcome-text">
            <h2>Bienvenue sur notre blog - Découvrez l'Europe à travers nos yeux !</h2>
            Nous sommes passionnés par le voyage et avons créé ce blog pour partager avec vous nos expériences uniques à travers l'Europe. Que vous soyez un amateur d'histoire, un gourmand avide ou un amoureux de la nature, vous trouverez ici des conseils utiles, des récits de voyage inspirants et des recommandations exclusives.
        </div>
    </div>
	<footer>

		<p> </p>
	</footer>
</body>

</html>