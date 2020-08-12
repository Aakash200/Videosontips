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
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
            margin: auto;
            
            
        }
        .logo{
            border: 1px solid black;
        }
        </style>
    </head>
    <body>
   
    <div class="logo">
                <a href="adminindex.php"><img src="images/logo.png" title="logo" /></a>
            </div>
        
          
        <?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $location = $row['location'];
            
            echo "<div>";
            echo "<video src='".$location."' controls width='426.7px' height='300px' >";
            echo "</div>";
            
        }
        ?>
        
          
        
    

    </body>
</html>
