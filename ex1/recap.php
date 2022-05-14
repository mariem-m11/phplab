<!DOCTYPE html>
<html>
<head><title>Bonjour</title>
</head>
<body>
<?php
session_start();
if (isset($_POST['commander']))
{
    $nb=htmlspecialchars($_POST['nbsand']);
    $name=htmlspecialchars($_POST['nom']);
    $prenom =htmlspecialchars($_POST['prenom']);
    $type=htmlspecialchars($_POST['sandwichs']);
    $Adresse=htmlspecialchars($_POST['Adresse']);
    $nbr=4;
    $nb1=$nbr*$nb;
    if ($nb>10)
    {
        $nb1=$nb1*0.9;
    }
    echo " Bonjour <b>{$name}  {$prenom}</b>, vous avez commandé <b>{$nb}</b> sandwichs <b>{$type}</b> <br><br> Le prix total est a <b>{$nb1} DT</b> <br><br>
    L'adresse est <b>{$Adresse}</b> <br><br>";
}
?>
<?php
if($_POST['ing']!==null){
    $check ="";
    foreach($_POST["ing"] as $checkoptions){
        $check .= $checkoptions.",";
    };
    echo "les ingrédients a ajouter sont : $check";
}
?>
<?php
//$file = $_FILES['file'];
if (isset($file) && $file['name']) {
    copy($file['tmp_name'], "Exercice 1/".uniqid().$file['name']
    );
}
//
?>
<?php //echo $_FILES['file']['name']." has been uploaded ";?>
<script> // code javascript affiche une alerte disant qu’il n’y a plus de sandwitchs.
    // alert("La quantité  est insufissante !");
    //  window.location.href = "resa.html";
</script>


</body>
</html>