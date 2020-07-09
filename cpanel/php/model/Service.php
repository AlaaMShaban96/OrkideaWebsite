<?php


class Service {
  
    
  private $id;
  private $name;
 

 
  // public $conn2 = $conn;

  static function All($conn) {
    
    return (new self)->getServices($conn);
    
  } 
  static function Delete($id,$conn) {
    
    return (new self)->deleteServices($id,$conn);
    
  } 
  static function Find($id,$conn)
  {
    
    return (new self)->getService($id,$conn);
    
  } 

  function update($request,$conn) 
  {
    $this->id=$request["id"];
    $this->name=$request["name"];
   

    return $this->updateService($conn);
    
  } 
  function create($request,$conn)
  {
   
   
    $this->name=$request["name"];
    $this->email=$request["email"];
  
    
     return $this->insert($conn);
  }



  private function insert($conn)
  {
      if ($conn->connect_error) {

      
        return "Connection failed: ";
      } 
      
      $sql = "INSERT INTO services (name , email , password,phone_number,regCode,loction)
      VALUES (
       '".$this->name."',
        '".$this->email."', 
        '".$this->password."', 
        '".$this->phone_number."', 
        '".$this->regCode."', 
        '".$this->loction."')";


      if ($conn->query($sql) === TRUE) {

      
        return "New Service ".$this->name." created successfully ";

      } else {
      
        return "Error: " . $sql . "<br>" . $conn->error;
      }
    
  }

  private  function updateService($conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "UPDATE services SET  name=' $this->name',
                                  email=' $this->email',
                                  password=' $this->password',
                                  phone_number= $this->phone_number,
                                  regCode= $this->regCode,
                                  loction= $this->loction
                                   WHERE id= $this->id";

    if ($conn->query($sql) === TRUE) {
      return "Record updated successfully";
    } else {
      return "Error updating record: " . $conn->error;
    }
  } 
  private static function getServices($conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "SELECT * from  services where 1 ";

     return $result = $conn->query($sql);
  }

  private static function deleteServices($id,$conn)
  {
    $sql = "DELETE FROM services WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
      return "Record deleted successfully";
    } else {
      return "Error deleting record: " . $conn->error;
    }
  }

  private static function getService($id,$conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "SELECT * from  services where id=$id ";

     return $result = $conn->query($sql);
  } 
  
  
}
