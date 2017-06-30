<?php
session_start();
$db = mysqli_connect("localhost", "root", "root", "Escape");

// Check connection
if (isset($_POST['submit'])){
    $firstname = mysqli_real_escape_string($db, $_REQUEST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_REQUEST['lastname']);
    $numbercard = mysqli_real_escape_string($db, $_REQUEST['numbercard']);
    $Expiration = mysqli_real_escape_string($db, $_REQUEST['Expiration']);
    $cryptogramme = mysqli_real_escape_string($db, $_REQUEST['cryptogramme']);

    if (isset($firstname) && isset($lastname) && isset($Expiration) && isset($cryptogramme)){
        $numbercard = md5($numbercard);
        $cryptogramme = md5($cryptogramme);
        $sql = "INSERT INTO reservation (firstname, lastname, numbercard, Expiration, cryptogramme) VALUES ('$firstname', '$lastname', '$numbercard', '$Expiration', '$cryptogramme')";
        mysqli_query($db, $sql);
        $_SESSION['message'] = "Save the reservation";
        header("location: indexLog.html");
    }else{
        $_SESSION['message'] = "Error during the reservation";
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

        <a class="navbar-brand" href="indexLog.html"> Ydays Project</a>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class=""><a href="base.html">Déconnexion</a> </li>
            </ul>
        </div>
    </div>
</nav>

<body>
<body style="margin-top: 100px">
<form action="" method="POST">
    <div class="panel panel-default" style="margin-left: 180px; width: 900px;">
        <div class="panel-heading ">Reserver
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
                        <label for="numbercard">Numero de la carte</label>
                        <input type="text" class="form-control" id="numbercard" name="numbercard">
                    </div>
                    <div class="form-group">
                        <label for="expiration">Date d'expiration</label>
                        <input type="text" class="form-control" id="expiration" name="expiration">
                    </div>
                    <div class="form-group">
                        <label for="cryptogramme">Cryptogramme</label>
                        <input type="password" class="form-control" id="cryptogramme" name="cryptogramme">
                    </div>
                </div>
            </div>
            <div class="pull-right control group">
                <button type='submit' name="submit" class='btn btn-success'>Reserver</button>
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
