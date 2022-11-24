<?php

class BookingModel
{

  private $table = 'booking';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function addBook($data)
  {
    $query = "INSERT INTO booking 
    VAlUES (:id_alat, :user_id, :Qty, :start_date, :end_date, :status)";

    $this->db->query($query);
    $this->db->bind('id_alat', $data['id_alat']);
    $this->db->bind('user_id', '1');
    $this->db->bind('Qty', $data['Qty']);
    $this->db->bind('start_date', $data['start_date']);
    $this->db->bind('end_date', $data['end_date']);
    $this->db->bind('status', $data['status']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function getBooking()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getBookingById($id_alat)
  {
    $query = 'SELECT * FROM ' . $this->table . ' WHERE id_alat=:id_alat';
    $this->db->query($query);
    $this->db->bind('id_alat', $id_alat);
    return $this->db->single();
    // return var_dump($query);
  }
  public function hapusBook($id)
  {
    $query = "DELETE FROM booking WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('id', $id);


    $this->db->execute();

    return $this->db->rowCount();
  }

  public function CheckQty($data)
  {
    $query = $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_alat=:id');
    $this->db->query($query);
    $this->db->bind('id', $data['id_alat']);
    return $this->db->single();
  }
}
