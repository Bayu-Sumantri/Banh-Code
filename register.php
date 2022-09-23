<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Register</title>
</head>

 <style>
    /* Center the loader */

    #loader {
        position: absolute;
        left: 50%;
        top: 50%;
        z-index: 1;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Add animation to "page content" */
    .animate-bottom {
        position: relative;
        -webkit-animation-name: animatebottom;
        -webkit-animation-duration: 1s;
        animation-name: animatebottom;
        animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0px;
            opacity: 1
        }
    }

    @keyframes animatebottom {
        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }
    }

    #myDiv {
        display: none;
    }
    </style>


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

    <body onload="myFunction()" style="margin:0;">
        <div id="loader"></div>
        <div style="display:none;" id="myDiv" class="animate-bottom">
            <script>
            // Loading Page
            var myVar;

            function myFunction() {

                myVar = setTimeout(showPage, 500);

            }

            function showPage() {
                document.getElementById("loader").style.display = "none";
                document.getElementById("myDiv").style.display = "block";
            }
            </script>

    
</body>

</html>