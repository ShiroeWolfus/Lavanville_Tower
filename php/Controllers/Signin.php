<?php

class Signin extends Controller
{
    public function index()
    {
        $this->render('signin.html');
    }

    public function register()
    {
        $newUser = new UserDAO;

        if ($newUser->insert($_POST)) {
            $info['message'] = ['msg' => 'Votre compte a bien été crée ! <br>
            Vous allez être redirigé vers la page d\'accueil...'];
            $this->set($info);
            $this->render('confirm.html');
            ?><meta http-equiv="refresh" content="2;url= / "> <?;
            
        } else {
            trigger_error("Erreur dans le formulaire", E_USER_WARNING);
        }
    }

    public function checkUser()
    {
        $checkUser = new UserDAO;
        if (isset($_SESSION['username'])){
            $info['message'] = ['msg' => 'Bienvenue ' . $_SESSION['username'] . ' !'];
            $this->set($info);
            $this->render('dashboard.html');
        }
        elseif ($checkUser->verify($_POST) === 10) {
            $info['message'] = ['msg' => 'Bienvenue ' . $_SESSION['username'] . ' !'];
            $this->set($info);
            $this->render('dashboard.html');
        } elseif ($checkUser->verify($_POST) === 11) {
            trigger_error("Utilisateur inconnu", E_USER_WARNING);
            ?>
        <meta http-equiv="refresh" content="2;url= / "> <?;
        } elseif ($checkUser->verify($_POST) === 12) {
            trigger_error("Mot de passe incorrect", E_USER_WARNING);
            ?>
        <meta http-equiv="refresh" content="2;url= / "> <?;
        } else {
            trigger_error("Erreur inconnue,", E_USER_WARNING);
            ?>
        <meta http-equiv="refresh" content="2;url= / "> <?;
        }
    }
}
