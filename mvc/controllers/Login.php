<?php
class Login extends Controller{

	protected $userModel;

	public function __construct() {
    	$this->userModel = $this->model("UserModel");
  	}

	public function SayHi(){
		// $result = $this->userModel->table('user')->insert([
		// "username"=>"phong",
		// "password"=>"123456",
		// "fullname"=>"thanh phong",
		// "status"=>1,

		// ]);

		// if($result){
		// 	echo $result;
		// }

		// $users = $this->userModel->table('user')->limit(10)->get();
		// print_r($users);

		$arr = $this->userModel->findAll();
		print_r($arr);
	}

	

// $result = $this->userModel.findAll();
// 		while($row = $result->fetch_assoc()){
// 			echo "Username :" . $row["username"] . "<br>";
// 		}
// 		$this->view("LayoutLogin",["Page"=>"login"]);

	
}

?>