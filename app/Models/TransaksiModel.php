<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $allowedFields = ['user','tiket','total_harga','status'];

    public function getTransaksi()
    {
        return $this->findAll();
    }
    public function updateTransaksi($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
    public function deleteTransaksi($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    } 
}
