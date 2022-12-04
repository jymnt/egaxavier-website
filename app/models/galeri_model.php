<?php

class Galeri_model{
    private $table = 'galeri';
    private $table2 = 'package';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    // method mengambil data
    public function getAllGaleri()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getGaleriById($id_galeri)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_galeri=:id_galeri');
        $this->db->bind('id_galeri', $id_galeri);
        return $this->db->single();
    }

    public function getGaleriByPackageId($id_package) {
        $this->db->query("SELECT * FROM $this->table WHERE id_package = :id_package");
        // echo '<pre>'; print_r($id_package); echo '</pre>';die();
        $this->db->bind("id_package", $id_package);
        return $this->db->resultSet();
    }

    public function getAllGaleriWithPackage($id_package) 
    { 
        $array = [];
    
        $results = $this->getGaleriByPackageId($id_package);
        foreach($results as $result) {
            $list_package = $this->getGaleriByPackageId($id_package);


            // echo '<pre>'; print_r($list_package); echo '</pre>';die();
           return $list_package; 
        }   
        
    } 

    public function getAllPackageWithGaleri() 
    { 
        $array = [];
        $results = $this->getAllGaleri();
        foreach($results as $result) {
            $list_package = $this->getGaleriByPackageId($result['id_package']);
            // echo '<pre>'; print_r($list_package); echo '</pre>';die();
            $result['list_package'] = $list_package;
            $array[] = $result;
        }  
        return $array;
    } 

    public function tambahDataGaleri($data, $files)
    {
        $query = "INSERT INTO $this->table 
                VALUES
                ('', :id_package, :gbr)";
        $this->db->query($query);
        $this->db->bind('id_package', $data['id_package']);
        // echo '<pre>'; print_r($data['id_package']); echo '</pre>';die();
        $gambar = $_FILES['gbr']['name'];
        $file_temp = $_FILES['gbr']['tmp_name'];
        $this->db->bind('gbr', $gambar);
        if($data['id_package'] == '1'){
            move_uploaded_file($file_temp, __DIR__ . '/../../public/img/galeri2/Indoor_Photoshoot/' . $gambar);
        }
        if($data['id_package'] == '2'){
            move_uploaded_file($file_temp, __DIR__ . '/../../public/img/galeri2/Wedding/' . $gambar);
        }
        if($data['id_package'] == '8'){
            move_uploaded_file($file_temp, __DIR__ . '/../../public/img/galeri2/Family_Session/' . $gambar);
        }else{
            move_uploaded_file($file_temp, __DIR__ . '/../../public/img/upload/' . $gambar);
        }
        // $procces =  move_uploaded_file($file_temp, __DIR__ . '/../../public/img/upload/' . $gambar);
        // var_dump($procces);die();
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function hapusDataGaleri($id_galeri)
    {
        $query = "DELETE FROM Galeri WHERE id_galeri = :id_galeri ";
        $this->db->query($query);
        $this->db->bind('id_galeri', $id_galeri);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataGaleri($data)
    {
        $query = "UPDATE $this->table SET
                gbr = :gbr
                WHERE  id_galeri = :id_galeri";
                
        $this->db->query($query);
        $this->db->bind('gbr', $data['gbr']);
        $this->db->bind('id_galeri', $data['id_galeri']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function cariDataGaleri()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM $this->table WHERE gbr LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}

?>