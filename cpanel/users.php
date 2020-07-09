<?php session_start(); 
// include 'php/UserController.php';
include('layout/navbar.php');
?>


            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                    <?php if (isset($_SESSION['messageDelete'])) { ?>

                            
                                <div class="alert alert-success" role="alert"><?php echo $_SESSION['messageDelete'];unset($_SESSION['messageDelete']); ?> </div>

                    <?php } ?>
                        <h3>Users 
                            <a href="user/addUser.php" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-user-shield"></i> Add User </a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                
                                foreach ($_SESSION['users']  as $user ) {
                                  
                               
                                ?>
                                    <tr>
                                        <td><? echo  $user['id']?></td>
                                        <td><? echo $user['name']?></td>
                                        <td><? echo $user['email']?></td>
                                        <td><? echo $user['password']?></td>
                                        <td><? echo $user['state']?></td>
                                        <td class="text-right">
                                            <a href="php/controller/UserController.php?editUser=&id='<? echo $user['id']?>'" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="php/controller/UserController.php?deleteUser=&id='<? echo $user['id']?>'"  class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

<?php include('layout/footer.php'); ?>