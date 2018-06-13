$(document).ready(function() {
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
    $("#addEquipo").click(function() {
        $.ajax({
            url: "../../views/mgmtDevice/viewAddEquipo.php",
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



/*************************
 * Go to User Management *
 ************************/

// Go to List of Users
function goToListUsers() {
    $.ajax({
        url: "../mgmtUser/viewListUsers.php",
        success: function (result) {
            $("#content").html(result);
        }
    });
}

// Go to Add User
function goToAddUser() {
    $.ajax({
        url: "../mgmtUser/viewAddUser.php",
        success: function (result) {
            $("#content").html(result);
        }
    });
}

// Go to Edit User
function goToEditUser(id_usuario) {
    $.ajax({
        url: "../mgmtUser/viewEditUser.php?id=" + id_usuario,
        success: function (result) {
            $("#content").html(result);
        }
    });
}

// Go to Info User
function goToInfoUser(id_usuario) {
    $.ajax({
        url: "../mgmtUser/viewProfileUser.php?id=" + id_usuario,
        success: function (result) {
            $("#content").html(result);
        }
    });
}
/*****************************
 * End Go to User Management *
 *****************************/