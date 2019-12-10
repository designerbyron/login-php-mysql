<?php 


session_start();

 require("db_conexion.php");

$mensaje= "";


if(!empty($_POST["txt-user"]) && !empty($_POST["password"])){

    $usuario_registrado = $connexion->prepare('SELECT users_login_id, users_login_name,users_login_password FROM users_login wHERE users_login_name=:email');
    $usuario_registrado->bindParam(':email', $_POST['txt-user']);
    $usuario_registrado->execute();

    $resultado = $usuario_registrado->fetch(PDO::FETCH_ASSOC);

    $mensaje = "";

    if (count($resultado) > 0 && password_verify($_POST['password'], $resultado['users_login_password'])){
        $_SESSION['user_id'] = $resultado['users_login_id'];
        header('Location: index.php');
    }else{
        $mensaje = 'Lo Sentimos tus credenciales no son válidas';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loggin Lifecode-System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include("partials/header.php")?>
<div class="centrado">
    <h1>Loggin Form</h1>
    <a href="signup.php">Signup</a>
<?php 
 if (!empty($mensaje)){
     echo '<p style="color:red">'.$mensaje.'</p>';
 }

?>
    <form action="login.php" method="post">
        <div>
            <label>User:</label>
            <input name="txt-user" type="text" placeholder="Nombre o email">
        </div>
        <div>
            <label>Password:</label>
            <input name="password" type="password" placeholder="Password">
        </div>

        <button type="submit">Ingresar</button>
    </form>
</div>
</body>
</html>