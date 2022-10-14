<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
    <title>Tickets</title>
</head>
<body>
    <?php 
        require("../../databse/Connexion.php");

        $st = $bdd -> query("SELECT * FROM ticket") or die(print_r($bdd -> error_info()));
    ?>
    <div class="container-fluid">
       <?php require("comptenent/navbar.php")?>
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>id </th>
                            <th>Jour de depart</th>
                            <th>Trajet </th>
                            <th>Nombre des tickets </th>
                            <th>Prix unitaire </th>
                            <th>Prix total </th>
                            <th>Mode de paiement </th>
                            <th>Date de reservation </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $count = 0 ;
                            while($resultat = $st -> fetch()){
                                $count += 1;
                                echo '
                                    <tr>
                                        <td>'.$count.'</td>
                                        <td>'.$resultat ['jour_depart'].'</td>
                                        <td>'.$resultat ['trajet'].'</td>
                                        <td>'.$resultat ['nombre_ticket'].'</td>
                                        <td>'.$resultat ['prix_unitaire'].'</td>
                                        <td>'.$resultat ['prix_total'].'</td>
                                        <td>'.$resultat ['payement'].'</td>
                                        <td>'.$resultat ['date_reservation'].'</td>'
                                        ;
                                }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php require("comptenent/link_destroy.php")?>
    </div>


</body>
</html>

