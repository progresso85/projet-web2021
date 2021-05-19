<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Css/connection.css">
    <link rel="stylesheet" href="../../Css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="login-form">
        <form action = "../Data/Login.php" method = "post">
            <div class="row" style="text-align: center;">
                <div id="connection" class="col-sm-12">Connexion</div>
                <?php if(isset($_GET['error'])) { ?>
                    <p class="error" style="width: 30%;"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="form-group">
                    <input type="email" name = "email" class="form-control" id="user" placeholder="Email">
                </div>

                <div class="form-group">
                    <input type="password" name = "password" class="form-control" id="pwd" placeholder="mot de passe">
                </div>

                <div class="container">
                    <button type="submit" class="btn">Connexion</button>
                <div>
            </div>
        </form>
    </div>
</body>
</html>


