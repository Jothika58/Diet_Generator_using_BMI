<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BMI CALCULATION</title>
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
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
</head>

<body id="homepage">
    <form id="Form1">
    <div id="tooplate_wrapper">
       <div id="tooplate_header">
            <div id="site_title">
               <a>DIET BUDDY<span> </span></a></div>
            <div id="tooplate_menu" class="ddsmoothmenu">
                <ul>
               <li><a href="adminLogin.php">Admin</a></li>
                <li><a href="userLogin.php">User</a></li>              
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
        <div id="tooplate_main2">
            <table id="tooplatetable">
                <tr>
                    <td align="center">
                      <div id="wowslider-container1">
                          <div class="ws_images"><ul>
                              <li><img src="data1/images/1.jpg"   id="wows1_0"/></li>
                              <li><img src="data1/images/2.jpg"   id="wows1_1"/></li>
                              <li><img src="data1/images/3.jpg"   id="wows1_2"/></li>
                              <li><img src="data1/images/4.jpg"   id="wows1_2"/></li>
                          </ul></div>
                          <div class="ws_bullets"><div>
                              <a href="#" title="Credit Card"><span><img src="data1/tooltips/1.jpg" /></span></a>
                              <a href="#" title="Fraud Detection"><span><img src="data1/tooltips/2.jpg" /></span></a>
                              <a href="#" title="Hidden"><span><img src="data1/tooltips/3.jpg" /></span></a>
                              <a href="#" title="markav"><span><img src="data1/tooltips/4.jpg" /></span></a>
                              
                          </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net"></a> </div>
                          <div class="ws_shadow"></div>
                          </div>	
                          <script type="text/javascript" src="engine1/wowslider.js"></script>
                          <script type="text/javascript" src="engine1/script.js"></script>
                    </td>
                </tr>
            </table>
        </div>
        <!-- END of main -->
        <div class="clear">
        </div>
    </div>
    <!-- END of wrapper -->
    <div id="tooplate_footer_wrapper">	
        <div id="tooplate_footer" class="center">
            
            
            
          
            <div class="clear">
            </div>
        </div>
        <!-- END of tooplate_footer -->
        <div id="tooplate_copyright" class="center">
            <p class="left">
                Copyright © 2021 &nbsp;&nbsp;&nbsp; DIET BUDDY &nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;
                Designed By: &nbsp;&nbsp;&nbsp;<a href="" target="_parent"> TEAM SQUADRON </a>
            </p>
            <ul id="social">
                <li><a href="#">
                    <img src="images/rss.png" alt="RSS" /></a></li>
                <li><a href="#">
                    <img src="images/facebook.png" alt="Facebook" /></a></li>
                <li><a href="#">
                    <img src="images/twitter.png" alt="Twitter" /></a></li>
                <li><a href="#">
                    <img src="images/linkedin.png" alt="Linkedin" /></a></li>
            </ul>
            <div class="clear">
            </div>
        </div>
    </div>
    <!-- END of tooplate_wrapper -->
    </form>
</body>
</html>