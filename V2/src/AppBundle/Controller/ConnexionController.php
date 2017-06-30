<?php
/**
 * Created by PhpStorm.
 * User: aaitlhadj
 * Date: 29/06/2017
 * Time: 10:51
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ConnexionController extends Controller
{
    /**
     * @Route("/connexion", name="connexion")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('connexion.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    public function logInAction()
    {
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
    }
}