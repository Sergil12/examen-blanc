<!--1. Afficher la liste des stagiaires:
    - Mr ou Mme selon le sexe,
    - le nom en majuscule,
    - le prenom avec la première lettre en majuscule et le reste en minuscule.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <ul>
    <?php foreach($stagiaires as $stagiaires):?>
        <li>
           <?= $stagiaires['sexe'] === "M" ? "Mr" : "Mme" ?> <!--la condition si cest M on met mr sinon on met Mme 1.1-->
           <?= strtoupper($stagiaires["nom"]) ?> <!-- 1.2-->
           <?= ucwords($stagiaires["prenom"]) ?><!-- 1.3-->
        </li> 
    <?php endforeach;?>
    </ul>
</body>
</html>


<!--require "liste_stagiaires.php";

$stagiaires = [
    ["nom" => "Gilson", "prenom" => "David", "sexe" => "Mr"],
    ["nom" => "Arabia","prenom" => "Jonathan","sexe" => "Mr"],
    ["nom" => "RALU", "prenom" => "Renaud","sexe" => "Mr"],
    ["nom" => "Connault", "prenom" => "Clotilde", "sexe" => "Mme"],
    ["nom" => "Carion", "prenom" => "Stéphan", "sexe" => "Mr"],
    ["nom" => "Waroux", "prenom" => "Lucas", "sexe" => "Mr"],
    ["nom" => "Kilesse", "prenom" => "Alysson", "sexe" => "Mme"],
    ["nom" => "Piccoli", "prenom" => "Raphaël", "sexe" => "Mr"],
    ["nom" => "STRYKERS","prenom" => "Simon","sexe" => "Mr"],
    ["nom" => "Lecocq", "prenom" => "Alexandre", "sexe" => "Mr"]
];
             



/*// Liste toutes les variables
list($nom, $prenom, $sexe) = $stagiaires;
echo "$sexe  $nom  $prenom.\n";


foreach ($array as list($nom, $prenom, $sexe)) {
    // $a contient le premier élément du tableau interne,
    // et $b contient le second élément.
    echo "$sexe  $nom  $prenom.\n";

/*$info = array('Gilson', 'David', 'Mr');


// Liste toutes les variables
list($nom, $prenom, $sexe) = $info;
echo "$sexe  $nom  $prenom.\n";

foreach ($info as ["nom" => $nom, "prenom" => $prenom,"sexe" => $sexe]) {
    echo "$sexe  $nom  $prenom.\n";
}*/

?>-->