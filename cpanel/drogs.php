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
                        <h3>Drogs 
                            <a href="php/controller/DrogController.php?addDrogs=" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-user-shield"></i> Add Drog </a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Service English Name</th>
                                        <th>Phamacological Class</th>
                                        <th>Manufacturer</th>
                                        <th>Country</th>
                                        <th>Service</th>
                                        <th>UnitPrice</th>
                                        <th>BaraCode</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                foreach ($_SESSION['drogs']  as $drog ) {
                                  
                                ?>
                                    <tr>
                                        <td><? echo  $drog['id']?></td>
                                        <td><? echo $drog['ServiceEnglishName']?></td>
                                        <td><? echo $drog['PhamacologicalClass']?></td>
                                        <td><? echo $drog['Manufacturer']?></td>
                                        <td><? echo $drog['contryName']?></td>
                                        <td><? echo $drog['serviceName']?></td>
                                        <td><? echo $drog['UnitPrice']?></td>
                                        <td><? echo $drog['BaraCode']?></td>
                                     
                                        <td class="text-right">
                                            <a href="php/controller/DrogController.php?editDrog=&id='<? echo $drog['id']?>'" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="php/controller/DrogController.php?deleteDrog=&id='<? echo $drog['id']?>'"  class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
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