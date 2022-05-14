<?php
$resultat=isset($_POST['radio']);
$vote=isset($_COOKIE['radio']);
$expir=time()+60*2;
if ($resultat && !$vote) {
    setcookie('radio',$_POST['radio'],$expir);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulaire de vote</title>
    <style>
        .container {
            border-radius: 5px;
            background-color: #EEEEEE;
            padding: 10px;
            margin-top: 70px;
            width: 60%;
            margin-left: 300px;
        }

        button {
            display: inline-block;
            background-color: #0093AB;
            border-radius: 10px;
            color: white;
            text-align: center;
            font-size: 20px;
            padding: 5px;
            width: 200px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
            cursor: pointer;
            margin-left: 700px;
        }

        button:hover {
            background-color: #006778;
        }


        h1{
            text-align: center;
        }
    </style>
</head>
<body>
<?php
if($resultat) {
    if (!$vote) {
        //   echo "merci, votre vote est enregitré ."
        ?>

        <h4>Votre vote est enregistré , Merci </h4>

        <?php
    } else {
        ?>

        <h4>Erreur , Vous avez déjà votez pour <?= ($_COOKIE['radio']) ?>!</h4>

        <?php
    }
}
?>
<h1 >Formulaire de vote</h1>
<div class="container">
    <form method="POST">

        <h3>Le Contenu du cours PHP est  :</h3>
        <div>
            <input type="radio" name="radio" value="bon" id="bon" c>
            <label for="bon">Bon</label>
        </div>
        <div>
            <input type="radio" name="radio" value="moyen" id="moyen">
            <label for="moyen">Moyen</label>
        </div>
        <div>
            <input type="radio" name="radio" value="mauvais" id="mauvais">
            <label for="mauvais">Mauvais</label>
        </div>
        <div class="action">
            <button type="submit" class="action-button">Voter</button>
        </div>

    </form>
</div>
</body>
</html>