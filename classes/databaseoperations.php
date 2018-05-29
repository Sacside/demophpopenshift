<?php
include_once('config.php');
class dboperations
{
	var $connection;
   
   function __construct(){
   //creating database connection
     $this->connection = @mysqli_connect(DATABASE_HOST,DATABASE_USER,DATABASE_PASS) or die("Can't connect to MySQL server! Contact Site Administrator.");
	 mysqli_select_db($this->connection,DATABASE_NAME);
   }
	function checkusername($sql)
	{
		$result		=	 mysqli_query($this->connection,$sql);
	 	$resultset	= mysqli_num_rows($result);
	 	return $resultset;
	}
	function checkemail($sql)
	{
		$result		=	 mysqli_query($this->connection,$sql);
	 	$resultset	= mysqli_num_rows($result);
	 	return $resultset;
	}
	
	
	 function insertdata($sql){
      $resultset = mysqli_query($this->connection,$sql);
	  $id        = mysqli_insert_id($this->connection);
	  if(mysqli_affected_rows($this->connection)){
		return $id;
      }
   }
   
   function read($sql){
     $resultset  = mysqli_query($this->connection,$sql);
	 $result     = array();
			
	 while ($row =mysqli_fetch_assoc($resultset)){	
	   $result[] = $row;
	 }
	 if(!$result ) {
	   return NULL;
	 }
	 else {
	   return $result;
	 }
   }
   function update($sql){
      $resultset = mysqli_query($this->connection,$sql);
		if(mysqli_affected_rows($this->connection) > 0){
		  return $resultset;
		}
   }
   function delete($sql){
      $resultset = mysqli_query($this->connection,$sql);
	  if(mysqli_affected_rows($this->connection)){
		return $resultset;
	  }
   }
   
    function get_fields($result){
     $resultset = mysqli_num_fields($this->connection,$result);
	 return $resultset;
   }
	
}
?>