<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link rel="stylesheet" href="mystyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title></title>
  </head>
  <body style="background:  linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(banner.png)">
    <center>
    <div class="formcontainer m-5 pb-5" style="max-width:70%;">
      <div class="container h-100">
        <br>
        <div class="row h-100 align-items-center">
          <div class="col-3 text-center">
              <a href="index.html" class="login_a">Back</a>
          </div>
          <div class="col-6 text-center">
              <h1><b>Admin Login</b></h1>
          </div>
        </div>
        <br>
        <div class="row h-100 align-items-center">

                <div class="col-md text-center">

                      <a href="pupil_login.php"><img src="website/student_logo.png" class="login_image" ></a>
                      <br>
                      <h1 href="pupil_login.php" style="font-size:30px;"><b>Pupil</b></h1>
                </div>
                <div class="col-md text-center">
                      <a href="teacher_login.php"><img src="website/teacher.png" class="login_image" alt=""></a>
                      <br>
                      <h1 href="pupil_login.php" style="font-size:30px;"><b>Teacher</b></h1>
                </div>
                <div class="col-md text-center">
                      <a href="admin_login.php"><img src="website/admin.png" class="login_image" alt="" style="border: 5px solid #59CF02;"></a>
                      <br>
                      <h1 href="pupil_login.php" style="font-size:30px; color: #59CF02;"><b>Admin</b></h1>
                </div>
          </div>
          <br><br><br>
          <div class="row h-100 align-items-center">
            <div class="col-md text-center">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <div class="form">
                    <span class="error"><?php// echo $mainErr;?></span>
                    <div class="input_field">
                      <input  type="text" name="email" class="input" placeholder="Username">
                    </div>
                    <span class="error"><?php //echo $emailErr;?></span>
                    <div class="input_field">
                      <input  type="password" name="password"class="input" placeholder="Password">
                    </div>
                    <span class="error"><?php// echo $passwordErr;?></span>
                    <center>
                      <div class="input_field" style="width:30%;">
                        <input type="submit" name="Submit" target="_self" class="button">
                      </div>
                    </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </center>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  </body>
</html>
