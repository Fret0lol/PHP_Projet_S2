<?php
class Internships_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        }
    

    public function get_jeu(){
        $query=$this->db->get('_jeu');
        return $query->result_array();
    }
    public function get_jeuID($id_jeu){
        $sql = "SELECT * FROM jeux._jeu where id = ?";
        $query = $this->db->query($sql,[$id_jeu]);
        return $query->result_array();
    }
    public function get_collectionneur(){
        $query = $this->db->query("SELECT * FROM jeux._utilisateur WHERE droit = false");
        return $query->result_array();
    }


    public function get_admin(){
        $query = $this->db->query("SELECT * FROM jeux._utilisateur WHERE droit = true");
        return $query->result_array();
    }

    public function exist_utilisateur($id){
        $sql = "SELECT * FROM jeux._utilisateur WHERE identifiant = ?";
        $query = $this->db->query($sql, [$id]);
        if ($query->result_array() != null){
             return true;
        }else{
            return false;
        }
    }

    public function get_utilisateurWithId($id){
        $sql = "SELECT * FROM jeux._utilisateur WHERE identifiant = ?";
        $query = $this->db->query($sql, [$id]);
            return $query->result_array();
    }

    public function set_utilisateur($user){
        $sql = "INSERT INTO jeux._utilisateur (identifiant, nom, prenom, motdepasse) VALUES
        (?, ?, ?, ?)";
        $query = $this->db->query($sql,[$user['identifiant'], $user['nom'], $user['prenom'], $user['motDePasse']]);
    }

    public function get_collection($id){
        $sql = "SELECT id_jeu FROM jeux._collection where id_collectionneur = ?";
        $query = $this->db->query($sql,[$id]);
        return $query->result_array();
    }

    public function suprimerJeuCollection($id_jeu,$id_collectionneur){
        $sql = "DELETE FROM jeux._collection WHERE id_collectionneur = ? and id_jeu = ?";
        $query = $this->db->query($sql,[$id_collectionneur,$id_jeu]);
    }

    public function ajouterJeuCollection($id_jeu,$id_collectionneur){
        $sql = "INSERT INTO jeux._collection (id_collectionneur,id_jeu,date_ajout) values (?,?,NOW())";
        $query = $this->db->query($sql,[$id_collectionneur,$id_jeu]);
    }

    public function supprimerUtilisateur($id){
        $sql = "DELETE FROM jeux._utilisateur WHERE identifiant = ?";
        $query = $this->db->query($sql,[$id]);
    }
}
