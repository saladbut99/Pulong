<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pulong</title>
    <link rel="stylesheet" href="mystyle2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  </head>
  <body id="body">
  <div class="bg" id="content_dark1">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-md text-center">
            <h1 style="font-size:90px;"><b>Welcome to Pulong</b></h1>
        </div>
        <div class="col-md-1 text-center">

        </div>
        <div class="col-md text-center">
            <a href="#" class="button text-decoration-none" id="greyButton" style="font-size:80px;" onclick="show()"><b>Log In</b></a>
        </div>
      </div>
    </div>
  </div>

  <br><br>

<div class="whitebg" id="content_dark2">
  <div class="container h-50">
    <div class="row h-100 align-items-center">
      <div class="col-md text-center">
        <h1 style="color :#03256C;"><b>AN INTERACTIVE WEB APPLICATION TUTORIAL</b></h1>
        <br>
        <h2 style="color :#554F4F; font-size:25px;">Learning the Mother Tongue Language is fun and interactive with Pulong.</h2>
      </div>
    </div>
  </div>



  <center>
  <hr style="width:70%;", size="4", color=black>
  </center>


  <div class="container h-50">
      <div class="row h-100 align-items-center">
        <div class="col-md text-center">
          <h1 style="color :#03256C;"><b>MONITOR YOUR PERFORMANCE AND LEARNING</b></h1>
          <br>
          <h2 style="color :#554F4F; font-size:25px;">Monitoring of performance and applying learing is made easier with the help of Pulong.</h2>
        </div>
      </div>
    </div>

</div>


<!-- For Login Form -->
<div class="formcontainer " id="loginas" style="overflow-y:auto;  max-height: calc(115vh - 210px);"> 
  <div class="container h-500">
    <div class="row h-100 align-items-center">
      <div class="col-md">
        <a href="#" class="login_a" onclick="hide()">Back</a>
      </div>
    </div>
    <br><br>
    <div class="row h-100 align-items-center">
    <div class="pupil col-md text-center">
          <a href="#" ><img id="logopupil" onclick="p()" onclick="showt()" src="website/student_logo.png" class="login_image img-fluid" style="border: 5px solid #59CF02;"></a>
          <br>
          <h1 href="#" style="font-size:30px; color: #59CF02;" id="h1pupil"><b>Pupil</b></h1>
    </div>
    <div class="teacher col-md text-center">
          <a href="#"><img id="logoteacher" onclick="t()" src="website/teacher.png" class="login_image img-fluid" alt=""></a>
          <br>
          <h1 href="#" style="font-size:30px;" id="h1teacher"><b>Teacher</b></h1>
    </div>
    <div class="admin col-md text-center">
          <a href="#" ><img id="logoadmin" onclick="a()" src="website/admin.png" class="login_image img-fluid" alt=""></a>
          <br>
          <h1 href="#" style="font-size:30px;" id="h1admin"><b>Admin</b></h1>
    </div>
  </div>
  </div>

<!-- actual form for pupil-->
  <center>
  <div class="formp" id="formpupil">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    
      <span class="error"><?php// echo $mainErr;?></span>
      <div class="input_field">
        <input  type="text" name="email" class="input" placeholder="Username Pupil">
      </div>
      <span class="error"><?php //echo $emailErr;?></span>
      <div class="input_field">
        <input  type="password" name="password"class="input" placeholder="Password">
      </div>
      <span class="error"><?php// echo $passwordErr;?></span>
      <center>
        <div class="input_field" style="width:55%;">
          
          <input type="submit" name="Submit" target="_self" class="button">
        </div>
      </center>
    </form>
  </div>  
  </center>
<!-- actual form for teacher-->
  <center>
  <div class="formt" id="formteacher">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="form">
        <span class="error"><?php// echo $mainErr;?></span>
        <div class="input_field">
          <input  type="text" name="email" class="input" placeholder="Username Teacher">
        </div>
        <span class="error"><?php //echo $emailErr;?></span>
        <div class="input_field">
          <input  type="password" name="password"class="input" placeholder="Password">
        </div>
        <span class="error"><?php// echo $passwordErr;?></span>
        <center>
          <div class="input_field" style="width:55%;">
            
            <input type="submit" name="Submit" target="_self" class="button">
          </div>
        </center>
      </div>
    </form>
  </div>
  </center>

  <!-- actual form for admin-->
  <center>
    <div class="forma" id="formadmin">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form">
          <span class="error"><?php// echo $mainErr;?></span>
          <div class="input_field">
            <input  type="text" name="email" class="input" placeholder="Username Admin">
          </div>
          <span class="error"><?php //echo $emailErr;?></span>
          <div class="input_field">
            <input  type="password" name="password"class="input" placeholder="Password">
          </div>
          <span class="error"><?php// echo $passwordErr;?></span>
          <center>
            <div class="input_field" style="width:55%;">
              
              <input type="submit" name="Submit" target="_self" class="button">
            </div>
          </center>
        </div>
      </form>
    </div>
    </center>





</div>


<script>
  function show(){
    document.getElementById("loginas").style.display = "block";
    document.getElementById("body").style.overflow = "hidden";
    document.getElementById("content_dark1").style.filter = "brightness(50%)";
    document.getElementById("content_dark2").style.filter = "brightness(50%)";
   
  }
  function hide(){
    document.getElementById("loginas").style.display = "none";
    document.getElementById("body").style.overflow = "auto";
    document.getElementById("content_dark1").style.filter = "brightness(100%)";
    document.getElementById("content_dark2").style.filter = "brightness(100%)";
    
  }

  function p(){
    document.getElementById("logopupil").style.border = "5px solid #59CF02";
    document.getElementById("logoteacher").style.border = "1px solid rgba(105, 105, 105, 0.1)";
    document.getElementById("logoadmin").style.border = "1px solid rgba(105, 105, 105, 0.1)";
    document.getElementById("h1pupil").style.color = "#59CF02";
    document.getElementById("h1teacher").style.color = "white";
    document.getElementById("h1admin").style.color = "white";
    document.getElementById("formpupil").style.display = "block";
    document.getElementById("formteacher").style.display = "none";
    document.getElementById("formadmin").style.display = "none";

  }
  function t(){
    document.getElementById("logopupil").style.border = "1px solid rgba(105, 105, 105, 0.1)";
    document.getElementById("logoteacher").style.border = "5px solid #59CF02";
    document.getElementById("logoadmin").style.border = "1px solid rgba(105, 105, 105, 0.1)";
    document.getElementById("h1pupil").style.color = "white";
    document.getElementById("h1teacher").style.color = "#59CF02";
    document.getElementById("h1admin").style.color = "white";
    document.getElementById("formpupil").style.display = "none";
    document.getElementById("formteacher").style.display = "block";
    document.getElementById("formadmin").style.display = "none";

  }
  function a(){
    document.getElementById("logopupil").style.border = "1px solid rgba(105, 105, 105, 0.1)";
    document.getElementById("logoteacher").style.border = "1px solid rgba(105, 105, 105, 0.1)";
    document.getElementById("logoadmin").style.border = "5px solid #59CF02";
    document.getElementById("h1pupil").style.color = "white";
    document.getElementById("h1teacher").style.color = "white";
    document.getElementById("h1admin").style.color = "#59CF02";
    document.getElementById("formpupil").style.display = "none";
    document.getElementById("formteacher").style.display = "none";
    document.getElementById("formadmin").style.display = "block";

  }

</script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  </body>
</html>
