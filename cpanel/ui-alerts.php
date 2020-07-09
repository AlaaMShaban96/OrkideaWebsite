<?php session_start(); 
// include 'php/UserController.php';
include('layout/navbar.php');
?>

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>UI Alerts</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Basic Alerts</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="alert alert-primary" role="alert">A simple primary alert—check it out!</div>
                                    <div class="alert alert-secondary" role="alert">A simple secondary alert—check it out!</div>
                                    <div class="alert alert-success" role="alert">A simple success alert—check it out!</div>
                                    <div class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>
                                    <div class="alert alert-warning" role="alert">A simple warning alert—check it out!</div>
                                    <div class="alert alert-info" role="alert">A simple info alert—check it out!</div>
                                    <div class="alert alert-light" role="alert">A simple light alert—check it out!</div>
                                    <div class="alert alert-dark" role="alert">A simple dark alert—check it out!</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">Alerts with Title</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="alert alert-primary">
                                        <h5 class="alert-title">Primary</h5>
                                        This is a primary alert.
                                    </div>
                                    <div class="alert alert-secondary">
                                        <h5 class="alert-title">Secondary</h5>
                                        This is a secondary alert.
                                    </div>
                                    <div class="alert alert-success">
                                        <h5 class="alert-title">Success</h5>
                                        This is a success alert.
                                    </div>
                                    <div class="alert alert-danger">
                                        <h5 class="alert-title">Danger</h5>
                                        This is a danger alert.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">Alerts with Icon and Title</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="alert alert-primary">
                                        <h5 class="alert-title"><i class="fas fa-info"></i> Primary</h5>
                                        This is a primary alert.
                                    </div>
                                    <div class="alert alert-secondary">
                                        <h5 class="alert-title"><i class="fas fa-question-circle"></i> Secondary</h5>
                                        This is a secondary alert.
                                    </div>
                                    <div class="alert alert-success">
                                        <h5 class="alert-title"><i class="fas fa-check"></i> Success</h5>
                                        This is a success alert.
                                    </div>
                                    <div class="alert alert-danger">
                                        <h5 class="alert-title"><i class="fas fa-exclamation-triangle"></i> Danger</h5>
                                        This is a danger alert.
                                    </div>
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