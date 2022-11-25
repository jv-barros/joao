<?php

$email = $_POST['email'];
$senha = $_POST['pass']; 
$conn = new mysqli('localhost:3306', 'phpmyadmin', '20906601', 'joao');

    $sql = "SELECT * FROM users WHERE email='".$email."'";
    //$senha2 = password_hash($senha, PASSWORD_BCRYPT);
    $query = mysqli_query($conn, $sql);
    $usuario = mysqli_fetch_row($query); 

    if (mysqli_error($conn))
        header('Location:index.php?status=falha');
        //echo "conexão perdida";    
        if ($usuario == NULL)
            header('Location:index.php?status=emailnull');
            //echo "usuário nulo";
            
        else{

            $status = password_verify($senha, $usuario[3]); 

            if (!$status){
                header('Location:index.php?status=emailnull');
                //echo $senha2.'<br>';
                //echo $usuario[3];
                //echo "usuário ou senha incorretos";
                echo "Usuário ou senha incorretos";
            }   
            else{

                echo "ok"; 

                    $hash = $_SERVER['REMOTE_ADDR'];
                    $verify = password_hash($hash, CRYPT_BLOWFISH);

                    $dest="home.html";

                    header('Location:'.$dest); 
            }
        }
?>

