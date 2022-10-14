<?php

    require("../../databse/Connexion.php");
    //Initialization of variables before using
    $id ="";
    $trajet1 =  "Kolwezi-Likasi";
    $trajet2 =  "Likasi-Kolwezi";
    $trajet3 = "Lubumbashi-Kolwezi";
    $trajet4 = "Kolwezi-Lubumbashi";


    $tr = $_POST["trajet"];
    $jour = $_POST["jour"];
    $mode_payement = $_POST["payement"];
    $prix = 1;

    $kzi_lshi = 10000;
    $kzi_lsi = 5000;


    
    
    //Tester si le nombre des tickets a bien été poster et l'initialiser
    if(!empty($_POST["nombre_ticket"])){
        $nombre_ticket = (int)$_POST["nombre_ticket"];
        if($tr == $trajet1 || $tr == $trajet2){
            $prix_u = $kzi_lsi;
            $prix = $prix_u * $nombre_ticket;
        }
        // Second test an his instructions
        elseif($tr == $trajet3 || $tr == $trajet4){
            $prix_u = $kzi_lsi;
            $prix = $prix_u * $nombre_ticket;
    
            }
        }
    

    //Tester si le nombre des tickets a bien été poster et éviter l'absorbtion de "0"
    else{
        
        $nombre_ticket = 1 ;
        if($tr == $trajet1 || $tr == $trajet2){
            $prix_u = $kzi_lsi;
            $prix = $prix_u * $nombre_ticket;
        }
        // Second test an his instructions
        elseif($tr == $trajet3 || $tr == $trajet4){
            $prix_u = $kzi_lsi;
            $prix = $prix_u * $nombre_ticket;
    
            }
        }

    //save_ticket
    $insert = $bdd->prepare("INSERT INTO ticket (jour_depart, trajet, nombre_ticket, prix_unitaire, prix_total, payement, id_user) VALUES (:jour_depart, :trajet, :nombre_ticket, :prix_unitaire, :prix_total, :payement, :id_user) ")
                            ("SELECT id_user FROM users WHERE identifiant='".$_POST["identifiant"]."' AND password='".$_POST["password"]."'");
                $insert->execute(array(
                    'jour_depart' => $jour,
                    'trajet' =>  $tr,
                    'nombre_ticket'=> $nombre_ticket,
                    'prix_unitaire'=> $prix_u,
                    'prix_total'=> $prix,
                    'payement'=> $mode_payement,
                ));
   

    header("location: ../front/landing.php");
    






    