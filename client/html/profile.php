<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        <script src="../js/check_login.js" type="text/javascript"></script>
        <script src="../js/log_out.js" type="text/javascript"></script>
        <script src="../js/profile.js" type="text/javascript"></script>
    </head>
    <body>
        
        
        <div id="profile-wrapper">
        <div id="userMessage">
        </div>
            
           
        <button onclick="logOut()" class="profile-logout">Log out</button>
        
         
         <input type="button" id="add" value="Add car"/>
         <button id="editProfile">Edit profile</button>
         
         
         
        <div id="addCar">
            
            <form class="form" action="#" id="addCarForm">
                <h3>Add new car</h3>
                <select id="selectBrand">
                            <option value="0">Select Brand</option>
                        </select><br/>
                <select id="selectModel">
                            <option value="0">Select Model</option>
                        </select><br/>
                <label>Year</label><br>
                <input type="number" id="year"  class="input-text" /><br>
                <label>Price</label><br>
                <input type="number" id="price"  class="input-text" /><br>
                <label>Description</label><br>
                <input type="text" id="description"  class="input-text" /><br>
                <input type="button" id="send" class="button" value="Send"/>
                <input type="button" id="cancel" class="button" value="Cancel"/>
                <br/>
                <div id="message"></div>
            </form>
            
        </div>
        
        
        
       
        <div id="userInfo">
            
            <b>Name</b><br/> 
            <input type="text" name="name" id="name" ><br />
            <b>Surname</b><br/> 
            <input type="text" name="surname" id="surname"><br />
            <b>Email</b><br/> 
            <input type="text" name="email" id="email"><br />
            <b>Username</b><br/> 
            <input type="text" name="username" id="username"><br />
            <b>Password</b><br/> 
            <input type="text" name="password" id="password"><br />
            <input type="button" id="updateProfile" class="button" value="Update"/>
            <input type="button" id="cancelInfo" class="button" value="Cancel"/>
        </div>
         <div id="message"></div>
        </div>
        </div></div>
        
    </body>
</html>