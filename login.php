<?php
    session_start();
    include 'autoload.php';

    $errors = [];

    if(isset($_POST['login_btn'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $user_obj = new Auth($username , $password);

        if($user = $user_obj->login()){
            $_SESSION['username'] = $user['username'];
            $_SESSION['is_logged_in'] = true;
            $_SESSION['is_admin'] = $user['is_admin'];

            if(isset($_POST['remember_me'])) {
                if($_POST['remember_me'] == 1) {
                    setcookie("username", $_SESSION['username'], time()+3600);
                    setcookie("is_logged_in", $_SESSION['is_logged_in'], time()+3600);
                    setcookie("is_admin", $_SESSION['is_admin'], time()+3600);
                }
            }

            if($user['is_admin'] == 1)
                header("Location: adminpanel.php");
            else
                header("Location: register.php");
        }
        else{
            $errors[] = "Username or/and password is incorrect!";
            // echo "false";
        }
    }

    // echo $_SESSION['username'];
?>


<!DOCTYPE html>
<html>
  <head>
    <link  rel="stylesheet" href="CSS/login.css" type="text/css">
    <script type="text/javascript" src="JavaScript/login.js"></script>
	  <title>PARTNERS</title>
  </head>

<body>
  <form class="modal-content animate" method="post">
    <div class="container">
<?php
if(count($errors)){
?>
<div class="alert alert-danger">
<ul>
<?php foreach($errors as $error): ?>
<li><?= $error ?></li>
<?php endforeach; ?>
</ul>
</div>
<?php
}
?>
      <h1>Log In</h1>
      <p>Please fill in this form to Log In.</p>
      <hr>
      <label for="email"><b>E-Mail</b></label>
      <input type="text" placeholder="Enter Email" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="login_btn">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <a href="services.html">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </a>
      <span class="psw">No account? <a href="register.php">Create one!</a></span>
    </div>
  </form>
</body>
</html>