

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
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
                <div class="col-lg-6">
                    <center>
                        
                        <p class="text-white">Veuillez remplir le formulaire d'enregistrement</p>


                        <form action="../back/session/register.php" method="POST">
                            <div class="form-group">
                               
                                <input autofocus style="margin-bottom: 10px;" type="text" name="nom" placeholder="Nom" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                
                                <input style="margin-bottom: 10px;" type="text" name="postnom" placeholder="Postnom" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                
                                <input style="margin-bottom: 10px;" type="text" name="prenom" placeholder="Prenom" class="form-control">
                                
                            </div>
                            <div class="form-group">
                                
                                <input style="margin-bottom: 10px;" type="email" name="email" placeholder="Email" class="form-control">
                            
                            </div>
                            <div class="form-group">
                                
                                <input style="margin-bottom: 10px;" type="text" name="identifiant" placeholder="Identifiant" class="form-control">
                                
                            </div>
                            <div class="form-group">
                               
                                <input style="margin-bottom: 10px;" type="password" name="password" placeholder="Mot de passe" class="form-control">
                                
                            </div>
                            <div class="form-group">
                               
                                <input style="margin-bottom: 10px;" type="password" name="password_retype" placeholder="confirmer votre Mot de passe" class="form-control">
                                
                            </div>

                            <input type="submit" name="create" class="btn btn-primary" value="Enregistrer">
                        </form>
                    </center>
                </div>
                <div class="col-lg-3"></div>
            </div> 
               
        </div>
</body>
</html>