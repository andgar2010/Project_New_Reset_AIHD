<?php


if (0 < $_FILES['file']['error']) {
    echo 'Error: '. $_FILES['file']['error']. '<br>';
} else {
    move_uploaded_file(
        // This is where the file is temporarily stored on the serverwhen uploaded
        // do not change this
        $_FILES['file']['tmp_name'],
        
        // This is where you wnat to put the file and what to name it
        // in this case we are putting a directory called "uploads"
        // and giving it the original filename
        'uploads/'.$_FILES['file']['name']);

}








echo count($_FILES['file0']['name']);
//exit;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileToUpload']['type'])) {
    $TARGET_DIR = 'upload/';
    $carpeta = $TARGET_DIR;

    if (!file_exists($carpeta)) {
        mkdir($carpeta, 0777, true);
    }

    $target_file = $carpeta . basename($_FILES['fileToUpload']['name']);
    $uploadOK = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    if (isset($_POST['submit'])) {
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
        if ($check !== false) {
            $errors[] = 'El archivo es una imagen - ' . $check['mime'] . '.';
            $uploadOK = 1;
        } else {
            $errors[] = 'El archivo no es una imagen.';
            $uploadOK = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $errors[] = 'Lo sentimos, archivo ya existe';
        $uploadOK = 0;
    }

    // Check file size
    if ($_FILES['fileToUpload']['size'] > 524288) {
        $errors[] = 'Lo sentimos, el archivo es demasido grande. Tamaño máximo admitido: 0.5 MB';
        $uploadOK = 0;
    }

    // Allow certain file formats
    if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {
        $errors[] = 'Lo sientimos, s[olo archivos JPG, JPEG, PNG & GIF son permitidos';
        $uploadOK = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOK == 0) {
        $errors[] = 'Lo sentimos, tu archivo no fue subido';
    } else { // If everything is ok, try to upload file
        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
            $messages[] = 'El archivo ha sido sido subido correctamente';
        } else {
            $errors[] = 'Lo sentimos, hubo un error subiendo el archivo';
        }
    }

    if (isset($errors)) {
        ?>

        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Error!</strong>
            <?php foreach ($errors as $error) {
                echo "<p>$error</p>";
            }?>
        </div>
    <?php
    }

    if (isset($messages)) {
        ?>

        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Aviso!</strong>
            <?php foreach ($messages as $message) {
                echo "<p>$message</p>";
            }?>
        </div>
        <?php
    }
}
?>