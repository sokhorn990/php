<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h2 class="text-center" style="color:white;">Student Information Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="index.php?action=add_student" method="post">
                            <div class="form-group">
                                <label for="">Full Name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Class:</label>
                                <select name="class" id="" class="form-control">
                                    <option value="WEB2020-A">WEB2020-A</option>
                                    <option value="WEB2020-B">WEB2020-B</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mark:</label>
                                <input type="text" name="score" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender:</label><br>
                                <input type="radio" name="sex" value="Male">Male <br>
                                <input type="radio" name="sex" value="Female">Female
                            </div>
                            <a href="index.php?action=view" class="btn btn-success" id="back">Go Back</a>
                        <input type="submit" class="btn btn-primary float-right" value="Submit">
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>