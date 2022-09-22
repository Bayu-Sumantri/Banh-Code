<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/transaction_berhasil.css">
    <title>Document</title>
</head>

<body>
    <img class="tengah" src="assets/img/Banh_Code-(no-background).png" style="text-align: center;">
    <div class="text">
    <h1>Berhasil sudah</h1>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($conn, "select * from pembayaran");
    while ($d = mysqli_fetch_array($data)) {
    ?>
<!--         <table border="1">
            <tr>
             <td><?php echo $d['payment']; ?></td>
            </tr>
        </table> -->

        <?php
    }
        ?>

        <a href="page.php">
            <button class="btn btn-outline-primary">Back To Home</button>
        </a>
    </div>
</body>

</html>