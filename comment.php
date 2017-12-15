<!DOCTYPE html>
    <html>
        <body>
<?php
    function setcomment($conn){
        if(isset($_POST['submit'])){
            $Email = $_POST['Email'];
            $date = $_POST['date'];
            $msg = $_POST['msg'];
                
        $sql = "INSERT INTO comments(Email, date, msg) VALUES('$Email', '$date', '$msg')";
        $show = $conn->query($sql);
        }
        
    }
    function getcomment($conn)
    {
        $sql = "SELECT * FROM comments";
        $show = $conn->query($sql);
	    $i = 1;
        
        while($run = $show->fetch_assoc())
        { 
            "<br";
            echo '<div class="data">';
            echo "<h5 style='color:green'> ".$run['Email']."&nbsp;&nbsp; ";
            echo "<span style='color:black;' >".$run['date']."<br></span> </h5>";
            echo "<p style='color:darkslategray;font-family:Arial; padding-bottom:15px; font-size:16px;'>".$run['msg']."<br> </p>";
            echo '</div>';
	    $i++;
	    if($i>8)
		break;	
		
        }
        
//        print_r($run = $show->fetch_assoc());
        echo "<a href='#' style='margin-top:520px;' onclick='more()'>More</a>";
    }    
            
    ?>
            <script>
                var x = 5;
            </script>
            <?php
                $abc = "<script>document.write(x)</script>"; 
            ?>
        </body>
       
    </html>
