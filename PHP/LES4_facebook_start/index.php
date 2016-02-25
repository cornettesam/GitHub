<?php
/*
    //check is cookie exists
    //if not, redirect to login php
    if(isset( $_COOKIE['loggedin'] ) ) {
		$cookie = $_COOKIE['loggedin'];
		//joris@mail.com,sfoisjfoijsodfjqsjfdsjq
		
		$arrCookie = explode("," , $cookie);
		$username = $arrCookie[0]; //joris@mail.com
		$hash = $arrCookie[1]; //sfoisjfoijsodfjqsjfdsjq
			
		$salt = "dsifjsdnf";
		$check = md5( $username . $salt );
		
		if( $check == $hash ){
			//welcome
		}
        
	}
    */
session_start();
        if($_SESSION['loggedin'] == "yes"){
            //welcome
        }
        else{
            header('Location: login.php');
        }
?>






    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Facebook</title>
        <!-- LAYOUT BY ED BOND: http://codepen.io/edbond88/pen/yGjAu -->
        <link rel="stylesheet" href="css/facebook.css">
    </head>

    <body>
        <section class="login-form-wrap" style="height: 156px">
            <p class="message">Welcome back!</p>
            <a style="color: white" href="logout.php">Logout</a>
        </section>
    </body>

    </html>