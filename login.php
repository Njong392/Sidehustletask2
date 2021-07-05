<?php
  session_start();
  $name = $_SESSION['firstname'];


 ?>


<!Doctype html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
      <header>
         <nav>
           <p style= "float:right">
             <a href="#"> Register</a>
             <p>Hey <?php echo htmlspecialchars($name);?> </p>

         </nav>
      </header>
       <br/>
      <hr color = "black"/>

        <form action="" method="POST">


                <p>Email: <input type="text" name="email" value=""></p><br/>

                <p>Password:: <input type="password" name="pass" value=""></p><br/>

                <input type="submit" name="submit" value="Login">
                <input type="submit" name="submit" value="Register">
            </form>



    </body>

</html>
