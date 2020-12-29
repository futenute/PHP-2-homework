<?php
class M_User {
    function auth($login,$pass){
        global $connect;
        $sql = "select id_users from users where login='$login' and pass = '$pass'";
        $res = mysqli_query($connect, $sql) or die("Error: ".mysqli_error($connect));
        if(mysqli_num_rows($res)) {
            $_SESSION['login'] = $login;
            $_SESSION['pass'] = $pass;
        } else {
            header("Location: index.php?c=user&act=auth&auth=false");
        }
    }

    function reg($login, $name, $pass) {
        global $connect;
        $sql = "select id_users from users where login='$login'";
        $res = mysqli_query($connect, $sql) or die("Error: ".mysqli_error($connect));
        if(mysqli_num_rows($res)) {
            header("Location: index.php?c=user&act=reg&email=exist");
        } else {
            $sqlReg = "insert into users (login, name, pass) values ('$login', '$name', '$pass')";
            $resReg = mysqli_query($connect, $sqlReg);
        }

        if (!$resReg) {
            echo("Error description: " . mysqli_error($connect));
        }
    }

    function logout(){
        session_destroy();
        header("location: index.php");
    }
}

