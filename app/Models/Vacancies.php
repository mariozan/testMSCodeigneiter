<?php

namespace App\Models;

use CodeIgniter\Model;

class Vacancies extends Model
{
    protected $table            = 'vacancies';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

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

    public function getVacancies() {
        return $this->db->table('vacancies')->get();
    }

    public function addVacancy($data) {
        $this->db->table('vacancies')->insert($data);
        return $this->db->insertID();

    }

    public function updateVacancy($id, $data) {
        $this->db->table('vacancies')->where('id', $id);
        return $this->db->table('vacancies')->update('vacancies', $data);
    }
}
