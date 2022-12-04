<?php

class Paket_model{
    private $table = 'paket';
    private $table2 = 'package';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    } 


    // method mengambil data
    public function getAllPaket(bool $join = false) {
        if($join == true) {
            $this->db->query("SELECT * FROM $this->table JOIN $this->table2 on $this->table.id_package = $this->table2.id_package");
        } else {
            $this->db->query("SELECT * FROM $this->table");
        }
        return $this->db->resultSet();
    }

    public function getPaket()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->single();
    }


    public function getPaketByPackageId(string $id_package) {
        $this->db->query("SELECT * FROM paket WHERE id_package = :id_package");
        $this->db->bind("id_package", $id_package);
        return $this->db->resultSet();
    }

    public function getAllPackage()
    {
        $this->db->query("SELECT * FROM " . $this->table2);
        return $this->db->resultSet();
    }

    public function getAllPackageWithPaket() 
    { 
        $array = [];
        $results = $this->getAllPackage();
        foreach($results as $result) {
            $list_package = $this->getPaketByPackageId($result['id_package']);
            // echo '<pre>'; print_r($list_package); echo '</pre>';die();
            $result['list_package'] = $list_package;
            $array[] = $result;
        }  
        return $array;
    } 

    public function getPaketById($id_paket)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_paket=:id_paket');
        $this->db->bind('id_paket', $id_paket);
        return $this->db->single();
    }

    public function tambahDataPaket($data, $file)
    {
        $query = "INSERT INTO $this->table 
                VALUES
                ('', :nm_paket, :id_package, :harga, :detail)";
        $this->db->query($query);
        $this->db->bind('nm_paket', $data['nm_paket']);
        $this->db->bind('id_package', $data['id_package']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('detail', $data['detail']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPaket($id_paket)
    {
        $query = "DELETE FROM Paket WHERE id_paket = :id_paket ";
        $this->db->query($query);
        $this->db->bind('id_paket', $id_paket);

        $this->db->execute();

        return $this->db->rowCount();
    } 

    public function ubahDataPaket($data)
    {  
        $query = "UPDATE $this->table SET
                nm_paket = :nm_paket,
                id_package = :id_package,
                harga = :harga,
                detail = :detail
                WHERE  id_paket = :id_paket";

        $this->db->query($query);
        // echo '<pre>'; print_r($data); echo '</pre>';die();
        $this->db->bind('nm_paket', $data['nm_paket']);
        $this->db->bind('id_package', $data['id_package']);
        $this->db->bind('harga', $data['harga']);
        $this->db->bind('detail', $data['detail']);
        $this->db->bind('id_paket', $data['id_paket']);
        try {
           $this->db->execute();
            return $this->db->rowCount(); 
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function cariDataPaket()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM $this->table WHERE nm_paket LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    
}

?>