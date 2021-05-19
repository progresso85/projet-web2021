<?php
session_start();
include "../Data/Config.php";
if(isset($_SESSION['lastName']) && isset($_SESSION['email'])){
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Css/profil.css">
        <link rel="stylesheet" href="../../Css/bootstrap.min.css">
        <title>Document</title>
        <script type="text/javascript" src="https://www.cornify.com/js/cornify.js">//script easter eggs
        </script>
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

        <!-- Idea box -->
        <div class="idea_box_container">
            <h1>Boite à Idées</h1>
            <input type="text" id="idea_box_input" placeholder="Votre idée de serveur" style="text-align: center;">
        </div>

        <!--div profile return all informations about the user-->
        <div class="profile">
            <!--the image and information can change based on the user-->
            

            <!-- end of subscriptionSlider-->
            <div class="row" id="newsfeed">
                <div class="col-sm-6" id="line_newsfeed">
                    <div class="newsfeed_server">
                        <li>News feed first servers</li>
                    </div>
                    <div class="newsfeed_notification">
                        <p>X</p>
                    </div>
                </div>
                <div class="col-sm-6" id="line_newsfeed">
                    <div class="newsfeed_server">
                        <li>News feed first servers</li>
                    </div>
                    <div class="newsfeed_notification">
                        <p>X</p>
                    </div>
                </div>
                <div class="col-sm-6" id="line_newsfeed">
                    <div class="newsfeed_server">
                        <li>News feed first servers</li>
                    </div>
                    <div class="newsfeed_notification">
                        <p>X</p>
                    </div>
                </div>
                <div class="col-sm-6" id="line_newsfeed">
                    <div class="newsfeed_server">
                        <li>News feed first servers</li>
                    </div>
                    <div class="newsfeed_notification">
                        <p>X</p>
                    </div>
                </div>
                <div class="col-sm-6" id="line_newsfeed">
                    <div class="newsfeed_server">
                        <li>News feed first servers</li>
                    </div>
                    <div class="newsfeed_notification">
                        <p>X</p>
                    </div>
                </div>
                <div class="col-sm-6" id="line_newsfeed">
                    <div class="newsfeed_server">
                        <li>News feed first servers</li>
                    </div>
                    <div class="newsfeed_notification">
                        <p>X</p>
                    </div>
                </div>
                <!--<li>News feed second servers</li><p>X</p>
                <li>News feed third servers</li><p>X</p>
                <li>News feed fourth servers</li><p>X</p>-->
            </div>
        </div>
        <script> //script easter eggs
        const pressed = [];
        const secretCode = 'unicorn';

        window.addEventListener('keyup', (e) =>{
            console.log(e.key);
            pressed.push(e.key);
            pressed.splice(-secretCode.lenght -1, pressed.lenght - secretCode.lenght)
            ;

            if(pressed.join('').includes(secretCode)){
                console.log('DING DING!');
                cornify_add();
                
            }
            console.log(pressed);

        });
        </script>
    </body>
    <footer>
        <div class="footer">
        </div>
    </footer>
</html>

<?php
}else{
    header("Location: LoginView.php");
    exit();
}
?>


