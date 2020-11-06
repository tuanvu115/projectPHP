<?php
class Home extends Controller{
	public function SayHi(){
		$this->view("LayoutHome",["Page"=>"home"]);
	}

	

	// function Show($a,$b){
	// 	//Model
	// 	$teo = $this->model("SinhVienModel");
	// 	$tong = $teo->tong($a,$b);
	// 	//View
	// 	$this->view("LayoutHome",["Number"=>"$tong",
	// 						"Page"=>"news",
	// 						"SV"=>$teo->SinhVien()
	// 				]);
	// }



	
}

?>