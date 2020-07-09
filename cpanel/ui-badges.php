<?php session_start(); 
// include 'php/UserController.php';
include('layout/navbar.php');
?>

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>UI Badges</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Basic Badges</div>
                                <div class="card-body">
                                    <p class="card-title">Use the class <code>.badge .badge-{type}</code> for colors.</p>
                                    <h1>Example heading <span class="badge badge-primary">New</span></h1>
                                    <h2>Example heading <span class="badge badge-secondary">New</span></h2>
                                    <h3>Example heading <span class="badge badge-success">New</span></h3>
                                    <h4>Example heading <span class="badge badge-danger">New</span></h4>
                                    <h5>Example heading <span class="badge badge-warning">New</span></h5>
                                    <h6>Example heading <span class="badge badge-info">New</span></h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Button Badges</div>
                                <div class="card-body">
                                    <p class="card-title">Use the class <code>.badge .badge-light</code> to span elements</p>
                                    <button type="button" class="btn btn-primary mb-2">Notifications <span class="badge badge-light">4</span></button>
                                    <button type="button" class="btn btn-secondary mb-2">Inbox <span class="badge badge-light">4</span></button>
                                    <button type="button" class="btn btn-success mb-2">Message <span class="badge badge-light">4</span></button>
                                    <button type="button" class="btn btn-danger mb-2">Alerts <span class="badge badge-light">4</span></button>
                                    <button type="button" class="btn btn-warning mb-2">Activity <span class="badge badge-light">4</span></button>
                                    <button type="button" class="btn btn-info mb-2">Logs <span class="badge badge-light">4</span></button>
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
    <script src="assets/js/script.js"></script>

</body>

</html>