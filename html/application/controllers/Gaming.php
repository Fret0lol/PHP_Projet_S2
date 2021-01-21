<?php
defined('BASEPATH') or exit('No direct script access allowed');
session_start();
class Gaming extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('internships_model');
    }

    public function display($content = 'home')
    {
        if (!file_exists('application/views/' . $content . '.php')) {
            show_404();
        }
        $data['content'] = $content;
        $this->load->vars($data);
        $this->load->view('template');
    }

    public function index()
    {
        $this->load->helper('url');
        if (isset($_SESSION['connecte'])) {
            if ($_SESSION['droit'] == 't') {  // 't' pour true
                $data['header'] = 'header_admin';
            } else {
                $data['header'] = 'header_connecte';
            }
        } else {
            $data['header'] = 'header_links';
        }
        $this->afficheJeuxVideo();
        $this->load->vars($data);
        $this->load->view('home');
    }

    public function login()
    {
        if (isset($_SESSION['connecte'])) {
            $this->index();
        }else{
        $data['errorId'] = '';
        $data['errorMdp'] = '';
        $this->load->helper('url');
        $this->load->vars($data);
        $this->load->view('loginPage');
        }
    }

    public function signUp()
    {
        if (isset($_SESSION['connecte'])) {
            $this->index();
        }else{
        $data['errorId'] = '';
        $data['errorMdp'] = '';
        $this->load->helper('url');
        $this->load->vars($data);
        $this->load->view('signUpPage');}
    }

    public function connection($user){
        $_SESSION['connecte'] = true;
        $_SESSION['identifiant'] = $user['identifiant'];
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prenom'];
        $_SESSION['motDePasse'] = $user['motdepasse'];
        $_SESSION['droit'] = $user['droit'];
        $_SESSION['collection'] = array();
    }
    
    public function loginConnection()
    {
        if ($_POST['id'] != '') {
            if ($user = $this->internships_model->get_utilisateurWithId($_POST['id'])) {
                if ($_POST['password'] != '') {
                    if ($user[0]['motdepasse'] == $_POST['password']) {
                        /////////////////
                        $this->connection($user[0]);
                        $this->index();
                        ////////////////
                    } else {
                        $data['errorId'] = '';
                        $data['errorMdp'] = 'Mot de passe incorrect';
                        $this->load->helper('url');
                        $this->load->vars($data);
                        $this->load->view('loginPage');
                    }
                } else {
                    $data['errorId'] = '';
                    $data['errorMdp'] = 'Veuillez remplir ce champ';
                    $this->load->helper('url');
                    $this->load->vars($data);
                    $this->load->view('loginPage');
                }
            } else {
                $data['errorId'] = 'Identifiant inconnu';
                $data['errorMdp'] = '';
                $this->load->helper('url');
                $this->load->vars($data);
                $this->load->view('loginPage');
            }
        } else {
            $data['errorId'] = 'Veuillez remplir ce champ';
            $data['errorMdp'] = '';
            $this->load->helper('url');
            $this->load->vars($data);
            $this->load->view('loginPage');
        }
    }

    public function registration()
    {
        if (!$this->internships_model->exist_utilisateur($_POST['id'])) {
            if ($_POST['password'] == $_POST['password_confirm']) {
                $user['droit'] = 'f';
                $user['connecte'] = true;
                $user['identifiant'] = $_POST['id'];
                $user['nom'] = $_POST['last_name'];
                $user['prenom'] = $_POST['first_name'];
                $user['motdepasse'] = $_POST['password'];
                $this->connection($user);
                
                $this->internships_model->set_utilisateur($_SESSION);
                $this->index();
            } else {
                $data['errorId'] = '';
                $data['errorMdp'] = 'Les deux mots de passe doivent être identiques';
                $this->load->helper('url');
                $this->load->vars($data);
                $this->load->view('signUpPage');
            }
        } else {
            $data['errorId'] = 'Identifiant déjà utilisé';
            $data['errorMdp'] = '';
            $this->load->helper('url');
            $this->load->vars($data);
            $this->load->view('signUpPage');
        }
    }

    public function afficheJeuxVideo()
    {
        $data['jeuxVideo'] = $this->internships_model->get_jeu();
        if (empty($data['jeuxVideo'])) {
            $data['jeux'] = 'pas_de_jeux';
        } else {
            $data['jeux'] = 'liste_jeux_video';
        }
        $this->load->vars($data);
    }

    public function afficheCollectionneurs()
    {
        if (!isset($_SESSION['connecte'])) {
            $this->login();
        }
        else if($_SESSION['droit'] == 't'){
        $data['header'] = 'header_admin';
        $data['collectionneurs'] = $this->internships_model->get_collectionneur();

        if (!empty($data['collectionneur'])) {
            $data['content'] = 'affiche_collectionneur';
        } else {
            $data['content'] = 'pas_de_collectionnneur';
        }
        $this->load->helper('url');
        $this->load->vars($data);
        $this->load->view('listeCollectionneur');
        }else{
            $this->index();
        }
    }
    public function logout()
    {
        session_unset();
        $this->index();
    }

    public function compte()
    {
        if (!isset($_SESSION['connecte'])) {
            $this->login();
        }else{
        $data['header'] = 'header_connecte';
        $this->load->vars($data);
        $this->load->helper('url');
        $this->load->view('compte_utilisateur');
        }
    }

    public function compteAdmin()
    {
        if (!isset($_SESSION['connecte'])) {
            $this->login();
        }else if($_SESSION['droit'] == 't'){
            $data['header'] = 'header_admin';
            $this->load->vars($data);
            $this->load->helper('url');
            $this->load->view('compte_utilisateur');
        }else{
            $this->index();
        }
       
    }

    public function ajouterJeuCollection()
    {
        if (!isset($_SESSION['connecte'])) {
            $this->login();
        }else{
            $jeuCollection = $_POST['id_jeu'];
            $this->internships_model->ajouterJeuCollection($jeuCollection, $_SESSION['identifiant']);
            $this->index();
        }
        }
    


    public function supprimerCollectionneur(){
        $id_collectionneur = $_POST['id_collectionneur'];
        $this->internships_model->supprimerUtilisateur($id_collectionneur);
        $this->afficheCollectionneurs();
    }
}
