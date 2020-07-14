  <?php
  session_start();
   
    include '../model/Company.php';
    include '../model/User.php';
    include '../Connection.php';

    

  if(isset($_POST['login'])){



    switch ($_POST['type']) {
      case 'user':
      
        echo "user";
        break;
      
      case 'company':
        
      if (loginCompany($_POST['email'],$_POST['password'],$conn)) {
        
          header('Location: /Projects/OrkideaWebsite/company/index.php');

        } else {

          header('Location: /Projects/OrkideaWebsite/cpanel/login.php');
        }

        break;
    
    }
}

if (isset($_GET['logout'])) {
  
    logout();
    header('Location: /Projects/OrkideaWebsite/index.php'); 
}

  function loginCompany($email,$password,$conn)
  {
    unset($_SESSION['id'],
          $_SESSION['name'],
          $_SESSION['ownerName'],
          $_SESSION['email'],
          $_SESSION['password'],
          $_SESSION['phone_number'],
          $_SESSION['regCode'],
          $_SESSION['x'],
          $_SESSION['y']);
   
   

    $result=Company::Login($email,$password,$conn);
   
    // print_r( $result);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['ownerName']=$row['ownerName'];
        $_SESSION['email']=$row['email'];
        $_SESSION['password']=$row['password'];
        $_SESSION['phone_number']=$row['phone_number'];
        $_SESSION['regCode']=$row['regCode'];
        $_SESSION['x']=$row['x'];
        $_SESSION['y']=$row['y'];
        return true;
    }else {
      $_SESSION['error']="Email or Password is Not Correct";
      return false;
    }
  
   
  }

  function logout()
  {
    unset($_SESSION['id'],
    $_SESSION['name'],
    $_SESSION['ownerName'],
    $_SESSION['email'],
    $_SESSION['password'],
    $_SESSION['phone_number'],
    $_SESSION['regCode'],
    $_SESSION['x'],
    $_SESSION['y']);
  }
   
   
   
