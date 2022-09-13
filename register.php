<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Register</title>
</head>
<form action="proses.php" method="post">
    <div class="body"></div>
    <div class="grad"></div>
    <div class="header">
        <div>Banh<span>Code;/;</span></div>
    </div>
    <br>
    <div class="login">
        <input type="text" placeholder="User Name" name="nama" require><br>
        <input type="number" placeholder="Phone" name="phone"><br><br>
        <input type="email" placeholder="E_mail" name="e_mail"><br>
        <input type="password" placeholder="password" name="password_usr"><br>


        <input type="submit" name="submit" value="simpan" class="button"><br>
        <div class="register" style="margin-right: 100px;">
            <div class="whitetext" style="text-align: center;"><p>Already have an account?</p></div>
          <div style="text-align: center;"><a class="hoverlink" href="index.php" style="text-align: center;">Login Here</a></div>
        </div>
        
        
    </form>
</div>
    
</body>

</html>