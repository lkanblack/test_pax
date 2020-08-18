


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>transaction</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h2>Register wallet</h2>
                <form method="POST" action="auth.php">
                    <input type="text" class="form-control mb-2" name="login" id="login" placeholder="Login" required>
                    <input type="text" class="form-control mb-2" name="name" id="name" placeholder="Name" required>
                    <input type="password" class="form-control mb-2" name="pass" id="pass" placeholder="Password" required>
                    <input type="password" class="form-control mb-2" name="pass2" id="pass2" placeholder="Repeat Password" required>
                    <input type="number" class="form-control mb-2" name="amount" id="amount" placeholder="Amount" required>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
            <div class="col-md-6 mt-5">
                <h2>Sign in</h2>
                <form method="POST" action="sign_in.php">
                    <input type="text" class="form-control mb-2" name="login" id="login" placeholder="Login" required>
                    <input type="password" class="form-control mb-2" name="pass" id="pass" placeholder="Password" required>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

            </div>
            <div class="col-md-5  mt-5">
                <h2>Registered wallets</h2>
                <div class="wallets">
                    <div class="block">
                        
                        <b>Wallets:</b>
                        <br>
                        <?php
                            $mysql = new mysqli('localhost', 'root', 'root', 'transaction');
                            $info = mysqli_query($mysql, "SELECT * FROM `wallets`");

                            while ($content = mysqli_fetch_assoc($info)){
                            echo $content['login'];
                            echo "<br>";
                            }

                        ?>
                        </div>
                            
                    <div class="block">
                        
                        <b>Name:</b>
                        <br>
                        <?php
                            $mysql = new mysqli('localhost', 'root', 'root', 'transaction');
                            $info = mysqli_query($mysql, "SELECT * FROM `wallets`");

                            while ($content = mysqli_fetch_assoc($info)){
                            echo $content['name'];
                            echo "<br>";
                            }

                        ?>
                        </div>
                            
                    <div class="block">
                        
                        <b>Amount:</b>
                        <br>
                        <?php
                            $mysql = new mysqli('localhost', 'root', 'root', 'transaction');
                            $info = mysqli_query($mysql, "SELECT * FROM `wallets`");

                            while ($content = mysqli_fetch_assoc($info)){
                        
                            echo number_format((float)$content['amount'], 2, '.', '');
                            echo "<br>";
                            }

                        ?>
                        </div>
                    
                    </div>
            </div>
            <!-- <div class="col-md-6 offset-md-1">
                <h2>Transaction</h2>
                <form method="POST" action="sendmoney.php">
                    <p>commission - 1.5%.</p>
                    <input type="text" class="form-control mb-2" name="wallet" id="wallet" placeholder="Wallet" >
                    <input type="text" class="form-control mb-2" name="pay" id="pay" placeholder="Sum" >
                    <button class="btn btn-primary" type="submit">Send</button>

                </form>
            </div> -->
        </div>
    </div>


</body>
</html>