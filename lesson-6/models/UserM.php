<?php
class UserM {
    function auth($login, $pass) {
        $res = DB::Select('select id_user, user_role from users where user_login= :login and user_pass = :pass', [
            'login' => $login,
            'pass' => md5($pass)
        ]);
        if(!empty($res)) {
            $_SESSION['login'] = $login;
            $_SESSION['role'] = $res[0]['user_role'];
        } else {
            header("Location: index.php?c=user&act=auth&auth=false");
        }
    }

    function reg($login, $name, $pass, $phone) {
        $res = DB::Select('select id_user from users where user_login = :login', [
            'login' => $login
        ]);
        if(!empty($res)) {
            header("Location: index.php?c=user&act=reg&login=exist");
        } else {
            $resReg = DB::insert('insert into users (user_login, user_name, user_pass, user_phone, user_role) values (:login, :name, :pass, :phone, :role)', [
                'login' => $login,
                'name' => $name,
                'pass' => md5($pass),
                'phone' => $phone,
                'role' => 0
            ]);
        }
    }

    function logout(){
        session_destroy();
        header("location: index.php");
    }


}