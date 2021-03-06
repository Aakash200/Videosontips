<?php

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: adminindex.php");
    exit;
}
 

require_once "config.php";
$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty($username_err) && empty($password_err)){
    
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            
            $stmt->bind_param("s", $param_username);
            
            
            $param_username = $username;
            
            
            if($stmt->execute()){
                
                $stmt->store_result();
                
                if($stmt->num_rows == 1){                    
                    
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                          
                            session_start();
                            
                            
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            
                            header("location: adminindex.php");
                        } else{
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
              
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }          
            $stmt->close();
        }
    }
    
    
    $mysqli->close();
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AdminLogin</title>
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
        <a><img src="images/logo.png" title="logo" /></a>
    </div>  
    <div class="wrapper">
        
        <h2>AdminLogin</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Student Login <a href="login.php">Click here</a>.</p>
                       
        </form>
    </div>    
</body>
</html>