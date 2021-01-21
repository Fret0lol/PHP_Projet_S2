<?php
session_start();
defined('BASEPATH') or exit('No direct script access allowed');
class Collection extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('internships_model');
    }

    public function index(){
        if (isset($_SESSION['connecte'])){
        $data['header'] = "header_connecte";
        $this->load->vars($data);
        $this->getCollection();
        $this->load->helper('url');
        $this->load->view('collection_page');
        }else{
            $this->load->helper('url');
            $this->load->view('erreur_connection');
        }
    }
    public function getCollection(){
        $tabCollection = array();
        $idJeux = $this->internships_model->get_collection($_SESSION['identifiant']);
        foreach($idJeux as $id){
            $tabCollection[] = $this->internships_model->get_jeuID($id);
        }
        
        if(!empty($tabCollection)){
        $data['jeux'] = $tabCollection;
            $data['collection'] = 'jeux_collection'; 
        }else{
            $data['collection'] = 'pas_de_jeux_collection'; 
        }
        $this->load->vars($data);
    }

    public function supprimerJeu(){
       $jeu_a_supprimer =  $_POST['id_jeu'];
       $this->internships_model->suprimerJeuCollection($jeu_a_supprimer,$_SESSION['identifiant']);
       $this->index();
    }
}

?>