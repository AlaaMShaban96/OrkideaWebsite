<?php


class Company {
  
    
  private $id;
  private $ownerName;
  private $name;
  private $email;
  private $password;
  private $phone_number;
  private $regCode;
  private $x;
  private $y;
  private $img_path;

 
  // public $conn2 = $conn;

  static function All($conn) {
    
    return (new self)->getCompanies($conn);
    
  } 
  static function Delete($id,$conn) {
    
    return (new self)->deleteCompanies($id,$conn);
    
  } 
  static function Find($id,$conn)
  {
    
    return (new self)->getCompany($id,$conn);
    
  } 
  static function Login($email,$password,$conn)
  {
    
    return (new self)->loginCompany($email,$password,$conn);
    
  } 

  function update($request,$conn) 
  {
    $this->id=$request["id"];
    $this->ownerName=$request["ownerName"];
    $this->name=$request["name"];
    $this->email=$request["email"];
    $this->password=$request["password"];
    $this->phone_number=$request["phone_number"];
    $this->regCode=$request["regCode"];
    $this->x=$request["x"];
    $this->y=$request["y"];

    return $this->updateCompany($conn);
    
  } 
  function create($request, $conn)
  {
   
   
    $this->ownerName=$request["ownerName"];
    $this->name=$request["name"];
    $this->email=$request["email"];
    $this->password=$request["password"];
    $this->phone_number=$request["phone_number"];
    $this->regCode=$request["regCode"];
    $this->x=$request["x"];
    $this->y=$request["y"];
    
     return $this->insert($conn);
  }



  private function insert($conn)
  {
      if ($conn->connect_error) {

      
        return "Connection failed: ";
      } 
      
      $sql = "INSERT INTO companies (name ,ownerName, email , password,phone_number,regCode,x,y)
      VALUES (
       '".$this->name."',
       '".$this->ownerName."',
        '".$this->email."', 
        '".$this->password."', 
        '".$this->phone_number."', 
        '".$this->regCode."', 
        '".$this->x."', 
        '".$this->y."')";


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
    
    $sql = "UPDATE companies SET  name=' $this->name',
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
  private static function getCompanies($conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "SELECT * from  companies where 1 ";

     return $result = $conn->query($sql);
  }

  private static function deleteCompanies($id,$conn)
  {
    $sql = "DELETE FROM companies WHERE id=$id";
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
    
    $sql = "SELECT * from  companies where id=$id ";

     return $result = $conn->query($sql);
  } 
  private static function loginCompany($email,$password,$conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "SELECT * from  companies where email='$email' and password='$password'";

     return  $conn->query($sql);
  } 
  
  
}
