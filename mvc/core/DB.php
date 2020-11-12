<?php
class DB{
	public $connection = null;
	protected $servername = "localhost:3307";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "mvc";

	protected $table='';
	protected $statement=null;
	protected $limit = 15;
	protected $offset = 0;

	function __construct(){
		$this->connection = mysqli_connect($this->servername,$this->username,$this->password);
		if($this->connection->connect_errno ){
			echo "Failed to connect to MySQL: " . $connection -> connect_error;
  			exit();
		}
		mysqli_select_db($this->connection,$this->dbname);
		mysqli_query($this->connection,"SET NAMES 'utf8'");
	}

	public function table($tableName){
		$this->table = $tableName;
		return $this;
	}

	public function limit($limit){
		$this->limit = $limit;
		return $this;
	}

	public function offset($offset){
		$this->offset = $offset;
		return $this;
	}	

	public function resetQuery(){
		$this->table = '';
		$this->limit = 15;
		$this->offset = 0;
	}


	public function get(){
		$returnData = [];
		$sql = "SELECT * FROM $this->table LIMIT ? OFFSET ?";
		$this->statement = $this->connection->prepare($sql);
		$this->statement->bind_param('ii',$this->limit,$this->offset);
		$this->statement->execute();
		$this->resetQuery();
		$result = $this->statement->get_result();
		while($row = $result->fetch_object()){
			$returnData[] = $row;
		}
		$this->statement->close();
		return $returnData;
	}

	

	public function insert($data = []){
		$fields = implode(',', array_keys($data));
		$parameters = implode(',', array_fill(0, count($data), "?"));
		$values = array_values($data);
		$sql = "INSERT INTO $this->table($fields) VALUES($parameters)";
		$this->statement = $this->connection->prepare($sql);
		$this->statement->bind_param(str_repeat('s',count($data)), ...$values);
		$this->statement->execute();
		$this->statement->close();
		return $this->connection->insert_id;

	}

	public function update(){

	}

	public function delete($id){
		$sql = "DELETE FROM $this->table WHERE id = ?";
		$this->statement = $this->connection->prepare($sql);
		$this->statement->bind_param('i',$id);
		$this->statement->execute();
		$this->statement->close();
	}
}
?>