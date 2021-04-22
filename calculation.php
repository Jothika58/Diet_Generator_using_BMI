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
			include('userHeader.php');
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
						<td colspan="2" align="center" style="font-size:12px;font-weight:bold;">
								BodyMassIndex Calculation
						</td>
					</tr>
                    <tr>
                        <td>Height</td>
                        <td>
                            <input type="text" name="txtHeight" />                              
                        </td>
                    </tr>
					<tr>
                        <td>Weight</td>
                        <td>
                            <input type="text" name="txtWeight" />                              
                        </td>
                    </tr>
					<tr>
                        <td>Age</td>
                        <td>
                            <input type="text" name="txtAge" />                              
                        </td>
                    </tr>
					<tr>
						<td colspan="2" align="center">
							<input type="Submit" name="btnSubmit" value="Submit">
						</td>
					</tr>
                    <tr>
						<td colspan="2" align="center">
							<?php
								if(isset($_POST['btnSubmit']))
								{
									$height=$_POST['txtHeight'];
									$weight=$_POST['txtWeight'];
									$H=$height*$height;
									$bmi=$weight/$H;
									if(strlen($bmi)>3)
									{
										$bmi=substr($bmi,0,5);
									}
									
									
									
									$res="";
									if($bmi<18.5)
									{
										$res="Very Low";
									}
									else if($bmi>=18.5 and $bmi<=24.9)
									{
										$res="Normal";
									}
									else if($bmi>=25.0 and $bmi<=29.5)
									{
										$res="Medium";
									}
									else if($bmi>=30.0 and $bmi<=34.9)
									{
										$res="High";
									}
									else if($bmi>=35.0 and $bmi<=39.8)
									{
										$res="Very High";
									}
									else
									{
										$res="Extreme High";
									}
									$_SESSION['BMI_RES']=$res;
									echo "BodyMassIndex is:".$bmi;
									echo '</br>';
									echo $res;
									echo '</br>';
									echo '<a href="foodDetails.php">To view your food details</a>';
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