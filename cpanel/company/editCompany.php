
 <?php 
  session_start();

 include('../layout/navbar.php'); ?>

 <div class="card">
    <div class="card-header">Edit User</div>
    <div class="card-body">
        <!-- <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5> -->
                <form accept-charset="utf-8" action="../php/controller/CompanyController.php"   method="post">
                <input type="hidden" name="id" value="<?php echo $_SESSION['company'][0]['id'] ?>">
                <div class="form-group">
                    <label for="email">Name</label>
                    <input type="text" value="<?php echo $_SESSION['company'][0]['name'] ?>" name="name" placeholder="Company Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" value="<?php echo $_SESSION['company'][0]['email'] ?>" name="email" placeholder="Email Address" class="form-control" required>
                </div>
                <div class="form-group">       
                    <label for="password">Password</label>
                    <input type="password" value="<?php echo $_SESSION['company'][0]['password'] ?>"  name="password" placeholder="Password" class="form-control" required>
                </div>
            
                <div class="form-group">       
                    <label for="phone_number">Phone Number</label>
                    <input type="number" value="<?php echo $_SESSION['company'][0]['phone_number'] ?>" name="phone_number" placeholder="Phone Number" class="form-control" required>
                </div>
            
                <div class="form-group">       
                    <label for="regCode">Registration Number</label>
                    <input type="number" value="<?php echo $_SESSION['company'][0]['regCode'] ?>" name="regCode" placeholder="Registration Number" class="form-control" required>
                </div>
                
                <div class="form-group col-md-4">
                    <label for="state">Location</label>
                    <select name="loction" class="form-control" required>
                        <option value="" selected>Choose...</option>
                        <option value="1" <?php echo $_SESSION['company'][0]['loction']==1?"selected":"" ?>>libya</option>
                    <option value="2" <?php echo $_SESSION['company'][0]['loction']==2?"selected":"" ?>>egbest</option>
                    </select>
                    <div class="valid-feedback">Looks good!</div>
                    <div class="invalid-feedback">Please select a State.</div>
                </div>
            
                <div class="form-group">       
                    <input type="submit" name="updateCompany" class="btn btn-primary">
                </div>
            </form>
    </div>
</div>
<?php


    if (isset($_SESSION['message'])) {
     
        ?>

       <div> </div>
        <div class="alert alert-success" role="alert"><?php echo $_SESSION['message']; ?> </div>

       <?php
       unset($_SESSION['message']);
    } ?>

 <?php include('../layout/footer.php'); ?>



