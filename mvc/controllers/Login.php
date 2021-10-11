<?php


class Login extends Controller{
    function login() {
        $user = $this->model('LoginModel');
        $this->view('view-login');
        if(isset($_SESSION['login'])){
            if($_SESSION['login']==1){
                header('Location:php-mvc/admin');
            }
            else {
             echo "view user";
            }
            
        }else {
            if(isset($_POST['submit'])){
                $result =$user->checkLogin($_POST);
                if(isset($result)){
                    $data = $result->fetch_array(MYSQLI_ASSOC);
                    $_SESSION["login"] = $data['permission_id'];
                   if($_SESSION["login"]==1){
                    header('Location: php-mvc/admin');
                   }
                   else {
                    echo "view user";
                   }
                }else {
                    echo "<p>Email or password was wrong</p>";
                }
            }
        }
    }
   

}
?>