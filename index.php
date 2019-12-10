<?php
session_start();

require("db_conexion.php");


if(isset($_SESSION['user_id'])){
    $usuario_registrado = 
    $connexion->prepare('SELECT 
    users_login_id,users_login_name, users_login_password 
    FROM users_login 
    wHERE users_login_id=:id');
    $usuario_registrado->bindParam(':id', $_SESSION['user_id']);
    $usuario_registrado->execute();
    $resultados = $usuario_registrado -> fetch(PDO::FETCH_ASSOC);

   
    $user = null;
    if(count($resultados) > 0){
        $user = $resultados;
        
    }

   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lifecode System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include("partials/header.php")?>

    <?php
    if (!empty($user)){
        echo '<div class="centrado">';
        echo "<br><h1>Welcome</h3><br>".$user['users_login_name'];
        echo "<br><h3>Te has loggeado correctamente</h3>";
        echo '<a href="logout.php">Logout</a>';
        echo '</div>';
    }
    else{

    echo '<div class="centrado">';
    echo '<h1>Login or Signup</h1>';
    echo '<a href="login.php">Login</a> <span>or</span> <a href="signup.php">Signup</a>';
    echo '</div>';
    }?>
</body>
</html>