<?php 
  require 'REGISTRARSE.php';
  if (!empty ($_POST['email']) && !empty ($_POST['password'])) {
    $sql= "INSERT INTO users (email,password)  VALUES (:email, :password) ";
    $stmt= $conn->prpare($sql);
    $stmt ->binParam (':email',$_POST['email']);
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $stmt ->binParam (':password',$_POST['password']);
    if ($stmt->execute()) {
      $message ='Successfully created new user';
    } else {
      $message ='Successfully created new user';
    }
  }
?>
<html>
    <meta charset="UTF-8">
    <head>
        <script type="text/javascript">
     var uid = '237705';
     var wid = '492444';
   </script>
   <script type="text/javascript" src="//cdn.popcash.net/pop.js"></script>
        <link rel="stylesheet" href="formulario.css">
        <title> Singup </title> 
    </head>
    <body>
        <?php 
if 
(!empty($message));
?>
<p><?php $message ?> </p>
<?php endif; ?>
        <form action="REGISTER.php" method="post">
         <h1>SIGN UP</h1>
    <div class="t78">
          <input type="email" name="email" placeholder="Enter your email" maxlength="50" required>
          <input type="password" name="password" placeholder="Enter your password" maxlength="50" required>
         <input type="submit" value="Send" required>
              <a href="https://adraw406.github.io/LOGIN-SFG/#sign-up">
                   <h2>LOGIN</h2>
              </a>
     </div>
        </form>
    </body>
</html>
    
   
   
   
  
