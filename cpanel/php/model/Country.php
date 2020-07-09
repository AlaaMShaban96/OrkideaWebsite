<?php


class Country {
  
    
  private $id;
  private $name;
  
 
  

  static function All($conn) {
    
    return (new self)->getCountries($conn);
    
  } 
  static function Delete($id,$conn) {
    
    return (new self)->deleteCountries($id,$conn);
    
  } 
  static function Find($id,$conn)
  {
    
    return (new self)->getCompany($id,$conn);
    
  } 

  function update($request,$conn) 
  {
    $this->id=$request["id"];
    $this->name=$request["name"];
    $this->email=$request["email"];
    $this->password=$request["password"];
    $this->phone_number=$request["phone_number"];
    $this->regCode=$request["regCode"];
    $this->loction=$request["loction"];

    return $this->updateCompany($conn);
    
  } 
  function create($request,$conn)
  {
   
   
    $this->name=$request["name"];
    $this->email=$request["email"];
    $this->password=$request["password"];
    $this->phone_number=$request["phone_number"];
    $this->regCode=$request["regCode"];
    $this->loction=$request["loction"];
    
     return $this->insert($conn);
  }



  private function insert($conn)
  {
      if ($conn->connect_error) {

      
        return "Connection failed: ";
      } 
      
      $sql = "INSERT INTO countries (name , email , password,phone_number,regCode,loction)
      VALUES (
       '".$this->name."',
        '".$this->email."', 
        '".$this->password."', 
        '".$this->phone_number."', 
        '".$this->regCode."', 
        '".$this->loction."')";


      if ($conn->query($sql) === TRUE) {

      
        return "New Company ".$this->name." created successfully ";

      } else {
      
        return "Error: " . $sql . "<br>" . $conn->error;
      }
    
  }

  private  function updateCompany($conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "UPDATE countries SET  name=' $this->name',
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
  private static function getCountries($conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "SELECT * from  countries where 1 ";

     return $result = $conn->query($sql);
  }

  private static function deleteCountries($id,$conn)
  {
    $sql = "DELETE FROM countries WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
      return "Record deleted successfully";
    } else {
      return "Error deleting record: " . $conn->error;
    }
  }

  private static function getCompany($id,$conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "SELECT * from  countries where id=$id ";

     return $result = $conn->query($sql);
  } 
  
  
}
