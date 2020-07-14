  <?php
  session_start();
    // namespace UserController;
    include '../model/Company.php';
    include '../Connection.php';

    
    if(isset($_GET['showCompany'])){

      allCompanies($conn);
      header('Location: /Projects/OrkideaWebsite/cpanel/companies.php'); 
   }  

    if(isset($_GET['editCompany'])){

      getCompany($_GET['id'],$conn);
      header('Location: /Projects/OrkideaWebsite/cpanel/company/editCompany.php'); 

    }

    if(isset($_POST['updateCompany'])){

      $company= new Company();

      $company->update($_POST,$conn);
      allCompanies($conn);
      header('Location: /Projects/OrkideaWebsite/cpanel/companies.php');      
    }

    if(isset($_GET['deleteCompany'])){

      $_SESSION['messageDelete'] =  Company::Delete($_GET['id'],$conn);
      allCompanies($conn);
      header('Location: /Projects/OrkideaWebsite/cpanel/companies.php'); 

    }
    
    if(isset($_POST['createCompany'])){

       $company= new Company();

       $_SESSION['message'] = $company->create($_POST,$conn);
        
       
        header('Location: /Projects/OrkideaWebsite/cpanel/company/addCompany.php'); 

     
    }
    if(isset($_POST['createCompanyWeb'])){

       $company= new Company();

      //  print_r($_POST);
       $_SESSION['message'] = $company->create($_POST,$conn);
        
       header('Location: /Projects/OrkideaWebsite/cpanel/signupCompany.php'); 
      
     
    }
   
    function allCompanies($conn)
    {
      unset($_SESSION['Companies']);
       $result=Company::All($conn);
     
       $myarray= array();

      if ($result->num_rows >0) {

        while($row = $result->fetch_assoc()) {

          array_push($myarray,
           array(
              "id"=>$row['id'],
              "name"=>$row['name'],
              "email"=>$row['email'],
              "password"=>$row['password'],
              "phone_number"=>$row['phone_number'],
              "regCode"=>$row['regCode'],
              "loction"=>$row['loction'],
            
                ));
            }
       
      }else {
        array_push($myarray,
        array(
           "id"=>"",
           "name"=>"",
           "email"=>"",
           "password"=>"",
           "phone_number"=>"",
           "regCode"=>"",
           "loction"=>"",
         
             ));
      }
      
      $_SESSION['Companies']=$myarray;
    }
    function getCompany($id,$conn)
    {
      $result=Company::Find($id,$conn);
      $myarray= array();
      while($row = $result->fetch_assoc()) {
        array_push($myarray,
        array(
           "id"=>$row['id'],
           "name"=>$row['name'],
           "email"=>$row['email'],
           "password"=>$row['password'],
           "phone_number"=>$row['phone_number'],
           "regCode"=>$row['regCode'],
           "loction"=>$row['loction'],
         
             ));

      }
      $_SESSION['company']=$myarray;
    }
   
