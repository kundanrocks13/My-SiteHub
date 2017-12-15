<?php

  session_start();
  include 'DBConn.php';
  include 'comment.php';
  //include 'si'
?>
<!DOCTYPE html>
<html>
    <head>
        
         <title>Main</title>
        <script type="text/javascript" src="login_signup.js"></script>
        
<!--            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
        
        <link rel="stylesheet" type="Text/css" href="mainPage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    
    <body>        
        <div id="main_container">
          
            <div id="head">
                
                <div id="logo">
                    <a href="main.php" ><img src="logo.png" alt="logo" style="width:300px; height:90px; margin-left:50px;" ></a>
                </div>
                <?php include 'signup_modal.php' ?>
            </div>
            
            <div id="container">
                
                <div id="content">
                    
                    <div id="content-head">
                        <ul>
                            <li><a id="categories" style="border-bottom:2px solid cornflowerblue;">Category</a></li>
                            <li><a id="feedback-button" >Feedback</a></li>
                            <li><a id="about-button">About</a></li>
                        </ul>
                     </div>
                        
                        <div id="category-div">
                            <div id="category-content">
                                <ul>
                                    <li>
                                        
                                        <a class="categ" href="categories.php?id=shopping" ><i class="fa fa-shopping-cart" style="font-size:32px;"></i><br>Shopping</a>
                                    </li>
<!--
                                    <li>
                                        <a class="categ" href="#" >School</a>
                                    </li>
-->                                  
                                    <li>
                                        <a class="categ" href="entertainment.php" ><i class="fa fa-music" style="font-size:32px;"></i><br>Entertainment</a>
                                    </li>
                                    <li>
                                        <a class="categ" href="colleges.php" ><i class="fa fa-graduation-cap" style="font-size:32px;"></i><br>College</a>
                                    </li>
                                    <li>
                                        <a class="categ" href="hospital.php"><i class="fa fa-hospital-o" style="font-size:32px;"></i><br>Hospital</a>
                                    </li>
                                    
                                    <li>
                                        <a class="categ" href="categories.php?id=educational"><i class="fa fa-laptop" style="font-size:32px;"> </i><br>Educational</a>
                                    </li>
                                    <li>
                                        <a class="categ" href="categories.php?id=news" ><i class=" 	fa fa-newspaper-o" style="font-size:32px;"></i><br>News</a>
                                    </li>

                                    <li>
                                        <a class="categ" href="categories.php?id=banking"><i class="fa fa-bank" style="font-size:32px;p"></i><br>Banking</a>
                                    </li>
<!--
                                    <li>
                                        <a class="categ" href="#" >Category9</a>
                                    </li>
                                    <li>
                                        <a class="categ" href="#" >Category10</a>
                                    </li>
-->

                                </ul>
                            </div>
                        </div>
                        <div id="feedback-div">
                            <div id="feedback-content">
	<?php
			         if(isset($_SESSION['Email'])){
                                echo '<form action="'.setcomment($conn).'" method="POST" >
				    <input type="hidden" name="Email" value="'.$_SESSION['Email'].'">
                		    <input type="hidden" name="date" value="'.date('y-m-d H:i:s').'">
                                    <textarea name="msg" id="textarea"  type="text" placeholder="Feedback" ></textarea>
                                    <input type="submit" class="feedback-submit" name="submit" value="SUBMIT">
                                </form>';
			}
			else{
                
				echo "<p id='msg-about-login'' >Please login to give Feedback!</p>";
			}
            		getcomment($conn);// for geeting comments
	?>
                            </div>
                            
                       
                        </div>
                         <div id="about-div">
                            <h1 >About</h1>                        
                        </div>
                </div>
                <div id="footer">
                    <div id="footer-logo">
                        <a href="main.php"><img src="logo.png" alt="logo" style="width:200px; height:50px; margin:20px 0 0 30px; float:left;"></a>
                    </div>
                    <div id="copyright">
                        <p></p>
                    </div>
                </div>
            </div>
        
        </div>
       
            
    </body>
     <script type="text/javascript" src="login_signup.js"></script>

</html>
