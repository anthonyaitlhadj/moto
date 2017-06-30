<?php

$db = mysqli_connect("localhost", "root", "root", "Escape");

// Check connection
if (isset($_POST['submit'])){
    session_start();
    $firstname = mysqli_real_escape_string($db, $_REQUEST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_REQUEST['lastname']);
    $email = mysqli_real_escape_string($db, $_REQUEST['email']);
    $password = mysqli_real_escape_string($db, $_REQUEST['password']);
    $Confirm_Password = mysqli_real_escape_string($db, $_REQUEST['Confirm_Password']);

    if ($password == $Confirm_Password){
        $password = md5($password);
        $Confirm_Password = md5($Confirm_Password);
        $sql = "INSERT INTO compte (firstname, lastname, email, password, Confirm_Password) VALUES ('$firstname', '$lastname', '$email', '$password', '$Confirm_Password')";
        mysqli_query($db, $sql);
        $_SESSION['message'] = "Save In Database";
        header("location: connexion.php");
    }else{
        $_SESSION['message'] = "Not the same Password";
    }
}

// close connection
mysqli_close($db);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Inscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>


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
                <li class=""><a href="#">Inscription</a> </li>
                <li> <a href="connexion.php">Connexion</a> </li>
            </ul>
        </div>
    </div>
</nav>

<body>
<body style="margin-top: 100px">
<form action="" method="POST">
    <div class="panel panel-default" style="margin-left: 180px; width: 900px;">
        <div class="panel-heading ">Inscription
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="firstname">Prenom</label>
                        <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="Confirm_Password">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="Confirm_Password" name="Confirm_Password">
                    </div>

                    <!--<div class="form-group">
                        <label for="Confirm_Password">Confirmer le mot de passe</label>
                        <select>
                            {% for j in range(1, 12) %}
                                <option>{{ j }}</option>
                            {% endfor %}
                        </select>
                    </div>-->
                </div>
            </div>
            <div class="pull-right control group">
                <button type='submit' name="submit" class='btn btn-success'>Inscription</button>
            </div>
        </div>
    </div>
</form>
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
</body>
</html>