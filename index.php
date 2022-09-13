<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/Banh Code.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<form action="ceklogin.php" method="post">
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
        <div>Banh<span>Code;/;</span></div>
    </div>
    <br>
    <div class="login">
        <input type="email" placeholder="Email" name="e_mail" require><br>
        <input type="password" placeholder="password" name="password_usr"><br>


        <input type="submit" name="submit" value="simpan" class="button"><br>
        <div class="register" style="margin-right: 100px;">
            <div class="whitetext" style="text-align: center;"><p>Don't have an account?</p></div>
          <div style="text-align: center;"><a class="hoverlink" href="register.php" style="text-align: center;">Register Here</a></div>
        </div>
        
        
    </form>
</div>
    
</body>

</html>