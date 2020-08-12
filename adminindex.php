<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminlogin.php");
    exit;
}
?>
 
 <!DOCTYPE HTML>

<head>
    <title>HOME PAGE</title>
    <link rel="shortcut icon" href="images/title.PNG">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    
</head>

<body>
    <div class="header">
        <div class="wrap">
            <div class="logo">
                <a href="adminindex.php"><img src="images/logo.png" title="logo" /></a>
            </div>
            <div class="top-menu">
                <div class="top-nav">
                    <ul>
                        <li><a href="categories.html">Categories</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form>
                        <input type="text" class="textbox" value="Search:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value=" " />
                    

                    </form>
                </div>
                
                <div class="clear"> </div>
            </div>
            <div class="clear"> </div>
            <br>
            <div class="user">Hi,Prof. <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to VideosOnTips &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="btn"><a href="adminlogout.php">LOGOUT</a></div></div>
            

        </div>
    </div>
    <div class="clear"> </div>
    <div class="main-content">
        <div class="wrap">
            <div class="left-sidebar">
                <div class="sidebar-boxs">

                    <div class="clear"> </div>
                    <div class="type-videos">
                        <h3>Categories</h3>
                        <ul>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right-content">
                <div class="right-content-heading">
                    <div class="right-content-heading-left">
                        <h3>Latest Collections of videos</h3>
                    </div>
                    <div class="right-content-heading-right">
                        <div class="social-icons">
                            <ul>
                                <li>
                                    <a class="facebook" href="" target="_blank"> </a>
                                </li>
                                <li>
                                    <a class="twitter" href="" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="googleplus" href="" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="pinterest" href="" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="dribbble" href="" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="vimeo" href="" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="content-grids">
                    <div class="content-grid">
                        <a href="upload.php"><h3>UPLOAD VIDEOS</h3></a>
                    </div>
                    <div class="content-grid">
                        <a href="readvideos.php"><h3>VIEW UPLOADED VIDEOS</h3></a>
                        
                    </div>

                    
                    
                    <div class="clear"> </div>
                </div>
            </div>
        </div>
        <div class="clear"> </div>
    </div>
    </div>
    <div class="clear"> </div>
</body>

</html>