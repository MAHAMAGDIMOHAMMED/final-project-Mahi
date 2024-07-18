  
<?php
include('./dbconnect.php');

$data = $conn->query("SELECT * FROM users")->fetchALL();


  // session_start();
  // $msg="";
  
  // if (isset($_POST['login'])) {
  //     $email = $_POST['email'];
  //     $password =$_POST['pwd'];
  //     if (!empty($email) && !empty ($password)){
  
  //         $_SESSION['user_email'] = $email;
  //         $_SESSION['pw'] = $password;
  //         $msg = "WELCOME ". $_SESSION['user_email'];
  //     }
  // }
  
 
$msg ="";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    }
    if (!empty($email) && !empty ($password)){
$expire_date = time()+(86400 *30 );
setcookie('user_data', $email , $expire_date , '/');
  
         $msg = "WELCOME to COOKIE " . $_COOKIE ['user_data'];
        
    }
    ?>

  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News Admin | Login/Register</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>
  


  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

            <form>

              
              <h1>Login Form</h1>

              <form action= "<?php echo 'PHP_SELF'?>" method="post"> 

              <div>
                <input type="text" class="form-control" placeholder="Username" required=""name="name" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required=""  name="pwd"/>
              </div>
              <div>
                <a class="btn btn-default submit" href='./addUser.php' name="login">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-newspaper-o"></i></i> News Admin</h1>
                  <p>©2016 All Rights Reserved. News Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <form action="<?php echo $_SERVER['PHP_SELF']?> "method="post"> 
            
              <div>
                <input type="text" class="form-control" placeholder="Fullname" required=""name="name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" required=""name="username" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required=""  name="email"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="pw"/>
              </div>
              <div>

                 <a class="btn btn-primary submit" href="login.php" name="Add">Submit</a> 

              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register" name="login"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-newspaper-o"></i></i> News Admin</h1>
                  <p>©2016 All Rights Reserved. News Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
