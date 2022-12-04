<?php

class Customer_model{
    private $table = 'customer';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }


    // method mengambil data
    public function getAllCustomer()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getCustomerById($id_cust)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_cust=:id_cust');
        $this->db->bind('id_cust', $id_cust);
        return $this->db->single();
    }

    public function tambahDataCustomer($data)
    {
        $query = "INSERT INTO $this->table 
                VALUES
                ('', :nm_cust, :alamat, :no_hp, :email_cust, :message)";
        $this->db->query($query);
        $this->db->bind('nm_cust', $data['nm_cust']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email_cust', $data['email_cust']);
        $this->db->bind('message', $data['message']);

        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDataCustomer($id_cust)
    {
        $query = "DELETE FROM Customer WHERE id_cust = :id_cust ";
        $this->db->query($query);
        $this->db->bind('id_cust', $id_cust);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataCustomer($data)
    {
        $query = "UPDATE $this->table SET
                nm_cust = :nm_cust,
                alamat = :alamat,
                no_hp = :no_hp,
                email_cust = :email_cust
                WHERE  id_cust = :id_cust";
                
        $this->db->query($query);
        $this->db->bind('nm_cust', $data['nm_cust']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email_cust', $data['email_cust']);
        $this->db->bind('id_cust', $data['id_cust']);

        $this->db->execute();

        return $this->db->rowCount();

    } 

    public function cariDataCustomer()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM $this->table WHERE nm_cust LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}

?>