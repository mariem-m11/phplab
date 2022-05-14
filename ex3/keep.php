<?php
session_start();
if(!isset($_SESSION['keep'])){
    $_SESSION['keep']=[];
}
if(isset($_POST['note'])&& isset($_POST['titre'])){
    $_SESSION['keep'][]=['titre'=> $_POST['titre'],'note' =>$_POST['note']];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>notes</title>
    <style>
        .form-group{
            width: 20%;
            padding: 40px 50px;
            margin-left: 400px;
            box-sizing: border-box;
        }
        .title{
            width: 400px;
        }
        .form-control{
            width: 400px;
        }
        .btn{
            width: 100px;
            height: 30px;
            display: inline-block;
            background-color: #0093AB;

        }
        .ecrire{
            width: 100%;
            background-color: #F7E9D7;

        }
        .notes{
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
        }
        .note{
            min-width: 100px;
            max-width: 200px;
            height:100px;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
            margin-top: 10px;
            border: 2px solid black;

        }
    </style>
</head>
<body>
<div class="container">
    <form action="" method="POST">
        <div class="form-group">
            <input type="text" class="title" name="titre" placeholder="Titre....." required>
            <textarea type="text" class="form-control" placeholder="créer une note....." name="note" rows="3"></textarea>
            <button type="submit" class="btn">Ajouter note </button>
        </div>

    </form>
    <div class="ecrire">
        <div class="notes">
            <h4 class="title">Les Notes s'affichent ici :</h4>
            <?php
            foreach ($_SESSION['keep'] as $notes){
                ?>
                <div class="note">
                    <h4><?=$notes['titre']?></h4>
                    <div> <?=$notes['note'] ?></div>
                </div>
                <?php
            }
            ?>
        </div>

    </div>
</div>
</body>
</html>