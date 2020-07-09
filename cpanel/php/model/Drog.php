<?php


class Drog {
  
    
  private $id;
  private $PhamacologicalClass;
  private $ServiceEnglishName;
  private $ConcPotency;
  private $Container;
  private $Manufacturer;
  private $CountryID;
  private $ServiceID;
  private $UnitPrice;
  private $BaraCode;
  private $UserEntry;
  private $BenfitID ;
  private $PaidClaim;
  private $INN;
  private $DosageForm;

  
  // public $conn2 = $conn;

  static function All($conn) {
    
    return (new self)->getDrogs($conn);
    
  } 
  static function Delete($id,$conn) {
    
    return (new self)->deleteDrog($id,$conn);
    
  } 
  static function Find($id,$conn)
  {
    
    return (new self)->getDrog($id,$conn);
    
  } 

  function update($request,$conn) 
  {
    $this->id=$request["id"];
    $this->PhamacologicalClass=$request["PhamacologicalClass"];
    $this->ServiceEnglishName=$request["ServiceEnglishName"];
    $this->ConcPotency=$request["ConcPotency"];
    $this->Container=$request["Container"];
    $this->Manufacturer=$request["Manufacturer"];
    $this->CountryID=$request["CountryID"];
    $this->ServiceID=$request["ServiceID"];
    $this->UnitPrice=$request["UnitPrice"];
    $this->BaraCode=$request["BaraCode"];

    return $this->updateDrog($conn);
    
  } 
  function create($request,$conn)
  {
   
   
    $this->PhamacologicalClass=$request["PhamacologicalClass"];
    $this->ServiceEnglishName=$request["ServiceEnglishName"];
    $this->ConcPotency=$request["ConcPotency"];
    $this->Container=$request["Container"];
    $this->Manufacturer=$request["Manufacturer"];
    $this->CountryID=$request["CountryID"];
    $this->ServiceID=$request["ServiceID"];
    $this->UnitPrice=$request["UnitPrice"];
    $this->BaraCode=$request["BaraCode"];
    
     return $this->insert($conn);
  }



  private function insert($conn)
  {
      if ($conn->connect_error) {

      
        return "Connection failed: ";
      } 
      
      $sql = "INSERT INTO drogs (
        PhamacologicalClass, 
        ServiceEnglishName, 
        ConcPotency,
        Container,
        Manufacturer,
        CountryID,
        ServiceID,
        UnitPrice,
        BaraCode)
      VALUES (
       '".$this->PhamacologicalClass."',
        '".$this->ServiceEnglishName."', 
        '".$this->ConcPotency."', 
        '".$this->Container."', 
        '".$this->Manufacturer."', 
        '".$this->CountryID."', 
        '".$this->ServiceID."', 
        '".$this->UnitPrice."', 
        '".$this->BaraCode."')";


      if ($conn->query($sql) === TRUE) {

      
        return "New Drog ".$this->ServiceEnglishName." created successfully ";

      } else {
      
        return "Error on drog model insert function:  " . $sql . "<br>" . $conn->error;
      }
    
  }

  private  function updateDrog($conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "UPDATE drogs SET  

      PhamacologicalClass='$this->PhamacologicalClass',
      ServiceEnglishName='$this->ServiceEnglishName',
      ConcPotency='$this->ConcPotency',
      Container='$this->Container',
      Manufacturer='$this->Manufacturer',
      CountryID=$this->CountryID,
      ServiceID=$this->ServiceID,
      UnitPrice=$this->UnitPrice
            WHERE id= $this->id";

    if ($conn->query($sql) === TRUE) {
      return "Record updated successfully";
    } else {
      return "Error updating record: " . $conn->error;
    }
  } 
  private static function getDrogs($conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "SELECT 
           `drogs`.`id`,
	       	 `drogs`.`ServiceEnglishName`,
	       	 `drogs`.`PhamacologicalClass`,
           `drogs`.`Manufacturer`,
           `drogs`.`UnitPrice`,
           `drogs`.`BaraCode`,
           `services`.`name`as 'serviceName',
           `countries`.`name` as 'contryName' 
   FROM    `drogs`,
           `services`,
           `countries` 
    WHERE  `drogs`.`ServiceID`=`services`.`id` AND `drogs`.`CountryID`=`countries`.`id` ";

     return $result = $conn->query($sql);
  }

  private static function deleteDrog($id,$conn)
  {
    $sql = "DELETE FROM drogs WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
      return "Record deleted successfully";
    } else {
      return "Error deleting record: " . $conn->error;
    }
  }

  private static function getDrog($id,$conn)
  {
    if ($conn->connect_error) {

      
      return "Connection failed: ";
    } 
    
    $sql = "SELECT * from  drogs where id=$id ";

     return $result = $conn->query($sql);
  } 
  
  
}
