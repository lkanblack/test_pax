<?php 
    $mysql = new mysqli('localhost', 'root', 'root', 'transaction');


    $login = $_POST['login'];
    $pass = $_POST['pass'];
    // if($_COOKIE["login"] != null) $login = $_COOKIE["login"];
    // if($_COOKIE["pass"] != null) $pass = $_COOKIE["pass"];

    if($login != null){
        $arr = $mysql->query("SELECT * FROM `wallets` WHERE `login`='$login'");
        $arr = $arr->fetch_assoc();
        if(count($arr)> 0){
            if($pass == $arr['pass']){
                SetCookie("login", $arr['login']);
                SetCookie("name", $arr['name']);
                SetCookie("pass", $arr['pass']);
                SetCookie("amount", $arr['amount']);
                header("Location: acc.php");
            } else {
                echo "<div id='error'>Incorrect password!</div>";
            }
        }else {
            echo "<div id='error'>User not found!</div>";
        }    
    } 
?>
