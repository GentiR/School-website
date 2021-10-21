<?php
    session_start();
    include 'autoload.php';

    $errors = [];

    if(isset($_POST['register_btn'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $admin_code = $_POST['admin'];
        $user_obj = new Auth($username , $password);

        if($admin_code == 'admin'){
            if($user = $user_obj->registeradmin()){
                $_SESSION['username'] = $user['username'];
                $_SESSION['is_logged_in'] = true;

                header("Location: adminpanel.php");
            }
            else{
                $errors[] = "Please enter a valid username(email) and password (8 or more chars)!";
            }
        }
        else{

            if($user = $user_obj->register()){
                $_SESSION['username'] = $user['username'];
                $_SESSION['is_logged_in'] = true;

                header("Location: index.php");
            }
            else{
                $errors[] = "Please enter a valid username(email) and password (8 or more chars)!";
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link  rel="stylesheet" href="CSS/regiser.css" type="text/css">
        <script type="text/javascript" src="JavaScript/login.js"></script>
	    <title>PARTNERS</title>
    </head>

    <body>
    
        <form class="modal-content animate" method="post">
            <div class="container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="username" id="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="psw" required>

                <label for="admin-code"><b>You got an admin code ?( optional )</b></label>
                <input type="text" placeholder="Repeat Password" name="admin" id="psw-repeat">
                <hr>
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <button type="submit" name="register_btn">Register</button>
            </div>
            
            <div class="container1 signin">
                <p>Already have an account? <a href="login.php">Log in</a>.</p>
            </div>
        </form>
    </body>
</html>