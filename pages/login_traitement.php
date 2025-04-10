<?php

#Voir si on a toutes les infos
if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    #Se connecter la la bdd + requète
    try{
        $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/mabdd2.db');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        #Requete
        $stmt = $pdo->prepare("SELECT password FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(); #Tableau de "user"

        #Vérifier les infos
        if ($user){
            
            if (password_verify($password, $hashedPassword)) {
                header('Location: login.php?param1=connected');
                exit;

            } else {
                header('Location: login.php?param1=password');
                exit;
            }

        } else {
            header('Location: login.php?param1=notexist');
            exit;
        }
        



        


    } catch(Exception $e) {
        echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
        header('Location: register.php?param1=pbbdd');
        exit; 
        die();
    }

















}
else {
    #Redirigier 
    header('Location: login.php?param1=empty');
    exit;
}







#Comparer et renvoyer les erreurs




?>