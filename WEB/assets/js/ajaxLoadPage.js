$(document).ready(function() {
    $.ajaxSetup({async:true});
});


/****************************
 * Go to Device Management *
 ***************************/

// Go list of Device
function goToListDevices() {
    $.ajax({
        async: true,
        url: "../mgmtDevice/viewListEquipo.php",
        success: function(result) {
            $("section").html(result);
        }
    });
}

// Go Info of Device
function goToInfoDevice(id_device) {
    $.ajax({
        async: true,
        url: "../mgmtDevice/viewInfoEquipo.php?id=" + id_device,
        success: function(result) {
            $("section").html(result);
        }
    });
}

// Go Edit of Device
function goToEditDevice(id_device) {
    $.ajax({
        async: true,
        url: "../mgmtDevice/viewEditEquipo.php?id=" + id_device,
        success: function(result) {
            $("section").html(result);
        }
    });
}

// Go add new Device
function goToAddDevice() {
    $.ajax({
        async: true,
        url: "../mgmtDevice/viewAddEquipo.php",
        success: function(result) {
            $("section").html(result);
        }
    });
}

// Go to Edit ticket
function goToEditTicket(id_ticket) {
    $.ajax({
        async: true,
        url: "../mgmtTicket/viewEditTicket.php?id=" + id_ticket,
        success: function(result) {
            $("section").html(result);
        }
    });
}

/*******************************
 * End Go to Device Management *
 *******************************/


/****************************
 * Go to Ticket Management *
 ***************************/

// Go list of Tickets
function goTolistTickets() {
    $.ajax({
        async: true,
        url: "../mgmtTicket/viewListTicket.php",
        success: function(result) {
            $("section").html(result);
        }
    });
}

// Go add new Ticket
function goToAddTicket() {
    $.ajax({
        async: true,
        url: "../mgmtTicket/viewAddTicket.php",
        success: function(result) {
            $("section").html(result);
        }
    });
}

/*******************************
 * End Go to Ticket Management *
 *******************************/


/*************************
 * Go to User Management *
 ************************/

// Go to List of Users
function goToListUsers(lastVisited = "", name = "", idUser = "") {
    $.ajax({
        async: true,
        url: "../mgmtUser/viewListUsers.php?lastVisited=" + lastVisited + "?name=" + name + "?idUser=" + idUser,
        success: function(result) {
            $("section").html(result);
        }
    });
}

// Go to Add User
// function goToAddUser() {
//     $.ajax({
//         url: "../mgmtUser/viewAddUser.php",
//         success: function(result) {
//             $("section").html(result);
//         }
//     });
// }

function goToAddUser() {
    $.ajax({
        async: true,   // this will solve the problem
        type: "POST",
        url: "../mgmtUser/viewAddUser.php",
        data: "data",
        dataType: "html",
        success: function (result) {
            $("section").html(result);
        }
    });
}



// Go to Edit User
function goToEditUser(id_usuario) {
    $.ajax({
        async: true,
        url: "../mgmtUser/viewEditUser.php?id=" + id_usuario,
        success: function(result) {
            $("section").html(result);
        }
    });
}

// Go to Info User
// function goToInfoUser(id_usuario) {
//     $.ajax({
//         url: "../mgmtUser/viewProfileUser.php?id=" + id_usuario,
//         success: function(result) {
//             $("section").html(result);
//         }
//     });
// }
function goToInfoUser(id_usuario) {
    $.ajax({
        //contentType: "application/json",
        //data: JSON.stringify({ ParameterName: paramValue }),
        async: true,   // this will solve the problem
        type: "POST",
        url: "../mgmtUser/viewProfileUser.php?id=" + id_usuario,
        data: "data",
        dataType: "html",
        success: function (result) {
            $("section").html(result);
        }
    });
}
/*****************************
 * End Go to User Management *
 *****************************/
