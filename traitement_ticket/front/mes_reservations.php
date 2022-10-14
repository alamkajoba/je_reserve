<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/css/bootstrap.min.css">
    <title>users</title>
</head>
<body>
    <?php 
        require("../../databse/Connexion.php");

        $st = $bdd -> query("SELECT * FROM users") or die(print_r($bdd -> error_info()));
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-bordered table-dark">
                    <thead>
                        <tr>
                            <th>id </th>
                            <th>Nom </th>
                            <th>Postnom </th>
                            <th>Prenom </th>
                            <th>Email </th>
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
                                        <td>'.$resultat ['nom'].'</td>
                                        <td>'.$resultat ['postnom'].'</td>
                                        <td>'.$resultat ['prenom'].'</td>
                                        <td>'.$resultat ['email'].'</td>
                                        <td>'.$resultat ['id_user'].'</td>'
                                        ;
                                }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

