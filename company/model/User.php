<?php


class User {
  
  
  private $id;
  private $name;
  private $email;
  private $password;
  private $state;
  private $company_id;
  // public $conn2 = $conn;

  static function All($conn) {
    
    return (new self)->getUsers($conn);
    
  } 
  
  static function Delete($id,$conn) {
    
    return (new self)->deleteUsers($id,$conn);
    
  } 
  static function Find($id,$conn) {
    
    return (new self)->getUser($id,$conn);
    
  } 
   function update($request,$conn) {

    $this->id=$request['id'];
    $this->name=$request['name'];
    $this->email=$request['email'];
    $this->password=$request['password'];
    $this->state=$request['state'];
    $this->company_id=$request['company_id'];
    return $this->updateUser($conn);
    
  } 
  function create($request,$conn)
  {
    $this->name=$request['name'];
    $this->email=$request['email'];
    $this->password=$request['password'];
    $this->state=$request['state'];
    $this->company_id=$request['company_id'];
    
     return $this->insert($conn);
  }



  private function insert($conn)
  {
      if ($conn->connect_error) {

      
        return "Connection failed: ";
      } 
      
      $sql = "INSERT INTO users (name , email , password,state,company_id)
      VALUES ('".$this->name."', '".$this->email."', '".$this->password."', '".$this->state."','".$this->company_id."')";

      if ($conn->query($sql) === TRUE) {

      
        return "New user ".$this->name." created successfully ";

      } else {
      
        return "Error: " . $sql . "<br>" . $conn->error;
      }
    
  }

  private  function updateUser($conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "UPDATE users SET name=' $this->name' , email=' $this->email' , password=' $this->password', state=' $this->state', company_id=' $this->company_id' WHERE id=$this->id";

    if ($conn->query($sql) === TRUE) {
      return "Record updated successfully";
    } else {
      return "Error updating record: " . $conn->error;
    }
  } 
  private static function getUsers($conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "SELECT * from  users where 1 ";

     return $result = $conn->query($sql);
  }
  
  private static function deleteUsers($id,$conn)
  {
    $sql = "DELETE FROM users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
      return "Record deleted successfully";
    } else {
      return "Error deleting record: " . $conn->error;
    }
  }

  private static function getUser($id,$conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "SELECT * from  users where id=$id ";

     return $result = $conn->query($sql);
  } 
  
  
}
