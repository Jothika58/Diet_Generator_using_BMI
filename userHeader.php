<?php
	session_start();
	if(isset($_SESSION['user']))
	{
?>
			<div id="tooplate_header">
            <div id="site_title">
                <a>SQUADRON<span> </span></a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
				<ul>
               <li><a href="Home.php">Home</a></li>
			   <li><a href="register.php">Registration</a></li>  
               <li><a href="calculation.php">BMI Calculation</a></li> 
               <li id="liSignout"><a href="userLogin.php">Signout</a></li>
                    
               
			   </ul>
               
                <br style="clear: left" />
            </div>
            <!-- end of tooplate_menu -->
            <div class="clear">
            </div>
        </div>
        <!-- END of header -->
        <div id="tooplate_middle2">
          
               <h1>
              BMI CALCULATION
              </h1>
            <div class="clear">
            </div>
        </div>
        <!-- END of middle -->
<?php		
	}
	else
	{
?>
			<div id="tooplate_header">
            <div id="site_title">
               <a>SQUADRON<span> </span></a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
                <ul>
               <li><a href="Home.php">Home</a></li>
                <li><a href="userLogin.php">SignIn</a></li>
               	 <li><a href="register.php">Registration</a></li>
				 <li><a href="calculation.php">BMI Calculation</a></li>   
			   </ul>
                <br style="clear: left" />
            </div>
            <!-- end of tooplate_menu -->
            <div class="clear">
            </div>
        </div>
        <!-- END of header -->
        <div id="tooplate_middle2">
          
               <h1>
               BMI CALCULATION
              </h1>
            <div class="clear">
            </div>
        </div>
        <!-- END of middle -->
<?php		
		
	}
?>