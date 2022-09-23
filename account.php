<!DOCTYPE html>
<html lang="en">
    <?php
     session_start();
    ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Banh_Code</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="icon" type="image/x-icon" href="assets/img/Banh Code.ico" />
    
    <link rel="stylesheet" href="css/account.css">
  </head>
  <body>

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


    <div class="wrapper">
      <nav class="navbar navbar-brand">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="plans.php"><?php echo $_SESSION['nama']; ?></a></li></a>
        </div>
      </nav>
      <aside class="sidebar">
        <menu>
          <ul class="menu-content">
            <li><a href="account.php" ><i class="fa fa-angle-double-right" aria-hidden="true" style="margin-left: 60px"></i><?php echo $_SESSION['nama']; ?></a></li>
            <li><a href="account.php"><i class="fa fa-home"></i> Account</a></li>
            <li><a href="#"><i class="fa fa-shopping-basket"></i> <span>Pembelian</span></a></li>
          </ul>
        </menu>
      </aside>
      <section class="content">
        <div class="inner">
          <p>
             <?php
  include 'koneksi.php';
  ?>
    <table border="1" width="100%">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>Gmail</th>
            <th>Phone</th>
            <th>Password</th>


        </tr>
        <?php
    include 'koneksi.php';
    $data = mysqli_query($conn, "select * from regis_login");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <tr>
            <td><?php echo $_SESSION['id_client']; ?>
            <td><?php echo $_SESSION['nama']; ?></td>
            <td><?php echo $_SESSION['phone']; ?></td>
            <td><?php echo $_SESSION['e_mail']; ?></td>
            <td><?php echo $_SESSION['password_usr']; ?></td>
        </tr>
        <?php
    }
    ?>
    </table>
          </p>
        </div>
      </section>
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