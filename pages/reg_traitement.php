<?php
if (
    isset($_POST['username']) &&
    isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['re_password'])
) {
   

    $username = trim($_POST['username']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $re_password = trim($_POST['re_password']);

    #Verifier les variables
    if ($password != $re_password) {
        echo "Les mots de passe ne correspondent pas";
        #Redirigier 
        header('Location: register.php?param1=passnotthesame');
        exit; 
    }

    if (strlen($name) > 15 | strlen($name) < 3) {
        $error = "name";
        #Redirigier
        header('Location: register.php?param1=namepb');
        exit; 
    }
    
    elseif (strlen($username) > 10 | strlen($username) < 3) {
        $error = "username";
        #Redirigier
        header('Location: register.php?param1=usernamepb');
        exit; 
    }
    elseif (strlen($password) > 15 | strlen($password) < 5) {
        $error = "password";
        #Redirigier
        header('Location: register.php?param1=passpb');
        exit; 
    }
    
    #Test REGEX email (soon)

    #Tout est OK
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    #Mise dans la bdd
    try{

        $pdo = new PDO('sqlite:' . dirname(__FILE__) . '/mabdd2.db');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        #Ajout
        $stmt = $pdo->prepare("INSERT INTO user (name, username, email, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$username, $name, $email, $hashedPassword]);

        #Redirection
        header('Location: login.php?param1=ok');
        exit; 


    } catch(Exception $e) {
        echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
        header('Location: register.php?param1=pbbdd');
        exit; 
        die();
    }

    
} else {
    header('Location: register.php?param1=empty');
    exit; 
}
?>
