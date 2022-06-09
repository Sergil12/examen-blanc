<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier stagiaire</title>
</head>
<body>
    <div>
        <label>
            Nom
            <input type="text" name="nom" value="<?=$stagiaireseul["nom"]?>"/> <!--EX 4 .1afficher le champ nom + das lme chmaps on preremplis avec l'id selectionner-->
        </label>
    </div>
    <div>
        <label>
            Prenom
            <input type="text" name="prenom" value="<?=$stagiaireseul["prenom"]?>"/> <!--EX 4.2 afficher le champ prenom + das lme chmaps on preremplis avec l'id selectionner-->
        </label>
    </div>
    <div>
        <label>
            Date de naissance 
            <?php
            $date_array = date_parse_from_format('d/m/Y', $stagiaireseul['ddn']);
            ?>
            <input type="number" name="jour" value="<?=$date_array['day']?>"/> <!-- EX 4.3   3 champs pour la ddn : 1 champ pour le jour, une liste déroulante pour les mois, un champ pour l'année-->
            <select name="mois">
                <?php foreach(range(1, 12)as $currentMonth):?>
                <option value="<?= $currentMonth ?>" <?= +$date_array["month"]===$currentMonth ?"selected": ''?>><?= $currentMonth ?></option>
                <?php endforeach;?>
            </select>
            <input type="number" name="anner" value="<?=$date_array['year']?>"/><!--avec ca: "<?=$date_array['day']?>" on met le choix des date -->
        </label>
    </div>
    <div>
        Sexe
        <input type="radio" name="sexe" value="M" <?= $stagiaireseul["sexe"] ==="M"? "checked" : ''?>/> Mr <!--4.4 deux radio pour le sexe (Mr et Mme)-->
        <input type="radio" name="sexe" value="F" <?= $stagiaireseul["sexe"] ==="F"? "checked" : ''?>/> Mme <!-- les balise echo servent a pre choisir en focntion de ce qui est deja -->
    </div>
    <div>
        Nombre d'enfants
        <input type="number" name="enfants" value="<?=$stagiaireseul["enfants"]?>"/> <!--4.5 un champ pour le nombre d'enfant-->
    </div>
    <div>
        Hobbies
        <?php foreach($hobbies as $key =>$value): ?> <!--afficher le nombre d'input pour le nombre de hobbies-->
        <label>
        <input type="checkbox" name="hobbies[]" value="<?= $key ?>" <?=in_array($key,$stagiaireseul["hobbies"]) ? "checked" : ''?> /> <?=$value ?> <!--4.6 un ensemble de checkbox (tout ceux de la variable $hobbies) avec ceux de la personne déjà cochés-->
        </label>
        <?php endforeach ?>
    </div>

</body>
</html>