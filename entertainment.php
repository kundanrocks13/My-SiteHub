<?php

  session_start();
  include 'DBConn.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Entertainment | MySitehub</title>
<!--         <script type="text/javascript" src="login_signup.js"></script>-->
        
<!--            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
        
        <link rel="stylesheet" type="Text/css" href="mainPage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        
        <div id="main_container-entertainment">
          
            <div id="head">
                
                <div id="logo">
                    <a href="main.php"><img src="logo.png" alt="logo" style="width:300px; height:90px; margin-left:50px;"></a>
                </div>
             
                <?php include 'signup_modal.php' ?>
                
            </div>
            
            
            <div id="entertainment-main-wrapper">
                <div id="entertainment-wrapper">
                    <div id="entertainment-content-head">
                        <p>ENTERTAINMENT</p>
                    </div>
                    <div id="entertainment-wrapper-body">
                        <div id="entertainment-content-container">
                            
                            <div class="ent-categ movie" style="margin-right:5%; margin-left:25px;">
                                <a href="page.php?type=entertainment_type&id=Movies" ><img src="logo/movies_logo.gif" alt="movie" width="280px" height="199px" style="display:flex;"></a>
                            </div>
                            <div class="ent-categ video" style="margin-right:5%;">
                                <a href="page.php?type=entertainment_type&id=Videos" ><img src="logo/video-logo.png" alt="movie" width="278px" height="197px"></a>
                            </div>
                            <div class="ent-categ music">
                                <a href="page.php?type=entertainment_type&id=Music" ><img src="logo/music.png" alt="music" width="280px" height="198px"></a>
                            </div>
                            
                        </div>
                    
                    </div>
                
                </div>
                
                <div id="footer">
                    <div id="footer-logo">
                        <a href="main"><img src="logo.png" alt="logo" style="width:200px; height:50px; margin:20px 0 0 30px; float:left;" ></a>
                    </div>
                    <div id="copyright">
                        <p>Copyrights © 2016 All Rights Reserved by MySitehub.com</p>
                    </div>
                </div>
            
            </div>
            
        
</div>

        <script type="text/javascript" src="login_signup.js"></script>
    </body>
</html>