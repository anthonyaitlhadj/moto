<?php
session_start();
$db = mysqli_connect("localhost", "root", "root", "Escape");

// Check connection
if (isset($_POST['submit'])){
    $email = mysqli_real_escape_string($db, $_REQUEST['email']);
    $password = mysqli_real_escape_string($db, $_REQUEST['password']);

    $password = md5($password);
    $sql = "SELECT * FROM compte WHERE email='$email' AND password='$password'";
    $result = mysqli_query($db, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['message'] = "Log In ";
        header("location: indexLog.html");
    }else{
        $_SESSION['message'] = "Invalid Email/Password";
    }
    // close connection
    mysqli_close($db);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Connexion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
<header>
<nav class="navbar  navbar-inverse  navbar-fixed-top">
    <div class="container">
        <button type="button" class="navbar-toggle"
                data-toggle="collapse"
                data-target=".navbar-collapse">

            <span class="sr-only"> Toggle navigation</span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
            <span class="icon-bar"> </span>
        </button>

        <a class="navbar-brand" href="base.html"> Ydays Project</a>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="inscription.php">Inscription</a> </li>
                <li> <a href="#">Connexion</a> </li>
            </ul>
        </div>
    </div>
</nav>
</header>
<body>

<div class="panel panel-default" style="margin-left: 180px; margin-top:100px;width: 900px;">
    <div class="panel-heading">Connexion
    </div>
    <form action="" method="post">
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
            </div>
        </div>
        <div class="pull-right control group">
            <button type='submit' class='btn btn-success' name="submit">Connexion</button>
        </div>
    </div>
    </form>
</div>
</body>

</body>
<footer>
<div class="navbar  navbar-inverse navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-text pull=left">
            <p> © YDAYS 2017.</p>
        </div>

    </div>
</div>
</footer>
</html>