  <?php
  session_start();
    // namespace UserController;
    include '../model/User.php';
    include '../Connection.php';

    
       
    if(isset($_GET['editUser'])){

      getUser($_GET['id'],$conn);
      header('Location: /Projects/OrkideaWebsite/cpanel/user/editUser.php'); 

    }
    if(isset($_GET['deleteUser'])){

      $_SESSION['messageDelete'] =  User::Delete($_GET['id'],$conn);
      allUser($conn);
      header('Location: /Projects/OrkideaWebsite/cpanel/users.php'); 

    }
    if(isset($_GET['showUser'])){
       allUser($conn);
       header('Location: /Projects/OrkideaWebsite/cpanel/users.php'); 
    }
    if(isset($_POST['createUser'])){

       $user= new User();

       $_SESSION['message'] = $user->create($_POST,$conn);
        
        header('Location: /Projects/OrkideaWebsite/cpanel/user/addUser.php'); 
      
     
    }
    if(isset($_POST['updateUser'])){

       $user= new User();

        $user->update($_POST,$conn);
        allUser($conn);
        header('Location: /Projects/OrkideaWebsite/cpanel/users.php'); 
      
     
    }

    function allUser($conn)
    {
      unset($_SESSION['users']);
      $result=User::All($conn);
     
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
      $_SESSION['users']=$myarray;
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
   
