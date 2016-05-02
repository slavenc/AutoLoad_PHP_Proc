<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        <script src="../js/admin_check_login.js" type="text/javascript"></script>
        <script src="../js/log_out.js" type="text/javascript"></script>
        <script src="../js/profile.js" type="text/javascript"></script>
        <script src="../js/admin_action.js" type="text/javascript"></script>
        <script src="../js/common/common.js" type="text/javascript"></script>
    </head>
	
    <body>
        
        <div id="admin-wrapper">
        
        
        <p id="admin-p">Admin Profile<p>
        
        
            
        <div id="userMessage">
        </div>
        
        <button onclick="logOut()" class="admin-logout">Log out</button>
        
        <div id="message"></div>
      
        
        
       
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
                
                <input type="button" id="admin-addCar" class="button" value="Add Car"/>
                
                <div id="Msg"></div>
                <div id="errorMsg"></div><br/>
    
       
        <div id="admin-option">
        
        <hr>
        <b>Add new Brand</b><input type="text" id="newBrand" class="new-brand" /> 
        <input type="button" id="addBrand" class="button" value="Add Brand"/><br>
        
        <b>Add new Model</b><select id="selectBrand">
               <option value="0">Select Brand</option>
         </select>
       
       <input type="text" id="newModel"  /> 
        <input type="button" id="addModel" class="button" value="Add Model"/><br>
        
        <hr>
        
        <input type="button" id="getUsers"class="button" value="Get Users"/>
        
        <div id="users">
            <table id="usersTable">

        </table>
        </div>
        
       </div>
        
        </div>
        
    </body>
</html>