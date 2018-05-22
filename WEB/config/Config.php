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
class Config
{
    public $url_host;
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
        $this->url_host = $host;
        echo 'Creada objeto config';
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
        <title>' . $title . '</title>';
    }
}



// $url_host = 'http://' . $_SERVER['HTTP_HOST'] . '/project_new_reset_aihd/web';
// $image_path         = $url_host ."/assets/images/";
// $js_path            = $url_host .'/assets/js/';
// $css_path           = $url_host .'/assets/css/';
// $fonts_path         = $url_host .'/assets/fonts/';
// $framework_path     = $url_host .'/assets/Framework/';

?>


