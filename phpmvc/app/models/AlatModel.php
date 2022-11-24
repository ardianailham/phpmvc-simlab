<?php

class AlatModel
{

  private $table = 'alat';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // private $alat = [
  //   [
  //     "nama" => "Shaker",
  //     "merk" => "Sunlight"
  //   ]
  // ];

  public function getAlat()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getAlatById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
  public function tambahAlat($data)
  {
    $query = "INSERT INTO " . $this->table .
      " VALUES
    ('', :Nama_Alat, :Merk, :Qty)";

    $this->db->query($query);
    $this->db->bind('Nama_Alat', $data['Nama_Alat']);
    $this->db->bind('Merk', $data['Merk']);
    $this->db->bind('Qty', $data['Qty']);

    $this->db->execute();

    return $this->db->rowCount();
  }
  public function ubahAlat($data)
  {
    $query = "UPDATE alat SET
    Nama_Alat = :Nama_Alat,
    Merk = :Merk,
    Qty = :Qty
    WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('Nama_Alat', $data['Nama_Alat']);
    $this->db->bind('Merk', $data['Merk']);
    $this->db->bind('Qty', $data['Qty']);
    $this->db->bind('id', $data['id']);

    $this->db->execute();

    return $this->db->rowCount();
  }
  public function hapusAlat($id)
  {
    $query = "DELETE FROM alat WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('id', $id);


    $this->db->execute();

    return $this->db->rowCount();
  }
}
