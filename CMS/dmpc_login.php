<?php include 'dmpc_login_server.php' ?>


<html>
<head>
  <title></title>
  <h1 style=" color: white"><a href="dep_identity.php"><button class="btn2">←</button></a> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DMPC &nbsp;Login&nbsp; Form</h1>
  <style type="text/css">
    
    body{
       background-image: url("texture-wallpaper-58.jpg");
          background-size: 50%;
          box-shadow: inset 3px 10px 20px 5px rgba(0, 0, 0, .9);
    }
    h1{
       background: url("grunge_texture_dark_126947_3840x2160.jpg");
      background-size: 100%;
      padding: 50px;
      font-family: azonix;
       text-shadow: 3px 10px 20px rgba(0, 0, 0, .9);
      box-shadow: 3px 10px 20px rgba(0, 0, 0, .9);
      margin: 0px;
      font-size: 40px;

    }
   .box{

        width: 320px;
        height: 420px;
        background: white;
        color: #000;
        top: 60%;
        left: 60%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
        box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .5);
      }

    .box p{
      margin: 0;
      padding: 0;
      font-size: 20px;
      font-family: helvetica;
      color: black;
      padding-bottom: 5px;
    }

    .box select{
      width: 100%;
      margin-bottom: 20px;
      padding: 10px;
    }

    .box button[type="submit"]{
      border: 1px solid black;
      outline: none;
      height:40px;
      cursor: pointer;
      position: fixed;
      width: 250px;
      bottom: 30px;
      background: transparent;
      color: black;
      font-size: 18px;
    }
    .box input{
      margin-bottom: 20px;
      width: 100%;
    }
    .box input[type="text"],input[type="password"]{
      outline: none;

      font-size: 16px;
      border-top: none;
      border-right: none;
      border-left: none;
      border-bottom: 1px solid black;
      padding: 10px;
      background-color: white;
      color: black;
      height: 50px;
    }

    .box_black{
      background: url("grunge_texture_dark_126947_3840x2160.jpg");
      background-size: 150%;
      width: 500px;
        height: 420px;
        color: #000;
        top: 60%;
        left: 40%;
        position: absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding: 70px 30px;
        box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
    }
    .btn2{
    font-size: 30px;
    box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .9);
    font-family: tw cen mt;
    background: transparent;
    cursor: pointer;
    color: white;
    font-weight: bold;
    margin-bottom:30px; 
    outline: none;
  }
  </style>

</head>
  
  

<body>
  <div class="box_black">
     <p style="color: white; margin-left: 90px; font-size: 30px;font-family:century gothic; text-shadow: 2.5px 2.5px black; filter: opacity(97%);">WELCOME</p>
  </div>
  <div class="box">
    <p style="font-size: 16px; padding: 10px; margin-bottom:20px; ">We Need Your...</p>
    <form method="post" action="dmpc_login.php">
      <?php include 'errors.php' ?>
 

  <input type="text" name="username" required="Y" placeholder="Username">
  <br> 
  <input type="password" name="pwd" required="Y" placeholder="Password">
   <br>

  <button type="submit" class="btn" name="dmpc_sub">Log in</button> 
   </form>  
  </div>

   </body>
   </html>