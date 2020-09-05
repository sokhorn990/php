<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="bg-dark">

    <div class="contianer mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header text-center ">Register</div>
                    <div class="card-body">
                        <form action="login.php">
                            <div class="form-group">
                                <label for="">Username:</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Message:</label>
                                <textarea name="sms" class="form-control" cols="30" rows="3" style="resize: none"></textarea>
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="submit" class="btn btn-danger float-right">Back to login</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>

</html>