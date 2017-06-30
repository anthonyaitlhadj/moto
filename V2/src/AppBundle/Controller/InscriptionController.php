<?php

namespace AppBundle\Controller;

use Doctrine\DBAL\Driver\PDOException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;

class InscriptionController extends Controller {

    /**
     * @Route("/inscription", name="inscription")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('inscription.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    public function InscriptionAction()
    {
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
    }
}