$(function () {

 

    $.ajax({
        type: "POST",
        url: "../../server/index.php",
        data: {'action': 'check_login.php'}
    }).done(function (data) {
        if (data.succes == 'yes') {
           $("#userMessage").append('<p>' + data.userMessage + '</p>');
        } else {
            window.location = "index.php";
        }
    });
	
});





