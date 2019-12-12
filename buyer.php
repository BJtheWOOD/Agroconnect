   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FoodConnect</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="sweetalert/sweetalert2.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" type="image/png" href="images/favicon.png">	
</head>
<body>

    <section>
       <br>      
       <center><h1 class="text-success">Buyers </h1></center>
       <br>
        <div class="container">
        <div class="row">
           <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header" id="panel_header">                      
                        <h5 class="card-title mt-3 mb-3"><center><span class="title"></span></center></h5> 
                    </div>
                   <div class="card-body">        
                    <br>
                       <div class="out">
                            <p class="card-text">               
                                 <input type="text" placeholder="Fullname" id="fullname_up" class="form-control">
                                 <br>
                                 <input type="email" placeholder="Email" id="email_up" class="form-control">
                                 <br>
                                 <input type="phone" placeholder="Phone" id="phone_up" class="form-control">
                                 <br>
                                 <input type="password" placeholder="password" id="password_up" class="form-control">
                                 <br>
                                 <input type="password" placeholder="Confirm Password" id="cpassword_up" class="form-control">
                                 <center><button class="btn btn-success"  id="submit_up">SignUp</button><br><span  id="sign_io">Don't have an account yet? <span id="signin_btn">Signin</span></span></center>
                            </p>
                        </div>
<!--                sign in section                         -->
                         <div class="in">                    
                            <br>                    
                            <p class="card-text">
                                <input type="text" placeholder="Fullname"  id="fullname_in" class="form-control">
                                 <br>
                                 <input type="email" placeholder="Email"  id="email_in" class="form-control">
                                 <br>
                                 <input type="password" placeholder="Password"  id="password_in" class="form-control">
                                 <center><button class="btn btn-success"  id="submit_in">SignIn</button><br><span  id="sign_io">Don't have an account yet? <a href="" id="signup_btn">Signup</a></span></center>
                              </p>
                          </div>
                      
                  </div>
                
                
        
                </div>
                <br>
                <center><a href="index.php" style="font-size: 12px;"><i class="fa fa-arrow-right"></i><h6  style="font-size: 14px;">Back to Home</h6></a></center>
            </div>
            <br>
            <br>
            <div class="col-md-3"></div>

            
        </div>
        </div>

        <br>
        <br>
       
    </section>
   <script src="js/jquery-3.3.1.min.js"></script>
     <script src="js/app.js"></script>
     <script src="sweetalert/sweetalert2.all.js"></script>
     <script src="js/fontawesome.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>