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
                        <h3>Companies 
                            <a href="company/addCompany.php" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-user-shield"></i> Add Company </a>
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
                                        <th>Phone Number</th>
                                        <th>Registration Number</th>
                                        <th>Loction</th>
                                       
                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php 
                                
                                foreach ($_SESSION['Companies']  as $company ) {
                                  
                               
                                ?>
                                    <tr>
                                        <td><? echo $company['id']?></td>
                                        <td><? echo $company['name']?></td>
                                        <td><? echo $company['email']?></td>
                                        <td><? echo $company['password']?></td>
                                        <td><? echo $company['phone_number']?></td>
                                        <td><? echo $company['regCode']?></td>
                                        <td><? echo $company['loction']?></td>
                                        
                                        <td class="text-right">
                                            <a href="php/controller/CompanyController.php?editCompany=&id='<? echo $company['id']?>'" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="php/controller/CompanyController.php?deleteCompany=&id='<? echo $company['id']?>'"  class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            </div>
    </div>

    <script src="assets/vendor/jquery3/jquery-3.4.1.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/solid.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
    <script src="assets/vendor/DataTables/datatables.min.js"></script>
    <script src="assets/js/initiate-datatables.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>