<?php session_start(); 
// include 'php/UserController.php';
include('layout/navbar.php');
?>
    <!-- responsive calendar -->
    <style>
    @media (max-width: 480px) {.fc-toolbar{display: block;}}
    </style>

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>UI Calendar</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Calendar Month View</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div id="calendar-container">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Calendar List View</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div id="calendar-list-container">
                                        <div id="calendar-list"></div>
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

    <!-- full calendar -->
    <script src="assets/vendor/fullcalendar/packages/core/main.min.js"></script>
    <script src="assets/vendor/fullcalendar/packages/daygrid/main.min.js"></script>
    <script src="assets/vendor/fullcalendar/packages/timegrid/main.min.js"></script>
    <script src="assets/vendor/fullcalendar/packages/list/main.min.js"></script>
    <script src="assets/js/fullcalendar-script.js"></script>
</body>

</html>