<?php

    //INSERTION DANS LA TABLE DE LA BASE DE DONNEES
    FUNCTION insert(){
        require("../../../databse/Connexion.php");

        SESSION_START();

        GLOBAL $bdd;
        //TESTER SI LES CHAMPS SONT VIDES 
        
        if(!empty($_POST["nom"]) AND !empty($_POST["postnom"]) AND
           !empty($_POST["prenom"]) AND !empty($_POST["email"]) AND
           !empty($_POST["identifiant"]) AND !empty($_POST["password"]) AND
           !empty($_POST["password_retype"]))
           
            {
                //TESTER SI LE MOT DE PASSE CORRESPOND A LA CONFIRMATION

                if($_POST["password"] == $_POST["password_retype"]){

                    //VERIFIER SI LA PERSONNE EXISTE DANS LA TABLE
                    $try = $bdd->query("SELECT FROM users WHERE identifiant='".$_POST["identifiant"]."' AND password='".$_POST["password"]."'");

                    if($try == 0){
                        
                        $nom = $_POST["nom"];
                        $postnom = $_POST["postnom"];
                        $prenom = $_POST["prenom"];
                        $email = $_POST["email"];
                        $identifiant = $_POST["identifiant"];
                        $password = $_POST["password"];
                        
                            //PREPARER L`INSERTION DANS LA TABLE
                            $ins = $bdd->prepare("INSERT INTO users VALUES (:nom, :postnom, :prenom, :email, :identifiant, :password) ");

                                //INSERER DANS LA TABLE
                                $ins ->bindvalue(':nom', $nom);
                                $ins ->bindvalue(':postnom', $postnom);
                                $ins ->bindvalue(':prenom', $prenom);
                                $ins ->bindvalue(':email', $email);
                                $ins ->bindvalue(':identifiant', $identifiant);
                                $ins ->bindvalue('password', $password);
                                $ins ->execute();
                                header("location:../../../index.php");
                    }

                }else header("location: ../../../front/create_user.php");

            }else header("location: ../../../front/create_user.php");
        
    }


    //AUTHENTIFICATION
    FUNCTION connect(){
        require("../../../databse/Connexion.php");

        SESSION_START();

        //TESTER SI LES CHAMPS SONT VIDES 
        if (empty($_POST["identifiant"]) OR empty($_POST['password'])) {
            header("location: ../../../index.php");
        }
    
        //Search and connect if is admin  
        elseif (!empty($_POST["identifiant"]) AND !empty($_POST['password'])) {

            GLOBAL $bdd;

            $st = $bdd->query("SELECT FROM administrateur WHERE identifiant='".$_POST["identifiant"]."' AND password='".$_POST["password"]."'")->fetch();
            
            switch($st){
                //Search and connect if user exist  
                case 0:if (!empty($_POST["identifiant"]) AND !empty($_POST['password'])) {
                    $st = $bdd->query("SELECT COUNT(*) FROM users WHERE identifiant='".$_POST["identifiant"]."' AND password='".$_POST["password"]."'")->fetch();
                    
                    switch($st['COUNT(*)']){
                        case 0:header("location: ../../../index.php");
                        break;
                        case 1: header("Location:../../../traitement_ticket/front/landing.php");
                    }
                }
                break;
                case 1: echo header("Location:../../../admin/front/admin.php");
            }
        }
    }

    //DECONNEXION
    FUNCTION destroy(){
        require("../../../databse/Connexion.php");
        session_start();
        session_destroy();
        header("location:../../../index.php");
    }





