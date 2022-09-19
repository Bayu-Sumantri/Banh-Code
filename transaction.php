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

<form action="proses_paymen.php" method="post">

<div id="wrapper">
  <div class="row">
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Visa-icon.png">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Master-Card-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='card'>
    <input id="card" class="form-check-input" type="radio" value="visa and master" name="payment" required>
    Pay with credit card visa & master
  </label>
</div>
    </div><!--col-xs-5 end-->
    <div class="col-xs-5">
      <div id="cards">
        <img src="http://icons.iconarchive.com/icons/designbolts/credit-card-payment/256/Paypal-icon.png">
      </div><!--#cards end-->
      <div class="form-check">
  <label class="form-check-label" for='paypal'>
    <input id="paypal" class="form-check-input" type="radio" value="paypal and discound" name="payment" required>
    Pay with PayPal and 15% discount
  </label>
</div>
    </div><!--col-xs-5 end-->
  </div><!--row end-->
  <div class="row">
    <div class="col-xs-5">
      <label for="cardholder">Your Name</label>
      <input type="text" id="cardholder" name="nama" required>
    </div><!--col-xs-5-->
    <div class="col-xs-5">
      <i class="fa fa-credit-card-alt"></i>
      <label for="cardnumber">Card Number</label>
      <input type="number" id="cardnumber" name="card_number" required>
    </div><!--col-xs-5-->
    <div class="col-xs-5">
      <i class="fa fa-credit-card-alt"></i>
      <label for="cardnumber">Your Gmail</label>
      <input type="Email" id="cardnumber" name="Gmail" required>
    </div><!--col-xs-5-->
  </div><!--row end-->
  <div class="row row-three">
    <div class="col-xs-2">
      <label for="date">Valid thru</label>
      <input type="text" placeholder="DD/MM/YYYY" id="date" name="valid_thru" required>
    </div><!--col-xs-3-->
    <div class="col-xs-2">
      <label for="date">CVV / CVC *</label>
      <input type="number" name="cw/cv" required>
    </div><!--col-xs-3-->
    <div class="col-xs-5">
      <span class="small">* CVV or CVC is the card security code, unique three digits number on the back of your card seperate from its number.</span>
    </div><!--col-xs-6 end-->
  </div><!--row end-->
  <footer>
  <a href="plans.php" class="btn btn-outline-primary">Back</a>
  <input type="submit" name="submit" value="simpan" class="btn btn-outline-primary" style="margin-left: 110px;">
  </footer>
</div><!--wrapper end-->
</from>
</body>

</html>