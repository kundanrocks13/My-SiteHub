<?php

  session_start();
  include 'DBConn.php';
  $role = $_GET['id'];
  $table = $_GET['type'];
  $x ="type";
  if($table=="hospitals"){
      $x="state";
  }
  $fetch = "SELECT * FROM $table WHERE $x='$role' ";
  $result = $conn->query($fetch);
//    print_r($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title ><?php echo $table." in ".$role;?> | MySitehub</title>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
        
        <link rel="stylesheet" type="Text/css" href="mainPage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        
        <div id="entertainment-list-main-wrapper">
          
            <div id="head">
                
                <div id="logo">
                    <a href="main.php"><img src="logo.png" alt="logo" style="width:300px; height:90px; margin-left:50px;"></a>
                </div>
             
                <?php include 'signup_modal.php' ?>
                
            </div>
                
        </div>
        
        <div id="entertainment-list-wrapper">
            <div id="entertainment-list-content-head">
                <p><?php echo $role; ?></p>
            </div>
            <div id="entertainment-list-wrapper-body">
                <ul>
                    <?php foreach($result as $s): ?>
                    <li>
                        <a style="color:black;" href="<?php print_r($s['link']); ?>" target="_blank"><?php print_r($s['name'] );?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
            <div id="footer">
                    <div id="footer-logo">
                        <a href="main.php"><img src="logo.png" alt="logo" style="width:200px; height:50px; margin:20px 0 0 30px; float:left;" ></a>
                        <p id="date"></p>
                    </div>
                    <div id="copyright">
                        <p>Copyrights © 2017 All Rights Reserved by MySitehub.com</p>
                    </div>
                </div>
        
        <script type="text/javascript" src="login_signup.js"></script>
        
        <script>
            
        </script>
    </body>
    
</html>