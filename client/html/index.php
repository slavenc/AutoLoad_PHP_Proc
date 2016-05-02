<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <script src="http://code.jquery.com/jquery-1.5.js"></script>
        <script src="../js/index.js" type="text/javascript"></script>
    </head>
    <body>
	
	<div id="header">
	
		</div>
		<div id="login-form">
        <b>Username</b>
        <input type="text" name="username" id="username" class="input-text"><br />
        <b>Password</b>
        <input type="text" name="password" id="password" class="input-text"><br />
        <input type="button" id="login" class="button" value="Login" /><br/>
        <a href="register.php">
            <button class="button">Register</button>
        </a>
	 </div>	

        <!--  ** SEARCH DIV **  -->
	
	
        <div id="searchDiv" class="searchDiv">
            <table id="searchTable">
                <tr>
                    <td>
                        <select id="selectBrand">
                            <option value="0">Select Brand</option>
                        </select>
                    </td>
                    <td>
                        <select id="selectModel">
                            <option value="0">Select Model</option>
                        </select>
                    </td>
                    <td>
                        <input type="button" id="search" class="button" value="Search" />
                    </td> 
                </tr>
            </table>
 <!--  ** SEARCH RESULT **  -->
        <div id="searchResult"></div>
        </div>

     
        
        <!--  ** CAR INFO **  -->
        <div id="carData"></div>
	
		
		
		<div id="footer"></footer>
		
		
    </body>
</html>
