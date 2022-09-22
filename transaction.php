<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/transaction.css">
    <link rel="javascript" href="js/transaction.js">
    <link rel="shortcut icon" href="assets/img/Banh Code.ico" type="image/x-icon">
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


    <form action="proses_paymen.php" method="post">

        <div id="wrapper">
            <h1 style="text-align: center;">Pembayaran</h1>
            <div class="row">
                <div class="col-xs-5">
                    <div id="cards">
                        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
                        <img
                            src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
                    </div>
                    <!--#cards end-->
                    <div class="form-check">
                        <label class="form-check-label" for='card'>
                            <input id="card" class="form-check-input" type="radio" value="visa and master"
                                name="payment" required>
                            Pay with credit card visa & master
                        </label>
                    </div>
                </div>
                <!--col-xs-5 end-->
                <div class="col-xs-5">
                    <div id="cards">
                        <img
                            src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Paypal-icon.png">
                    </div>
                    <!--#cards end-->
                    <div class="form-check">
                        <label class="form-check-label" for='paypal'>
                            <input id="paypal" class="form-check-input" type="radio" value="paypal and discound"
                                name="payment" required>
                            Pay with PayPal and 15% discount
                        </label>
                    </div>
                </div>
                <!--col-xs-5 end-->
            </div>
            <!--row end-->
            <div class="row">
                <div class="col-xs-5">
                    <label for="cardholder">Your Name</label>
                    <input type="text" id="cardholder" name="nama" required>
                </div>
                <!--col-xs-5-->
                <div class="col-xs-5">
                    <i class="fa fa-credit-card-alt"></i>
                    <label for="cardnumber">Card Number</label>
                    <input type="number" id="cardnumber" name="card_number" required>
                </div>
                <!--col-xs-5-->
                <div class="col-xs-5">
                    <i class="fa fa-credit-card-alt"></i>
                    <label for="cardnumber">Your Gmail</label>
                    <input type="Email" id="cardnumber" name="Gmail" required>
                </div>
                <!--col-xs-5-->
            </div>
            <!--row end-->
            <div class="row row-three">
                <div class="col-xs-2">
                    <label for="date">Valid thru</label>
                    <input type="text" placeholder="DD/MM/YYYY" id="date" name="valid_thru" required>
                </div>
                <!--col-xs-3-->
                <div class="col-xs-2">
                    <label for="date">CVV / CVC *</label>
                    <input type="number" name="cw/cv" required>
                </div>
                <!--col-xs-3-->
                <div class="col-xs-5">
                    <span class="small">we just made two cards for our class payment and we will continue to add more
                        payment methods.</span>
                </div>
                <!--col-xs-6 end-->
            </div>
            <!--row end-->
            <footer>
                <a href="plans.php" class="btn btn-outline-primary">Back</a>
                <input type="submit" name="submit" value="Buy" class="btn btn-outline-primary"
                    style="margin-left: 110px;">
            </footer>
        </div>
        <!--wrapper end-->
        </from>

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