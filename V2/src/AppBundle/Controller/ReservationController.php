<?php
/**
 * Created by PhpStorm.
 * User: aaitlhadj
 * Date: 30/06/2017
 * Time: 09:06
 */

namespace AppBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservationController extends Controller
{
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('inscription.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    public function reservationAction()
    {
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
    }

}