<?php
class UserModel extends DB{

	

	public function findAll(){
		return $this->table('user')->limit(10)->get();
	}

	public function insert(){
		
	}
}

?>