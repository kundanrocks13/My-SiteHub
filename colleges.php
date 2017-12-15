<?php

  session_start();
  include 'DBConn.php';
  include 'comment.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Colleges | MySitehub</title>
<!--         <script type="text/javascript" src="login_signup.js"></script>-->
        
<!--            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
        
        <link rel="stylesheet" type="Text/css" href="mainPage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        
        <div id="main_container-college">
          
            <div id="head">
                
                <div id="logo">
                    <a href="main.php"><img src="logo.png" alt="logo" style="width:300px; height:90px; margin-left:50px;"></a>
                </div>
             
                <?php include 'signup_modal.php' ?>
                
            </div>
        
        <div id="college-category-wrapper">
            <div id="colleges-head">
                <p style="font-family:sans-serif; font-size:14px; color:white; letter-spacing:1px;"> COLLEGES</p>
            </div>
            
            <div id="college-div-wrapper" >
                <div id="college-divs-costomized-wrapper">
                <div class="wrapper government" style="margin-left:3%;border:1px solid #A52A2A;">
                    <div class="wrapper-head">
                        <p>Government</p>
                        <div class="underline"></div>
                    </div>
                    <div class="wrapper-body" id="govt">
                        <ul>
                            <li><a href="page.php?type=government&id=engineering">Engineering</a></li>
                            <li><a href="page.php?type=government&id=medical">Medical</a></li>
                            <li><a href="page.php?type=government&id=management">Management</a></li>
                            <li><a href="#">Law</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Commerse</a></li>
                            <li><a href="#">Arts</a></li>
                            <li><a href="#">Mass Communication</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </div>
                </div>

                <div class="wrapper Private" style="border:1px solid  	#FFA07A">
                    <div class="wrapper-head">
                        <p>Private</p>
                        <div class="underline" style="width:20%;"></div>
                    </div>
                    <div class="wrapper-body" id="private">
                        <ul>
                            <li><a href="page.php?type=private&id=engineering">Engineering</a></li>
                            <li><a href="page.php?type=private&id=medical">Medical</a></li>
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Law</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Commerse</a></li>
                            <li><a href="#">Arts</a></li>
                            <li><a href="#">Mass Communication</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </div>

                </div>

                <div class="wrapper Semi-govt" style="margin-right:0px; border:1px solid #8A2BE2;">
                    <div class="wrapper-head">
                        <p>Semi-Government</p>
                        <div class="underline"></div>
                    </div>
                    <div class="wrapper-body" id="semi-govt">
                        <ul>
                            <li><a href="#">Engineering</a></li>
                            <li><a href="#">Medical</a></li>
                            <li><a href="#">Management</a></li>
                            <li><a href="#">Law</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Commerse</a></li>
                            <li><a href="#">Arts</a></li>
                            <li><a href="#">Mass Communication</a></li>
                            <li><a href="#">Others</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            </div>

        </div>
                <div id="footer">
                    <div id="footer-logo">
                        <a href="main.php"><img src="logo.png" alt="logo" style="width:200px; height:50px; margin:20px 0 0 30px; float:left;"></a>
                    </div>
                    <div id="copyright">
                        <p>Copyrights © 2016 All Rights Reserved by MySitehub.com</p>
                    </div>
                </div>
            
        
</div>

        <script type="text/javascript" src="login_signup.js"></script>
    </body>
</html>