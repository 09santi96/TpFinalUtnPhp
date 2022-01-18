<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Iniciar sesion</title>
</head>
<?php
    $class_error ="container";
     if(isset($_GET['error'])){
        if($_GET['error'] == "wrongLogin")
            $class_error = "container_error";
        else    
            $class_error = "container";
    }     
?>
<body>

   <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0"></div>
            <div class="square" style="--i:1"></div>
            <div class="square" style="--i:2"></div>
            <div class="square" style="--i:3"></div>
            <div class="square" style="--i:4"></div>
            
          
            <div class="<?php echo $class_error;?>">
                <div class="form">
                    <h2>Bienvenido</h2>

                    <?php //php validate form
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "emptyInput")
                                echo "<p>Completa los campos!</p>";
                            elseif($_GET['error'] == "wrongLogin")
                                echo "<p>Usuario o contraseña invalido!</p>";
                        }     
                    ?>
                    <form action="./checkuser.php" method="post" >
                        <div class="inputBox">
                            <input type="text" placeholder="Usuario" name="user" required autofocus>
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Contraseña" name="pass" required>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="submit" value="Entrar">
                            <p class="forget">¿No tiene ninguna cuenta? <a href="./form.php" target="a_blank">Registrarse</a> </p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
            
    </section>
</body>
</html>
