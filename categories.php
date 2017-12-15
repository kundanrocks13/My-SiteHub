<?php

 session_start();
    include 'DBConn.php';
    $content = $_GET['id'];
    $fetch = "SELECT * FROM $content";
    $fetch_result = $conn->query($fetch);
    
    
//        print_r($s['Name']);
//    endforeach;
//    print_r($fetch_result->fetch_assoc());
//    while($row = $fetch_result->fetch_assoc()){
//        echo $row['Name'].'      '.$row['link']."<br><br>";
//    }
?>
<!DOCTYPE html>
<html>
    <head>
        
         <title>Categories</title>
<!--        <link rel="stylesheet" type="Text/css" href="categories.css">-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  -->
        
        <link rel="stylesheet" type="Text/css" href="mainPage.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    
    <body>
        
        <div id="main_container">
          
            <div id="head">
                
                <div id="logo">
                     <a href="main.php"><img href="main.php" src="logo.png" alt="logo" style="width:300px; height:90px; margin-left:50px;"></a>

                </div>
                <?php include 'signup_modal.php' ?>
                
                
            </div>
            
            <div id="categories">
                
                <div id="categories-content">
                    <div id="categories-content-head">
                        <p ><?php echo"$content"; ?></p>
                    </div>
                    <div id="categories-content-body">
                        <ul>
                            <?php foreach($fetch_result as $s): ?>
                            <li>
                                <a style="color:black;" href="<?php print_r($s['link']); ?>" target="_blank"><img src="<?php print_r($s['Name'] );?>" width="158"; height="98"; ></a>
                            </li>
                            <?php endforeach; ?>
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
            </div>
                    
        </div>
            
          
    </body>
    <script type="text/javascript" src="login_signup.js"></script>
    
    

</html>
