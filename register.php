<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PettyCare | register</title>
    <link rel="stylesheet" href="./static/main.css">  
    <link rel="stylesheet" href="./static/navbar.css">
    <link rel="stylesheet" href="./static/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="shortcut icon" href="./favicon.svg" type="image/x-icon">
    <script defer src="main.js"></script>
</head>
<body class="register-container">
    
<button id="btnmsg"><i class="fa-regular fa-message"></i></button>
    <div class="error oculto">
        <i class="fa-regular fa-circle-xmark"></i>
        <p class="err">Error contraseña incorrecta</p>
    </div>
    <div class="success oculto">
    <i class="fa-regular fa-circle-check"></i>
        <p class="right">Registro correcto</p>
    </div>
    <div class="content">
    <div class="decoration">
            <h1>Register Form</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eius quibusdam similique quae consectetur quia vero itaque? Repellendus vel architecto distinctio optio reiciendis amet atque rerum possimus dicta? Accusantium, laboriosam?</p>
            <p class="option">Ya tienes una cuenta? <a href="#" class="btn-option">Ingresa</a></p>
            <p class="option">Mostrar Contraseña <button class="btn-option hide" id="showpswrd"><i class="fa-solid fa-eye-slash"></i></button></p>

        </div>
            <form method='post' class="form-register">
                <label for="name" class="label ">Nombre *</label>
                <input type="text" class="field name" name="name" placeholder="nombreOriginal" required > 
                <label for="email" class="label" >Correo Electronico *</label>
                <input type="email" class="field email" name="email" placeholder="pettycare@petty.com" required> 
                <label for="password" class="label unfocus">Contraseña *</label>
                <input type="password" class="field password pswrd1" id="password" name="password" placeholder="pettyCare1234" required> 
                <label for="confirm_password" class="label">Confirmar Contraseña *</label>
                <input type="password" class="field pswrd2" name="confirm_password" placeholder="pettyCare1234" required> 
                
                <button type="submit" class="submit" name="submit">Registrar <i class="fa-solid fa-right-to-bracket"></i></button>
                <?php 
include 'conex_sql.php';

if(isset($_POST['submit'])){
    if(strlen($_POST['name']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['password']) >= 1 &&
    strlen($_POST['confirm_password']) >= 1){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $password2 = trim($_POST['confirm_password']);
        $consulta = "INSERT INTO users( name, email, password) VALUES ('$name', '$email','$password')";
        $resultado = mysqli_query($conex,$consulta);

        if(strlen($name) <= 4){
            ?>
            <script>
                document.querySelector('.name').classList.add('thisError');
                let error = document.querySelector('.error');
                
                error.classList.remove('oculto');
                error.classList.add('mostrar');
                error.querySelector('.err').textContent = "¡Que nombre tan corto!";

                setTimeout(() => {
                    error.classList.remove('mostrar');
                    error.classList.add('oculto');
                }, 1000)
                
            </script>
            <?php
            return;
        }

        if(strlen($email) <= 4){
            ?>
            <script>
                
                let error = document.querySelector('.error');
                document.querySelector('.email').classList.add('thisError');
                error.classList.remove('oculto');
                error.classList.add('mostrar');
                error.querySelector('.err').textContent = "¡Wow! ¿ Existe un correo tan corto?";

                setTimeout(() => {
                    error.classList.remove('mostrar');
                    error.classList.add('oculto');
                }, 2000)
                
            </script>
            <?php
            return;
        }

        if(strlen($password) <= 4){
            ?>
            <script>
                document.querySelector('.pswrd1').classList.add('thisError');
                let error = document.querySelector('.error');

                

                error.classList.remove('oculto');
                error.classList.add('mostrar');
                error.querySelector('.err').textContent = "¡Asegurate que la contraseña contenga más de 4 caracteres!";

                setTimeout(() => {
                    error.classList.remove('mostrar');
                    error.classList.add('oculto');
                }, 1000)
                
            </script>
            <?php
            return;
        }


        if($password != $password2){
            ?>
            <script>
                document.querySelector('.pswrd2').classList.add('thisError');
                document.querySelector('.pswrd1').classList.add('thisError');
                let error = document.querySelector('.error');

                error.classList.remove('oculto');
                error.classList.add('mostrar');
                error.querySelector('.err').textContent = "¡Asegurate de que la contraseña sea la misma!";

                setTimeout(() => {
                    error.classList.remove('mostrar');
                    error.classList.add('oculto');
                }, 3000)
                
            </script>
            <?php
            return;
        }

        if($resultado){
            ?>
            <script>
                
                let success = document.querySelector('.success');

                success.classList.remove('oculto');
                success.classList.add('mostrar');
                success.querySelector('.right').textContent = "Registro correcto";

                setTimeout(() => {
                    success.classList.remove('mostrar');
                    success.classList.add('oculto');
                    setTimeout(() => {
                        location.href = 'index.html';
                    }, 200)
                }, 3000)
                
            </script>
            <?php
            
        } else {
            ?>
            <script>
                
                let error = document.querySelector('.error');

                error.classList.remove('oculto');
                error.classList.add('mostrar');
                error.querySelector('.err').textContent = "¡Ups! algo anda mal...";

                setTimeout(() => {
                    error.classList.remove('mostrar');
                    error.classList.add('oculto');
                }, 3000)
                
            </script>
            <?php
        }

        



    }
}
?>
            </form>

           

        
</div>


</body>
</html>