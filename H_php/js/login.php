<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Longin Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
   body{
       background-image:url(../background.jpg);
       background-size:cover;
       background-repeat:no-repeat;

   }

</style>

</head>
<body >

    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                   <div class="card-header  text-center">Login Form</div>
                   <div class="card-body">
                       <form action="register.php">
                           <div class="form-group">
                               <label>Username:</label>
                               <input type="text" class="form-control" name="username">
                           </div>
                           <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button type="submit" class="btn btn-info">Login</button>
                        <button type="submit" class="btn btn-danger float-right">Register</button>
                       </form>
                      
                   </div>
                    
                </div>
            </div>
            <div class="col-4"></div>
           
        </div>
    </div>
    
</body>
</html>