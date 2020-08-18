<?php 

    $mysql = new mysqli('localhost', 'root', 'root', 'transaction');
    
    $info = mysqli_query($mysql, "SELECT * FROM `wallets`");
    
    $nick = $_COOKIE['login'];
    $pass = $_COOKIE['pass'];
    $name = $_COOKIE['name'];
    $amount = $_COOKIE['amount'];

    $wallet = $_POST['wallet'];
    $pay = $_POST['pay'];
    $percent = 1.5;
    
    if($wallet != null) {
        while ($content = mysqli_fetch_assoc($info) ){
                if (array_intersect(explode(' ', $wallet), $content)) {
                    $p = ($pay*$percent)/100;
                    $p = ($pay - $p);
                    if($amount < $pay){
                        echo("Not enough balance"); 
                        echo "<br>";
                        echo "<a style='color:red' href='acc.php'>Return</a>";
                    } else {
                        $mysql->query("UPDATE `wallets` SET `amount` = `amount` - '$pay' WHERE `login` = '$nick'");
                        $mysql->query("UPDATE `wallets` SET `amount` = `amount` + '$p' WHERE `login` = '$wallet'");
                        echo("Success"); 
                        echo "<br>";
                        echo "<a style='color:red' href='index.php'>Return</a>";
                    }
                    
                } 
            };

    } else {
        echo "empty fieilds";
    }
?>