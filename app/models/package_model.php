<?php

class package_model{
    private $table = 'package';
    private $table2 = 'paket';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
 
 
    // method mengambil data
    public function getAllPackage()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPackage()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->single();
    }
    
    public function getPackageByPackageId($id_package) { 
        $this->db->query("SELECT * FROM ".  $this->table2 . " JOIN $this->table ON $this->table2.id_package = $this->table.id_package" ." WHERE $this->table.id_package = :id_package"); 
        // echo '<pre>'; print_r($data); echo '</pre>';die();
        $this->db->bind("id_package", $id_package);
        return $this->db->resultSet();
    }

    public function getPackageById($id_package)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_package=:id_package');
        $this->db->bind('id_package', $id_package);
        return $this->db->single();
    }

    public function getPaketByPackageId($id_package) {
        $this->db->query("SELECT * FROM $this->table2 WHERE id_package = :id_package");
        $this->db->bind("id_package", $id_package);
        return $this->db->resultSet();
    }

    public function getAllPackageWithPaket($id_package) 
    { 
        $array = [];
    
        $results = $this->getPackageByPackageId($id_package);
        foreach($results as $result) {
            $list_package = $this->getPackageByPackageId($id_package);

            $result['list_package'] = $list_package;
            
            $array[] = $result;
            // echo '<pre>'; print_r($array); echo '</pre>';die();
           return $array; 
        }  
        
        
    } 

    public function tambahDataPackage($data, $file)
    {

        $query = "INSERT INTO $this->table 
                VALUES
                ('', :nm_package, :gbr_package)";
        $this->db->query($query);        
        $this->db->bind('nm_package', $data['nm_package']);
        $namaGambarPackage = $file['gbr_package']['name'];
        $tempGambarPackage = $file['gbr_package']['tmp_name'];
        $this->db->bind('gbr_package', $namaGambarPackage);
        
        move_uploaded_file($tempGambarPackage, __DIR__ . '/../../public/img/package/' . $namaGambarPackage);

        // var_dump($query);die();
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataPackage($id_package)
    {
        $query = "DELETE FROM package WHERE id_package = :id_package ";
        $this->db->query($query);
        $this->db->bind('id_package', $id_package);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPackage($data, $file)
    { 
      $gambar_package = "";
      if ( $file['gbr_package']['error'] == UPLOAD_ERR_NO_FILE ) {
          $gambar_package = $data['gambar_lama'];
      } else {
        $namaGambarPackage = $file['gbr_package']['name'];
        $tempGambarPackage = $file['gbr_package']['tmp_name'];
        move_uploaded_file($tempGambarPackage, __DIR__ . '/../../public/img/package/' . $namaGambarPackage);
        $gambar_package = $namaGambarPackage;
      }
    
      $query = "UPDATE $this->table SET
              `nm_package` = :nm_package,
              `gbr_package` = :gbr_package
              WHERE `id_package` = :id_package";
              

        $this->db->query($query);
        $this->db->bind('nm_package', $data['nm_package']);
        $this->db->bind('gbr_package', $gambar_package);
        $this->db->bind('id_package', $data['id_package']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariDataPackage()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM $this->table WHERE nm_Package LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    
    function add_apply($foto)
	{
		foreach ($_POST['user'] as $user) 
		{
		$this->db->set('gbr' , $foto);
		}
	}
}

?>