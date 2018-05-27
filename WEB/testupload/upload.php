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


?>