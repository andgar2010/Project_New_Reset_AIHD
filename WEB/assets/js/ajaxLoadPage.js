$(document).ready(function() {

    /*************************
     * Go to User Management *
     ************************/

    // Go list of Users
    $("#listUsers").click(function() {
        $.ajax({
            url: "../mgmtUser/viewListUsers.php",
            success: function(result) {
                $("#content").html(result);
            }
        });
    });

    // Go add new User
    $("#addUser").click(function() {
        $.ajax({
            url: "../mgmtUser/viewAddUser.php",
            success: function(result) {
                $("#content").html(result);
            }
        });
    });

    // Go Edit User
    $("#editUser").click(function() {
        var id_usuario = $("tr>#id_usuario").html();
        console.log(id_usuario);
        $.ajax({
            url: "../mgmtUser/viewEditUser.php?id=" + id_usuario,
            success: function(result) {
                $("#content").html(result);
            }
        });
    });

    /*****************************
     * End Go to User Management *
     *****************************/


    /****************************
     * Go to Device Management *
     ***************************/

    // Go list of Device
    $("#listEquipo").click(function() {
        $.ajax({
            url: "../mgmtDevice/viewListEquipo.php",
            success: function(result) {
                $("#content").html(result);
            }
        });
    });


    /*******************************
     * End Go to Device Management *
     *******************************/


    /****************************
     * Go to Ticket Management *
     ***************************/

    // Go list of Ticket
    $("#listTicket").click(function() {
        $.ajax({
            url: "../mgmtTicket/viewListTicket.php",
            success: function(result) {
                $("#content").html(result);
            }
        });
    });

    // Go add new Ticket
    $("#newTicket").click(function() {
        $.ajax({
            url: "../mgmtTicket/viewAddTicket.php",
            success: function(result) {
                $("#content").html(result);
            }
        });
    });

    /*******************************
     * End Go to Ticket Management *
     *******************************/
});