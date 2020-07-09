<?php session_start(); 
// include 'php/UserController.php';
include('layout/navbar.php');
?>
    <!-- css properties for summernote -->
    <style>
    .note-editor.note-frame {border-radius: 3px;border: 1px solid #ededed;box-shadow: none;}
    .note-popover.popover {display: none !important;max-width: none !important;}
    </style>

            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>UI Content Editor</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="box box-primary">
                                <div class="box-body">
                                    <div id="summernote">
                                        <h5>Summernote is a JavaScript library that helps you create WYSIWYG editors online.</h5>
                                        <p>Summernote has a few special features:</p>
                                        <ul>
                                            <li>Paste images from clipboard</li>
                                            <li>Saves images directly in the content of the field using base64 encoding, so you don't need to implement image handling at all</li>
                                            <li>Simple UI</li>
                                            <li>Interactive WYSIWYG editing</li>
                                            <li>Handy integration with server</li>
                                            <li>Supports Bootstrap 3 and 4 integrities</li>
                                            <li>Lots of plugins and connectors provided together</li>
                                        </ul>
                                        <p class="text-muted">For more detail about API, please visit this <a href="summernote.org" class="text-primary font-italic">page</a>.</p>
                                        <br>
                                        <p class="text-muted">
                                            <strong>Warning!</strong><br>
                                            The code view allows the user to enter script contents. Make sure to sanitize the HTML on the server.
                                        </p>
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
    <script src="assets/vendor/summernote/summernote-bs4.min.js"></script>
    <script src="assets/js/initiate-summernote.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>