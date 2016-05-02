<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="http://code.jquery.com/jquery-1.5.js"></script>
        <script src="../js/register.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="../css/index.css">
    </head>
    <body>
        <form id="regForm" method="post" action="#">
            <div id="register">
               
                <legend id="reg-legend">REGISTER</legend><br />
                <div id="reg">
                <b class="reg-text">Name</b> 
                <input type="text" name="name" id="name" class="reg-input"><br />
                <b class="reg-text">Surname</b>
                <input type="text" name="surname" id="surname" class="reg-input"><br />
                <b class="reg-text">Email</b>
                <input type="text" name="email" id="email" class="reg-input"><br />
                <b class="reg-text">Username</b>
                <input type="text" name="username" id="username" class="reg-input"><br />
                <b class="reg-text">Password</b>
                <input type="password" name="password" id="password" class="reg-input"><br />
                <input type="submit" id="submit" value="Submit" class="reg-submit" />
                <div id="errorMsg" class="reg-errorMsg"></div>
               </div>
                
            </div>
            
        </form>  
      <div id="errorMsg"></div>
    </body>
</html>
