<?php
        if(isset($_POST['formsend'])){

            extract($_POST);
            // var_dump($_POST); die();
            // var_dump(extract ($_POST)); die ();

            if(!empty($password) && !empty($confirmpass) && !empty($email)){

                if($password == $confirmpass) {

                $options = [
                    'cost' => 12,
                ];

                $hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
                


                $c = $db->prepare("SELECT email FROM users WHERE email = :email");
                $c->execute([
                    'email' => $email ]);
                $result = $c->rowCount();

                if($result == 0) {
                    $q = $db->prepare('INSERT INTO users(name, email,password, phone, postal) VALUES(:name, :email,:password, :phone, :postal)');
                    $q->execute([
                        'name' => $nom,
                        'phone' => $phone,
                        'postal' => $postal,
                        'email' => $email,
                        'password' => $hashpass
                    ]);
                    echo "Le compte a été créée </br>";
                } else {
                    echo "Cet email existe déjà ! </br>";
                }
            }   
                if (password_verify($password, $hashpass)){
                    echo "correct";
                } else {
                    echo "incorrect";
                }
            } else {
                echo "les champs ne sont pas tous remplies";
            }
        }
            
?>   