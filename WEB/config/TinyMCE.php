<?php

$url_host = '..';
$js_path        =$url_host .'/assets/js/';
$framework_path =$url_host .'/assets/Framework/';

$tinyMCE_jquery_js        =$url_host .'/node_modules/tinymce/jquery.tinymce.min.js';
$tinyMCE_js               =$url_host .'/node_modules/tinymce/tinymce.min.js';

echo '
<!-- TinyMCE Script  -->
<script src="' . $tinyMCE_jquery_js . '"></script>
<script src="' . $tinyMCE_js . '"></script>';

echo "
<!-- TinyMCE Configure -->
<script>
tinymce.init({
    selector: 'textarea',
    height: 100,
    theme: 'modern',
    plugins: [ 'advlist autolink lists link image charmap print preview hr anchor pagebreak'],
    language_url: '" . $framework_path . "TinyMCE/langs/es_MX.js'
});
</script>";
