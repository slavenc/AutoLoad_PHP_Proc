$(document).ready(function () {
   
    $("#addCar").css("display", "none");

    $("#userInfo").css("display", "none");
    
    $("#addCarForm #cancel").click(function () {
        $(this).parent().parent().delay(800).fadeOut(600);
    });

    
    //ADD CAR


    $("#addCarForm #send").click(function () {
        var idBrand = $("#selectBrand option:selected").val();
        var idModel = $("#selectModel option:selected").val();
        var year = $("#year").val();
        var price = $("#price").val();
        var description = $ ("#description").val();
        
        $.post("../../server/index.php", {idBrand: idBrand, idModel: idModel, year: year, price: price, description:description, action: 'add_car.php'}, function (data) {
            if (data.succes == 'yes') {
                $('#message').html(data.message);
                
            } else {
                $('#message').html(data.error);
            }
        }
        );
        
    });

    // SHOW ADD CAR

    $("#add").click(function () {
        $("#addCar").css("display", "block");
    });

    

    //SHOW USER PROFILE 

    $("#editProfile").click(function () {
        $("#userInfo").css("display", "block");
        
        //UPDATE PROFILE (GET VARIALBELS)
        
        $.get("../../server/index.php", {method: "get_user_info", action: 'user_info.php'}, function (data) {
            $("#name").val(data.name);
            $("#surname").val(data.surname);
            $("#username").val(data.username);
            $("#email").val(data.email);
            $("#password").val(data.password);
        });
    });



    //UPDATE PROFILE (POST VARIABLES)


    $("#updateProfile").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();
        var name = $("#name").val();
        var surname = $("#surname").val();
        var email = $("#email").val();
        $.post("../../server/index.php", {
            name: name, username: username, password: password, surname: surname, email: email, method: "update_user_info", action: 'user_info.php'}, function (data) {
        
        });
    });

    $("#cancelInfo").click(function () {
        $("#userInfo").css("display", "none");
    });
    
    //LOAD BRANDS
    
    
     $.post("../../server/index.php", {action: 'load_brands.php'}, function (data) {
        data.forEach(function (brand) {
            $("#selectBrand").append('<option value=\x22' + brand.idBrand + '\x22>' + brand.brandName + '</option>');
        });
    });
    
    
    //LOAD MODELS
    
    $("#selectBrand").click(function () {
        var idBrand = $("#selectBrand option:selected").val();

        $.get("../../server/index.php", {idBrand: idBrand, action: 'load_models.php'}, function (data) {
            $("#selectModel").empty();
            data.forEach(function (carModel) {
                $("#selectModel").append('<option value=\x22' + carModel.idModel + '\x22>' + carModel.modelName + '</option>');
            });
        });
    });
    
    
    
    
    
    
});


