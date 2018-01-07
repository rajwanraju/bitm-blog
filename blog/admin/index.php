<?php
require_once "../vendor/autoload.php";
$login = new App\classes\login();

if(isset($_POST['btn'])){

  $message = $login->adminLoginCheck($_POST);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


</head>
<body>
<div class="container" style="margin-top: 200px; margin-left: 250px;">

    <div class="row">
        <div class="col-sm-6 max-auto">

<div class="card">
    <div class="card-title">
        <h1 align="center"><i>Admin Panel</i></h1>
        <h3><?php echo $message; ?></h3>
    </div>
    <div class="card-body">

        <form action="" method="post">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password">
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" name="btn" class="btn btn-success btn-block">Sign in</button>
                </div>
            </div>
        </form>


    </div>


</div>



        </div>

    </div>

</div>

</body>

</html>
