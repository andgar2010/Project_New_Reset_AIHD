<?php
$url_host = '../..';
$jquery_js  = $url_host . '/node_modules/jquery/dist/jquery.min.js';
$Toastr_js  = $url_host . '/node_modules/toastr/build/toastr.min.js';
$toastr_css = $url_host . '/node_modules/toastr/build/toastr.min.css';

echo '
<!-- Toastr JS -->
<!-- build:[href] components/toastr/js/ -->
<script src="' . $Toastr_js . '"></script>
<!-- /build -->

<!-- Toastr CSS -->
<!-- build:[href] components/toastr/css/ -->
<link rel="stylesheet" href="' . $toastr_css . '">
<!-- /build -->';
