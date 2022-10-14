<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body style="background-color: black;">
        <div class="container-fluid">

            <div style="margin-top: 10px;" class="row">
                <div class="col-lg-12">
                    <center>
                        <h1 class="text-white">
                            JE_RESERVE_MON_TICKET
                        </h1>
                    </center>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3"></div>
                <div style="border: 1px solid white;" class="col-lg-6">
                    <h2 class="mt-5 text-white">Authentifiez-vous !</h2>
                    <form action="users/back/session/session.php" method="POST">
                        <div class="form-group">
                            
                            <input autofocus style="margin-bottom: 10px;" type="text" name="identifiant" placeholder="Identifiant" class="form-control">
                        </div>
                        <div class="form-group">
                            
                            <input style="margin-bottom: 10px;" type="password" name="password" placeholder="Mot de passe" class="form-control">
                        </div>

                        <center>
                            <input type="submit" name="connexion" class="btn btn-primary" value="Connexion">
                        </center>
                    </form>
                    <a style="margin-bottom: 10px;" class="text-white" href="users/front/create_user.php">créer un compte Client !</a>
                </div>
                <div class="col-lg-3"></div>
            </div>        
        </div>
</body>
</html>