
 <?php 
  session_start();

 include('../layout/navbar.php'); ?>

 <div class="card">
    <div class="card-header">Basic Form</div>
    <?php


    if (isset($_SESSION['message'])) {
     
        ?>

       <div> </div>
        <div class="alert alert-success" role="alert"><?php echo $_SESSION['message']; ?> </div>

       <?php
       unset($_SESSION['message']);
    } ?>

    <div class="card-body">
        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5>
        <form accept-charset="utf-8" action="../php/controller/DrogController.php"   method="post">
        
            <div class="form-group">
                <label for="email">Phamacological Class</label>
                <input type="text" name="PhamacologicalClass" placeholder="Phamacological Class" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="ServiceEnglishName ">Service English Name </label>
                <input type="text" name="ServiceEnglishName" placeholder="Service English Name" class="form-control" required>
            </div>
            <div class="form-group">       
                <label for="ConcPotency ">Conc Potency </label>
                <input type="text" name="ConcPotency" placeholder="ConcPotency" class="form-control" required>
            </div>
            <div class="form-group">       
                <label for="Container">Container</label>
                <input type="text" name="Container" placeholder="Container" class="form-control" required>
            </div>
            <div class="form-group">       
                <label for="Manufacturer ">Manufacturer </label>
                <input type="text" name="Manufacturer" placeholder="Manufacturer" class="form-control" required>
            </div>
            <div class="form-group col-md-4">
                <label for="state">Country </label>
                <select name="CountryID" class="form-control" required>
                    <option value="" selected>Choose...</option>

                    <?php 
                                
                        foreach ($_SESSION['countries']  as $country ) {
                        ?>
                                <option value="<? echo $country['id']?>"><? echo $country['name']?></option>
                                
                        <?php } ?>
                   
                </select>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please select a State.</div>
            </div>
            <div class="form-group col-md-4">
                <label for="state">Service </label>
                <select name="ServiceID" class="form-control" required>
                    <option value="" selected>Choose...</option>

                    <?php 
                                
                        foreach ($_SESSION['services']  as $service ) {
                        ?>
                                <option value="<? echo $service['id']?>"><? echo $service['name']?></option>
                                
                        <?php } ?>
                   
                </select>
                <div class="valid-feedback">Looks good!</div>
                <div class="invalid-feedback">Please select a State.</div>
            </div>
            <div class="form-group">       
                <label for="UnitPrice">UnitvPrice </label>
                <input type="text" name="UnitPrice" placeholder="Unit Price" class="form-control" required>
            </div>
            <div class="form-group">       
                <label for="BaraCode">BaraCode</label>
                <input type="number" name="BaraCode" placeholder="BaraCode" class="form-control" required>
            </div>
            <div class="form-group">       
                <input type="submit" name="createDrog" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

 <?php include('../layout/footer.php'); ?>



