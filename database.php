<?php 

class database{

	var $host = "localhost:8889";
	var $uname = "root";
	var $pass = "root";
	var $db = "exercise";
	private $conn;
 
	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}

	function show_data(){
		$data = mysqli_query($this->conn, "select * from user");
		while($d = mysqli_fetch_array($data)){
			$result[] = $d;
		}
		return $result;
	}

	function add($name,$address,$age){
		mysqli_query($this->conn, "insert into user(name,address,age) values('$name','$address','$age')");
	}

	function delete($id){
		mysqli_query($this->conn,"delete from user where id='$id'");
	}

	function edit($id){
		$data = mysqli_query($this->conn, "select * from user where id='$id'");
		while($d = mysqli_fetch_array($data)){
			$result[] = $d;
		}
		return $result;
	}

	function update($id,$name,$address,$age){
		mysqli_query($this->conn, "update user set name='$name', address='$address', age='$age' where id='$id'");
	}

} 

?>