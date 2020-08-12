<!DOCTYPE HTML>

<head>
    <title>Categories</title>
    <link rel="shortcut icon" href="images/title.PNG">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
    <div class="header">
        <div class="wrap">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" title="logo" /></a>
            </div>
            <div class="top-menu">
                <div class="top-nav">
                    <ul>
                        <li><a href="categories.php">RECENT UPLOADS</a></li>
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
                            <li><a href="JAVA.html">JAVA.</a></li>
                            <li><a href="DE.html">Digital Electronics.</a></li>
                            <li><a href="COMI.html">Computer Organization & Microprocessor Interfacing.</a></li>
                            <li><a href="snt.html">Statical & Numerical Techniques.</a></li>
                            <li><a href="DSA1.html">DATA Stucture & Algorithm</a></li>
                            <li><a href="DC.html">Data Communication</a></li>
                            <li><a href="DBMS.html">DataBase Management System</a></li>
                            <li><a href="CN.html">Computer Networks</a></li>
                            <li><a href="Avdwebtech.html">Advanced Web Technologies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right-content">
                <div class="right-content-heading">
                    <div class="right-content-heading-left">
                        <h3>Latest Categories of videos</h3>
                    </div>
                    <div class="right-content-heading-right">
                        <div class="social-icons">
                            <ul>
                                <li>
                                    <a class="facebook" href="#" target="_blank"> </a>
                                </li>
                                <li>
                                    <a class="twitter" href="#" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="googleplus" href="#" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="pinterest" href="#" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="dribbble" href="#" target="_blank"></a>
                                </li>
                                <li>
                                    <a class="vimeo" href="#" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"> </div>
                </div>
                <div class="content-grids">
                   
                <?php
    include("dbconfig.php");
?>
<!doctype html>
<html>
    <head>
        <style>
            video{
                float: left;
                border:1px solid black;
                
            }
          
            body{ 
                font: 14px sans-serif;
                background-image: url(https://static.wixstatic.com/media/11062b_4b7c9a8e48334d5aad2fd274fddba3bc~mv2.jpg/v1/fill/w_480,h_320,al_c,q_80,usm_0.66_1.00_0.01,blur_2/11062b_4b7c9a8e48334d5aad2fd274fddba3bc~mv2.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                object-position: 50% 50%;
                
                
                
            }
        .wrapper{ 
            width: 350px; 
            padding: 20px;
            border: 1px solid black;        
            margin: auto;
            
            
        }
        
        </style>
    </head>
    <body>
   
 
        
        
        <?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $location = $row['location'];
            
            echo "<div>";
            echo "<video src='".$location."' controls width='465px' height='300px' >";
            echo "</div>";
        }
        ?>
        </div>
        
    

              
                </div>
                    <div class="clear"> </div>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <div class="clear"> </div>

</body>

</html>