<?php

$url_host = '..';
$js_path        =$url_host .'/assets/js/';
$framework_path =$url_host .'/assets/Framework/';

$moment_js                  =$url_host .'/node_modules/moment/min/moment-with-locales.js';
$bootstrap_datepicker_js    =$url_host .'/node_modules/propellerkit-datetimepicker/js/bootstrap-datetimepicker.js';


echo '
<!-- Javascript for Datepicker -->
<!-- build:[src] components/datetimepicker/js/ -->
<script type="text/javascript" language="javascript" src="' . $moment_js . '"></script>
<script type="text/javascript" language="javascript" src="' . $bootstrap_datepicker_js . '"></script>
<!-- /build -->
<!-- Scripts Ends -->';

?>