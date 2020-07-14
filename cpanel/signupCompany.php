<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up | Start Bootstrap</title>

    <link href="assets/vendor/bootstrap4/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
    <style>          
          #map { 
            height: 276px;    
            width: 371px;            
          }      

          #latmoved , #longmoved{    
          visibility: hidden;
          }  
    </style>     
    
</head>
<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body ">
                    <div class="mb-4">
                        <img class="brand" src="assets/img/bootstraper-logo.png" alt="bootstraper logo">
                    </div>
                    <h6 class="mb-4 text-muted">Create a new account</h6>
                    <?php


                            if (isset($_SESSION['message'])) {
                            
                                ?>

                            <div> </div>
                                <div class="alert alert-success" role="alert"><?php echo $_SESSION['message']; ?> </div>

                            <?php
                            unset($_SESSION['message']);
                            } ?>
                    <form accept-charset="utf-8" action="php/controller/CompanyController.php"   method="post">
                                <h4>Personal</h4>
                            <div class="form-group">
                                <label for="email">Owner's Name</label>
                                <input type="text" name="ownerName" placeholder="Owner Name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                            </div>
                            <div class="form-group">       
                                <label for="password">Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-control" required>
                            </div>
                        
                            <div class="form-group">       
                                <label for="phone_number">Phone Number</label>
                                <input type="number" name="phone_number" placeholder="Phone Number" class="form-control" required>
                            </div>
                            <h4>Institutional</h4>
                            <div class="form-group">
                                <label for="email"> Name</label>
                                <input type="text" name="name" placeholder=" Name" class="form-control" required>
                            </div>
                            <div class="form-group">       
                                <label for="regCode">License Number</label>
                                <input type="number" name="regCode" placeholder="Registration Number" class="form-control" required>
                            </div>
                            
                            <div class="form-group col-md-8">
                                <label for="state">Location</label><br>
                                <input type="hidden" id="latclicked-x" name="x">
                                <input type="hidden" id="longclicked-y" name="y">
                                   <span>x : <h6 id="latclicked"></h6>  </span> 
                                   <span>y : <h6 id="longclicked"></h6>  </span>  
                                    
                                    <div  id="latmoved"></div>
                                    <div id="longmoved"></div>
                                    
                                    <div style="padding:10px">
                                        <div id="map"></div>
                                    </div>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">Please select a State.</div>
                            </div>
                            <div class="form-group">       
                                <label for="img">Uplod Photo</label>
                                <input type="file" name="img" id="">
                           </div>
                        
                            <div class="form-group">       
                                <input type="submit" name="createCompanyWeb" class="btn btn-primary">
                            </div>
                     </form>
                    <p class="mb-0 text-muted">Allready have an account? <a href="login.html">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="assets/vendor/jquery3/jquery-3.4.1.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.min.js"></script>
    <script src="js/signupCompany.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGi6G3lv-GjZftKD_bv8gpC-7jmmlwBY8&callback=initMap"
        async defer></script>

</body>
</html>