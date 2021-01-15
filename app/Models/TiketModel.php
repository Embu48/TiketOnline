<?php

namespace App\Models;

use CodeIgniter\Model;

class TiketModel extends Model
{
    protected $table = 'tiket';
    protected $allowedFields = ['asal','transport','jenis_transportasi','tujuan','harga','jam_berangkat','jam_sampai','tanggal_berangkat','status'];

    public function getTiket()
    {
        return $this->findAll();
    }
    public function updateTiket($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
    public function deleteTiket($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    } 
}
