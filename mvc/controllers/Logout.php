<?php
class Logout extends Controller{
 function logout() {
    session_destroy();
    header('Location:http://localhost:8080/php-mvc/login');
    }
}
?>