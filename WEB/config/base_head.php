<?php
$url_host       = '..';
$image_path     = $url_host."/assets/images/";
$js_path        = $url_host.'/assets/js/';
$css_path       = $url_host.'/assets/css/';
$fonts_path     = $url_host.'/assets/fonts/';
$framework_path = $url_host.'/assets/Framework/';


//  CSS NODE_MODULES
$bootstrap_css              = $url_host.'/node_modules/bootstrap/dist/css/bootstrap.min.css';
$propeller_bootstrap_css    = $url_host.'/node_modules/propellerkit/dist/js/bootstrap.min.js';
$propeller_css              = $url_host.'/node_modules/propellerkit/dist/css/propeller.min.css';
$bootstrap_datepicker_css   = $url_host.'/node_modules/propellerkit-datetimepicker/css/bootstrap-datetimepicker.css';
$propeller_datepicker_css   = $url_host.'/node_modules/propellerkit-datetimepicker/css/pmd-datetimepicker.css';
$font_awesome_css           = $url_host.'/node_modules/font-awesome/css/font-awesome.min.css';
$material_design_fonts_css  = $url_host.'/node_modules/material-design-icons/iconfont/material-icons.css';


echo '
<link rel="shortcut icon" type="image/x-icon" href="' . $image_path . 'favicon.ico">

<!-- Google icon -->
<link rel="stylesheet" type="text/css" href="' . $material_design_fonts_css . '">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- Bootstrap css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="' . $bootstrap_css . '">
<!-- /build -->

<!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="' . $propeller_css . '">
<!-- /build -->

<!-- Font Awesome  -->
<link rel="stylesheet" type="text/css" href="' . $font_awesome_css . '">
<!--
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
-->
<!-- /build -->

<!-- Propeller date time picker css-->
<!-- build:[href] components/datetimepicker/css/ -->
<link rel="stylesheet" type="text/css" href="' . $bootstrap_datepicker_css . '"/>
<link rel="stylesheet" type="text/css" href="' . $propeller_datepicker_css . '" />
<!-- /build -->

<!-- Propeller theme css-->
<!--
<link rel="stylesheet" type="text/css" href="' . $framework_path . 'propeller-themes/css/propeller-theme.css" />
-->
<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="' . $framework_path . 'propeller-themes/css/propeller-admin.css" />
<!-- Custom Style -->
<link rel="stylesheet" type="text/css" href="' . $css_path . 'buttonRotate.css" />';

