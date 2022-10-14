<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-dark">
    
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <?php require("comptenent/navbar.php")?>
                </div>
                <div class="col-lg-3"></div>
            </div>

            <div class="row">
                    
                <!-- RESERVATION TICKET -->
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <center class="text-white" >
                            <legend>
                                RESERVATION TICKET
                            </legend>
                            <form action="../back/traitement.php" method="POST">
                                <div>
                                    <label for="trajet">Selectionnez votre trajet:</label> <br>
                                    <select class="form-control" name="trajet" id="trajet">
                                        <option >Kolwezi-Lubumbashi</option>
                                        <option >Lubumbashi-Kolwezi</option>
                                        <option >Likasi-Kolwezi</option>
                                        <option >Kolwezi-Likasi</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="nombre_ticket">Combien de ticket payez-vous ?</label> <br>
                                    <input class="form-control" type="number" name="nombre_ticket" placeholder="1">
                                </div>
                                <div>
                                    <label for="jour">Choisisseez votre journée de voyage:</label> <br>
                                    <select class="form-control" name="jour" id="trajet">
                                        <option >Lundi</option>
                                        <option >Mardi</option>
                                        <option >Mercredi</option>
                                        <option >Jeudi</option>
                                        <option >Vendredi</option>
                                        <option >Samedi</option>
                                        <option >Dimache</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="trajet">Choisissez un mode de payement:</label> <br>
                                    <select class="form-control" name="payement" id="trajet">
                                        <option >Airtel_money</option>
                                        <option >M_pesa</option>
                                    </select>
                                </div>
                                <button style="margin-top: 10px;" class="btn-primary">Reserver</button>
                            </form>
                        </center>
                    </div>
                    <div class="col-lg-3"></div>

                    
                <div class="">
                    <a href="../../users/back/session/destroy.php">Se déconnecter</a>
                </div>
            </div>
        </div>
</body>
</html>