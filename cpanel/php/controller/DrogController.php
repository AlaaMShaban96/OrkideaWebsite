  <?php
  session_start();
    // namespace UserController;
    include '../model/Service.php';
    include '../model/Country.php';
    include '../model/Drog.php';
    include '../Connection.php';

    
    if(isset($_GET['showDrogs'])){

      allDrogs($conn);
      header('Location: /Projects/OrkideaWebsite/cpanel/drogs.php'); 
    }  

    if(isset($_GET['editDrog'])){

      getDrog($_GET['id'],$conn);
      header('Location: /Projects/OrkideaWebsite/cpanel/drog/editDrog.php'); 

    }

    if(isset($_POST['updateDrog'])){

      $drog= new Drog();

       $drog->update($_POST,$conn);

      allDrogs($conn);
      header('Location: /Projects/OrkideaWebsite/cpanel/drogs.php');     
    }

    if(isset($_GET['deleteDrog'])){

      $_SESSION['messageDelete'] =  Drog::Delete($_GET['id'],$conn);
      allDrogs($conn);
      header('Location: /Projects/OrkideaWebsite/cpanel/drogs.php'); 

    }
    
    if(isset($_GET['addDrogs'])){

      allServices($conn);
      allCountries($conn);
  
     
      header('Location: /Projects/OrkideaWebsite/cpanel/drog/addDrog.php'); 
      
     
    }
    if(isset($_POST['createDrog'])){

       $drog= new Drog();

       $_SESSION['message'] = $drog->create($_POST,$conn);
        
        header('Location: /Projects/OrkideaWebsite/cpanel/drog/addDrog.php'); 
      
     
    }
   
    function allServices($conn)
    {
      unset($_SESSION['Drogs']);
       $result=Service::All($conn);
     
       $myarray= array();

      if ($result->num_rows >0) {

        while($row = $result->fetch_assoc()) {

          array_push($myarray,
           array(
              "id"=>$row['id'],
              "name"=>$row['name'],
              ));
            }
       
      }else {
        array_push($myarray,
        array(
           "id"=>"",
           "name"=>"",
           ));
      }
      
      $_SESSION['services']=$myarray;
    }
    function allCountries($conn)
    {
      unset($_SESSION['Drogs']);
       $result=Country::All($conn);
     
       $myarray= array();

      if ($result->num_rows >0) {

        while($row = $result->fetch_assoc()) {

          array_push($myarray,
           array(
              "id"=>$row['id'],
              "name"=>$row['name'],
              ));
            }
       
      }else {
        array_push($myarray,
        array(
           "id"=>"",
           "name"=>"",
           ));
      }
      
      $_SESSION['countries']=$myarray;
    }
    function allDrogs($conn)
    {
      unset($_SESSION['drogs']);
       $result=Drog::All($conn);
     
       $myarray= array();

      if ($result->num_rows >0) {

        while($row = $result->fetch_assoc()) {

          array_push($myarray,
           array(
              "id"=>$row['id'],
              "ServiceEnglishName"=>$row['ServiceEnglishName'],
              "PhamacologicalClass"=>$row['PhamacologicalClass'],
              "Manufacturer"=>$row['Manufacturer'],
              "UnitPrice"=>$row['UnitPrice'],
              "BaraCode"=>$row['BaraCode'],
              "serviceName"=>$row['serviceName'],
              "contryName"=>$row['contryName'],
            
                ));
            }
       
      }else {
        array_push($myarray,
        array(
          "id"=>"",
          "ServiceEnglishName"=>"",
          "PhamacologicalClass"=>"",
          "Manufacturer"=>"",
          "UnitPrice"=>"",
          "BaraCode"=>"",
          "serviceName"=>"",
          "contryName"=>"",
         
             ));
      }
      
      $_SESSION['drogs']=$myarray;
    }


    function getDrog($id,$conn)
    {
      unset($_SESSION['drog']);
      $result=Drog::Find($id,$conn);
      $myarray= array();
      while($row = $result->fetch_assoc()) {
        array_push($myarray,
        array(
          "id"=>$row['id'],
          "ServiceEnglishName"=>$row['ServiceEnglishName'],
          "PhamacologicalClass"=>$row['PhamacologicalClass'],
          "Manufacturer"=>$row['Manufacturer'],
          "UnitPrice"=>$row['UnitPrice'],
          "Container"=>$row['Container'],
          "ConcPotency"=>$row['ConcPotency'],
          "BaraCode"=>$row['BaraCode'],
          "ServiceID"=>$row['ServiceID'],
          "CountryID"=>$row['CountryID'],
         
             ));

      }
      allServices($conn);
      allCountries($conn);
      $_SESSION['drog']=$myarray;
    }
   
