<?php
/**
 * ======================================================================
 * CATEGORY LARGE FONT
 * ======================================================================
 * Clase Config
 *
 * Configuración contiene completa informacion
 * php       7.2
 *
 * @category Class
 * @package  Poo
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  Release:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 */



/**
 * Clase Config
 *
 * Configuración contiene parametros para sistema, link CSS y JS
 *
 * @category Class
 * @package  Poo
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  Release:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 */
Class Config
{
    protected $url_host = 'http://'.$_SERVER ['HTTP_HOST'].'/project_new_reset_aihd/web';
    protected $variableHost               = $url_host;
    protected $image_path                 = $variableHost."/assets/images/";
    protected $js_path                    = $variableHost.'/assets/js/';
    protected $css_path                   = $variableHost.'/assets/css/';
    protected $fonts_path                 = $variableHost.'/assets/fonts/';
    protected $framework_path             = $variableHost.'/assets/Framework/';


    //  CSS NODE_MODULES
    public $bootstrap_css              = $variableHost.'/node_modules/bootstrap/dist/css/bootstrap.min.css';
    public $propeller_bootstrap_css    = $variableHost.'/node_modules/propellerkit/dist/js/bootstrap.min.js';
    public $propeller_css              = $variableHost.'/node_modules/propellerkit/dist/css/propeller.min.css';
    public $bootstrap_datepicker_css   = $variableHost.'/node_modules/propellerkit-datetimepicker/css/bootstrap-datetimepicker.css';
    public $propeller_datepicker_css   = $variableHost.'/node_modules/propellerkit-datetimepicker/css/pmd-datetimepicker.css';
    public $toastr_css                 = $variableHost.'/node_modules/toastr/build/toastr.min.css';
    public $font_awesome_css           = $variableHost.'/node_modules/font-awesome/css/font-awesome.min.css';
    public $material_design_fonts_css  = 'https://fonts.googleapis.com/icon?family=Material+Icons';

    //  JAVASCRIPT NODE_MODULES
    public $jquery_js                  = $variableHost.'/node_modules/jquery/dist/jquery.min.js';
    public $bootstrap_js               = $variableHost.'/node_modules/bootstrap/dist/js/bootstrap.min.js';
    public $propeller_bootstrap_js     = $variableHost.'/node_modules/propellerkit/dist/js/bootstrap.min.js';
    public $propeller_js               = $variableHost.'/node_modules/propellerkit/dist/js/propeller.min.js';
    public $bootstrap_datepicker_js    = $variableHost.'/node_modules/propellerkit-datetimepicker/js/bootstrap-datetimepicker.js';
    public $Toastr_js                  = $variableHost.'/node_modules/toastr/build/toastr.min.js';
    public $moment_js                  = $variableHost.'/node_modules/moment/min/moment-with-locales.js';
    public $TinyMCE_js                 = $variableHost.'/node_modules/tinymce/tinymce.min.js';


    /**
     * Config Object
     *
     * Parametro host es direccion localhost
     * @param String $host
     *
     * @return Config return object
     */
    function __construct($host = 'localhost:8080')
    {
        $this->variableHost = $host;
        echo 'Creada objeto config';
    }

    /**
     * Funcion Link CSS
     *
     * @return Void return print links CSS
     */
    function linkCSS()
    {
        echo '
        <link rel="shortcut icon" type="image/x-icon" href="'.$image_path.'favicon.ico">
        <br>
        <!-- Google icon -->
        <link href="'.$material_design_fonts_css.'" rel="stylesheet">
        <br>
        <!-- Bootstrap css -->
        <!-- build:[href] assets/css/ -->
        <link rel="stylesheet" type="text/css" href="'.$bootstrap_css.'">
        <!-- /build -->
        <br>
        <!-- Propeller css -->
        <!-- build:[href] assets/css/ -->
        <link rel="stylesheet" type="text/css" href="'.$propeller_css.'">
        <!-- /build -->
        <br>
        <!-- Font Awesome  -->
        <link rel="stylesheet" type="text/css" href="'.$font_awesome_css.'">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- /build -->
        <br>
        <!-- Propeller date time picker css-->
        <!-- build:[href] components/datetimepicker/css/ -->
        <link rel="stylesheet" type="text/css" href="'.$bootstrap_datepicker_css.'"/>
        <link rel="stylesheet" type="text/css" href="'.$propeller_datepicker_css.'" />
        <!-- /build -->
        <br>
        <!-- Propeller theme css-->
        <link rel="stylesheet" type="text/css" href="'.$framework_path.'propeller-themes/css/propeller-theme.css" />
        <br>
        <!-- Propeller admin theme css-->
        <link rel="stylesheet" type="text/css" href="'.$framework_path.'propeller-themes/css/propeller-admin.css" />
        <br>
        <!-- Custom Style -->
        <link rel="stylesheet" type="text/css" href="'.$css_path.'css/buttonRotate.css" />';
    }

    /**
     * Funcion Link Toastr
     *
     * @return Void return print links Toastr
     */
    function linkToastr()
    {
        echo '
        <!-- Toastr -->
        <!-- build:[href] components/toastr/css/ -->
        <link rel="stylesheet" href="'.$toastr_css.'">
        <!-- build:[href] components/toastr/js/ -->
        <script src="'.$Toastr_js.'"></script>
        <!-- /build -->';
    }

    /**
     * Link JS
     *
     * Print links JS
     *
     * @return Void return print links JS
     */
    function linkJS()
    {
        echo '
            <!-- Scripts Starts -->
            <!-- build:[src] assets/js/ -->
            <script src="'.$framework_path.'propeller-themes/js/jquery-1.12.2.min.js"></script>
            <script src="'.$propeller_bootstrap_js.'"></script>
            <!-- /build -->
            <br>
            <!-- build:[src] assets/js/ -->
            <script src="'.$propeller_js.'"></script>
            <!-- /build -->
            <br>
            <!-- Javascript for Datepicker -->
            <!-- build:[src] components/datetimepicker/js/ -->
            <script type="text/javascript" language="javascript" src="'.$moment_js.'"></script>
            <script type="text/javascript" language="javascript" src="'.$bootstrap_datepicker_js.'"></script>
            <!-- /build -->
            <!-- Scripts Ends -->';
    }

    /**
     * Link TinyMCE
     *
     * Print links TinyMCE
     *
     * @return Void return print links TinyMCE
     */
    function linkJsTinyMCE()
    {
        echo '
        <!-- TinyMCE Script  -->
        <script src="'.$TinyMCE_js.'"></script>';

        echo "
        <!-- TinyMCE Configure -->
        <script>
            tinymce.init({
                selector: 'textarea',
                height: 100,
                theme: 'modern',
                plugins: [ 'advlist autolink lists link image charmap print preview hr anchor pagebreak'],
                language_url: '".$framework_path."TinyMCE/langs/es_MX.js'
            });
        </script>";

    }

    /**
     * Link Google Analytics
     *
     * Print links Google Analytics
     *
     * @return Void return print links Google Analytics
     */
    function linkGoogleAnalytics()
    {
        echo "
        <!--Google Analytics code-->
        <script>
            (
                function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                }
            )
            (window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-124615-22', 'auto');
            ga('send', 'pageview');
        </script>";
    }

    /**
     * Head
     *
     * Print Head
     *
     * @param String $title nombre titulo de pagina web
     *
     * @return Void return print Head
     */
    function head($title = 'Nombre de titulo en pagina')
    {
        echo '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>'.$title.'</title>';
    }

}
?>