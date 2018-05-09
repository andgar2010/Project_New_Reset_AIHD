<?php
$url_host = '..';
$js_path        =$url_host .'/assets/js/';
$framework_path =$url_host .'/assets/Framework/';
//  JAVASCRIPT NODE_MODULES
$jquery_js                  =$url_host .'/node_modules/jquery/dist/jquery.min.js';
$bootstrap_js               =$url_host .'/node_modules/bootstrap/dist/js/bootstrap.min.js';
$propeller_bootstrap_js     =$url_host .'/node_modules/propellerkit/dist/js/bootstrap.min.js';
$propeller_js               =$url_host .'/node_modules/propellerkit/dist/js/propeller.min.js';
$bootstrap_datepicker_js    =$url_host .'/node_modules/propellerkit-datetimepicker/js/bootstrap-datetimepicker.js';
$Toastr_js                  =$url_host .'/node_modules/toastr/build/toastr.min.js';
$moment_js                  =$url_host .'/node_modules/moment/min/moment-with-locales.js';

echo '
<!-- Scripts Starts -->
<!-- Javascript for Bootstrap Propeller -->
<!-- build:[src] assets/js/ -->
<script src="' . $framework_path . 'propeller-themes/js/jquery-1.12.2.min.js"></script>
<script src="' . $propeller_bootstrap_js . '"></script>
<!-- /build -->

<!-- Javascript for Propeller -->
<!-- build:[src] assets/js/ -->
<script src="' . $propeller_js . '"></script>
<!-- /build -->

<!-- Javascript for Datepicker -->
<!-- build:[src] components/datetimepicker/js/ -->
<script type="text/javascript" language="javascript" src="' . $moment_js . '"></script>
<script type="text/javascript" language="javascript" src="' . $bootstrap_datepicker_js . '"></script>
<!-- /build -->
<!-- Scripts Ends -->';
