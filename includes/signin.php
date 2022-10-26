<?php 
    if(isset($_POST['formlogin'])) {
        extract($_POST);
        if(!empty($lnom) && !empty($lpassword)) {
            $q = $db->prepare("SELECT * FROM users WHERE name = :nom");
            $q->execute(['nom' => $lnom]);
            $result = $q->fetch();

            if ($result == true) {
                // le compte existe bien
                $hashpassword = $result['password'];
                if(password_verify($lpassword, $hashpassword)) {
                    echo "Mot de passe bon, connection en cours";
                    $_SESSION['name'] = $result['name'];
                } 
                else {
                    echo "</br> Mot de passe incorrect";
                }
            } 
            else {
                echo "Le compte portant le nom" . $lnom. " n'existe pas";
            }
        } 
        else {
            echo "Veuillez complétez l'ensemble des champs";
        }
    }
    ?>

    
                
                

