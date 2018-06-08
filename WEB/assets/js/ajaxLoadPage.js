$(document).ready(function() {

    /*************************
     * Go to User Management *
     ************************/

    // Go list of Users
    $("#listUsers").click(function() {

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

    /*****************************
     * End Go to User Management *
     *****************************/


    /****************************
     * Go to Device Management *
     ***************************/

    // Go list of Device
    $("#listDevices").click(function() {
        $.ajax({
            url: "../../views/mgmtDevice/viewListEquipo.php",
            success: function(result) {
                $("#content").html(result);
            }
        });
    });

    // Go add new Equipo
    $("#addEquipo").click(function () {
        $.ajax({
            url: "../../views/mgmtDevice/viewAddEquipo.php",
            success: function (result) {
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
            url: "../mgmtTicket/listTicket.php",
            success: function(result) {
                $("#content").html(result);
            }
        });
    });

    // Go add new Ticket
    $("#newTicket").click(function() {
        $.ajax({
            url: "../mgmtTicket/addTicket.php",
            success: function(result) {
                $("#content").html(result);
            }
        });
    });

    /*******************************
     * End Go to Ticket Management *
     *******************************/
});

// Go Edit User
function goToEditUser(id_usuario) {
    $.ajax({
        url: "../mgmtUser/viewEditUser.php?id=" + id_usuario,
        success: function(result) {
            $("#content").html(result);
        }
    });
}

function goToListUsers() {
    $.ajax({
        url: "../mgmtUser/viewListUsers.php",
        success: function(result) {
            $("#content").html(result);
        }
    });
}