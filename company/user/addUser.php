<?php  session_start();
    if (!isset($_SESSION['id'])) {
        header('Location: /Projects/OrkideaWebsite/index.php'); 
    }

include('../layout/control/navbar.php'); ?>


 <div class="card">
    <div class="card-header">Basic Form</div>
    <div class="card-body">
        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5>
        <form accept-charset="utf-8" action="../controller/CompanyUsersController.php"   method="post">
        <input type="hidden" name="company_id" value="<?php echo $_SESSION['id'] ?>">
            <div class="form-group">
                <label for="email">Name</label>
                <input type="text" name="name" placeholder="User Name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email Address" class="form-control" required>
            </div>
            <div class="form-group">       
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
                <label for="state">State</label>
                <select name="state" class="form-control" required>
                    <option value="" selected>Choose...</option>
                    <option value="1">Admin</option>
                    <option value="2">Staff</option>
                </select>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please select a State.</div>
            </div>
            <div class="form-group">       
                <input type="submit" name="createUser" class="btn btn-primary">
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
<?php include('../layout/control/footer.php'); ?>



