<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

<style>
.button {
    background-color: #e53935; /* Green */
    border-radius: 12px;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.class1
{
      box-shadow: 0 12px 16px 0 rgb(0,0,0),0 17px 50px 0 rgb(0,0,0);
}

input[type=email],[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.nav1 {
    list-style-type: none;
    margin: 0;
    padding: 30px;
    overflow: auto;
    float: left;
    
}
.scene {
  height: 100vh;
  overflow: hidden;
  display: flex;
  flex-wrap: wrap;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  justify-content: center;
  align-items: center;
}

.portfolio-experiment {
  background: #2d2d2d;
  padding: 20px 20px;
}
.portfolio-experiment a {
  color: white;
  padding: 0.7em calc(0.7em * 1.2);
  display: inline-block;
  border: 3px solid transparent;
  position: relative;
  font-size: 1.5em;
  cursor: pointer;
  letter-spacing: 0.07em;
  text-decoration: none;
}
.portfolio-experiment a .text {
  font-family: proxima-nova, monospace;
  transform: translate3d(0, 0.7em, 0);
  display: block;
  transition: transform 0.4s cubic-bezier(0.2, 0, 0, 1) 0.4s;
}
.portfolio-experiment a:after {
  position: absolute;
  content: '';
  bottom: -3px;
  left: calc(0.7em * 1.2);
  right: calc(0.7em * 1.2);
  height: 3px;
  background: #f26522;
  transition: transform 0.8s cubic-bezier(1, 0, 0.37, 1) 0.2s, right 0.2s cubic-bezier(0.04, 0.48, 0, 1) 0.6s, left 0.4s cubic-bezier(0.04, 0.48, 0, 1) 0.6s;
  transform-origin: left;
}
.portfolio-experiment .line {
  position: absolute;
  background: #f26522;
}
.portfolio-experiment .line.-right, .portfolio-experiment .line.-left {
  width: 3px;
  bottom: -3px;
  top: -3px;
  transform: scale3d(1, 0, 1);
}
.portfolio-experiment .line.-top, .portfolio-experiment .line.-bottom {
  height: 3px;
  left: -3px;
  right: -3px;
  transform: scale3d(0, 1, 1);
}
.portfolio-experiment .line.-right {
  right: -3px;
  transition: transform 0.1s cubic-bezier(1, 0, 0.65, 1.01) 0.23s;
  transform-origin: top;
}
.portfolio-experiment .line.-top {
  top: -3px;
  transition: transform 0.08s linear 0.43s;
  transform-origin: left;
}
.portfolio-experiment .line.-left {
  left: -3px;
  transition: transform 0.08s linear 0.51s;
  transform-origin: bottom;
}
.portfolio-experiment .line.-bottom {
  bottom: -3px;
  transition: transform 0.3s cubic-bezier(1, 0, 0.65, 1.01);
  transform-origin: right;
}
.portfolio-experiment a:hover .text,
.portfolio-experiment a:active .text {
  transform: translate3d(0, 0, 0);
  transition: transform 0.6s cubic-bezier(0.2, 0, 0, 1) 0.4s;
}
.portfolio-experiment a:hover:after,
.portfolio-experiment a:active:after {
  transform: scale3d(0, 1, 1);
  right: -3px;
  left: -3px;
  transform-origin: right;
  transition: transform 0.2s cubic-bezier(1, 0, 0.65, 1.01) 0.17s, right 0.2s cubic-bezier(1, 0, 0.65, 1.01), left 0s 0.3s;
}
.portfolio-experiment a:hover .line,
.portfolio-experiment a:active .line {
  transform: scale3d(1, 1, 1);
}
.portfolio-experiment a:hover .line.-right,
.portfolio-experiment a:active .line.-right {
  transition: transform 0.1s cubic-bezier(1, 0, 0.65, 1.01) 0.2s;
  transform-origin: bottom;
}
.portfolio-experiment a:hover .line.-top,
.portfolio-experiment a:active .line.-top {
  transition: transform 0.08s linear 0.4s;
  transform-origin: right;
}
.portfolio-experiment a:hover .line.-left,
.portfolio-experiment a:active .line.-left {
  transition: transform 0.08s linear 0.48s;
  transform-origin: top;
}
.portfolio-experiment a:hover .line.-bottom,
.portfolio-experiment a:active .line.-bottom {
  transition: transform 0.5s cubic-bezier(0, 0.53, 0.29, 1) 0.56s;
  transform-origin: left;
}


</style>


</head>
<body>
    <img src="bb.jpg" style="margin-left: 25%;margin-top:60px;width:75%;opacity: 0.4;overflow-x: hidden;position: fixed">

    <div style="height:800px; position:fixed;margin-top:20px;width:25%;background-color: #2d2d2d;float: left;">
    <ul class="nav1">
  <li>
    <div class="portfolio-experiment">
  <a href="admin_login.php">
    <span class="text">Admin Login</span>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
  </a>
</div>
  </li>
  <li>
    <div class="portfolio-experiment">
  <a href="head_login.php">
    <span class="text">Head Login</span>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
  </a>
</div>
  </li>
  <!-- <li>
    <div class="portfolio-experiment">
  <a href="admin_login.php">
    <span class="text">Devices</span>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>

  </a>
</div>
  </li> -->
  <li>
    <div class="portfolio-experiment">
  <a href="rec.php">
    <span class="text">Recovery</span>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
  </a>
</div>
  </li>
  <!-- <li>
    <div class="portfolio-experiment">
  <a href="test1.php">
    <span class="text">Share USB</span>
    <span class="line -right"></span>
    <span class="line -top"></span>
    <span class="line -left"></span>
    <span class="line -bottom"></span>
  </a>
</div>
  </li> -->
</ul>
    </div>
  <div class="container" style="background-color: black;height:60px;max-width: 100%;position: fixed;">
</div>



<div class="class1" style="margin-left: 35%;margin-top: 10%;position: fixed;background-color: orange;width:40%;border-radius: 20px;">
                    
                      <!-- <?php 
                      //if($_SESSION['email'])
                      {
                    //    echo "admin";

                      }
                     // if($_SESSION['email1'])
                      {
                      //  echo "head";

                      }


                      ?> -->
                    <form action="adminvalid.php" method="post" class="" style="padding:25px;" role="form">
                    <div style="margin-top: 10px;">
                      <div><span style="font-size: 40px;color: red;margin-left: 40px;"><b> Admin Login</b></span></div>
                        <label for="inputEmail3">
                            <span style="font-size: 20px;color: red;margin-left: 20px;"><b>Username :</b></span>
                          </label>
                            <div>
                            <input type="text" name="email" style="width:60%;margin-left: 20px;" class="form-control" id="inputEmail3" placeholder="Username" required>
                          </div>
                            <span style="font-size: 20px;color: red;margin-left: 20px;"><b>Password :</b></span>
                          </label>
                            <div>
                            <input type="password" name="password" style="width:60%;margin-left: 20px;" class="form-control" id="inputEmail3" placeholder="Password" required>
                            </div>
                       </div>
                       
                        <button type="submit" name="adminlogin" class="button button2" style="margin-left:20px;margin-top: 30px;">Login</button>
                        <button type="reset" style="margin-left:20px;margin-top: 30px;" class="button button2">
                                Reset</button>
                       </form>
                        </div>
                  
<?php



?>        
            


  
    
    
      
        

</body>
</html>
