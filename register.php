<?php
  if(isset($_POST['submit'])){



   session_start();
   

   $_SESSION['firstname'] = $_POST['firstname'];

   header('Location:login.php ');

    //checks first name
    if(empty($_POST['firstname'])){
      echo 'A name is required <br/>';
    }
    else{
      echo htmlspecialchars($_POST['firstname']);
    }
    //checks last name
    if(empty($_POST['lastname'])){
      echo 'Enter last name  <br/>';
    }
    else{
      echo htmlspecialchars($_POST['lastname']);
    }
    //checks last name
    if(empty($_POST['email'])){
      echo 'An email is required <br/>';
    }
    else{
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "email must be valid. Check again."
      }
    }
    //checks password
    if(empty($_POST['pass'])){
      echo 'A password is required <br/>';
    }
    else{
      echo htmlspecialchars($_POST['pass']);
    }
   //Admin please how do i check for date of birth?


  }
?>

<!Doctype html>
<html>
    <head>
        <title>Registeration form</title>
    </head>
        <body>

            <form action="register.php" method="POST">

                <p>First name: <input type="text" name="firstname" value=""></p><br/>
                <p>Last name: <input type="text" name="lastname" value=""></p><br/>
                <p>Email: <input type="text" name="email" value=""></p><br/>
                <p>Password:: <input type="password" name="pass" value=""></p><br/>
                <p>Date of birth:  <input type="date" id="demo"/></p><br/>
                <input type="submit" name="submit" value="Register">
            </form>

        </body>

</html>
