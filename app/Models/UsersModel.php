<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_user',
        'name',
        'whatsapp',
        'email',
        'password',
        'role_id',
        'is_active'
    ];

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

    public function getWhatsapp($role_id)
    {
        $db = db_connect();
        $query = "SELECT users.whatsapp FROM users WHERE role_id = $role_id;";
        $hasil = $db->query($query)->getRowArray();
        return $hasil['whatsapp'];
    }
    public function getWhatsappbyid($id_user)
    {
        $db = db_connect();
        $query = "SELECT users.whatsapp FROM users WHERE id_user = $id_user;";
        $hasil = $db->query($query)->getRowArray();
        return $hasil['whatsapp'];
    }
}
