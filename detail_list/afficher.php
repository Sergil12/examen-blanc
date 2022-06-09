<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaires</title>
</head>
<body>
    <?php if(!isset($id)): ?> <!--si il y apas de id on affiche :"Veuillez fournir un id de stagiaire" ex 2.2-->
        <p>"Veuillez fournir un id de stagiaire"</p>
    <?php elseif(!isset($stagiaires)):?> <!--dans le cas ou il y a un id mais pas de stagiaire ex 2.1 --> 
        <p>"Pas de stagiaire connu avec cet id"</p>
    <?php else: ?> <!--dans le cas ou id existe et que il correspond a un stagiaire -->
        <ul>
            <?php foreach($stagiaires['hobbies']as $hobby): ?> <!--on boucles sur les hobit du stagiaires -->
           <li><?= $hobbies[$hobby] ?></li> <!--Les Hobbies choisis seront listés par leur noms et non leur trigramme 2.3-->
           <?php endforeach; ?>
        </ul>
    <?php endif;?> 
    
</body>
</html>