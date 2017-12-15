<?php

  session_start();
  include 'DBConn.php';
//  $role = $_GET['id'];
//  $table = $_GET['type'];
//  $fetch = "SELECT * FROM $table WHERE type='$role' ";
//  $result = $conn->query($fetch);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Select State | MySitehub</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
        
        <link rel="stylesheet" type="Text/css" href="mainPage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        
        <div id="hospital-main-wrapper">
          
            <div id="head">
                
                <div id="logo">
                    <a href="main.php"><img src="logo.png" alt="logo" style="width:300px; height:90px; margin-left:50px;"></a>
                </div>
                <?php include 'signup_modal.php' ?>                
            </div>
                
        
        
        <div id="hospital-content" >
            <div id="hospital-content-head">
                <p>SELECT STATE</p>
            </div>
            <div id="hospital-content-body">
                <ul> 
                    <li>
                        <a style="color:black;" href="page.php?type=hospitals&id=New Delhi"><img src="logo/New-Delhi.jpg" alt="Delhi" width="170" height="98"; ></a>
                    </li>
                    <li>
                        <a style="color:black;" href="" ><img src="logo/up.cms" alt="UP" width="170" height="98"; ></a>
                    </li>
                    <li>
                        <a style="color:black;" href=""><img src="logo/maharashtra.jpg" alt="" width="170" height="98"; ></a>
                    </li>
                    <li>
                        <a style="color:black;" href="page.php?type=hospitals&id=Andhra Pradesh" ><img src="logo/AP.jpeg" alt="Ap" width="170" height="98"; ></a>
                    </li>
                    <li>
                        <a style="color:black;" href="page.php?type=hospitals&id=Bihar" ><img src="logo/Bihar.jpg" alt="Bihar" width="170" height="98"; ></a>
                    </li>
                    <li>
                        <a style="color:black;" href="page.php?type=hospitals&id=jharkhand"><img src="logo/Jharkhand.jpg" alt="Jharkhand" width="171" height="98"; ></a>
                    </li>
                    <li>
                        <a style="color:black;" href=""><img src="logo/Punjab.jpg" alt="Punjab" width="170" height="98"; ></a>
                    </li>
                    <li>
                        <a style="color:black;" href="page.php?type=hospitals&id=Rajsthan"><img src="logo/rajasthan.jpg" alt="Rajsthan" width="171" height="98"; ></a>
                    </li>
                    <li>
                        <a style="color:black;" href=""><img src="logo/west-bengal.jpg" alt="wb" width="171" height="98"; ></a>
                    </li>
                </ul>
            </div>
        
        </div>
            <div id="footer">
                    <div id="footer-logo">
                        <a href="main.php"><img src="logo.png" alt="logo" style="width:200px; height:50px; margin:20px 0 0 30px; float:left;" ></a>
                    </div>
                    <div id="copyright">
                        <p>Copyrights © 2016 All Rights Reserved by MySitehub.com</p>
                    </div>
                </div>
        
        </div> <!-- main div end -->
        
        <script type="text/javascript" src="login_signup.js"></script>
    </body>
    
</html>