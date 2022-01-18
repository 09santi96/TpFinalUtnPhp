<?php
        if(isset($_POST['submit'])){
            $user = $_POST['user'];
            $mail = $_POST['mail'];
            $dni = $_POST['dni'];
            $pass = $_POST['pass'];
            $passRepeat = $_POST['pass2'];

            require_once'./phps/dbConnect.php';
            require_once'./phps/functions_inc.php';
            
            if(emptyInputSignup($user, $mail, $dni, $pass, $passRepeat) !== false ){
                header("Location:form.php?error=emptyInput");
                exit();
            }
            if(invalidUserId($user) !== false ){
                header("Location:form.php?error=invalidUserId");
                exit();
            }
            if(invalidEmail($mail) !== false ){
                header("Location:form.php?error=invalidEmail");
                exit();
            }
            if(pwdMatch($pass, $passRepeat) !== false ){
                header("Location:form.php?error=invalidPassMatch");
                exit();
            }
            if(UserIdExist($conn, $user, $mail) !== false ){
                header("Location:form.php?error=usernameTaken");
                exit();
            }
            createUser($conn, $user, $mail, $dni, $pass);

            //header("Refresh:10; Location:sitio.php?error=$error");
        }
        
?>