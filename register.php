<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PettyCare | register</title>
    <link rel="stylesheet" href="./static/main.css">  
    <link rel="stylesheet" href="./static/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
</head>
<body class="register-container">
    <div >

            <form method='post' class="form-register">
                <label for="name" class="label unfocus">Nombre</label>
                <input type="text" class="field" name="name" > 
                <label for="email" class="label unfocus">Correo Electronico</label>
                <input type="text" class="field " name="email" > 
                <label for="password" class="label unfocus">Contraseña</label>
                <input type="text" class="field" name="password" > 
                <label for="confirm_password" class="label unfocus">Confirmar Contraseña</label>
                <input type="text" class="field" name="confirm_password" > 
                <p>Ya tienes cuenta? <a href="#">Ingresa</a></p>
                <button type="submit" class="submit">Registrar <i class="fa-solid fa-right-to-bracket"></i></button>
                
            </form>
        
</div>
<?php 
include 'conex_sql.php';

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$confirm_pswrd = trim($_POST['confirm_password']);
?>
<script src="./static/main.js"></script>
</body>
</html>