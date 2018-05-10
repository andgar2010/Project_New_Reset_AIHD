<?php
require './../config/Config.php';
// (@include('../config/Config.php'))
// OR die('Could not find Config.php!');
// (@include('../config/Database.php'))
// OR die("Could not find Database.php!");


$host = $_SERVER;

foreach ($host as $key => $value) {
    if ($value != null) {
        echo '
        <table border="1">
            <tr>
                <td>'.$key.'</td>
                <td> ==> </td>
                <td>'.$value.'</td>
            </tr>
        </table>';
    }
}

$host = 'http://'.$_SERVER ['HTTP_HOST'].'/project_new_reset_aihd/web';
$config = new Config($host);
// $config->head('Prueba PHP POO');
// $config->linkCSS();
// $config->linkToastr();

// echo'<h1>Prueba POO PHP</h1>';

// $config->linkJS();


$image_path = "{$host}/assets/images/avatar-AGarcia.jpg";
echo ' <img src="'.$image_path.'" alt="image">';
?>