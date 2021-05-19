<?php
session_start();
include "../Data/Config.php";

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Css/Server.css">
        <link rel="stylesheet" href="../../Css/profil.css">
        <link rel="stylesheet" href="../../Css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
        <!-- Header -->
        <div class="row" id="section_server">
            <div class="row" id="server">
                <?php include "../Data/Server.php" ?>  
            </div>
            <div class="col" id="section_information">
                <img id="profilePicture" style="width: 5%; height: 5%;border-radius: 150px;margin-left: 25%;margin-top: 2.5%;" src="https://www.tenforums.com/geek/gars/images/2/types/thumb_15951118880user.png" alt="this is a profile picture">
                <div id="profileInformation">
                    <p class="pseudo"><?php echo $_SESSION['lastName'];?></p>
                    <p>#hastag</p>
                </div>
                <div id="subscription">
                    <p>Nombre d'Abonnement</p>
                </div>
                <div id="parameters">
                    <a id="para" class="btn-parameter" href="Settings.php">Parameters</a>
                </div>
            </div> 
        </div>

        <!-- Body server -->
        <div class="nameServer">
            <?php echo $_GET['severName']; ?>
        </div>

        <button id="button">Ajouter un post</button>
        <button id="follow">Suivre</button>
        

        <!-- Popup -->
        <div id="modal">
            <div id="modal-content">
                <div id="modal-content-top">
                    <div id="close">+</div>
                    <div class="image-profil">
                        <img id="image-profil" src="#" alt="profil" style="width: 30px;">
                    </div>
                    <div class="pseudo">
                            <p id="pseudo">Pseudo</p>
                    </div>
                </div>
                <div id="modal-content-body">
                    <div class="form-group">
                        <label for="usr">Sujet:</label>
                        <input type="text" class="form-control" id="usr">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="comment">Post:</label>
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                </div>
                <div id="modal-content-bottom">
                    <a href="#" id="send" >Envoyer</a>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="../../JS/Popup.js"></script>
    </body>
</html>