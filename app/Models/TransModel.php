<?php namespace App\Models;

use CodeIgniter\Model;

class TransModel extends Model
{
    protected $table = 'transportasi';
    protected $allowedFields = ['nama','jenis_transportasi','kursi','status'];

    public function getTrans()
    {
        return $this->findAll();
    }

    public function updateTrans($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
    public function deleteTrans($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    } 
}
