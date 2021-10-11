<?php

class LoginModel extends DB
{
	public function create($data){
		$sql = "INSERT INTO traning_php_aht (permission_id, name, email, password, created_at) VALUE ('".$data['permission']."', '".$data['name']."', '".$data['email']."', '".md5($data['password'])."', CURRENT_TIME())";
		$this->conn->query($sql);
	}
	
	public function read(){
		$sql = "SELECT * FROM traning_php_aht";
		$result = $this->conn->query($sql);
		return $result;
	}
	public function update($data, $id){
		$sql = "UPDATE traning_php_aht SET name='".$data['name']."', permission_id='".$data['permission']."', password='".md5($data['password'])."', updated_at = CURRENT_TIME() WHERE id='".$id."'";
		$this->conn->query($sql);  
	}
	public function delete($id){
		$sql = "DELETE from traning_php_aht WHERE id=$id";
		$result = $this->conn->query($sql);
	}
	public function checkLogin($data) {
		$sql = "SELECT * FROM users_table WHERE email='".$data['email']."' AND (password='".$data['password']."' OR password='".md5($data['password'])."')";
		$result = $this->con->query($sql);
		if ($result->num_rows == 0){
			$data = 0; 
		} else {
			return $result;
		}
	}

	public function get($id) {
		$sql = "SELECT * FROM traning_php_aht WHERE id=$id";
		$result = $this->conn->query($sql);
		if ($result->num_rows == 0){
			$data = 0; 
		} else {
			return $result;
		}
	}

	public function register($data){
		$sql = "INSERT INTO traning_php_aht (permission_id, name, email, password, created_at) VALUE (3, '".$data['name']."', '".$data['email']."', '".md5($data['password'])."', CURRENT_TIME())";
		$this->conn->query($sql);
	}
	
	public function check($data){
		$sql = "SELECT * FROM users_table WHERE email='".$data['email']."' AND (password='".$data['password']."' OR password='".md5($data['password'])."')";
		$result = $this->con->query($sql);
	
		// echo $sql;
		if ($result->num_rows == 0){
			$data = 0; 
		} else {
			return $result;
		}
	}
}