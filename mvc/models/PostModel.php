<?php
class PostModel extends DB{
    public function posts_table(){
        $post = "SELECT * FROM posts_table";
        return mysqli_query($this->con, $post);
    }

}
?>