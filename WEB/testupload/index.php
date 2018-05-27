<!doctype html>
<html lang="es">
    <head>
        <title>Subir usando PHP - Jquery - Bootstrap</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="text-center">
            <h1>Subir archivos usando PHP - jQuery - Bootstrap</h1>
            <form action="">
                <div class="form-group">
                <label for="exampleInputFile">Subir archivo</label>
                    <center><input type="file" name="inputFileUpdload" id="fileToUpload" onChange="upload_file();"></center>
                    <p class="help-block">Seleccion un archivo</p>
                </div>
                <div class="upload-msg"></div> <!-- Para mostrar la respuesta del archivo llamado via a ajax -->
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    function upload_image() {
        $(".upload-msg").text("Cargando...");
        var inputFileImage = document.getElementById("fileToUpload").files[0]; //$("#fileToUpload");
        var file = inputFileImage.files[0];
        var data = new FormData();
        data.append('fileToUpload', file);
        /*
            JQuery.each($('#fileToUpload)[0].files,
                function(i,file){
                    data.append('file'+i, file)
                })
        */
        $.ajax({
            url:           "upload.php",   // Url to which the request is send
            method:        "POST",         // Type of request to send, called as method
            data:          data,           // Data send to server, a set of key/value pairs (i,e. form fields and values)
            contentType:   false,          // The content used when sending data to the server
            cache:         false,          // To unable request pages to be cahed
            processData:   false,          // To send DOMDocument or processed data file it is set to false
            success:       function(data) {
                $(".upload-msg").html(data);
                window.setTimeout(function(){
                    $(".alert-dismissible")
                        .fadeTo(500,0)
                        .slideUp(500, function () {
                            $(this).remove();
                        });
                }, 5000);
            }
        });
    }
    </script>

    <script>
    function upload_file() {
        $(".upload-msg").text("Cargando...");
        var file_data = $("#inputFileUpdload").prop("files")[0];
        print file_data;
        var from_data = new FormData();
        form_data.append("file", file_data);
        //alert(form_data);

        $.ajax({
            url: 'upload.php',  // Point to server-side PHP Script
            datatype: 'text',   // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data : form_data,
            type: 'post',
            success: function(php_script_response) {
                alert(php_script_response);  // display responde from the PHP script, if any
            }
        });
    }



    </script>
    </body>
</html>