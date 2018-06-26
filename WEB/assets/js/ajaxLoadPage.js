$(document).ready(function () {

});

/****************************
 * Go to Device Management *
 ***************************/

// Go list of Device
function goToListDevices() {
    $.ajax({
        url: "../../views/mgmtDevice/viewListEquipo.php",
        success: function (result) {
            $("section").html(result);
        }
    });
}

// Go add new Device
function goToAddDevice() {
    $.ajax({
        url: "../../views/mgmtDevice/viewAddEquipo.php",
        success: function (result) {
            $("section").html(result);
        }
    });
}

// Go to Edit ticket 
function goToEditTicket(id_ticket) {
    $.ajax({
        url: "../mgmtTicket/viewEditTicket.php?id=" + id_ticket,
        success: function (result) {
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
        url: "../mgmtTicket/viewListTicket.php",
        success: function (result) {
            $("section").html(result);
        }
    });
}

// Go add new Ticket
function goToAddTicket() {
    $.ajax({
        url: "../mgmtTicket/viewAddTicket.php",
        success: function (result) {
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
        url: "../mgmtUser/viewListUsers.php?lastVisited=" + lastVisited + "?name=" + name + "?idUser=" + idUser,
        success: function (result) {
            $("section").html(result);
        }
    });
}

// Go to Add User
function goToAddUser() {
    $.ajax({
        url: "../mgmtUser/viewAddUser.php",
        success: function (result) {
            $("section").html(result);
        }
    });
}

// Go to Edit User
function goToEditUser(id_usuario) {
    $.ajax({
        url: "../mgmtUser/viewEditUser.php?id=" + id_usuario,
        success: function (result) {
            $("section").html(result);
        }
    });
}

// Go to Info User
function goToInfoUser(id_usuario) {
    $.ajax({
        url: "../mgmtUser/viewProfileUser.php?id=" + id_usuario,
        success: function (result) {
            $("section").html(result);
        }
    });
}
/*****************************
 * End Go to User Management *
 *****************************/