<?php 
    $mysql = new mysqli('localhost', 'root', 'root', 'transaction');

    // $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    // $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    // $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    // $count = filter_var(trim($_POST['count']), FILTER_SANITIZE_STRING);

    $login = $_POST['login'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $amount = $_POST['amount'];
    

    if($login != null){
        if($pass == $pass2){

            $mysql->query("INSERT INTO `wallets` (`login`, `name`, `pass`, `amount`) VALUES('$login', '$name', '$pass', '$amount')");
            // INSERT INTO `wallets` (`id`, `login`, `name`, `count`, `pass`) VALUES ('1', 'andrei', 'and', '1', '123');
        }else {
            echo "<div id='error'> Password do not match </div>";
        } 
    } else {
        echo "<div id='error'> Name field is empty </div>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Registered!</title>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2>Success!</h2>
            <a href="index.php">Return</a></p>
            </div>
        </div>
    </div>
</head>
<body>
    
</body>
</html>