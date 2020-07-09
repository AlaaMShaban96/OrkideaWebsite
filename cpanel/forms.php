<?php session_start(); 
// include 'php/UserController.php';
include('layout/navbar.php');
?>
      

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>Forms</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Basic Form</div>
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5>
                                    <form accept-charset="utf-8">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                                        </div>
                                        <div class="form-group">       
                                            <label for="password">Password</label>
                                            <input type="password" name="password" placeholder="Password" class="form-control" required>
                                        </div>
                                        <div class="form-group">       
                                            <input type="submit" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Horizontal Form</div>
                                <div class="card-body">
                                    <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5>
                                    <form accept-charset="utf-8">
                                        <div class="form-group row">
                                            <label class="col-sm-2" for="email">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" placeholder="Email Address" class="form-control">
                                                <small class="form-text">Example help text that remains unchanged.</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2" for="password">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" placeholder="Pasword" class="form-control">
                                                <small class="form-text">Example help text that remains unchanged.</small>
                                            </div>
                                        </div>
                                        <div class="form-group row">       
                                            <div class="col-sm-10 offset-sm-2">
                                                <input type="submit" class="btn btn-primary">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">Inline Form</div>
                                <div class="card-body">
                                    <h5 class="card-title">Example inline form</h5>
                                    <form class="form-inline" accept-charset="utf-8">
                                        <div class="form-group">
                                            <label for="name" class="sr-only">Name</label>
                                            <input name="name" type="text" placeholder="Jane Doe" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="sr-only">Password</label>
                                            <input type="text" name="username" placeholder="Username" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">Modal Form</div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Example popup signin form</h5>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Launch form</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Signin Modal</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                                    <form accept-charset="utf-8">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="email" name="email" placeholder="Email Address" class="form-control">
                                                        </div>
                                                        <div class="form-group">       
                                                            <label for="password">Password</label>
                                                            <input type="password" name="password" placeholder="Password" class="form-control">
                                                        </div>
                                                        <div class="form-group">       
                                                            <button type="submit" class="btn btn-primary">Signin</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Form Validation</div>
                                <div class="card-body">
                                    <h5 class="card-title">Example form with inline field validations</h5>
                                    <form class="needs-validation" novalidate accept-charset="utf-8">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                <small class="form-text text-muted">Enter a valid email address.</small>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your email address.</div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                <small class="form-text text-muted">Your password must be 8-20 characters long, contain letters and numbers only.</small>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your password.</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="1234 Main St, Unit, Building, or Floor" required>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please enter your address.</div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" name="city" placeholder="City" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your City.</div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="state">State</label>
                                                <select name="state" class="form-control" required>
                                                    <option value="" selected>Choose...</option>
                                                    <option value="1">New York</option>
                                                    <option value="2">Los Angeles</option>
                                                </select>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please select a State.</div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="zip">Zip code</label>
                                                <input type="text" class="form-control" name="zip" placeholder="00000" required>
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter a Zip code.</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="gridCheck" required>
                                                <label class="form-check-label" for="gridCheck">Check me out</label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">All form elements</div>
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label class="col-sm-2">Normal</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Help text</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control">
                                                <small class="form-text text-muted">A help text that brings hint to users.</small>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Placeholder</label>
                                            <div class="col-sm-10">
                                                <input type="text" placeholder="placeholder" class="form-control">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Disabled</label>
                                            <div class="col-sm-10">
                                                <input type="text" disabled="" placeholder="disabled or read only input here" class="form-control" readonly>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Checkboxes and radios <br>
                                                <small class="text-info">Normal Bootstrap elements</small>
                                            </label>
                                            <div class="col-sm-10">
                                                <div>
                                                    <input name="option" type="checkbox" value="">
                                                    <label for="option">Check this default checkbox</label>
                                                </div>
                                                <div>
                                                    <input type="radio" checked="" value="option1" name="optionsRadios">
                                                    <label for="optionsRadios">Option one is this and that be sure to include why it's great</label>
                                                </div>
                                                <div>
                                                    <input type="radio" value="option2" name="optionsRadios">
                                                    <label for="optionsRadios">Option two can be something else and selecting it will deselect option one</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Inline checkboxes</label>
                                            <div class="col-sm-10">
                                                <label class="checkbox-inline">
                                                    <input id="inlineCheckbox1" type="checkbox" value="option1"> Apple
                                                </label>
                                                <label class="checkbox-inline mx-sm-3 mb-2">
                                                    <input id="inlineCheckbox2" type="checkbox" value="option2"> Orange
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input id="inlineCheckbox3" type="checkbox" value="option3"> Banana
                                                </label>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Checkboxes, Toggle Switch, &amp; Radios <br>
                                                <small class="text-info">Custom elements</small>
                                            </label>
                                            <div class="col-sm-10">
                                                <div class="i-checks">
                                                    <input id="checkboxCustom1" type="checkbox" value="">
                                                    <label for="checkboxCustom1">Checkbox one</label>
                                                </div>
                                                <div class="i-checks">
                                                    <input id="checkboxCustom2" type="checkbox" value="" checked="">
                                                    <label for="checkboxCustom2">Checkbox two checked</label>
                                                </div>
                                                <div class="i-checks">
                                                    <input id="checkboxCustom" type="checkbox" value="" disabled="" checked="">
                                                    <label for="checkboxCustom">Checkbox three checked and disabled</label>
                                                </div>
                                                <div class="i-checks">
                                                    <input id="checkboxCustom3" type="checkbox" value="" disabled="">
                                                    <label for="checkboxCustom3">Checkbox four disabled</label>
                                                </div>
                                                <div class="i-checks">
                                                    <input id="radioCustom1" type="radio" value="option1" name="option">
                                                    <label for="radioCustom1">Option one</label>
                                                </div>
                                                <div class="i-checks">
                                                    <input id="radioCustom2" type="radio" checked="" value="option2" name="option">
                                                    <label for="radioCustom2">Option two checked</label>
                                                </div>
                                                <div class="i-checks">
                                                    <input id="radioCustom3" type="radio" disabled="" checked="" value="option2">
                                                    <label for="radioCustom3">Option three checked and disabled</label>
                                                </div>
                                                <div class="i-checks">
                                                    <input id="radioCustom4" type="radio" disabled="" name="">
                                                    <label for="radioCustom4">Option four disabled</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">A custom checkbox</label>
                                                </div>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="switch2">
                                                    <label class="custom-control-label" for="switch2">Custom checkbox toggle switch</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Select</label>
                                            <div class="col-sm-10 select">
                                                <select name="" class="form-control">
                                                    <option value="">option 1</option>
                                                    <option value="">option 2</option>
                                                    <option value="">option 3</option>
                                                    <option value="">option 4</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-sm-10 offset-sm-2 select">
                                                <br>
                                                <select name="" multiple="" class="form-control">
                                                    <option value="">option 1</option>
                                                    <option value="">option 2</option>
                                                    <option value="">option 3</option>
                                                    <option value="">option 4</option>
                                                </select>
                                                <small class="form-text">Select for than one</small>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Input with success</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control is-valid">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Input with warning</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control is-invalid">
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row has-danger">
                                            <label class="col-sm-2">Input with error</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control is-invalid">
                                                <div class="invalid-feedback">Read error message here.</div>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Control sizing</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <input type="text" placeholder=".form-control-lg" class="form-control form-control-lg">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder=".form-control" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" placeholder=".form-control-sm" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Column sizing</label>
                                            <div class="col-sm-10">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <input type="text" placeholder=".col-md-2" class="form-control">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <input type="text" placeholder=".col-md-3" class="form-control">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" placeholder=".col-md-4" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Input groups</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">@</div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Username">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <input type="text" class="form-control" placeholder="amount">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">$</div>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="0000">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">.00</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <label class="col-sm-2">Button addons</label>
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <button type="button" class="btn btn-primary">Go!</button>
                                                        </span>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control">
                                                        <span class="input-group-append">
                                                            <button type="button" class="btn btn-primary">Go!</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="line"></div><br>
                                        <div class="form-group row">
                                            <div class="col-sm-4 offset-sm-2">
                                                <button type="submit" class="btn btn-secondary mb-2"><i class="fas fa-times"></i> Cancel</button>
                                                <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-save"></i> Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
    <script src="assets/js/form-validator.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>