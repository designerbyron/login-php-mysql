<?php 

require 'db_conexion.php';

$message = '';

if(!empty($_POST['txt-user']) && !empty($_POST['password'])){

    $mysql = "INSERT INTO users_login(users_login_name, users_login_password) VALUES (:email, :mypassword)";
    $statement = $connexion->prepare($mysql);
    $statement->bindParam(':email', $_POST['txt-user']);

    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $statement->bindParam(':mypassword', $password);

    if($statement->execute()){
        $message = true;
    }else{
        $message = false;

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Lifecode-System</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php include("partials/header.php")?>
<div class="centrado">
    <h1>Signup</h1>
    <a href="login.php">login</a>
    <?php 
    if(!empty($message)){

        switch($message){
            case true:
                echo "<p style='color:green'>Se ha creado satisfactoriamente el nuevo usuario</p>";
            break;
            case false:
                echo "<p style='color:red'>Lo sentimos no se ha podido crear el usuario</p>";
            break;

        }
 
    }
    
    ?>
    <form action="signup.php" method="post">
        <div>
            <label>User:</label>
            <input name="txt-user" type="text" placeholder="Nombre o email">
        </div>
        <div>
            <label>Password:</label>
            <input name="password" type="password" placeholder="Password">
        </div>
        <div>
            <label>Confirm your Password:</label>
            <input name="confirm-password" type="password" placeholder="Confirm Password">
        </div>

        <button type="submit">Ingresar</button>
    </form>
</div>
</body>
</html>