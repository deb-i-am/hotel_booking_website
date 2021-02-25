<!DOCTYPE html>
<html>
<head>
    <title>LOGIN Page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <style>
        
        body
        {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
    </style>
</head>
<body>
<div class="container" >
             <div class="login-box">
                <div class="row">
                    <div class="col-md-6 login-left">
                        <h2>Login Here</h2>
                        <form action="validation.php" method="post">
                         <div class="form-group">
                            
                            <label>UserName</label>
                            <input class="form-control" type="text" name="uname" required=""/>
                            
                            <!--<p class="help-block">Help text here.</p> -->
                        </div>
                         <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" required="" />
                            <!--<p class="help-block">Help text here.</p> -->
                        </div>
                        <button type="submit" class="btn btn-primary"> Login </button>
                        </form>
                    </div>
                    
                       <div class="col-md-6 login-right">
                        <h2>Register Here</h2>
                        <form action="registration.php" method="post">
                         <div class="form-group">
                            <label>UserName</label>
                            <input class="form-control" type="text" name="uname" required=""/>
                            <!--<p class="help-block">Help text here.</p> -->
                         </div>
                         <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" required="" />
                            <!--<p class="help-block">Help text here.</p> -->
                        </div>
                        <button type="submit" class="btn btn-primary"> Register </button>
                        </form>
                       </div>
                  
                   </div>
                </div>
        
</div>
</body>
</html>
 
