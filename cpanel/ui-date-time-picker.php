<?php session_start(); 
// include 'php/UserController.php';
include('layout/navbar.php');
?>
    <style>
        /* inline style for mdtimepicker demo */
        .mdtp__wrapper.inline {display: block !important;position: relative;box-shadow: none;border: 1px solid #E0E0E0;max-width: 300px;margin: 0 !important;padding: 0 !important;transform: inherit;left: 0;top: 0;}
        .mdtp__wrapper.inline .mdtp__time_holder {width: auto;}
    </style>


            <div class="content">
                <div class="container-fluid">
                    <div class="page-title">
                        <h3>UI DATE & TIME PICKER</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">jQuery Air Datepicker</div>
                                <div class="card-body col-md-6">
                                    <p class="card-title">Air Datepicker is a lightweight cross-browser jQuery datepicker. <a href="//github.com/t1m0n/air-datepicker" class="text-info font-italic">View on Github.</a></p>
                                    <p class="text-muted">Datepicker will automatically initialize on elements with class <code>.datepicker-here</code>, options may be sent via data attributes.</p>
                                    <div class="datepicker-here" data-language="en" date-inline="true"></div><br>
                                    <code>&lt;input type='text' class='datepicker-here' data-language='en' /&gt;</code>
                                    <form>
                                        <br>
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker-here" data-language="en" aria-describedby="datepicker" placeholder="Date picker">
                                            <small id="datepicker" class="form-text text-muted">You can change the month, year, and date</small>
                                        </div>
                                    </form>

                                    <p class="line"></p>
                                    <h5>Month Selection</h5>
                                    <code>
                                        &lt;input type="text" class="datepicker-here" <br> data-language="en" <br> data-min-view="months" <br> data-view="months" <br> data-date-format="MM" /&gt;
                                    </code>
                                    <form>
                                        <br>
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker-here" data-language="en" data-position="top left" data-min-view="months" data-view="months" data-date-format="MM" aria-describedby="month" placeholder="Month picker">
                                            <small id="month" class="form-text text-muted">You can also select Month</small>
                                        </div>
                                    </form>

                                    <p class="line"></p>
                                    <h5>Date Range Selection</h5>
                                    <p class="text-muted">Use <code>data-range="true"</code> attribute for choosing range of dates.</p>
                                    <code>
                                        &lt;input type="text" class="datepicker-here" <br> data-range="true" <br> data-multiple-dates-separator="-" <br> data-language="en" /&gt;
                                    </code>
                                    <form>
                                        <br>
                                        <div class="form-group">
                                            <input type="text" class="form-control datepicker-here" data-range="true" data-multiple-dates-separator="-" data-language="en" data-position="top left" aria-describedby="daterange" placeholder="Date range picker">
                                            <small id="daterange" class="form-text text-muted">You can select start and end date for date range selection</small>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">jQuery MDTimePicker</div>
                                <div class="card-body col-md-6">
                                    <p class="card-title">Material concept time picker, a jQuery plugin. <a href="//github.com/dmuy/MDTimePicker" class="text-info font-italic">View on Github.</a> </p>
                                    <p class="text-muted">Add a class <code>.timepicker</code> on your input element for initialization.</p>
                                    <code>&lt;input type="text" class="timepicker"/&gt;</code>
                                    <p></p>
                                    <div class="mdtp__wrapper inline" data-theme="blue"><section class="mdtp__time_holder"><span class="mdtp__time_h active">12</span><span class="mdtp__timedots">:</span><span class="mdtp__time_m">00</span><span class="mdtp__ampm">AM</span></section><section class="mdtp__clock_holder"><div class="mdtp__clock"><span class="mdtp__am active">AM</span><span class="mdtp__pm">PM</span><span class="mdtp__clock_dot"></span><div class="mdtp__hour_holder"><div class="mdtp__digit rotate-120" data-hour="1"><span>1</span></div><div class="mdtp__digit rotate-150" data-hour="2"><span>2</span></div><div class="mdtp__digit rotate-180" data-hour="3"><span>3</span></div><div class="mdtp__digit rotate-210" data-hour="4"><span>4</span></div><div class="mdtp__digit rotate-240" data-hour="5"><span>5</span></div><div class="mdtp__digit rotate-270" data-hour="6"><span>6</span></div><div class="mdtp__digit rotate-300" data-hour="7"><span>7</span></div><div class="mdtp__digit rotate-330" data-hour="8"><span>8</span></div><div class="mdtp__digit rotate-0" data-hour="9"><span>9</span></div><div class="mdtp__digit rotate-30" data-hour="10"><span>10</span></div><div class="mdtp__digit rotate-60" data-hour="11"><span>11</span></div><div class="mdtp__digit rotate-90 active" data-hour="12"><span>12</span></div></div><div class="mdtp__minute_holder hidden"><div class="mdtp__digit rotate-90 marker active" data-minute="0"><span>00</span></div><div class="mdtp__digit rotate-96" data-minute="1"><span></span></div><div class="mdtp__digit rotate-102" data-minute="2"><span></span></div><div class="mdtp__digit rotate-108" data-minute="3"><span></span></div><div class="mdtp__digit rotate-114" data-minute="4"><span></span></div><div class="mdtp__digit rotate-120 marker" data-minute="5"><span>05</span></div><div class="mdtp__digit rotate-126" data-minute="6"><span></span></div><div class="mdtp__digit rotate-132" data-minute="7"><span></span></div><div class="mdtp__digit rotate-138" data-minute="8"><span></span></div><div class="mdtp__digit rotate-144" data-minute="9"><span></span></div><div class="mdtp__digit rotate-150 marker" data-minute="10"><span>10</span></div><div class="mdtp__digit rotate-156" data-minute="11"><span></span></div><div class="mdtp__digit rotate-162" data-minute="12"><span></span></div><div class="mdtp__digit rotate-168" data-minute="13"><span></span></div><div class="mdtp__digit rotate-174" data-minute="14"><span></span></div><div class="mdtp__digit rotate-180 marker" data-minute="15"><span>15</span></div><div class="mdtp__digit rotate-186" data-minute="16"><span></span></div><div class="mdtp__digit rotate-192" data-minute="17"><span></span></div><div class="mdtp__digit rotate-198" data-minute="18"><span></span></div><div class="mdtp__digit rotate-204" data-minute="19"><span></span></div><div class="mdtp__digit rotate-210 marker" data-minute="20"><span>20</span></div><div class="mdtp__digit rotate-216" data-minute="21"><span></span></div><div class="mdtp__digit rotate-222" data-minute="22"><span></span></div><div class="mdtp__digit rotate-228" data-minute="23"><span></span></div><div class="mdtp__digit rotate-234" data-minute="24"><span></span></div><div class="mdtp__digit rotate-240 marker" data-minute="25"><span>25</span></div><div class="mdtp__digit rotate-246" data-minute="26"><span></span></div><div class="mdtp__digit rotate-252" data-minute="27"><span></span></div><div class="mdtp__digit rotate-258" data-minute="28"><span></span></div><div class="mdtp__digit rotate-264" data-minute="29"><span></span></div><div class="mdtp__digit rotate-270 marker" data-minute="30"><span>30</span></div><div class="mdtp__digit rotate-276" data-minute="31"><span></span></div><div class="mdtp__digit rotate-282" data-minute="32"><span></span></div><div class="mdtp__digit rotate-288" data-minute="33"><span></span></div><div class="mdtp__digit rotate-294" data-minute="34"><span></span></div><div class="mdtp__digit rotate-300 marker" data-minute="35"><span>35</span></div><div class="mdtp__digit rotate-306" data-minute="36"><span></span></div><div class="mdtp__digit rotate-312" data-minute="37"><span></span></div><div class="mdtp__digit rotate-318" data-minute="38"><span></span></div><div class="mdtp__digit rotate-324" data-minute="39"><span></span></div><div class="mdtp__digit rotate-330 marker" data-minute="40"><span>40</span></div><div class="mdtp__digit rotate-336" data-minute="41"><span></span></div><div class="mdtp__digit rotate-342" data-minute="42"><span></span></div><div class="mdtp__digit rotate-348" data-minute="43"><span></span></div><div class="mdtp__digit rotate-354" data-minute="44"><span></span></div><div class="mdtp__digit rotate-0 marker" data-minute="45"><span>45</span></div><div class="mdtp__digit rotate-6" data-minute="46"><span></span></div><div class="mdtp__digit rotate-12" data-minute="47"><span></span></div><div class="mdtp__digit rotate-18" data-minute="48"><span></span></div><div class="mdtp__digit rotate-24" data-minute="49"><span></span></div><div class="mdtp__digit rotate-30 marker" data-minute="50"><span>50</span></div><div class="mdtp__digit rotate-36" data-minute="51"><span></span></div><div class="mdtp__digit rotate-42" data-minute="52"><span></span></div><div class="mdtp__digit rotate-48" data-minute="53"><span></span></div><div class="mdtp__digit rotate-54" data-minute="54"><span></span></div><div class="mdtp__digit rotate-60 marker" data-minute="55"><span>55</span></div><div class="mdtp__digit rotate-66" data-minute="56"><span></span></div><div class="mdtp__digit rotate-72" data-minute="57"><span></span></div><div class="mdtp__digit rotate-78" data-minute="58"><span></span></div><div class="mdtp__digit rotate-84" data-minute="59"><span></span></div></div></div><div class="mdtp__buttons"><span class="mdtp__button cancel">Cancel</span><span class="mdtp__button ok">Ok</span></div></section></div>
                                    
                                    <p class="text-muted"><br>Initialize time picker with javascript.</p>
                                    <code>&lt;script&gt; <br>$('.timepicker').mdtimepicker(); <span class="text-muted">// Initialize time picker</span> <br> &lt;/script&gt;</code>
                                    <form>
                                        <br>
                                        <div class="form-group">
                                            <input type="text" class="form-control timepicker" aria-describedby="time12" placeholder="Time picker">
                                            <small id="time12" class="form-text text-muted">Inputs a 12 hour time format</small>
                                        </div>
                                    </form>

                                    <p class="line"></p>
                                    <h5>Advance Options</h5>
                                    <p class="text-muted">Initialize time picker with advance options.</p>
                                    <code>
                                        $('.timepicker').mdtimepicker({ <br>
                                            timeFormat: 'hh:mm:ss.000', <span class="text-muted">// format of the time value</span> <br>
                                            format: 'h:mm tt',    <span class="text-muted">// format of the input value</span> <br>
                                            theme: 'blue',        <span class="text-muted">// theme of the timepicker</span> <br>
                                            readOnly: true,       <span class="text-muted">// determines if input is readonly</span> <br>
                                            hourPadding: false    <span class="text-muted">// determines if display value has zero padding for hour value less than 10 (i.e. 05:30 PM);</span> <br>
                                        });
                                    </code>
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
    <script src="assets/vendor/airdatepicker/dist/js/datepicker.min.js"></script>
    <script src="assets/vendor/airdatepicker/dist/js/i18n/datepicker.en.js"></script>
    <script src="assets/vendor/mdtimepicker/mdtimepicker.min.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>