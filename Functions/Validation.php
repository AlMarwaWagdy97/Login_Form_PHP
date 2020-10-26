<?php
require_once ('../config.php');

function Check_login(){

    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (Check_empty($email) and Check_empty($password)) {
            if (ValidEmail($email)) {
                $check = getRow('user', 'email', $email);
                if ($check) {
                    if ($check['password'] == $password) {
                        if (isset($_POST['remember'])) {
                            setcookie('email', $email, time() + (60 * 60 * 7));
                            setcookie('password', $password, time() + (60 * 60 * 7));
                        }
                        session_start();
                        $_SESSION['name'] = $check['name'];
                        header('location: Welcome.php');
                    } else return $error_message = 'Password not correct';
                } else return $error_message = "Email not exist...Please Sign up";
            } else return $error_message = "Please insert correct Email";
        } else return $error_message = "Please fill all Filds";
    }
}

function Check_Cookie(){
    if(isset($_COOKIE['email']) and isset($_COOKIE['password']) ){
        $email = $_COOKIE['email'];
        $password = $_COOKIE['password'];
        echo "  <script>
                        document.getElementById('in1').value = '$email';
                        document.getElementById('in2').value = '$password';
                    </script>";
    }
}

function Check_empty($val){
    if(empty($val)) return false;
    return true;
}

function check_less($val, $min){
    if(trim(strlen($val)) <= $min)return false;
    else return true;
}

function ValidEmail($email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))return false;
    else return true;
}


?>