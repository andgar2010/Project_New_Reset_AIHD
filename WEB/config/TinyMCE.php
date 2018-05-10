<?php

require './base_script.php';

echo '
<!-- TinyMCE Script  -->
<script src="' . $TinyMCE_js . '"></script>';

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
