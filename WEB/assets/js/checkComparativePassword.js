function checkPass() {

        //Store the Confimation Message Object ...
        var correcta = false;

        //Set the colors we will be using ...
        var goodColor   = "rgba(37, 155, 36, 0.92)";
        var badColor    = "rgba(201, 48, 44, 0.85)";
        var styBkColor  = "background-color: "
        var styTxtColor = "; color: #fff; padding:10px;"

        var pass1 = $("#new_password").val();
        var pass2 = $("#confirm_password").val();

        //Compare the values in the password field
        //and the confirmation field
        if (pass1 == pass2) {
            //The passwords match.
            //Set the color to the good color and inform
            //the user that they have entered the correct password
            styBkColor += goodColor + styTxtColor;
            $("#new_password").attr("style", styBkColor);
            $("#confirmMessage")
                .attr("style", styBkColor)
                .text("Contraseña correcta!");
            correcta = true;
        } else {
            //The passwords do not match.
            //Set the color to the bad color and
            //notify the user.
            styBkColor += badColor + styTxtColor;
            $("#new_password").attr("style", styBkColor);
            $("#confirmMessage")
                .attr("style", styBkColor)
                .text("Contraseña incorrecta, debe ser igual a la anterior contraseña!");
        }

        return correcta;
}




