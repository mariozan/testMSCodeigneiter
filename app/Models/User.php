<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['username', 'role', 'password'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function getUsers() {
        return $this->db->table('users')->get();
    }

    public function addUser($data) {
        $this->db->table('users')->insert($data);
        return $this->db->insertID();
    }

    public function getUser($id) {
        return $this->db->table('users')->where('id', $id)->get(1);
    }

    public function getUserByUsername($username) {
        return $this->db->table('users')->where('username', $username)->get(1)->getResult();
    }

    public function updateUser($id, $data) {
        return $this->db->table('users')->where('id', $id)->update($data);
       
    }
}
