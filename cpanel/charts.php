<?php session_start(); 
// include 'php/UserController.php';
include('layout/navbar.php');
?>
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>Charts</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">Line Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="linechart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">Bar Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="barchart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">Pie Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="piechart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">Donut Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="doughnutchart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">Stacked Bar Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="stackedbarchart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">Radar Chart</div>
                                <div class="card-body">
                                    <p class="card-title"></p>
                                    <div class="canvas-wrapper">
                                        <canvas class="chart" id="radarchart"></canvas>
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
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/charts.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>