<?php
	session_start();
	if(isset($_SESSION['admin']))
	{
?>
			<div id="tooplate_header">
            <div id="site_title">
                <a>SQUADRON <span> </span></a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
				<ul>
               <li><a href="Home.php">Home</a></li>		   
			   <li><a href="bmiScale.php">BMI Scale</a></li>  
            <li><a href="userDetails.php">User Details</a></li>
            <li id="liSignout"><a href="adminSignout.php">Signout</a></li>
                    
               
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
                <li><a href="adminLogin.php">SignIn</a></li>
                <li><a href="bmiScale.php">BMI Scale</a></li>  
				<li><a href="userDetails.php">User Details</a></li>         
                 
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