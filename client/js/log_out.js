function logOut() {
    $.ajax({
        type: "POST",
        url: "../../server/index.php",
        data: {'action': 'log_out.php'}
    }).done(function (data) {
        if (data.succes == 'yes') {
        
       window.location = "index.php";
        } else {
            window.location = "profile.php";
        }
    });
}


