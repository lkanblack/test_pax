<?php 

    $nick = $_COOKIE['login'];
    $pass = $_COOKIE['pass'];
    $name = $_COOKIE['name'];
    $amount = $_COOKIE['amount'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="acc">
                    <h2>Hello <span><?php echo $name;?></span></h2>
                    <p>Wallet name: <b><?php echo $nick ?></b></p>
                    <p>Balance : <b><?php echo number_format((float)$amount, 2, '.', '') ?></b> EUR</p>
                    <a style="color:red" href="index.php">Return</a>
                </div>
            </div>

            <div class="col-md-6">
                <h2>Transaction</h2>
                <form method="POST" action="sendmoney.php">
                    <p>commission - 1.5%.</p>
                    <input type="text" class="form-control mb-2" name="wallet" id="wallet" placeholder="Wallet" >
                    <input type="text" class="form-control mb-2" name="pay" id="pay" placeholder="Sum" >
                    <button class="btn btn-primary" type="submit">Send</button>

                </form>
            </div>
        </div>
    </div>
</head>
<body>
    
</body>
</html>