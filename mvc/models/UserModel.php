<?php
class UserModel extends DB{
    public function users_table(){
        $user = "SELECT * FROM users_table";
        return mysqli_query($this->con, $user);
    }
}
?>