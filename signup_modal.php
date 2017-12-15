<div id="login-signup-container">
        
                    <div id="login-content">
	   <?php
			if(isset($_SESSION['first'])){
			    echo $_SESSION['first'].'<form action="logout.php">
					<button type="submit">LogOut</button>
				</form>'	;
			 }
			else{
                    echo '<form id="form" action="login.php" method="POST">
                            
                            <input class="lg-pwd-text" type="email" name="Email" placeholder="Email" >
                            
                            <input  class="lg-pwd-text" type="password" name="pwd" placeholder="Password" >
                            
                            <input class="login-button" type="submit" name="submit" value="Login">
                        </form>' 
                        ;

                       
                       echo'<button class="signup" id="sign" onclick="display()">SIGN UP</button>';
            }
            ?>
                        </div>
                </div>






<!--signup-->
<div id="myModal" class="modal">
                
                <div class="modal-content">
                    <span class="close">&times;</span>
                    
                    <h2>Create an account</h2>
                    <form id="myForm" role="form"  method="post" >
                        <input type="text" class="inputfield" id="first_name" name="first" placeholder="First Name">
                        <p id="first" class="validation_error">p</p>
                        <input type="text" class="inputfield" id="last_name" name="last" placeholder="Last Name">
                        <p id="last" class="validation_error">p</p>
                        <input type="email" class="inputfield" id="emails" name="Email" placeholder="Email" >
                        <p id="email" class="validation_error">p</p>
                        <input type="password" class="inputfield" id="passwords" name="pwd" placeholder="Password min. six character">
                        <p id="password" class="validation_error">min. six character</p>
                        <button type="button" class="signupb" id="signUp_button" name="submit" onclick="validate()">SIGN UP</button>
                       
                    </form>

                </div>
                
            </div>