<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
                font: 14px sans-serif;
                background-image: url(https://static.wixstatic.com/media/11062b_4b7c9a8e48334d5aad2fd274fddba3bc~mv2.jpg/v1/fill/w_480,h_320,al_c,q_80,usm_0.66_1.00_0.01,blur_2/11062b_4b7c9a8e48334d5aad2fd274fddba3bc~mv2.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center center;
                object-position: 50% 50%;                    
            }
            .logo{
            border: 1px solid black;
        }
        .wrapper{
            width: 350px; 
            padding: 20px;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            border-left: 1px solid black;
            margin: auto;
            
        }
        p{
            border: 1px solid black;
            align: justify;
        }
        </style>
        <?php
        include("dbconfig.php");
     
        if(isset($_POST['but_upload'])){
            $maxsize = 99999999999; 
                       
            $name = $_FILES['file']['name'];
            $target_dir = "videos/";
            $target_file = $target_dir . $_FILES["file"]["name"];
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            $extensions_arr = array("mp4","avi","3gp","mov","mpeg","docx","mkv");

            if( in_array($videoFileType,$extensions_arr) ){
                
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                       
                        $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

                        mysqli_query($con,$query);
                        echo "Upload successfully.";
                    }
                }

            }else{
                echo "Invalid file extension.";
            }
        
        }
        ?>
    </head>
    <body>
    <div class="logo">
        <a href="adminlogin.php"><img src="images/logo.png" title="logo" /></a>
    </div>
    <div class="wrapper">
        <form method="post" action="" enctype='multipart/form-data'>
           Select the file you want to upload: <br><br> <input type='file' name='file' /><br><br>
          <p> These are the allowed extensions: "mp4","avi","3gp","mov","mpeg","docx","mkv". Please select from this only.</p><br>
          <input type='submit' value='Upload' name='but_upload'>
            <br><br><br><br><br><br>
        </form>
    </div>

    </body>
</html>
