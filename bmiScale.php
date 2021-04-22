<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BMI</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--
Template 2070 Holiday
http://www.tooplate.com/view/2070-holiday
-->
    <link href="tooplate_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#featured > ul").tabs({ fx: { opacity: "toggle"} }).tabs("rotate", 5000, true);
        });
    </script>
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
    <script type="text/javascript" src="js/ddsmoothmenu.js">

        /***********************************************
        * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
        * This notice MUST stay intact for legal use
        * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
        ***********************************************/

    </script>
    <script type="text/javascript">

        ddsmoothmenu.init({
            mainmenuid: "tooplate_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })

    </script>
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <script type="text/JavaScript" src="js/slimbox2.js"></script>
    
<script type = "text/javascript">
    window.onload = function () {
        var scrollY = parseInt('<%=Request.Form["scrollY"] %>');
        if (!isNaN(scrollY)) {
            window.scrollTo(0, scrollY);
        }
    };
    window.onscroll = function () {
        var scrollY = document.body.scrollTop;
        if (scrollY == 0) {
            if (window.pageYOffset) {
                scrollY = window.pageYOffset;
            }
            else {
                scrollY = (document.body.parentElement) ? document.body.parentElement.scrollTop : 0;
            }
        }
        if (scrollY > 0) {
            var input = document.getElementById("scrollY");
            if (input == null) {
                input = document.createElement("input");
                input.setAttribute("type", "hidden");
                input.setAttribute("id", "scrollY");
                input.setAttribute("name", "scrollY");
                document.forms[0].appendChild(input);
            }
            input.value = scrollY;
        }
    };
</script>
  
</head>
<body id="homepage">
    <form name="frm" method="post">
    <div id="tooplate_wrapper">
        <?php
			include('adminHeader.php');
			include('connect.php');
        ?>
        <!-- END of middle -->
        <div id="tooplate_main2">
            <table id="tooplatetable">
                <tr>
                    <td align="center">
                        <center>   
        <table>
            <tr>
                <td>
                    <table style="background:#FFCC99; border-radius:20px">
					<tr>
						<td colspan="2" align="center" style="font-size:16px;font-weight:bold;">
								BMI SCALE
						</td>
					</tr>
                        <tr>
                            <td>
                               Body Mass Index
                            </td>
                            <td>
                            	<select name="ddlBMI">
									<option value="select"><---Select---></option>
									
									<option value="Very Low">Very Low</option>
									<option value="Normal">Normal</option>
									<option value="Medium">Medium</option>
									<option value="High">High</option>
									<option value="Very High">Very High</option>
									<option value="Extreme High">Extreme High</option>
								</select> 							   
                            </td>
                        </tr>
                       <tr>
                            <td>
                               DAYS
                            </td>
                            <td>
                            	<select name="ddlDays">
									<option value="select"><---Select---></option>
									<option value="Monday">Monday</option>
									<option value="Tuesday">Tuesday</option>
									<option value="Wednesday">Wednesday</option>
									<option value="Thursday">Thursday</option>
									<option value="Friday">Friday</option>
									<option value="Saturday">Saturday</option>
									<option value="Sundau">Sundau</option>
								</select> 							   
                            </td>
                        </tr>
					<tr>
						<td>BreakFast</td>
						<td>
							<input type="text" name="txtBreakFast">
						</td>
					</tr>
					<tr>
						<td>Lunch</td>
						<td>
							<input type="text" name="txtLunch">
						</td>
					</tr>
					<tr>
						<td>Snacks</td>
						<td>
							<input type="text" name="txtSnacks">
						</td>
					</tr>
					<tr>
						<td>Dinner</td>
						<td>
							<input type="text" name="txtDinner">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="btnSubmit" value="submit">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<a href="viewInfo.php">View Info</a>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
						<?php
							if(isset($_POST['btnSubmit']))
							{
								
								$qry="select sid from scale where bmi='".$_POST['ddlBMI'].
								"' and day='".$_POST['ddlDays']."' ";
										  $res=mysql_query($qry) or die(mysql_error());
										  $n=mysql_num_rows($res);
										  if($n>0)
										  {
											  echo '<font color="red">Record already exists!!</font>';
										  }

										  else
										  {		
											  $bmi=$_POST['ddlBMI'];
											  $days=$_POST['ddlDays'];									  
											  $qry="insert into scale(bmi,day,breakfast,lunch,snacks,dinner,status)values('"
											  .$bmi."','".$days."','".$_POST['txtBreakFast']."','".$_POST['txtLunch']."','"
											  .$_POST['txtSnacks']."','".$_POST['txtDinner']."',0)";
											  $res=mysql_query($qry) or die(mysql_error());
											  if(!$res)
											  {
												   echo '<font color="red">Record Added failure!!</font>';
											  }
											  else
											  {
												   echo '<font color="Green">Record Added success!!</font>';
											  } 
										  }
							}
						?>
						</td>
					</tr>
                        
        </table>
    </center>
                    </td>
                </tr>
            </table>
        </div>
        <!-- END of main -->
        <div class="clear">
        </div>
    </div>
    <!-- END of wrapper -->
    
        <!-- END of tooplate_footer -->
       <?php
	     include("footer.php");
       ?>
    </div>
    <!-- END of tooplate_wrapper -->
    </form>
</body>
</html>