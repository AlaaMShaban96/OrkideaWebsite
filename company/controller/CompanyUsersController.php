<?php
  session_start();
    // namespace UserController;
    include '../model/Company.php';
    include '../model/User.php';
    include '../Connection.php';

  if(isset($_GET['showUser'])){

   
      getUsersForCompany($_SESSION['id'],$conn);

      header('Location: /Projects/OrkideaWebsite/company/user/index.php'); 
  }  

  if(isset($_POST['createUser'])){

    $user= new User();

    $_SESSION['message'] = $user->create($_POST,$conn);
  
    header('Location: /Projects/OrkideaWebsite/company/user/addUser.php'); 
   
  
  }
  if(isset($_GET['deleteUser'])){

    $_SESSION['messageDelete'] =  User::Delete($_GET['id'],$conn);

    getUsersForCompany($_SESSION['id'],$conn);

    header('Location: /Projects/OrkideaWebsite/company/user/index.php'); 

  }
  if(isset($_GET['editUser'])){

        getUser($_GET['id'],$conn);
        header('Location: /Projects/OrkideaWebsite/company/user/editUser.php'); 

  }
  if(isset($_POST['updateUser'])){

    $user= new User();

     $user->update($_POST,$conn);

      getUsersForCompany($_SESSION['id'],$conn);
      
      header('Location: /Projects/OrkideaWebsite/company/user/index.php'); 
   
  
 }
   function getUsersForCompany($company_id,$conn)
   {
     unset($_SESSION['companyUsers']);
     $result=Company::Users($company_id,$conn);
     $myarray= array();
     while($row = $result->fetch_assoc()) {
             array_push($myarray,
              array("id"=>$row['id'], 
                 "name"=>$row['name'],
                 "email"=>$row['email'],
                 "password"=>$row['password'],
                 "state"=>$row['state'],
                   ));

     }
     $_SESSION['companyUsers']=$myarray;
   }
   function getUser($id,$conn)
   {
     $result=User::Find($id,$conn);
     $myarray= array();
     while($row = $result->fetch_assoc()) {
             array_push($myarray,
              array("id"=>$row['id'], 
                 "name"=>$row['name'],
                 "email"=>$row['email'],
                 "password"=>$row['password'],
                 "state"=>$row['state'],
                   ));

     }
     $_SESSION['user']=$myarray;
   }
  