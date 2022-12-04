<?php

class User_model {
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id_user)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
        $this->db->bind('id_user', $id_user);
        return $this->db->single();
    }


    public function login($data)
    {
        // var_dump($_POST);die();
        $username = $data['username'];
        $pass= $data['password'];

        $query = "SELECT * FROM user WHERE username = :id_user";

        $this->db->query($query);
        $this->db->bind('id_user', $username);
        $this->db->execute();

        $result = $this->db->single();
        // var_dump($result['pass']); die();
        // Kalau usernya ga terdaftar langsung return false aja
        if (!$result) {
            throw new Exception('Anda bukan admin!');
        }

        // Kalau yang di inputkan sama dengan hasil dari yang di database
        if ($pass == $result['pass']) {
            
            // kalau dia benar admin
            if ($result['user_grup'] == 'admin') {
                // Buatkan session
                $_SESSION['namaAdmin'] = $result['username'];
                $_SESSION['group']     = $result['user_grup'];
                // var_dump($_SESSION['namaAdmin']); die();
                // arahkan user ke...
                $_SESSION['is_admin'] = true;
                header("Location: " .BASEURL."/homeSI");
            } else {
                throw new Exception('Anda Bukan Admin');
            }
        } else {
            throw new Exception('Data tidak cocok!');
        }
    }

    public function logout()
    {
        // Hapus session 
        session_destroy();
        // arahkan ke header
        header("Location: " .BASEURL."/login");
        return true;
    }

    public function getLastError()
    {

        return $this->error;
    }

}

?>